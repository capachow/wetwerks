<figure>
  <figcaption>
    <h2>Contact Us</h2>
  </figcaption>
  <img src="<?= path('/images/21712.jpg'); ?>" class="parallax" />
</figure>

<section class="contact split">
  <article>
    <h3><?= $icon('office'); ?><span>Phone</span></h3>
    <p><?= $anchor('(615) 713-7421', 'tel:1-615-713-7421', [
      'class' => 'ignore'
    ]); ?><br /><i>Text messages are preferred.</i></p>
  </article>
  <article>
    <h3><?= $icon('envelope'); ?><span>Email</span></h3>
    <?php foreach([
      'General Information' => 'contact@wetwerksdetail.com',
      'Schedule Service' => 'booking@wetwerksdetail.com'
    ] as $type => $email) { ?>
      <p><?= $anchor($email, "mailto:{$email}"); ?><br /><i><?= $type; ?></i></p>
    <?php } ?>
  </article>
  <article>
    <h3><?= $icon('clock'); ?><span>Hours</span></h3>
    <p>8:00 AM - 4:00 PM<br /><i>Holiday hours may vary.</i></p>
  </article>
</section>