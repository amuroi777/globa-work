<?php
/**
 * Template Name:caseページテンプレート（/case）
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
		<div class="p-case-mv-lower">
			<div class="p-case-mv-lower__wrapper">
				<div class="p-case-mv-lower__container">
					<div class="p-case-mv-lower__img-company">
						<div class="p-case-mv-lower__main">
							<div class="p-case-mv-lower__en-wrapper">
								<h2 class="p-case-mv-lower__en font-italic">CASE STUDY</h2>
							</div>
							<div class="p-case-mv-lower__jp-wrapper">
								<p class="p-case-mv-lower__jp">導入事例</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ./mv-lower -->

		<section class="p-case-study">
			<div class="p-case-study__wrapper">
				<div class="p-case-study__container">
					<nav class="p-case-study__nav">
						<ul class="p-case-study__nav-lists">
							<li class="p-case-study__nav-list"><a href="#a-biz"
									class="p-case-study__nav-link">ビジネス英語研修</a></li>
							<li class="p-case-study__nav-list"><a href="#a-cross"
									class="p-case-study__nav-link">異文化コミュニケーション</a></li>
							<li class="p-case-study__nav-list"><a href="#a-abroad"
									class="p-case-study__nav-link">ビジネス留学プログラム</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<!-- ./case-study -->

		<section id="a-biz" class="p-case-cases">
			<div class="p-case-cases__wrapper">
				<div class="p-case-cases__container">
					<h2 class="p-case-cases__title">ビジネス英語研修
						<span class="p-case-cases__title-en font-italic">Business English Training</span>
					</h2>
					<article class="p-case-cases__items">
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">ソフトウェア開発事業</p>
									<p class="p-case-cases__name">AAA株式会社<span class="p-cases__compellation">様</span>
									</p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case01.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">メディカルフィットネス事業</p>
									<p class="p-case-cases__name">FFF株式会社<span class="p-cases__compellation">様</span>
									</p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case06.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">ソフトウェア開発事業</p>
									<p class="p-case-cases__name">GGG株式会社<span class="p-cases__compellation">様</span>
									</p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case07.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">飲食事業</p>
									<p class="p-case-cases__name">HHH株式会社<span
											class="p-case-cases__compellation">様</span></p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case08.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース<span
										class="p-case-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<a href="" class="c-button-primary c-button-icon-arrow">ビジネス英語研修の詳細</a>
				</div>
			</div>
		</section>

		<section id="a-cross" class="p-case-cases">
			<div class="p-case-cases__wrapper">
				<div class="p-case-cases__container">
					<h2 class="p-case-cases__title">異文化コミュニケーション
						<span class="p-case-cases__title-en font-italic">Cross-cultural communication</span>
					</h2>
					<article class="p-case-cases__items">
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">スポーツ用品開発事業</p>
									<p class="p-case-cases__name">合同会社BBB<span
											class="p-case-cases__compellation">様</span></p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case02.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-case-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">アパレル事業</p>
									<p class="p-case-cases__name">DDD株式会社<span
											class="p-case-cases__compellation">様</span></p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case04.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-case-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">ソフトウェア開発事業</p>
									<p class="p-case-cases__name">III株式会社<span
											class="p-case-cases__compellation">様</span></p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case09.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-case-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<a href="" class="c-button-primary c-button-icon-arrow">異文化コミュニケーションの詳細</a>
				</div>
			</div>
		</section>

		<section id="a-abroad" class="p-case-cases">
			<div class="p-case-cases__wrapper">
				<div class="p-case-cases__container">
					<h2 class="p-case-cases__title">ビジネス留学プログラム
						<span class="p-case-cases__title-en font-italic">Business study abroad program</span>
					</h2>
					<article class="p-case-cases__items">
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">マーケティング事業</p>
									<p class="p-case-cases__name">株式会社CCC<span
											class="p-case-cases__compellation">様</span></p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case02.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-case-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-case-cases__item">
							<div class="p-case-cases__item-head">
								<div class="p-case-cases__item-heading">
									<p class="p-case-cases__business">国際旅行事業</p>
									<p class="p-case-cases__name">EEE株式会社<span
											class="p-case-cases__compellation">様</span></p>
								</div>
								<div class="p-case-cases__item-logo">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case04.png' ); ?>"
										alt="">
								</div>
							</div>
							<div class="p-case-cases__item-body">
								<h3 class="p-case-cases__item-title">研修コース:<span
										class="p-case-cases__item-title-course-name">ビジネス英語研修</span></h3>
								<ul class="p-case-cases__lists">
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">選んだ理由</h4>
										<p class="p-case-cases__list-text">
											海外の企業で働いた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
									</li>
									<li class="p-case-cases__list">
										<h4 class="p-case-cases__list-title">研修の目的</h4>
										<p class="p-case-cases__list-text">海外にビジネス展開する計画があり、必要なコミュニケーションを身につけることが目的</p>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<a href="" class="c-button-primary c-button-icon-arrow">ビジネス留学プログラムの詳細</a>
				</div>
			</div>
		</section>

		<!-- ./company-directors -->
		<?php
		endwhile;
endif;
		?>
	</main>

</div>

<?php get_footer(); ?>