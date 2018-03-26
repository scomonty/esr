<?php
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));
?>
    <div id="banner">
        <div class="container hero">
            <div class="row">
                <?php if ($current_url =="http://eatsciencerun.com/eat") {?>
                <div class="col-xs-4 col-xs-offset-4 image-container">
                    <img src="../wp-content/themes/esr/images/hamburger.png" alt="eatsciencerun image Eat">
                </div>
                <?php } ?>
                <?php if ($current_url =="http://eatsciencerun.com/science") {?>
                <div class="col-xs-4 col-xs-offset-4 image-container">
                    <img src="../wp-content/themes/esr/images/beaker.png" alt="eatsciencerun image Science">
                </div>
                <?php } ?>
                <?php if ($current_url =="http://eatsciencerun.com/run") {?>
                <div class="col-xs-4 col-xs-offset-4 image-container">
                    <img src="../wp-content/themes/esr/images/people.png" alt="eatsciencerun image Run">
                </div>
                <?php } ?>
                <div class="col-xs-12 heroCTA">
                    <h2 id="heroC"><?php if ($current_url =="http://eatsciencerun.com/eat") {?>eat<?php } ?><?php if ($current_url =="http://eatsciencerun.com/science") {?>science<?php } ?><?php if ($current_url =="http://eatsciencerun.com/run") {?>run<?php } ?></h2>
                    <h1 id="heroText">McKale Montgomery<br /><span class="secondary">Doctorate of Nutrition</span><span class="secondary"> | Marathon Winner</span></h1>
                </div>
            </div>
        </div>
        <div class="col-xs-12 arrow">
            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
        </div>
    </div>
