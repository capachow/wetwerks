<figure class="stretch">
  <figcaption>
    <h5>Welcome to Wet Werks Detail</h5>
    <h1>Your car is always in great hands with us</h1>
    <?= $anchor('Schedule Now', path('/booking/'), [
      'class' => 'button'
    ]); ?>
  </figcaption>
  <img src="<?= path('/images/21712.jpg'); ?>" class="parallax" />
</figure>

<section class="story">
  <h2>Our Story</h2>
  <hr />
  <h5 class="italic">Car detailing at its best!</h5>
  <p>Wet Werks Detail, LLC. has been established in TN. We pride ourselves on customer service and building relationships with our clients who in turn become part of our family. Started out as a small auto detailing company has hope to become a full-fledged, full service detailing center.</p>
  <p>Our mission is to consistently provide quality service and workmanship to our clients. We provide our residential accounts with a friendly, professional, and specialized service to their vehicles. We offer services such as; Full Detailing, Interior, and Exterior packages. Make your one stop detail shop.</p>
  <p>We maintain accounts ranging from the classic cars, daily drivers, motorcycles, and muscle cars. No job is too big or small. We are a year-round business operating Mon – Sun. by appointment. Also open most holidays as well to assist in customer details needs.</p>
  <p>The staff at Wet Werks Detail, is committed to customer service, and a positive experience you can tell your friends and family about. We welcome everyone to try our services, and see first-hand.</p>
</section>

<figure class="process">
  <figcaption>
    <h2>Our Process</h2>
    <hr />
    <h5 class="italic">We know your time is valuable!</h5>
    <section class="steps split">
      <?php foreach([
        '1: Booking' => 'calendar',
        '2: Evaluation' => 'clipboard',
        '3: Detailing' => 'hand',
        '4: Completion' => 'receipt'
      ] as $step => $name) { ?>
        <article>
          <?= $icon($name); ?>
          <h5><?= $step; ?></h5>
        </article>
      <?php } ?>
    </section>
    <?= $anchor('Easy Online Appointments', path('/booking/'), [
      'class' => 'button'
    ]); ?>
  </figcaption>
  <img src="<?= path('/images/63153.jpg'); ?>" class="parallax" />
</figure>

<section class="reviews">
  <h2>Our Reviews</h2>
  <hr />
  <h5 class="italic">Let them speak for us!</h5>
  <?php foreach([
    'Megan N.' => 'These guys are amazing! They did an excellent job cleaning the interior. Stains from the previous owner was gone and they cleaned all the stickiness and crumbs from the kids. They left me with a brand new car, inside and out! Most definitely would recommend to everyone!',
    'Carey N.' => 'I recommend Wet Werks for your detailing needs. Based on the other detailing services out there, Wet Werks detailing was very responsive to my inquiries and provided accurate and reasonable estimates of their scheduling and services. The service professional took care of my engine and paid close attention to the small details that I couldn’t have noticed. He was very knowledgeable of the sensitive components of the engine and worked with caution to clean and refresh everything under the hood. Although I only purchased the engine detailing services, the approach of patience and excellent customer service will ensure that I will be using Wet Werks services for all my vehicle detailing needs in the futures. When your local detailing services don’t answer or return your phone calls, make Wet Werks your next choice and they will be your best choice!',
    'Sophia B.' => 'Recommend Wet Werks Detail for all my cars now. They are very personable and make sure you have the best experience and explain everything they have done.. Will be using them for now on.',
    'Billy P.' => 'Wet Werks did a great job detailing my SUV! They were very professional, polite, and attentive to the my concerns. I would highly recommend their services! Thank you!',
    'Andrew P.' => 'I hit them up on a last minute appointment but they squeezed me in. Awesome service! Interior was faded red and they brought it back to life! Highly recommended.'
  ] as $name => $review) { ?>
    <article>
      <p class="quote"><?= $review; ?></p>
      <h5><?= $name; ?> <i>via Google</i></h5>
    </article>
  <?php } ?>
</section>