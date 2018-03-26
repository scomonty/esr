<div id="banner">
    <div class="container hero">
        <div class="row">
            <div class="col-xs-4 image-container">
                <img src="wp-content/themes/esr/images/hamburger.png" alt="">
            </div>
            <div class="col-xs-4 image-container">
                <img src="wp-content/themes/esr/images/beaker.png" alt="">
            </div>
            <div class="col-xs-4 image-container">
                <img src="wp-content/themes/esr/images/people.png" alt="">
            </div>
            <div class="col-xs-12 heroCTA">
                <div id="heroC">eat science run</div>
                <div id="heroText">McKale Montgomery
                    <br /><span class="secondary">Doctorate of Nutrition</span><span class="secondary"> | Marathon Winner</span></div>
            </div>
        </div>
    </div>
    <?php
$todayDate = date("Y-m-d");
$date1=date_create($todayDate);
$date2=date_create("1984-09-20");
$diff=date_diff($date2,$date1);
?>
        <div id="hideNum">
            <?php echo $diff->format("%R%a"); ?>
        </div>
        <div class="arrow">
            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
        </div>
</div>
