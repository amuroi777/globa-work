//swiper
const swiper = new Swiper('.p-index-fv__container', {
  wrapperClass: 'p-index-fv__slide-wrapper',
  slideClass: 'p-index-fv__slide',
  
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
});

$('.qa-box_q').on('click', function() {
  $(this).next().slideToggle();
});

$('.qa-box_q').on('click', function() {
  $(this).toggleClass('is-active');
});

$('.qa-box_q').on('click', function() {
  $(this).toggleClass('.qa-box_bar1');
});

jQuery('.drawer-icon').on('click', function(e) {
  e.preventDefault();

  jQuery('.drawer-icon').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  // jQuery('.drawer-background').toggleClass('is-active');

return false;
});

//ドロワー発火
jQuery('.l-header-hamburger').on('click', function(e) {
  e.preventDefault();

  jQuery('.l-header-hamburger').toggleClass('is-active');
  jQuery('.l-drawer__content').toggleClass('is-active');
  // jQuery('.drawer-background').toggleClass('is-active');

return false;
});

//アコーディオンメニュー
$('.p-service-qa__box-q').on('click', function() {
  $(this).next().slideToggle();
});

$('.p-service-qa__box-q').on('click', function() {
  $(this).toggleClass('is-active');
});

$('.p-service-qa__box-q').on('click', function() {
  $(this).toggleClass('.p-service-qa__box-bar1');
});



// //360px未満のレスポンシブ
// !(function () {
//   const viewport = document.querySelector('meta[name="viewport"]');
//   function switchViewport() {
//     const value =
//       window.outerWidth > 360
//         ? 'width=device-width,initial-scale=1'
//         : 'width=360';
//     if (viewport.getAttribute('content') !== value) {
//       viewport.setAttribute('content', value);
//     }
//   }
//   addEventListener('resize', switchViewport, false);
//   switchViewport();
// })();

