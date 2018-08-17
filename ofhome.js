$(function() {
  $('.story-toggle').on('click', function() {
    console.log('firing')
    let newText = $(this).siblings('.hidden-story').text()
    let oldText = $(this).siblings('p').text()
    $(this).siblings('.hidden-story').toggleClass('nodisplay');
  })
})
