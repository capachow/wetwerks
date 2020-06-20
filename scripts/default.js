$(window).on('load scroll', function() {
  let header = $('header.main');
  let distance = $(this).scrollTop() > header.outerHeight();

  $('body').toggleClass('scroll', distance);
});

$('[href="#menu"]').on('click', function(event) {
  event.preventDefault();

  $(this).parent().toggleClass('open');
});

$('.parallax').each(function() {
  var image = $(this);

  $(window).on('load scroll', function() {
    var scrolled = $(this).scrollTop();

    image.css('top', `${scrolled}px`);
  });
});