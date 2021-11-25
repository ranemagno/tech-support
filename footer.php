<?php wp_footer(); ?>
<footer class="footer">
  <div class="footer-block">
    <ul class="footer-list list-legal">
      <li>
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_theme_mod("logo_footer_setting"); ?>" id="logoFooter" width="200">
        </a>
      </li>
      <li id="copyright">© COPYRIGHT 2021. ALL RIGHTS RESERVED.</li>
      <li>Custom Wordpress Site By - <a href="https://github.com/rraneighh" target="_blank" rel="noopener noreferrer" style="color:#CC0000">Rane</a></li>
    </ul>
  </div>
  <div class="footer-block">
    <ul class="footer-list list-pages">
      <h2>Pages</h2>
      <?php wp_nav_menu($menu_args); ?>
    </ul>
  </div>
  <div class="footer-block block-contact">
    <ul class="footer-list list-contact">
      <h2>Contact Us</h2>
      <li>
          <div class="footer-contact">
            <img src="<?php echo get_theme_mod("phone_icon_setting"); ?>" alt="<?php
            $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("phone_icon_setting")), '_wp_attachment_image_alt', true );
            echo $image_alt;?>">
            <p class=""><?php echo get_theme_mod('phone_setting'); ?></p>
          </div>
      </li>
      <li>
          <div class="footer-contact">
            <img src="<?php echo get_theme_mod("email_icon_setting"); ?>" alt="<?php
            $image_alt = get_post_meta( attachment_url_to_postid(get_theme_mod("email_icon_setting")), '_wp_attachment_image_alt', true );
            echo $image_alt;?>">
            <p class="contact-email"><?php echo get_theme_mod('email_setting'); ?></p>
          </div>
      </li>
    </ul>
  </div>
</footer>
