<?php /* Template Name: About Us Template */ ?>

<?php get_header(); ?>
<section class="landing">
    <div class="landing-left">
      <div class="landing-left-content">
        <h1><?php echo get_theme_mod('about_headline_setting');?></h1>
        <p><?php echo get_theme_mod('about_sub_text_setting');?></p>
      </div>
    </div>
    <div class="landing-right">
      <div class="landing-right-content">
        <img src="<?php echo get_theme_mod("about_hero_img_setting"); ?>" alt="<?php
        $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("about_hero_img_setting")), '_wp_attachment_image_alt', true );
        echo $image_alt;?>">
      </div>
    </div>
</section>

<section class="positive-reasons">

  <?php query_posts('showposts=4&taxonomy=positive_block_type&tag_ID=9&post_type=positive-blocks') ?>
  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
  $featured_image = get_the_post_thumbnail($post->ID);
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

  <div class="reason-block">
    <div class="reason-block-content">
      <div class="reason-block-icon">
        <?php echo $featured_image; ?>
      </div>
      <div class="reason-block-text">
        <p><?php echo the_excerpt(); ?></p>
      </div>
    </div>
  </div>

  <?php
      endwhile;
    else : echo '';
  endif;
  ?>




</section>


<section class="reviews">
  <div class="reviews-header">
    <h1 class="section-title">Hear From Customers</h1>
  </div>
  <div class="review-blocks">

    <?php query_posts('showposts=3&taxonomy=review_type&tag_ID=10&post_type=reviews') ?>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    $featured_image = get_the_post_thumbnail($post->ID);
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

    <div class="review-block">
      <h3><?php echo the_title(); ?></h3>
      <p><?php echo the_excerpt(); ?></p>
      <div class="review-block-icon">
        <?php echo $featured_image; ?>
      </div>
    </div>

    <?php
        endwhile;
      else : echo '';
    endif;
    ?>

  </div>
</section>

<section class="team">
  <div class="team-header">
    <h1 class="section-title">Meet the Team</h1>
  </div>
  <div class="team-blocks">

    <?php query_posts('taxonomy=member_type&post_type=members') ?>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    $featured_image = get_the_post_thumbnail($post->ID);
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

    <div class="member-block">
      <div class="member-img" style="background-image: url(<?php echo $url; ?>)"></div>
      <h3 class="member-name"><?php echo the_title(); ?></h3>
      <h4 class="member-position"><?php echo the_excerpt(); ?></h4>
    </div>

    <?php
        endwhile;
      else : echo '';
    endif;
    ?>
</section>

</body>
<?php get_footer(); ?>
</html>
