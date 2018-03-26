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
          <?php include 'includes/socialIcons.php';?>
    </nav>
