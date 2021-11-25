  <?php get_header(); ?>

  <section class="landing">
      <div class="landing-left">
        <div class="landing-left-content">
          <h1><?php echo get_theme_mod('home_headline_setting');?></h1>

          <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Us' ) ) ); ?>">
            <button type="button" name="landingBtn" id="landingBtn">Contact Us</button>
          </a>

        </div>
      </div>
      <div class="landing-right">
        <div class="landing-right-content">
          <img src="<?php echo get_theme_mod("home_hero_img_setting"); ?>" alt="<?php
          $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("home_hero_img_setting")), '_wp_attachment_image_alt', true );
          echo $image_alt;?>">
        </div>
      </div>
  </section>

  <section class="services">
      <div class="services-header">
        <h1 class="section-title">Our Services</h1>
      </div>
      <div class="services-blocks">

        <!-- Loop goes here ------------------------------------------------->

      <?php query_posts('showposts=3&taxonomy=service_type&tag_ID=8&post_type=services&service_type=key-service') ?>
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
      $featured_image = get_the_post_thumbnail($post->ID);
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

      <div class="block">
        <div class="block-icon">
          <?php echo $featured_image; ?>
        </div>
        <div class="block-title">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="block-paragraph">
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>

      <?php
          endwhile;
        else : echo '<h2>There are no posts!</h2>';
      endif;
      ?>
      <?php wp_reset_query(); ?>

        <div class="services-btn">
          <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Services' ) ) ); ?>">
          <button type="button" name="serviceBtn" id="serviceBtn">See More</button>
          </a>
        </div>
      </div>
  </section>

<?php include 'contact-section.php' ?>

</body>

<script type="text/javascript">
  let formSubmit = document.querySelector('#formSubmit');
  formSubmit.value = '';
</script>

<?php get_footer(); ?>

</html>

<!--

Lifesaving Resources :

Getting Image Alt when uploaded through customizer
https://wordpress.stackexchange.com/questions/221481/get-img-alt-tag-from-a-image-that-has-been-uploaded-through-the-customizer

-->
