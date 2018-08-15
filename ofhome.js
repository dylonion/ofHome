$(function() {
  $('.story-toggle').on('click', function() {
    console.log('firing')
    $(this).siblings('.hidden-story').toggleClass('nodisplay');
  })
})
