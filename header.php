<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('Tech Support');?></title>
  <link rel="icon" href="img/tech_support_icon.svg" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body <?php body_class(); ?>>


<nav class="navbar">
  <div class="navbar-logo">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/tech_support_full.svg" alt="Tech Support Logo" id="logo">
  </div>
    <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "navbar-nav"]; ?>
    <?php wp_nav_menu($menu_args); ?>
</nav>


<nav class="mobile-nav">
  <div class="mobile-logo">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/tech_support_full.svg" alt="Tech Support Logo" id="logo">
  </div>

  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/menu_blue.svg" alt="Menu Icon" id="menuIcon">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow_forward_blue.svg" alt="Close Icon" id="closeIcon">
  <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "mobile-navbar-nav"]; ?>
  <?php wp_nav_menu($menu_args); ?>
</nav>


<!-- Scroll and reveal navigation -->
<script type="text/javascript">

// Desktop Scroll Effects
var prevScrollPos = window.pageYOffset;
var menuBtn = document.querySelector('#menuIcon');
var closeBtn = document.querySelector('#closeIcon');
var mobileNavbar = document.querySelector('.mobile-navbar-nav');

  window.onscroll = function() {

    // gets window height
    var currentScrollPos = window.pageYOffset;
    var win = window,
    doc = document,
    docElem = doc.documentElement,
    body = doc.getElementsByTagName('body')[0],
    x = win.innerWidth || docElem.clientWidth || body.clientWidth,
    y = win.innerHeight|| docElem.clientHeight|| body.clientHeight;

    console.log(x, y);

    if (x <= 800) {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollPos > currentScrollPos) {
        document.querySelector('.mobile-nav').style.top = "0";
      } else {
        document.querySelector('.mobile-nav').style.top = "-15vh";
        menuBtn.style.display = 'block';
        closeBtn.style.display = 'none';
        mobileNavbar.style.right = '-60vw';
      }
    } else {
        if (prevScrollPos > currentScrollPos) {
          document.querySelector('.navbar').style.top = "0";
          console.log('scrolling');
        } else {
          document.querySelector('.navbar').style.top = "-15vh";
        }
      }
    prevScrollPos = currentScrollPos;
  }

  menuBtn.addEventListener('click', () => {
    console.log('clicked');
    console.log(mobileNavbar);
    menuBtn.style.display = 'none';
    closeBtn.style.display = 'block';
    mobileNavbar.style.right = '0';
  });

  closeBtn.addEventListener('click', () => {
    menuBtn.style.display = 'block';
    closeBtn.style.display = 'none';
    mobileNavbar.style.right = '-60vw';
  })






// Mobile Scroll Effects
// var menuBtn = document.querySelector('#menuIcon');
// var closeBtn = document.querySelector('#closeIcon');
// var mobileNavbar = document.querySelector('.mobile-navbar-nav');
//
// var mobilePrevScrollPos = window.pageYOffset;
//   window.onscroll = function() {
//     var mobileCurrentScrollPos = window.pageYOffset;
//     if (mobilePrevScrollPos > mobileCurrentScrollPos) {
//       document.querySelector('.mobile-nav').style.top = "0";
//     } else {
//       document.querySelector('.mobile-nav').style.top = "-15vh";
//       menuBtn.style.display = 'block';
//       closeBtn.style.display = 'none';
//       mobileNavbar.style.right = '-60vw';
//     }
//     mobilePrevScrollPos = mobileCurrentScrollPos;
//   }
//
//   menuBtn.addEventListener('click', () => {
//     console.log('clicked');
//     console.log(mobileNavbar);
//     menuBtn.style.display = 'none';
//     closeBtn.style.display = 'block';
//     mobileNavbar.style.right = '0';
//   });
//
//   closeBtn.addEventListener('click', () => {
//     menuBtn.style.display = 'block';
//     closeBtn.style.display = 'none';
//     mobileNavbar.style.right = '-60vw';
//   })

</script>

<?php wp_head(); ?>
