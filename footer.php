<?php wp_footer(); ?>
<footer class="footer">
  <div class="footer-block">
    <ul class="footer-list legal-block">
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youthlineLogo.png" alt="Youthline Logo" id="logoFooter"></li>
      <li id="copyright">© COPYRIGHT 2021. ALL RIGHTS RESERVED.</li>
      <li>Terms and Services | Privacy Policy</li>
    </ul>
  </div>
  <div class="footer-block">
    <ul class="footer-list">
      <h2>Youthline</h2>
      <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
    </ul>
  </div>
  <div class="footer-block">
    <ul class="footer-list">
      <h2>Contact Us</h2>
      <li>Free Call 0800 376 633</li>
      <li>Free text 234</li>
      <li>talk@youthline.co.nz</li>
      <li>Webchat</li>
      <li></li>
      <li>Complaints Procedure</li>
    </ul>
  </div>
  <div class="footer-block">
    <ul class="footer-list">
      <h2>Our Socials</h2>
    </ul>
  </div>
</footer>
