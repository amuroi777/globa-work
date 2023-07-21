<aside class="p-news-details-sidebar contents_side">
	<article class="p-news-details-sidebar__new">
		<h2 class="p-news-details-sidebar__title">新着記事</h2>
		<?php
		$information = get_posts(
			array(
				'post_type'      => 'news',
				'posts_per_page' => 5,
			)
		);
		if ( $information ) :
			?>

		<?php
			foreach ( $information as $post ) :
				setup_postdata( $post );
				?>

		<a href="<?php the_permalink(); ?>" class="p-news-details-sidebar__new-item">
			<div class="p-news-details-sidebar__new-thumbnail">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'full' );
				} else {
					echo '<img src="' . get_template_directory_uri() . '/img/noimg.png" alt="">';
				}
				?>
			</div>

			<div class="p-news-details-sidebar__news-body">
				<div class="p-news-details-sidebar__new-meta">
					<?php
					/** カスタム投稿タイプに設定しているタームの表示
					 *  $terms = get_the_terms(投稿ID、タクソノミー);
					 */
					$terms = get_the_terms( $post->ID, 'information' );
					if ( ! empty( $terms ) ) {
						echo '<span class="p-news-contents__meta-cat">';
						foreach ( $terms as $term ) {
							echo $term->name;
						}
						echo '</span>';
					} else {
						echo '<span class="p-news-contents__meta-cat">';
						echo '未分類';
						echo '</span>';
					}
					?>
					<time class="p-news-details-sidebar__new-time"><?php the_time( 'Y.m.d' ); ?></time>
				</div>
				<h2 class="p-news-details-sidebar__new-title"><?php the_title(); ?></h2>
			</div>

			<?php
			endforeach;
			wp_reset_postdata();
			?>

			<?php else : ?>
			<p>記事がありません</p>
			<?php endif; ?>
		</a>
	</article>

	<div class="p-news-details-sidebar__cats">
		<h2 class="p-news-details-sidebar__title">カテゴリ</h2>
		<ul class="p-news-details-sidebar__cats-lists">

			<?php
			// カスタムタクソノミーのスラッグ名とリンクを取得
			$cat         = get_queried_object();
			$cat_name    = $cat->name;
			$args        = array(
				// 投稿のないタームは取得しない
				'hide_empty' => true,
			);
			$genre_terms = get_terms( 'information', array( 'hide_empty' => false ) );
			foreach ( $genre_terms as $genre_term ) :
				?>

			<li class="p-news-details-sidebar__cats-list"><a class="
				<?php
				if ( $cat_name == esc_html( $genre_term->name ) ) {
					echo 'is-active';
				}
				?>
	" href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
			</li>

			<?php
		endforeach;
			?>
		</ul>
	</div>
</aside>