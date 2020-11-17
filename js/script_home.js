jQuery(function(){

/*  side navi表示 
------------------------------------------------- */
var dnav = jQuery('.dnav-menu')
var snav = jQuery('.snav')
let header = jQuery('header').innerHeight();

dnav.hide();
snav.hide();
jQuery(window).on('scroll', function() {
if (window.matchMedia( '(max-width: 1076px)' ).matches) {
    if (jQuery(this).scrollTop() > 100) {
      dnav.fadeIn(400);
    } else {
      dnav.fadeOut(100);
    }
    return false;
  } else {
    if (jQuery(this).scrollTop() > header) {
      snav.fadeIn(400);
    } else {
      snav.fadeOut(100);
    }
    return false;
  }
});


/*  side naviの文字色変更
------------------------------------------------- */
var timing =  500;
var nav =  jQuery('.snav');

function changeColor() {
  var trigger1 = document.getElementById('about');
  var trigger2 = document.getElementById('concept');
  var trigger3 = document.getElementById('tec');
  var trigger4 = document.getElementById('food');
  var trigger5 = document.getElementById('guide');
  var trigger6 = document.getElementById('contact');

  var trigger1Y = trigger1.getBoundingClientRect().top;
  var trigger2Y = trigger2.getBoundingClientRect().top;
  var trigger3Y = trigger3.getBoundingClientRect().top;
  var trigger4Y = trigger4.getBoundingClientRect().top;
  var trigger5Y = trigger5.getBoundingClientRect().top;
  var trigger6Y = trigger6.getBoundingClientRect().top;

  if(trigger2Y - timing > 0 && 0 >= trigger1Y - timing) {
    nav.addClass('_change');
  } else if(trigger4Y - timing > 0 && 0 >= trigger3Y - timing) {
    nav.addClass('_change');
  } else if(trigger6Y - timing > 0 && 0 >= trigger5Y - timing) {
    nav.addClass('_change');
  } else {
    nav.removeClass('_change');
  }
}
window.addEventListener('scroll', changeColor);


/* swiper2  [ pop (レスポンシブ表示) ] 
------------------------------------------------- */
var swiper2 ;
var swiper2Bool ;
const breakPoint = 1076;
var pop = document.querySelectorAll('#js-pop');

window.addEventListener('load',()=>{
  if( breakPoint < window.innerWidth){
    swiper2Bool = false;
  } else {
    createSwiper();
    swiper2Bool = true;
  }
},false);

window.addEventListener('resize',()=>{
  if( breakPoint < window.innerWidth && swiper2Bool){
    swiper2.destroy(false,true);
    swiper2Bool = false;
  } else if( breakPoint >= window.innerWidth && !(swiper2Bool)) {
    createSwiper();
    swiper2Bool = true;
  }
  },false);

const createSwiper = () =>{
  swiper2 = new Swiper(pop, {
    effect: 'fade',
    loop: true,
    speed: 700,
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
        reverseDirection: false
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  });
  return false;
}


/* simplyScroll [ food ] 
------------------------------------------------- */
jQuery('#js-food-list').simplyScroll({
  autoMode: 'loop',
  speed: 1,
  frameRate: 24,
  horizontal: true,
  pauseOnHover: false,
  pauseOnTouch:  false,
});


/* スライドダウン [ pickup ] 
------------------------------------------------- */
jQuery('#js-pickup a').click(function() {
  jQuery('.news-dtit:first').next().slideDown(300);
  jQuery('.news-dtit:first').addClass('_open');
  return false;
});


/* スライドトグル [ news ] 
------------------------------------------------- */
jQuery('.news-dtit').click(function() {
    jQuery(this).next().slideToggle(300);
    jQuery(this).toggleClass('_open');
    return false;
});


});