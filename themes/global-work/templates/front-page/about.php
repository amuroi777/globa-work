<?php
/**
 * トップページテンプレート(about)
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<section class="p-index-about">
    <div class="p-index-about__wrapper">
      <div class="p-index-about__container">
        <div class="p-index-about__content">
          <div class="p-index-about__bg p-index-about__content-bg"></div>
        </div>
        <div class="p-index-about__section-inner">
          <div class="p-index-about__section-heading">
            <div class="p-index-about__heading-main">
              <h2 class="p-index-about__heading-title font-italic">ABOUT US</h2>
              <p class="p-index-about__heading-lead">当社について</p>
            </div>
            <a href="about.html" class="p-index-about__head-link hidden-sp">
              <span class="p-index-about__heading-link-text-top font-italic">View More</span>
              <div class="p-index-about__heading-link-arrow--white">
              </div>
            </a>
          </div>
          <div class="p-index-about__items">
            <p class="p-index-about__text">
              急速に広がったグローバル社会に対応できる人材を育成することで、
              文化・言語の垣根を越えたコミュニケーションを活発にし、
              一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
              <br><br> 
              コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、
              世界を舞台に新しい相乗効果を生む未来を創造する。 
              <br><br>
              文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
            </p>
            <div class="p-index-about__img-wrapper">
              <figure class="p-index-about__img">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about-main-img.jpg') ; ?>" alt="">
                <a href="about.html" class="p-index-about__head-link hidden-pc">
                  <span class="p-index-about__heading-link-text-top font-italic l-about__link-text-bottom">View More</span>
                  <div class="p-index-about__heading-link-arrow--white link_arrow_bottom">
                  </div>
                  <div class="p-index-about__heading-link-border"></div>
                </a>
              </figure>
            </div>
          </div>
        </div>
        <ul class="p-index-about__head-link-bottom">
          <li class="p-index-about__link-text-bottom font-italic">View More</li>
          <li class="p-index-about__link-arrow--white-bottom"></li>
          <li class="p-index-about__link-border-bottom"></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ./about -->