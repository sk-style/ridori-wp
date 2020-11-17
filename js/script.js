jQuery(function(){

/* wow
------------------------------------------------- */
new WOW().init();


/* カスタムプロパティの設定（ブラウザの可視領域100%の高さ）
------------------------------------------------- */
var height=window.innerHeight;
document.documentElement.style.setProperty( '--vh', height/100 + 'px');


/* AndroidのみNoto Serif JPを読み込む
------------------------------------------------- */
if (/Android/i.test(navigator.userAgent)) {
  var link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap';
  document.head.appendChild(link);
};


/* drawer
------------------------------------------------- */
var icon = jQuery('.dnav-icon');
var close = jQuery('.dnav-close');
var content = jQuery('.dnav').find('a');

icon.on('click', function() {
  jQuery('body').toggleClass('_open');
});
close.add(content).on('click', function() {
  if (jQuery('body').hasClass('_open')) {
    jQuery('body').toggleClass('_open');
  }
});


/* スムーススクロール
------------------------------------------------- */
jQuery('a[href^="#"]').click(function() {
    let speed = 600;
    let id = jQuery(this).attr('href');
    let target = jQuery('#' == id ? 'html' : id);
    let position = jQuery(target).offset().top;
    jQuery('html, body').animate(
        {
        scrollTop: position
        },
        speed
        );
    return false;
});


/* トップに戻るボタン
------------------------------------------------- */
var pagetop = jQuery('#js-totop');

pagetop.hide();
jQuery(window).scroll(function() {
    if (window.matchMedia( '(min-width: 1077px)' ).matches) {
      if(jQuery(this).scrollTop() > 300) {
          pagetop.fadeIn(500)
      } else {
          pagetop.fadeOut(300)
          return false;
      }
    }
    return false;
  }
);


/* swiper1  [ guide ] 
------------------------------------------------- */
let swiper1 = new Swiper('#js-guide-pic', {
    loop: true,
    speed: 1000,
    autoplay: {
		delay: 5000,
		stopOnLastSlide: false,
		disableOnInteraction: false,
		reverseDirection: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
  },
});


/* タブメニュー [ contact ] 
------------------------------------------------- */
var tab = jQuery('#js-contact-list_tab').children('li');
var body = jQuery('#js-contact-list_body').children('li');

tab.click(function() {
    var index = tab.index(this);
    tab.removeClass('_active');
    jQuery(this).addClass('_active');
    body.removeClass('_active').eq(index).addClass('_active');
    return false;
});


});