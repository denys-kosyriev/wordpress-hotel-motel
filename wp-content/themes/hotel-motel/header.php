<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset='<?php bloginfo('charset') ?>'>
  <meta name='viewport'
        content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Hotel Motel</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class='header'>
  <div class='container'>
    <div class='upper-block'>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/search.svg' alt='' />
      <a href='<?php echo home_url() ?>' class='logo'><img
          src='http://localhost/hotel-motel/wp-content/uploads/2023/04/logo.png' alt=''></a>
      <button type='button' class='btn-scarlet'>Book</button>
    </div>
    <div class='nav-block'>
      <?php
        wp_nav_menu([
          'theme_location' => 'header-links',
          'container' => null,
          'item_wrap' => '<ul>%3$s</ul>',
        ]);
      ?>
    </div>
  </div>
</header>
