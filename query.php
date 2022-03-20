<?php
if(isset($_GET['adid']))
	{$adid = $_GET['adid'];
	}
if(isset($_GET['gclid']))
	{$gclid = $_GET['gclid'];
	}
if(isset($_GET['adid']) && isset($_GET['gclid'])){
	$linkid = "?adid=" . $adid . "&gclid=" . $gclid . "&";
}elseif(isset($_GET['adid']) && empty($_GET['gclid'])){
	$linkid = "?adid=" . $adid;
}elseif(empty($_GET['adid']) && isset($_GET['gclid'])){
	$linkid = "?gclid=" . $gclid;
}elseif(empty($_GET['cid']) && empty($_GET['gclid'])){
	$linkid = "?";
}
?>
<?php
$end = $_SERVER["REQUEST_URI"];
$reset = end(explode('/', $end));
$url = reset(explode('.', $reset));
?>