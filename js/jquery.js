$(document).ready(function() {
  $('.logo').hover(function() {
    $(this).addClass('hovered');
  }, function() {
    $(this).removeClass('hovered');
  });
});