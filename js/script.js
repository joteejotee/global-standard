$(document).ready(function() {
  $('.drawer').drawer();
});

$(function() {


  // to-topボタン制御
  $('.top-top').hide();  //to-topボタン非表示

  $(window).scroll(function() {
    if( $(this).scrollTop() > 3500 ) {
      $('.to-top').fadeIn();
    } else {
      $('.to-top').fadeOut();
    }
  });
  $('.to-top').click(function () {
    $('.body,html').animate({scrollTop: 0}, 500); //TOPへスクロール。500は戻る時のスピード。
    return false;
  });

});

// jQuery(' a[href^="#"] ').on('click', function() {
//   alert('click!');
// });

// jQuery(window.addEventListener).on('scroll', () => {
//   let scroll_Y = window.scrollY;
//   console.log(scroll_Y);
// });

// jQuery(window).on('scroll', function() {
//   if (100 < jQuery(this).scrollTop()) {
//     jQuery('.to-top').addClass('is-show');
//   } else {
//     jQuery('.to-top').removeClass('is-show');
//   }
// });