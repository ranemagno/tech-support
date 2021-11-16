<?php get_header(); ?>

  <section>
    <div class="landing">
      <div class="landing-left">
        <div class="landing-left-content">
          <h1>Do you need some tech support?</h1>
          <button type="button" name="landingBtn" id="landingBtn">Contact Us</button>
        </div>
      </div>
      <div class="landing-right">
        <div class="landing-right-content">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/active_support.svg" alt="Active Support">
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="services">
      <div class="services-header">
        <h1 class="section-title">Our Services</h1>
      </div>
      <div class="services-blocks">

        <!-- Loop goes here ------------------------------------------------->
        <div class="block">
          <div class="block-icon">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/devices_black.svg" alt="Black Devices">
          </div>
          <div class="block-title">
            <h2>Devices and Computers</h2>
          </div>
          <div class="block-paragraph">
            <p>We do pc repairs to broken screens. Come in for a quote and get your device sorted.</p>
          </div>
        </div>
        <div class="block">
          <div class="block-icon">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/apps_outage_black.svg" alt="Black Devices">
          </div>
          <div class="block-title">
            <h2>Apps & Software</h2>
          </div>
          <div class="block-paragraph">
            <p>We do pc repairs to broken screens. Come in for a quote and get your device sorted.</p>
          </div>
        </div>
        <div class="block">
          <div class="block-icon">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/developer_board_black.svg" alt="Black Devices">
          </div>
          <div class="block-title">
            <h2>PC Components</h2>
          </div>
          <div class="block-paragraph">
            <p>We do pc repairs to broken screens. Come in for a quote and get your device sorted.</p>
          </div>
        </div>

        <div class="services-btn">
          <button type="button" name="serviceBtn" id="serviceBtn">See More</button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="contacts">
      <div class="contact-left">
        <div class="contact-description">
          <h1 class="contact-title">Get In Touch</h1>
          <h2 class="contact-sub-title">Send us a message or contact us via...</h2>


          <div class="contact-opt">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/call_black.svg" alt="Phone">
            <p class="contact-opt-description">021 2345 6789</p>
            <p class="contact-opt-sub-description">Same hours as in store.</p>
          </div>

          <div class="contact-opt">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/email_black.svg" alt="Email">
            <p class="contact-opt-description opt-des-2">021 2345 6789</p>
          </div>


        </div>
      </div>
      <div class="contact-right">
        <div class="contact-form">
          <div class="contact-form-shortcode">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Get In Touch"]') ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

<script type="text/javascript">
  let formSubmit = document.querySelector('#formSubmit');
  formSubmit.value = '';
</script>

<?php get_footer(); ?>

</html>
