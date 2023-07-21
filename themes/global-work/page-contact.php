<?php
/**
 * Template Name:contactページテンプレート（/contact）
 *
 * @package global-work
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<section class="p-contact-mv-lower">
	<div class="p-contact-mv-lower__wrapper">
		<div class="p-contact-mv-lower__container">
			<div class="p-contact-mv-lower__img-company">
				<div class="p-contact-mv-lower__main">
					<div class="p-contact-mv-lower__en-wrapper">
						<h2 class="p-contact-mv-lower__en font-italic">CONTACT</h2>
					</div>
					<div class="p-contact-mv-lower__jp-wrapper">
						<p class="p-contact-mv-lower__jp">お問い合わせ</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./mv-lower -->

<section class="p-contact-item">
	<div class="p-contact-item__wrapper">
		<div class="p-contact-item__container">
			<p class="p-contact-item__intro">
				研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>
				2日以内に担当者からメールにてご連絡いたします。
			</p>
			<?php echo do_shortcode( '[mwform_formkey key="78"]' ); ?>
		</div>
	</div>
</section>

<!-- ./contact-item -->

<?php get_footer(); ?>