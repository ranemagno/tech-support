<section class="contacts">
    <div class="contact-left">

      <div class="contact-description">
        <h1 class="contact-title"><?php echo get_theme_mod('contact_headline_setting'); ?></h1>
        <h2 class="contact-sub-title"><?php echo get_theme_mod('contact_sub_text_setting'); ?></h2>


        <div class="contact-opt">
          <img src="<?php echo get_theme_mod("phone_icon_setting"); ?>" alt="<?php
          $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("phone_icon_setting")), '_wp_attachment_image_alt', true );
          echo $image_alt;?>">
          <p class="contact-opt-description"><?php echo get_theme_mod('phone_setting'); ?></p>
          <p class="contact-opt-sub-description"><?php echo get_theme_mod('phone_note_setting'); ?></p>
        </div>

        <div class="contact-opt">
          <img src="<?php echo get_theme_mod("email_icon_setting"); ?>" alt="<?php
          $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("email_icon_setting")), '_wp_attachment_image_alt', true );
          echo $image_alt;?>">
          <p class="contact-opt-description opt-des-2"><?php echo get_theme_mod('email_setting'); ?></p>
        </div>

        <div class="contact-opt opt-map">
          <p class="contact-opt-description"><?php echo get_theme_mod('location_setting'); ?></p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191959.80385500344!2d174.82733246252616!3d-41.257237002713374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d4756496ea708fb%3A0x500ef6143a2db20!2sLower%20Hutt!5e0!3m2!1sen!2snz!4v1637533449461!5m2!1sen!2snz" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <p class="contact-opt-sub-description"><?php echo get_theme_mod('store_note_setting'); ?></p>
          <p class="contact-opt-description"><?php echo get_theme_mod('store_hours_setting'); ?></p>
        </div>

      </div>
    </div>
    <div class="contact-right">
      <div class="contact-form">
        <div class="contact-form-shortcode">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Get In Touch"]'); ?>
        </div>
      </div>
    </div>
</section>
