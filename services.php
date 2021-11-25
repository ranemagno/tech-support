<?php /* Template Name: Services Template */ ?>

<?php get_header(); ?>

<section>
  <div class="landing">
    <div class="landing-left">
      <div class="landing-left-content">
        <h1><?php echo get_theme_mod('service_headline_setting');?></h1>
        <p><?php echo get_theme_mod('service_sub_text_setting');?></p>
      </div>
    </div>
    <div class="landing-right">
      <div class="landing-right-content">
        <img src="<?php echo get_theme_mod("service_hero_img_setting"); ?>" alt="<?php
        $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("service_hero_img_setting")), '_wp_attachment_image_alt', true );
        echo $image_alt;?>">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="all-services">

    <?php query_posts('taxonomy=service_type&tag_ID=7&post_type=services&service_type=standard-services') ?>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    $featured_image = get_the_post_thumbnail($post->ID);
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

    <div class="service-block">
      <div class="service-block-icon">
        <?php echo $featured_image; ?>
      </div>
      <div class="service-block-title">
        <h2><?php echo the_title(); ?></h2>
      </div>
      <div class="service-block-paragraph">
        <p><?php echo the_excerpt(); ?></p>
      </div>
    </div>

    <?php
        endwhile;
      else : echo '<h2>There are no posts!</h2>';
    endif;
    ?>
    <?php wp_reset_query(); ?>

  </div>
</section>


</body>
<?php get_footer(); ?>

</html>
