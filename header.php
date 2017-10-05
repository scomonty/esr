<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" href="wp-content/themes/esr/images/favicon.png">
    <title>
      <?php wp_title('|', true, 'right'); ?>eatsciencerun.com
    </title>
     <?php wp_head(); ?>
  </head>
  <body class="demo-2">
      <nav class="navbar navbar-fixed-top">
      <div class="container header-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <?php
            $args = array(
              'menu' => 'header-menu',
              'menu_class' => 'nav navbar-nav',
              'container' => 'false');
            wp_nav_menu($args); ?>
        </div><!--/.navbar-collapse -->
      </div>
          <div class="socialIcons">
          <a href="https://www.facebook.com/mckale.davis" rel="nofollow" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="https://twitter.com/eatsciencerun" rel="nofollow" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/eatsciencerun/" rel="nofollow" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.snapchat.com/add/mckale.davis" rel="nofollow" target="_blank"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/mckale-davis-5583b429" rel="nofollow" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
    </div><! -- end socialicons -->
    </nav>
