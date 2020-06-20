$(window).on('load scroll', function() {
  let header = $('header.main');
  let distance = $(this).scrollTop() > header.height();

  $('body').toggleClass('scroll', distance);
});

$('[href="#menu"]').on('click', function(event) {
  $(this).parent().toggleClass('open');

  event.preventDefault();
});

$(window).on('load scroll resize', function() {
  let viewport = { element: $(this) };

  viewport.height = viewport.element.height();
  viewport.scrolled = viewport.element.scrollTop();

  $('img.parallax').each(function() {
    let image = { element: $(this) }

    image.figure = image.element.parent();
    image.height = image.figure.outerHeight();
    image.offset = image.figure.offset().top;

    image.top = viewport.scrolled - image.offset;

    if(image.top + viewport.height > 0) {
      if(viewport.scrolled <= (image.offset + image.height)) {
        image.element.css('top', image.top);
      }
    }
  });
});