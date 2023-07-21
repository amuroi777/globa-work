<?php
/**
 * Template Name:serviceページテンプレート（/service）
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
		<div class="p-service-mv-lower">
			<div class="p-service-mv-lower__wrapper">
				<div class="p-service-mv-lower__container">
					<div class="p-service-mv-lower__img-company">
						<div class="p-service-mv-lower__main">
							<div class="p-service-mv-lower__en-wrapper">
								<h2 class="p-service-mv-lower__en font-italic">SERVICE</h2>
							</div>
							<div class="p-service-mv-lower__jp-wrapper">
								<p class="p-service-mv-lower__jp">サービス</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ./mv-lower -->

		<section class="p-service-detail">
			<div class="p-service-detail__wrapper">
				<div class="p-service-detail__container">
					<p class="p-service-detail__intro">
						世界で活躍できる<br>
						グローバルな人材を育てる<br class="is-sp">３つの研修プログラム
					</p>
				</div>
				<article class="p-service-detail__items">
					<div class="p-service-detail__items-inner">
						<div class="p-service-detail__item">
							<figure class="p-service-detail__img">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-service01.jpeg' ); ?>"
									alt="">
							</figure>
							<div class="p-service-detail__main">
								<span class="p-service-detail__number">01</span>
								<div class="p-service-detail__heading">
									<h2 class="p-service-detail__jp">ビジネス英語研修</h2>
									<p class="p-service-detail__en">Business English Training</p>
								</div>
								<p class="p-service-detail__text">
									ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>
									海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。<br><br>
									担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>
									また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。
								</p>
								<div class="p-service-detail__dl-wrapper">
									<dl class="p-service-detail__dl">
										<dt class="p-service-detail__dt">対象</dt>
										<dd class="p-service-detail__dd">ビジネスの中で使える英語コミュニケーション能力が必要な方</dd>
									</dl>
									<dl class="p-service-detail__dl">
										<dt class="p-service-detail__dt">費用</dt>
										<dd class="p-service-detail__dd">時間内容要相談</dd>
									</dl>
								</div>
								<a href="" class="c-button-primary c-button-icon-arrow">お申し込みはこちら</a>
							</div>
						</div>
					</div>
				</article>

				<article class="p-service-detail__items">
					<div class="p-service-detail__inner">
						<div class="p-service-detail__item p-service-detail__item2">
							<figure class="p-service-detail__img">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-service02.jpeg' ); ?>"
									alt="">
							</figure>
							<div class="p-service-detail__main">
								<span class="p-service-detail__number">02</span>
								<div class="p-service-detail__heading">
									<h2 class="p-service-detail__jp">ビジネス英語研修</h2>
									<p class="p-service-detail__en">Business English Training</p>
								</div>
								<p class="p-service-detail__text">
									ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>
									海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。<br><br>
									担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>
									また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。
								</p>
								<div class="p-service-detail__dl-wrapper">
									<dl class="p-service-detail__dl">
										<dt class="p-service-detail__dt">対象</dt>
										<dd class="p-service-detail__dd">ビジネスの中で使える英語コミュニケーション能力が必要な方</dd>
									</dl>
									<dl class="p-service-detail__dl">
										<dt class="p-service-detail__dt">費用</dt>
										<dd class="p-service-detail__dd">時間内容要相談</dd>
									</dl>
								</div>
								<a href="" class="c-button-primary c-button-icon-arrow">お申し込みはこちら</a>
							</div>
						</div>
					</div>
				</article>

				<article class="p-service-detail__items">
					<div class="p-service-detail__inner">
						<div class="p-service-detail__item">
							<figure class="p-service-detail__img">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-service03.jpeg' ); ?>"
									alt="">
							</figure>
							<div class="p-service-detail__main">
								<span class="p-service-detail__number">03</span>
								<div class="p-service-detail__heading">
									<h2 class="p-service-detail__jp">ビジネス英語研修</h2>
									<p class="p-service-detail__en">Business English Training</p>
								</div>
								<p class="p-service-detail__text">
									ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>
									海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。<br><br>
									担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>
									また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。
								</p>
								<div class="p-service-detail__dl-wrapper">
									<dl class="p-service-detail__dl">
										<dt class="p-service-detail__dt">対象</dt>
										<dd class="p-service-detail__dd">ビジネスの中で使える英語コミュニケーション能力が必要な方</dd>
									</dl>
									<dl class="p-service-detail__dl">
										<dt class="p-service-detail__dt">費用</dt>
										<dd class="p-service-detail__dd">時間内容要相談</dd>
									</dl>
								</div>
								<a href="" class="c-button-primary c-button-icon-arrow">お申し込みはこちら</a>
							</div>
						</div>
					</div>
				</article>
			</div>
		</section>
		<!-- ./service-detail -->

		<section class="p-service-flow">
			<div class="p-service-flow__wrapper">
				<div class="p-service-container">
					<div class="p-service-flow__inner">
						<h2 class="p-service-flow__title">導入の流れ</h2>
						<article class="p-service-flow__items">
							<div class="p-service-flow__item p-service-flow__item01">
								<div class="p-service-flow__steps font-italic">
									<p class="p-service-flow__step">STEP</p>
									<p class="p-service-flow__step-number">01</p>
								</div>
								<div class="p-service-flow__main p-service-flow__main01">
									<h3 class="p-service-flow__item-title">お問い合せ</h3>
									<p class="p-service-flow__item-text">お問い合わせフォームより必要事項を誤入力の上、お申し込みください</p>
								</div>
							</div>

							<div class="p-service-flow__item p-service-flow__item02">
								<div class="p-service-flow__steps font-italic">
									<p class="p-service-flow__step">STEP</p>
									<p class="p-service-flow__step-number">02</p>
								</div>
								<div class="p-service-flow__main p-service-flow__main02">
									<h3 class="p-service-flow__item-title">ご提案</h3>
									<p class="p-service-flow__item-text">ご依頼の背景をお伺いし、必要なスキルと習得期間から最適なプランをご提案いたします</p>
								</div>
							</div>

							<div class="p-service-flow__item p-service-flow__item03">
								<div class="p-service-flow__steps font-italic">
									<p class="p-service-flow__step">STEP</p>
									<p class="p-service-flow__step-number">03</p>
								</div>
								<div class="p-service-flow__main p-service-flow__main03">
									<h3 class="p-service-flow__item-title">日程調整</h3>
									<p class="p-service-flow__item-text">研修日数と開始日を調整し、今後の流れ全体の段取りをご提案いたします</p>
								</div>
							</div>

							<div class="p-service-flow__item p-service-flow__item04">
								<div class="p-service-flow__steps font-italic">
									<p class="p-service-flow__step">STEP</p>
									<p class="p-service-flow__step-number">04</p>
								</div>
								<div class="p-service-flow__main p-service-flow__main04">
									<h3 class="p-service-flow__item-title">研修開始</h3>
									<p class="p-service-flow__item-text">研修当日はお約束のお時間の30分前に講師が伺います。<br><span
											class="is-accent">※キャンセルのご連絡は2日前までにお願いいたします</span></p>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<!-- ./service-flow -->

		<section class="p-service-qa section">
			<div class="p-service-qa__wrapper">
				<div class="p-service-qa__container">
					<div class="p-service-qa__title">よくある質問</div>
					<div class="p-service-qa__items">
						<div class="p-service-qa__item">
							<div class="p-service-qa__box">
								<div class="p-service-qa__box-q">
									どんな教材を使うのでしょうか？
									<div class="p-service-qa__box-icon">
										<div class="p-service-qa__box-bar1"></div>
										<div class="p-service-qa__box-bar2"></div>
									</div>
								</div>
								<div class="p-service-qa__box-a">
									<p class="p-service-qa__box-content">
										録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。
										ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。
									</p>
								</div>
							</div>
						</div>
						<div class="p-service-qa__item">
							<div class="p-service-qa__box">
								<h3 class="p-service-qa__box-q">
									講師はどんな人が担当しているのでしょうか？
									<div class="p-service-qa__box-icon">
										<div class="p-service-qa__box-bar1"></div>
										<div class="p-service-qa__box-bar2"></div>
									</div>
								</h3>
								<div class="p-service-qa__box-a">
									<p class="p-service-qa__box-content">
										途中退会した場合、返金は可能でしょうか？
									</p>
								</div>
							</div>
						</div>
						<div class="p-service-qa__item">
							<div class="p-service-qa__box">
								<h3 class="p-service-qa__box-q">
									講師が合わないと感じた場合、変更してもらえるのでしょうか？
									<div class="p-service-qa__box-icon">
										<div class="p-service-qa__box-bar1"></div>
										<div class="p-service-qa__box-bar2"></div>
									</div>
								</h3>
								<div class="p-service-qa__box-a">
									<p class="p-service-qa__box-content">
										途中退会した場合、返金は可能でしょうか？
									</p>
								</div>
							</div>
						</div>
						<div class="p-service-qa__item">
							<div class="p-service-qa__box">
								<h3 class="p-service-qa__box-q">
									途中退会した場合、返金は可能でしょうか？
									<div class="p-service-qa__box-icon">
										<div class="p-service-qa__box-bar1"></div>
										<div class="p-service-qa__box-bar2"></div>
									</div>
								</h3>
								<div class="p-service-qa__box-a">
									<p class="p-service-qa__box-content">
										途中退会した場合、返金は可能でしょうか？
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ./qa -->
		<?php
	endwhile;
endif;
	?>
	</main>
</div>

<?php get_footer(); ?>