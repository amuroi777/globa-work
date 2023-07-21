<?php
/**
 * Template Name:downloadページテンプレート（download）
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<section class="p-download-mv-lower">
		<div class="p-download-mv-lower__wrapper">
			<div class="p-download-mv-lower__container">
				<div class="p-download-mv-lower__img-company">
					<div class="p-download-mv-lower__main">
						<div class="p-download-mv-lower__en-wrapper">
							<h2 class="p-download-mv-lower__en font-italic">DOWNLOAD</h2>
						</div>
						<div class="p-download-mv-lower__jp-wrapper">
							<p class="p-download-mv-lower__jp">資料ダウンロード</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./mv-lower -->

	<section class="p-download">
		<div class="p-download__wrapper">
			<div class="p-download-container">
				<div class="p-download__items">
					<div class="p-download__document">
						<h2 class="p-download__document-title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h2>
						<div class="p-download__document-img">
							<img src="img/pamphlet.png" alt="">
						</div>
						<p class="p-download__document-text">
							急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>
							ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br><br>
							英語に苦手意識のある方でもご安心ください。<br>ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>
							まずはこちらの資料をごらんください。
						</p>
					</div>
					<div class="p-download__form">
						<h2 class="p-download__form-top-title">資料ダウンロード</h2>
						<form id="js-form" action="button-action.php" method="post" class="p-download__form-lists">
							<dl class="p-download__form-list">
								<div class="p-download__form-item">
									<dt class="p-download__form-title">
										会社名
									</dt>
									<dd class="p-download__item-input">
										<input type="text" name="" placeholder="例）○○株式会社">
									</dd>
								</div>
								<div class="p-download__form-item">
									<dt class="p-download__form-title">
										部署
									</dt>
									<dd class="p-download__item-input">
										<input type="text" name="" placeholder="例）人事部">
									</dd>
								</div>
								<div class="p-download__form-item">
									<dt class="p-download__form-title">
										お名前<span class="p-download__form-title-inline">必須</span>
									</dt>
									<dd class="p-download__item-input">
										<input type="text" name="" placeholder="例）鈴木 一郎">
									</dd>
								</div>
								<div class="p-download__form-item">
									<dt class="p-download__form-title">
										お名前(フリガナ)<span class="p-download__form-title-inline">必須</span>
									</dt>
									<dd class="p-download__item-input">
										<input type="text" name="" placeholder="例）スズキ イチロウ">
									</dd>
								</div>
								<div class="p-download__form-item">
									<dt class="p-download__form-title">
										メールアドレス<span class="p-download__form-title-inline">必須</span>
									</dt>
									<dd class="p-download__item-input">
										<input type="text" name="" placeholder="例）info@example.com">
									</dd>
								</div>
							</dl>
							<div class="p-download__form-footer">
								<p class="p-download__form-footer-text">
									<label class="p-download__form-privacy">
										<input type="checkbox" name="" class="p-download__form-privacy-input">
										<span class="p-download__form-privacy-part"></span>
									</label>
									<a href="" class="p-download__form-privacy-link" target="_blank">個人情報保護方針</a>に同意します。
								</p>
								<div class="p-download__form-submit">
									<button id="js-submit" class="p-download__button" -submit type="submit"><a
											href="img/1.jpg" download="テスト画像.jpg">資料をダウンロードする</a></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</section>

	<?php get_footer(); ?>