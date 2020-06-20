<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Our mission is to consistently provide quality service and workmanship to our clients. We provide our residential accounts with a friendly, professional, and specialized service to their vehicles. We offer services such as; Full Detailing, Interior, and Exterior packages. Make your one stop detail shop." />
    <title>Wet Werks Detail</title>
    <link rel="icon" type="image/png" href="<?= path('images/favicon.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:400italic" />
    <?= STYLES; ?>
  </head>
  <body class="<?= path(1) ?? 'home'; ?>">
    <div class="page">
      <header class="main">
        <a href="<?= path('/'); ?>" class="logo">
          <?= $icon('car'); ?>
          <h4>Wet Werks Detail</h4>
        </a>
        <menu>
          <?= $anchor($icon('menu'), '#menu'); ?>
          <nav class="site">
            <?php foreach([
              'Home' => '/',
              'Booking' => '/booking/',
              'Contact' => '/contact/'
            ] as $text => $link) { ?>
              <?= $anchor($text, path($link), [
                'class' => $if(trim($link, '/') == path(1), 'current')
              ]); ?>
            <?php } ?>
          </nav>
        </menu>
        <nav class="social">
          <?php foreach([
            'facebook' => 'https://facebook.com/wetwerksdetail',
            'instagram' => 'https://instagram.com/wetwerksdetail'
          ] as $type => $link) { ?>
            <?= $anchor($icon($type), $link, [
              'target' => '_blank'
            ]); ?>
          <?php } ?>
        </nav>
      </header>
      <main class="content">
        <?= CONTENT; ?>
      </main>
      <footer class="main">
        <nav class="social">
          <?php foreach([
            'facebook' => 'https://facebook.com/wetwerksdetail',
            'instagram' => 'https://instagram.com/wetwerksdetail'
          ] as $type => $link) { ?>
            <?= $anchor($icon($type), $link, [
              'target' => '_blank'
            ]); ?>
          <?php } ?>
        </nav>
        <p>
          <?= $anchor('(615) 713-7421', 'tel:1-615-713-7421'); ?>
          <?= $anchor('Book Your Detail', '/booking/'); ?>
          <br />
          <span>&copy; Copyright <?= date('Y'); ?> Wet Werks Detail</span>
          <span>Built with <?= $anchor('Arcane', 'https://arcane.dev', [
            'target' => '_blank'
          ]); ?></span>
        </p>
      </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?= SCRIPTS; ?>
  </body>
</html>