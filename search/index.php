<?php
session_start();
if(isset($_POST['name'])){
	$_SESSION['name'] = $_POST['name'];
}
if(isset($_POST['limit_id'])){
	$_SESSION['limit_id'] = $_POST['limit_id'];
}
if(isset($_POST['Annualrate_id'])){
	$_SESSION['Annualrate_id'] = $_POST['Annualrate_id'];
}
if(isset($_POST['examination_id'])){
	$_SESSION['examination_id'] = $_POST['examination_id'];
}
if(isset($_POST['loantime_id'])){
	$_SESSION['loantime_id'] = $_POST['loantime_id'];
}
?>
<?php
define('DB_DATABASE','avenirinc_loan');
define('DB_USERNAME','avenirinc_bgy06l');
define('DB_PASSWORD','7HJ0OEBWH.fzmpgW');
define('PDO_DSN','mysql:host=mysql7004.xserver.jp;dbname=' . DB_DATABASE);
try{
	$pdo = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
$data           = array();
$where          = array();
$temp_where     = array();

// POSTパラメータを引数に変換
foreach($_POST as $key => $val) {
    $$key = $val;
}
foreach($_SESSION as $key => $val) {
    $$key = $val;
}
if(!empty($sokujitu)) {
$data[]     = $sokujitu;
$where[]    = '(sokujitu = ?)';
}
if(!empty($murisoku)) {
$data[]     = $murisoku;
$where[]    = '(murisoku = ?)';
}
if(!empty($raitenhuyou)) {
$data[]     = $raitenhuyou;
$where[]    = '(raitenhuyou = ?)';
}
if(!empty($teirate)) {
$data[]     = $teirate;
$where[]    = '(teirate = ?)';
}
if(!empty($shufu)) {
$data[]     = $shufu;
$where[]    = '(shufu = ?)';
}
if(!empty($bankloan)) {
$data[]     = $bankloan;
$where[]    = '(bankloan = ?)';
}
if(!empty($syunyuusyoumei)) {
$data[]     = $syunyuusyoumei;
$where[]    = '(syunyuusyoumei = ?)';
}
if(!empty($highlimit)) {
$data[]     = $highlimit;
$where[]    = '(highlimit = ?)';
}
if(!empty($limit_id)) {
$data[]     = $limit_id;
$where[]    = '(limit_id >= ?)';
}
if(!empty($examination_id)) {
$data[]     = $examination_id;
$where[]    = '(examination_id <= ?)';
}
if(!empty($loantime_id)) {
$data[]     = $loantime_id;
$where[]    = '(loantime_id <= ?)';
}
if(!empty($convenience_id)) {
$data[]     = $convenience_id;
$where[]    = '(convenience_id REGEXP ?)';
}

if(isset($_POST['sort_button'])){
	if($_POST['sort'] == 'rate_min'){
        $sort = "ORDER BY Annualrate_id ASC";
    }elseif($_POST['sort'] == 'rate_max'){
        $sort = "ORDER BY Annualrate_max_id DESC";
    }else{
        $sort = "ORDER BY name DESC";
    }
    $_SESSION['sort'] = $sort;
}
$sort2 = $_GET['sort2'];
if(isset($_GET['sort2'])){
	switch($sort2){
		case "1":$sortid = "ORDER BY name ASC";break;
		case "2":$sortid = "ORDER BY name DESC";break;
		case "3":$sortid = "ORDER BY limit_id ASC";break;
		case "4":$sortid = "ORDER BY limit_id DESC";break;
		case "5":$sortid = "ORDER BY Annualrate_id ASC";break;
		case "6":$sortid = "ORDER BY Annualrate_id DESC";break;
		case "7":$sortid = "ORDER BY examination_id ASC";break;
		case "8":$sortid = "ORDER BY examination_id DESC";break;
		case "9":$sortid = "ORDER BY loantime_id ASC";break;
		case "10":$sortid = "ORDER BY loantime_id DESC";break;
		default:$sortid = "";
	}
}
try{if(isset($_POST['sort_button']) && count($where) === 0){
		$stmt = $pdo->query('SELECT * FROM loan where publish2 = 1 ' . $_SESSION['sort'] . $sortid);
	} elseif(isset($_GET['sort2']) && count($where) === 0){
		$stmt = $pdo->query('SELECT * FROM loan where publish2 = 1 ' . $sortid);
	} elseif(isset($_GET['sort2']) && isset($where)){
		$stmt = $pdo->prepare('SELECT * FROM loan where publish2 = 1 and ' . implode('and', $where) . $sortid);
		$stmt->execute($data);
	} elseif(isset($_POST['sort_button']) && isset($where)){
		$stmt = $pdo->prepare('SELECT * FROM loan where publish2 = 1 and ' . implode('and', $where) . $_SESSION['sort']);
		$stmt->execute($data);
	} elseif(!empty($where)){
		$stmt = $pdo->prepare('SELECT * FROM loan where publish2 = 1 and ' . implode('and', $where));
		$stmt->execute($data);
	} else{
		$stmt = $pdo->query('SELECT * FROM loan where publish2 = 1 ');
	}
} catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
?>
<?php
function ua_smt (){
$ua = $_SERVER['HTTP_USER_AGENT'];
$ua_list = array('iPhone','iPad','iPod','Android');
	foreach ($ua_list as $ua_smt) {
	if (strpos($ua,$ua_smt) !== false){return true;}
	} return false;
}
?>
<?php echo "<!doctype html>";?>
<html lang="ja">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><title>検索結果｜キャッシングローンカード審査比較</title><meta name="description" content="お好みの検索結果はこちらです。" /><link rel="stylesheet" type="text/css" href="/css/content_style.min.css" /><link rel="canonical" href="https://cashing-karireta.com/search/"/>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/query.php'); ?>
</head>
<body>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/tag.php'); ?>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/htdocs/header.php'); ?>
<main><div class="container-fluid">
<!-- form -->
<div class="row mt-10 mb-20">
<form class="col-12" name="search" action="https://cashing-karireta.com/search/index.php" method="post" accept-charset="utf-8">
	<input type="hidden" value="<?php echo $_POST['limit_id'];?>" name="limit_id">
	<input type="hidden" value="<?php echo $_POST['examination_id'];?>" name="examination_id">
	<input type="hidden" value="<?php echo $_POST['loantime_id'];?>" name="loantime_id">
	<input type="hidden" value="<?php echo $_POST['convenience_id'];?>" name="convenience_id">
<div class="input-group col-12 offset-md-6 col-md-6">
  <select class="custom-select" id="FormSelect1" name="sort">
    <option selected>Choose...</option>
    <option value="rate_min">最低利率順</option>
    <option value="rate_max">最高利率順</option>
    <option value="name">名前順</option>
  </select>
  <div class="input-group-append">
  	<button class="btn btn-outline-secondary" type="submit" name="sort_button">並び替え</button>
  </div>
</div>
</form></div>
<!-- form end -->
<div class="row">
	<div class="table-responsive"><table class="table table-hover table-bordered">
		<thead class="thead-light">
		<tr><th>カード名<br/><a href="index.php<?php echo $linkid;?>sort2=1">▼</a><a href="index.php<?php echo $linkid;?>sort2=2">▲</a></th><th>ご利用限度額<br/><a href="index.php<?php echo $linkid;?>sort2=5">▼</a><a href="index.php<?php echo $linkid;?>sort2=6">▲</a></th><th>金利<br/><a href="index.php<?php echo $linkid;?>sort2=3">▼</a><a href="index.php<?php echo $linkid;?>sort2=4">▲</a></th><th>審査時間<br/><a href="index.php<?php echo $linkid;?>sort2=7">▼</a><a href="index.php<?php echo $linkid;?>sort2=8">▲</a></th><th>融資スピード<br/><a href="index.php<?php echo $linkid;?>sort2=9">▼</a><a href="index.php<?php echo $linkid;?>sort2=10">▲</a></th>
<?php if (ua_smt() == true): ?>
	<th></th></tr>
<?php else: ?>
	<th>おすすめポイント</th><th></th></tr>
<?php endif; ?>
	</thead>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
	<tbody><tr style="cursor:pointer;" data-href="https://cashing-karireta.com/ad/ad-<?php echo $row['name_id']; ?>.php<?php echo $linkid;?>">
		<td class="search-title"><img src="<?php echo $row['images2_250250'];?>" alt="" /><br/><?php echo $row['name'];?></td>
		<td><?php echo $row['limit'];?></td>
		<td><?php echo $row['Annualrate'];?></td>
		<td><?php echo $row['examination'];?></td>
		<td><?php echo $row['loantime'];?></td>
<?php if (ua_smt() == true): ?>
<td><p class="btn btn-danger btn-lg btn-block" style="padding: 0; vertical-align: middle;" >公式サイト</td>
	</tr></tbody>
<?php else: ?>
<td><?php echo $row['point2'];?></td> <td><p class="btn btn-danger btn-lg btn-block" style="padding: 0; vertical-align: middle;">公式サイト</td>
	</tr></tbody>
<?php endif; ?>
<?php }; ?>
	</table></div>
</div>
</div></main>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/htdocs/footer.php');?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
jQuery( function($) {
$('tbody tr[data-href]').addClass('clickable').click( function() {
window.location = $(this).attr('data-href');
}).find('a').hover( function() {
$(this).parents('tr').unbind('click');
}, function() {
$(this).parents('tr').click( function() {
window.location = $(this).attr('data-href');
});
});
});
</script>
</body>
</html>