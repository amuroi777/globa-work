<?php
/**
 * 詳細ページ記事下『次の記事へ』＆『前の記事へ』リンクパーツ
 *
 * @package global-work
 * @since 1.0.0
 */
?>

<div class="p-news-details-contents__post-links">
  <?php if ( get_previous_post() ) : ?>
  <div class="p-news-details-contents__post-link">
    <?php previous_post_link('%link', '< 前の記事へ'); ?>
  </div>
  <? endif; ?>
  <?php if ( get_next_post() ) :
    ?>
  <div class="p-news-details-contents__post-link">
    <?php next_post_link('%link', '次の記事へ >'); ?>
  </div>
  <?php else : ?>
  <div class="p-news-details-contents__post-link">
		記事がありません。
  </div>
  <?php endif; ?>
</div>

	