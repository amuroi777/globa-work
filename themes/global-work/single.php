<?php
/**
 * 詳細ページ
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
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
				<div class="p-news-details-contents__container">

					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>

					<main class="p-news-details-contents__single">
						<div class="p-news-details-contents__body">
							<div class="p-news-details-contents__meta">
								<span class="p-news-details-contents__cat">その他</span>
								<span class="p-news-details-contents__time"><?php the_time( 'Y.m.d' ); ?></span>
							</div>
						</div>
						<h1 class="p-news-details-contents__single-title"><?php the_title(); ?></h1>
						<div class="p-news-details-contents__single-thumbnail"><img
								src="<?php the_post_thumbnail( 'full' ); ?>" alt="ssss"></div>
						<article class="p-news-details-contents__single-content">
							<?php the_content(); ?>
						</article>
						<div class="p-news-details-contents__post-links">
							<div class="p-news-details-contents__post-link"><a href="">
									< 前の記事へ</a>
							</div>
							<div class="p-news-details-contents__post-link"><a href="">次の記事へ > </a></div>
						</div>
					</main>
				</div>


				<?php get_sidebar(); ?>
			</div>
</div>
</section>
<!-- ./sidebar -->
<?php
				  endwhile;
endif;
					?>
</main>

</div>

<?php get_footer(); ?>