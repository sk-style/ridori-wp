jQuery(function(){

/*  side naviの文字色変更
------------------------------------------------- */
var timing =  500;
var nav =  jQuery('.snav');

function changeColor() {
  var trigger1 = document.getElementById('js-img-tit1');
  var trigger2 = document.getElementById('js-img-tit2');
  var trigger3 = document.getElementById('js-img-tit3');
  var trigger4 = document.getElementById('js-img-tit4');
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


/* swiper3  [ other (レスポンシブ表示) ]
------------------------------------------------- */
var swiper3 ;
var swiper3Bool ;
const breakPoint = 1076;
var other = document.querySelectorAll('#js-other');

window.addEventListener('load',()=>{
  if( breakPoint < window.innerWidth){
    swiper3Bool = false;
  }else{
    createSwiper();
    swiper3Bool = true;
  }
},false);

window.addEventListener('resize',()=>{
  if( breakPoint < window.innerWidth && swiper3Bool){
    swiper3.destroy(false,true);
    swiper3Bool = false;
  }else if( breakPoint >= window.innerWidth && !(swiper3Bool)){
    createSwiper();
    swiper3Bool = true;
  }
  },false);

const createSwiper = () =>{
  swiper3 = new Swiper(other, {
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
}


/* スライドトグル [ catlg ] 
------------------------------------------------- */
jQuery('.catlg-dtit').click(function() {
    jQuery(this).next().slideToggle();
    jQuery(this).toggleClass('_open');
    return false;
});


/* スライドトグル [ course ] 
------------------------------------------------- */
var head = jQuery('#js-course-head')
var data = jQuery('#js-course-def')

head.click(function() {
  jQuery(this).next().slideToggle();
  jQuery(this).toggleClass('_open');
    jQuery(window).on('resize', function() {
      if( 'none' == head.css('pointer-events') ){
        data.attr('style','');
      };
    });
    return false;
});

jQuery(window).bind('load', function() {
  if (window.matchMedia( '(max-width: 1076px)' ).matches) {
    if(document.URL.match(/..course/)) {
      head.next().slideToggle();
      head.addClass('_open');
      jQuery(window).on('resize', function() {
        if( 'none' == head.css('pointer-events') ){
          data.attr('style','');
        };
      });
    };
  };
  return false;
});


});