<?php
/**
 * トップページテンプレート(case)
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<section class="p-index-case">
    <div class="p-index-case__wrapper">
      <div class="p-index-case__container">
        <div class="p-index-case__section-heading">
          <div class="p-index-case__heading-main p-index-case__title--white">
            <h2 class="p-index-case__heading-title font-italic p-index-case__title--white">CASE STUDY</h2>
            <p class="p-index-case__heading-lead p-index-case__title--white">導入事例</p>
          </div>
          <a href="case_study.html" class="p-index-case__head-link hidden-sp">
            <span class="p-index-case__link-text-top font-italic">View More</span>
            <div class="p-index-case__link-arrow--white-top"></div>
            <div class="p-index-case__link-border"></div>
          </a>
        </div>
        <div class="p-index-case__items">
          <div class="p-index-case__item">
            <div class="p-index-case__img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case01.png') ; ?>" alt="">
            </div>
            <h3 class="p-index-case__item-company">AAA株式会社 様</h3>
            <div class="p-index-case__item-links">
              <div class="p-index-case__item-text">ビジネス英語研修</div>
            </div>
          </div>
          <div class="p-index-case__item">
            <div class="p-index-case__img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case02.png') ; ?>" alt="">
            </div>
            <h3 class="p-index-case__item-company">BBB株式会社 様</h3>
            <div class="p-index-case__item-links">
              <div class="p-index-case__item-text">異文化コミュニケーション</div>
            </div>
          </div>
          <div class="p-index-case__item">
            <div class="p-index-case__img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case03.png') ; ?>" alt="">
            </div>
            <h3 class="p-index-case__item-company">CCC株式会社 様</h3>
            <div class="p-index-case__item-links">
              <div class="p-index-case__item-text">ビジネス留学プログラム</div>
            </div>
          </div>
          <div class="p-index-case__item">
            <div class="p-index-case__img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case04.png') ; ?>" alt="">
            </div>
            <h3 class="p-index-case__item-company">DDD株式会社 様</h3>
            <div class="p-index-case__item-links">
              <div class="p-index-case__item-text">異文化コミュニケーション</div>
            </div>
          </div>
          <div class="p-index-case__item">
            <div class="p-index-case__img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case05.png') ; ?>" alt="">
            </div>
            <h3 class="p-index-case__item-company">EEE株式会社 様</h3>
            <div class="p-index-case__item-links">
              <div class="p-index-case__item-text">ビジネス留学プログラム</div>
            </div>
          </div>
          <div class="p-index-case__item">
            <div class="p-index-case__img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-case06.png') ; ?>" alt="">
            </div>
            <h3 class="p-index-case__item-company">FFF株式会社 様</h3>
            <div class="p-index-case__item-links">
              <div class="p-index-case__item-text">ビジネス英語研修</div>
            </div>
          </div>
        </div>
        <ul class="p-index-case__head-link-bottom hidden-sp">
          <li class="p-index-case__link-text-bottom font-italic">View More</li>
          <li class="p-index-case__link-arrow--white-bottom"></li>
          <li class="p-index-case__link-border-bottom"></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ./case -->