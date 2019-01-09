$(function() {
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
