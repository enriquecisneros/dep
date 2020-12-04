  jQuery(window).scroll(function() {
  if (jQuery(document).scrollTop() > 50) {
  jQuery('.main-header').addClass('shrink')
  jQuery('.main-header').removeClass('inner-page')
    jQuery('.main-header').addClass('fixed-top');
  } else {
    jQuery('.main-header').removeClass('shrink')
    jQuery('.main-header').addClass('inner-page')
    jQuery('.main-header').removeClass('fixed-top');
  }
  if (jQuery(document).scrollTop() > 50) {
  	jQuery('.main-header-front').addClass('shrink')
    jQuery('.main-header-front').addClass('fixed-top');
  } else {
    jQuery('.main-header-front').removeClass('shrink')
    jQuery('.main-header-front').removeClass('fixed-top');
  }
});   