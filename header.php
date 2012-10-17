<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage v
 * @since Twenty Ten 1.0
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>vbecomputing</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Michael Johndok">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

<!-- Le styles -->
<link href="<?php bloginfo(stylesheet_directory); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo(stylesheet_directory); ?>/style.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo(stylesheet_directory); ?>/img/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo(’template_url’); ?>/img/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo(stylesheet_directory); ?>/img/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo(stylesheet_directory); ?>/img/apple-touch-icon-57-precomposed.png">
</head>

<body>
<div id = "body">
  <div id = "header" class="row">
      <div id = "logo" class="span4">
        <img src="<?php bloginfo(stylesheet_directory); ?>/img/logo.png">
        <p>The slogan goes here</p>
      </div><!-- end logo -->
      <div id = "header_right" class="">
        <div id = "header_menu" class="">
            <?php wp_nav_menu( array( 'container_class' => 'sec-menu-header', 'theme_location' => 'primary' , 'after' => '&nbsp&nbsp&nbsp|' ) ); ?>
        </div><!-- header_menu -->
        <div id = "header_social" class="">
          <img src="<?php bloginfo(stylesheet_directory); ?>/img/social.png">
        </div><!-- header_social -->
      </div><!-- end header_right -->
  </div><!-- end header -->

  <div id = "nav" class="row">
        <div class="menu">
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'second' ) ); ?>       
        </div>
    </div><!-- end nav -->
