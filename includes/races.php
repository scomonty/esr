<?php
$races = array();
	$races [0] = array (
		"loc" => "Phoenix Marathon 2017",
		"img" => "bmo-phx-marathon-2016",
		"category" => "marathon",
		"place" => "",
		"time" => "2:47:32"
	);
	$races [1] = array (
		"loc" => "Rock &amp; Roll Phoenix 2017",
		"img" => "randraz",
		"category" => "marathon",
		"place" => "Second Place",
		"time" => "2:50:53"
	);
	$races [2] = array (
		"loc" => "Phoenix Marathon 2016",
		"img" => "bmo-phx-marathon-2016",
		"category" => "marathon",
		"place" => "Second Place",
		"time" => "2:51:06"
	);
	$races [3] = array (
		"loc" => "Rock &amp; Roll San Diego 2016",
		"img" => "randrsd",
		"category" => "marathon",
		"place" => "First Place",
		"time" => "2:56:16"
	);
	$races [4] = array (
		"loc" => "LA Marathon 2016",
		"img" => "la",
		"category" => "marathon",
		"place" => "",
		"time" => "2:57:52"
	);
	$races [5] = array (
		"loc" => "Rock &amp; Roll Phoenix 2016",
		"img" => "randraz",
		"category" => "marathon",
		"place" => "Second Place",
		"time" => "2:47:39"
	);
	$races [6] = array (
		"loc" => "Prarie Fire Marathon 2016",
		"img" => "wichita",
		"category" => "marathon",
		"place" => "Third Place",
		"time" => "2:51:33"
	);

	$races [7] = array (
		"loc" => "Orange County Marathon 2015",
		"img" => "oc-marathon-logo",
		"category" => "marathon",
		"place" => "Second Place",
		"time" => "2:58:43"
	);
	$races [8] = array (
		"loc" => "Rock &amp; Roll Phoenix 2015",
		"img" => "randraz",
		"category" => "marathon",
		"place" => "Third Place",
		"time" => "2:53:22"
	);
	$races [9] = array (
		"loc" => "Phoenix Marathon 2015",
		"img" => "bmo-phx-marathon-2016",
		"category" => "marathon",
		"place" => "Fourth Place",
		"time" => "2:49:38"
	);
	$races [10] = array (
		"loc" => "California International 2015",
		"img" => "cim",
		"category" => "marathon",
		"place" => "Fourth Place",
		"time" => "2:45:06"
	);
	$races [11] = array (
		"loc" => "Phoenix Marathon 2014",
		"img" => "bmo-phx-marathon-2016",
		"category" => "marathon",
		"place" => "First Place",
		"time" => "2:50:49"
	);
	$races [12] = array (
		"loc" => "Rock &amp; Roll Phoenix 2014",
		"img" => "randraz",
		"category" => "marathon",
		"place" => "Second Place",
		"time" => "2:58:59"
	);
	$races [13] = array (
		"loc" => "Chicago Marathon 2014",
		"img" => "chicago",
		"category" => "marathon",
		"place" => "",
		"time" => "2:53:44"
	);
	$races [14] = array (
		"loc" => "OKC Marathon 2013",
		"img" => "okc-memorial-marathon-logo",
		"category" => "marathon",
		"place" => "First Place",
		"time" => "2:53:30"
	);
	$races [15] = array (
		"loc" => "Dallas Marathon 2012",
		"img" => "dallas_m",
		"category" => "marathon",
		"place" => "Third Place",
		"time" => "2:54:24"
	);
	$races [16] = array (
		"loc" => "Chicago Marathon 2011",
		"img" => "chicago",
		"category" => "marathon",
		"place" => "",
		"time" => "2:48:08"
	);
	$races [17] = array (
		"loc" => "Dallas Marathon 2011",
		"img" => "dallas_m",
		"category" => "marathon",
		"place" => "Fourth Place",
		"time" => "2:47:06"
	);
?>
<?php if ($current_url =="http://eatsciencerun.com/run") {?>

        <div class="container">
          <div class="row">
        <div class="col-sm-12">
        <div class="grid">
        	<?php foreach ($races as $i => $race) { ?>
				<div class="element-item <?php echo $races[$i]["category"]; ?> <?php echo $races[$i]["place"]; ?> col-md-3" data-category="<?php echo $races[$i]["category"]; ?>">
						<img class="img-fluid" src="../wp-content/uploads/2017/01/<?php echo $races[$i]["img"] ?>.png" alt="<?php echo $races[$i]["loc"]?>">
					<h4><?php echo $races[$i]["loc"] ?></h4>
					<p><?php echo $races[$i]["place"] ?></p>
          <h5><?php echo $races[$i]["time"] ?></h5>
				</div>
			<?php }; ?>
		</div>
    </div>
    </div>
     <?php } ?>
