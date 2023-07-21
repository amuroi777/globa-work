<?php
/**
 * トップページテンプレート(news)
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<section class="p-index-news">
    <div class="p-index-news__wrapper">
      <div class="p-index-news__container">
        <div class="p-index-news__section-heading">
          <div class="p-index-news__heading-main p-index-news__title--black">
            <h2 class="p-index-news__heading-title font-italic p-index-news__title--black">NEWS</h2>
            <p class="p-index-news__heading-lead p-index-news__title--black">新着情報</p>
          </div>
          <a href="news.html" class="p-index-news__head-link hidden-sp">
            <span class="p-index-news__link-text-top font-italic">View More</span>
            <div class="p-index-news__link-arrow--black"></div>
          </a>
        </div>
        <div class="p-index-news__item-inner">
          <div class="p-index-news__items">
            <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'order' => 'DESC'
              );
              $the_query = new WP_Query($args);
            ?>
            <?php if( $the_query->have_posts()): ?>
              <?php while( $the_query->have_posts()):$the_query->the_post(); ?>
                
            <a href="<?php esc_url( the_permalink() ); ?>" class="p-index-news__item">
              <div class="p-index-news__info">
                <span class="p-index-news__info-cat"><?php echo esc_html( get_post_type_object( get_post_type() )->label ); ?></span>
                <span class="p-index-news__info-time"><?php the_time('Y.m.d')?></span>
              </div>
              <h3 class="p-index-news__title"><?php the_title(); ?></h3>
            </a>
            <?php endwhile; ?>
            <?php else:?>
              <p>記事がありません</p>
          <?php endif;
           wp_reset_postdata(); ?>
          </div>
        </div>
        <ul class="p-index-news__head-link-bottom hidden-sp">
          <li class="p-index-news__link-text-bottom font-italic">View More</li>
          <li class="p-index-news__link-arrow--white-bottom"></li>
          <li class="p-index-news__link-border-bottom"></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ./news -->