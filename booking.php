<?php /* Template Name: Booking Template */ ?>

<?php get_header(); ?>

<div class="booking-page-container">

  <div class="booking-content">
    <h1 class="booking-title"><?php echo get_theme_mod('booking_headline_setting'); ?></h1>
    <p><?php echo get_theme_mod('booking_sub_text_setting'); ?></p>

    <?php echo do_shortcode('[CP_APP_HOUR_BOOKING id="1"]'); ?>
  </div>

</div>

</body>
<?php get_footer(); ?>
</html>
