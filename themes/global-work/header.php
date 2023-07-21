<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF_8">
	<meta http_equiv="X_UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri( 'img/logo01.png' ) ); ?>">


	<link rel="stylesheet" href="./assets/css/main.css">

	<?php wp_head(); ?>
</head>

<body>
	<header class="l-header">
		<div class="l-header__wrapper">
			<div class="l-header__container">
				<h1 class="header__title">
					<picture class="l-header__logo-inner">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo01.png' ); ?>" alt=""
								class="l-header__logo-new">
						</a>
					</picture>
				</h1>
				<nav class="l-header-nav">
					<ul class="l-header-nav__container">
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url() ); ?>" class="l-header-nav__link">トップ</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
								class="l-header-nav__link">当社について</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/service' ) ); ?>"
								class="l-header-nav__link">サービス</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/case' ) ); ?>" class="l-header-nav__link">導入事例</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="l-header-nav__link">お知らせ</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/download' ) ); ?>"
								class="l-header__button-download">資料ダウンロード</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
								class="l-header__button-contact">お問い合わせ</a>
						</li>
					</ul>
				</nav>
				<div class="l-header-hamburger">
					<button type="button" id="js-buttonHamburger" class="c-button p-hamburger"
						aria-controls="global-nav" aria-expanded="false">
						<span class="l-header-hamburger__line1"></span>
						<span class="l-header-hamburger__line2"></span>
						<span class="l-header-hamburger__line3"></span>
						<span class="l-header-hamburger__visually-hidden"></span>
						<!-- </span> -->
					</button>
				</div>
			</div>
		</div>
	</header>
	<!-- /.header -->

	<section class="l-drawer">
		<nav class="l-drawer__content">
			<ul class="l-drawer__content-items">
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url() ); ?>">トップ</a></li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">当社について</a>
				</li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/service' ) ); ?>">サービス</a>
				</li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/case' ) ); ?>">導入事例</a></li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a></li>
			</ul>

			<div class="l-drawer__button">
				<a href="<?php echo esc_url( home_url( '/download' ) ); ?>" class="l-drawer__download">資料ダウンロード</a>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="l-drawer__contact">お問い合わせ</a>
			</div>
		</nav>
	</section>
	<!-- ./drawer-icon -->