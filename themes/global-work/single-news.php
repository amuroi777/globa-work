<?php
/**
 * カスタム投稿タイプ（news）詳細ページ
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<div class="p-news-details-mv-lower">
		<div class="p-news-details-mv-lower__img-company">
			<div class="p-news-details-mv-lower__main">
				<div class="p-news-details-mv-lower__en-wrapper">
					<h2 class="p-news-details-mv-lower__en font-italic">NEWS</h2>
				</div>
				<div class="p-news-details-mv-lower__jp-wrapper">
					<p class="p-news-details-mv-lower__jp">ニュース</p>
				</div>
			</div>
		</div>
	</div>
	<!-- ./mv-lower -->

	<section class="p-news-details-contents">
		<div class="p-news-details-contents__wrapper">
			<main class="p-news-details-contents__container">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>

				<article class="p-news-details-contents__single">
					<div class="p-news-details-contents__body">
						<div class="p-news-details-contents__meta">
							<?php
								$taxonomy_slug  = 'hours';
								$category_terms = wp_get_object_terms( $post->ID, $taxonomy_slug );
							if ( ! empty( $category_terms ) ) {
								if ( ! is_wp_error( $category_terms ) ) {
									foreach ( $category_terms as $category_term ) {
										echo '<span class="p-news-details-contents__cat"' . get_term_link( $category_term->slug, $taxonomy_slug ) . '">' . $category_term->name . '</span>';
									}
								}
							}
							?>
							<span class="p-news-details-contents__time"><?php the_time( 'Y.m.d' ); ?></span>
						</div>
					</div>
					<h1 class="p-news-details-contents__single-title"><?php the_title(); ?></h1>
					<div class="p-news-details-contents__single-thumbnail">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'full' );
						}
						?>
					</div>
					<div class="p-news-details-contents__single-content">
						<?php the_content(); ?>
					</div>
					<?php echo esc_html( get_template_part( 'templates/single-pagination' ) ); ?>
				</article>

				<?php
					  endwhile;
			endif;
				?>

			</main>

			<?php get_sidebar(); ?>
		</div>
</div>
</section>

</div>

<?php get_footer(); ?>