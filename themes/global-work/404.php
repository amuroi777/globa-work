<?php
/**
 * 404ページ
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<section class="c-entry-404">
	<div class="c-entry-404__wrapper">
		<div class="c-entry-404__container">
			<h1 class="c-entry-404__head"><br class="is-sp">404</br>Not Found</h1>
			<div class="c-entry-404__lead">お探しのページが<br class="m_sp" />見つかりませんでした</div>
			<p class="c-entry-404__content">申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br>入力されたURLが正しいかご確認ください。</p>
			<div class="c-entry-404__btn"><a class="btn" href="<?php echo home_url(); ?>">トップページに戻る</a></div>
		</div>
	</div>
</section>


<?php get_footer(); ?>