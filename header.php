<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />

  <!-- reset css -->
  <link rel="stylesheet" href="/css/reset.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
  <!-- drawer.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" media="screen and (max-width:767px)" />
  <!-- wow -->
  <link rel="stylesheet" href="/css/animate.css" />
  <!-- original -->
  <link rel="stylesheet" href="/style.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,500&family=Noto+Sans+JP:wght@500;700&family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet" />
  <!-- favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="/img/01-top/favicon-16x16.png" />
  <?php wp_head(); ?>
</head>

<body class="drawer drawer--right">
  <header class="header">
    <div class="header-inner">
      <?php if (is_front_page()) : //トップページではロゴをh1に、それ以外のページではdivに。
      ?>
        <h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/01-top/logo01@2x.png" alt="Global-Standard" /></a></h1>
      <?php else : ?>
        <div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/01-top/logo01@2x.png" alt="Global-Standard" /></a></div>
      <?php endif; ?>
      <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="drawer-nav header-nav">
        <?php
        $defaults = array(
          'menu_class'      => 'drawer-menu header-nav-list',
          'container'       => false,
          'theme_location'  => 'global',
          'add_li_class' => 'header-nav-item', // liタグへclass追加
          'add_a_class' => 'header-nav-item-link' // aタグへclass追加
        );
        wp_nav_menu($defaults);
        ?>
      </nav>
    </div>
  </header>
  <!-- /.header -->