<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Our mission is to consistently provide quality service and workmanship to our clients. We provide our residential accounts with a friendly, professional, and specialized service to their vehicles. We offer services such as; Full Detailing, Interior, and Exterior packages. Make your one stop detail shop." />
    <title>Wet Werks Detail</title>
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
        <nav class="social">
          <a href="https://facebook.com/wetwerksdetail" target="_blank">
            <?= $icon('facebook'); ?>
          </a>
          <a href="https://instagram.com/wetwerksdetail" target="_blank">
            <?= $icon('instagram'); ?>
          </a>
        </nav>
      </header>
      <main class="content">
        <?= CONTENT; ?>
      </main>
      <footer class="main">
        <nav class="social">
          <a href="https://facebook.com/wetwerksdetail" target="_blank">
            <?= $icon('facebook'); ?>
          </a>
          <a href="https://instagram.com/wetwerksdetail" target="_blank">
            <?= $icon('instagram'); ?>
          </a>
        </nav>
        <p>&copy; Copyright <?= date('Y'); ?> Wet Werks Detail</p>
      </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?= SCRIPTS; ?>
  </body>
</html>