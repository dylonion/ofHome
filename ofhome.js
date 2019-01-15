$(function() {

  checkSize();

  if($('.about-header').length){
    $('.mobile-hide').text($('.about-header h1').text());
  } else if($('.people-header').length){
    $('.mobile-hide').text('Board Members & Executive Director');
    $('.mobile-hide').css('font-size','1em');
  } else if($('.faq-header').length){
    $('.mobile-hide').text($('.faq-header h1').text());
  } else if($('.news-header').length){
    $('.mobile-hide').text('News/Media')
  } else if($('.donate-header').length){
    $('.mobile-hide').text('Donate/Give')
  } else {
    $('.mobile-hide').text($('.header h1').text());
  }

  $(window).resize(function(){
    checkSize();
  });

  $('.menu-toggle').on('click',function() {
    if($(this).children('i').hasClass('fa-bars')){
      $(this).children('i').removeClass('fa-bars').addClass('fa-times')
    }else{
      $(this).children('i').removeClass('fa-times').addClass('fa-bars')
    }
    $('.nav-menu').toggleClass('nodisplay');
    $('body').toggleClass('noscroll');
  })

  $('.story-toggle').on('click', function() {
    console.log('firing')
    let newText = $(this).siblings('.hidden-story').text()
    let oldText = $(this).siblings('p').text()
    $(this).siblings('.hidden-story').toggleClass('nodisplay');
    $(this).siblings('p').toggleClass('nodisplay')
    if($(this).hasClass('fa-angle-down')){
      $(this).removeClass('fa-angle-down').addClass('fa-angle-up')
    }else{
      $(this).removeClass('fa-angle-up').addClass('fa-angle-down')
    }
  })

})

function checkSize() {
  if($('.menu-toggle').css('display') == 'none') {
    $('.nav-menu').removeClass('nodisplay');
    $(window).off('scroll');
  }else {
    $('.nav-menu').addClass('nodisplay');
    $(window).scroll(function(e){
      if($(window).scrollTop() > 0) {
        $('.blog-masthead').css('position','fixed')
      }else{
        $('.blog-masthead').css('position', 'relative')
      }
      if($('.nav-menu').css('display') == 'none' && $('.menu-toggle i').hasClass('fa-times')){
        $('.fa-times').removeClass('fa-times').addClass('fa-bars')
      }
    })
  }
}
