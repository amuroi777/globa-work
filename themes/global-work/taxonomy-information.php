<?php
/**
 * カスタムタクソノミー(hours)一覧ページ
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<div class="p-news-mv-lower">
			<div class="p-news-mv-lower__img-company">
				<div class="p-news-mv-lower__main">
					<div class="p-news-mv-lower__en-wrapper">
						<h2 class="p-news-mv-lower__en font-italic">NEWS</h2>
					</div>
					<div class="p-news-mv-lower__jp-wrapper">
						<p class="p-news-mv-lower__jp">ニュース</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ./mv-lower -->

		<section class="p-news-contents">
			<div class="p-news-contents__wrapper">
				<div class="p-news-contents__container">
					<main class="p-news-contents__archive-news p-news-contents__main">
						<h2 class="p-news-contents__archive-news-cat-name"><?php single_cat_title(); ?></h2>
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								?>
						<a href="<?php echo the_permalink(); ?>" class="p-news-contents__archive-news-item">
							<div class="p-news-contents__archive-news-thumbnail">
								<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
							</div>
							<div class="p-news-contents__archive-news-body">
								<div class="p-news-contents__meta p-news-contents__archive-news_meta">
									<div class="p-news-contents__meta-cats p-news-contents__archive-news-cats">
										<span class="p-news-contents__meta-cat"><?php single_cat_title(); ?></span>
										<span class="p-news-contents__meta-new">NEW</span>
									</div>
									<time class="p-news-contents__meta-time"><?php the_time( 'Y.m.d' ); ?></time>
								</div>
								<h2 class="p-news-contents__archive-news-title"><?php echo $post->post_title; ?></h2>
							</div>
						</a>
						<?php endwhile; ?>
						<?php else : ?>
						<p>記事がありません</p>
						<?php endif; ?>

					</main>
					<!-- ./contents -->


					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>
		<!-- ./sidebar -->

	</main>

</div>

<?php get_footer(); ?>