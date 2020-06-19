$(function() {
  $(document).scroll(function() {
    let header = $('header.main');

    header.toggleClass('scroll', $(this).scrollTop() > header.height());
  });
});