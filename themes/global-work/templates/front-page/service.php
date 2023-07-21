<?php
/**
 * トップページテンプレート(service)
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<section class="p-index-service">
    <div class="p-index-service__wrapper">
      <div class="p-index-service__container">
        <div class="p-index-service__section-heading">
          <div class="p-index-service__main">
            <h2 class="p-index-service__heading-title font-italic">SERVICE</h2>
            <p class="p-index-service__heading-lead">サービス</p>
          </div>
          <a href="service.html" class="p-index-service_head-link hidden-sp">
            <span class="p-index-service__link-text font-italic">View More</span>
            <div class="p-index-service__link-arrow--black">
            </div>
            <div class="p-index-service__link-border"></div>
          </a>
        </div>
        <div class="p-index-service__items">
          <div class="p-index-service__item">
            <div class="p-index-service__item-img">
              <div class="p-index-service__item-number">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/number01.png') ; ?>" alt="">
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-service01.jpeg') ; ?>" alt="">
              <h3 class="p-index-service__item-title">
                <span class="p-index-service__item-title-inside">ビジネス英語研修</span>
              </h3>
            </div>
            <p class="p-index-service__item-text">
              ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき
              必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、
              日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
            </p>
          </div>
          <div class="p-index-service__item">
            <div class="p-index-service__item-img">
              <div class="p-index-service__item-number">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/number02.png') ; ?>" alt="">
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-service02.jpeg') ; ?>" alt="">
              <h3 class="p-index-service__item-title">
                <span class="p-index-service__item-title-inside">異文化</span><br>
                <span class="p-index-service__item-title-outside">コミュニケーション研修</span>
              </h3>
            </div>
            <p class="p-index-service__item-text">
              急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の
              交流はもはや日常的な光景となりました。 言語や文化が異なる相手を理解することで世界が広がり、
              新たなビジネスチャンスに巡り会うことは少なくありません。
            </p>
          </div>
          <div class="p-index-service__item">
            <div class="p-index-service__item-img">
              <div class="p-index-service__item-number">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/number03.png') ; ?>" alt="">
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/img-service03.jpeg') ; ?>" alt="">
              <h3 class="p-index-service__item-title">
                <span class="p-index-service__item-title-inside">ビジネス留学</span><br>
                <span class="p-index-service__item-title-outside">サポートプログラム</span>
              </h3>
            </div>
            <p class="p-index-service__item-text">
              将来的に海外で働きたい方に向けた講座をご用意しております。
              一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、
              海外でのビジネスマナー習得を目指します。
              通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、
              海外でビジネス展開する際に自信を持って活動することができるようになります。
            </p>
          </div>
        </div>
        <ul class="p-index-service__head-link-bottom hidden-sp">
          <li class="p-index-service__link-text-bottom font-italic">View More</li>
          <li class="p-index-service__link-arrow--white-bottom"></li>
          <li class="p-index-service__link-border-bottom"></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ./service -->