<?php
/**
 * トップページテンプレート
 *
 * @package global-work
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<?php
esc_html( get_template_part( 'templates/front-page/fv' ) );
esc_html( get_template_part( 'templates/front-page/about' ) );
esc_html( get_template_part( 'templates/front-page/service' ) );
esc_html( get_template_part( 'templates/front-page/case' ) );
esc_html( get_template_part( 'templates/front-page/news' ) );
?>


<?php
get_footer();