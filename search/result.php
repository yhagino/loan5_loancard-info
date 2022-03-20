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
define('DB_DATABASE','xs082680_info');
define('DB_USERNAME','xs082680_info');
define('DB_PASSWORD','2z9Z4842h84P4j7');
define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);
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
		$stmt = $pdo->query('SELECT * FROM loan where loan5 = 1 ' . $_SESSION['sort'] . $sortid);
	} elseif(isset($_GET['sort2']) && count($where) === 0){
		$stmt = $pdo->query('SELECT * FROM loan where loan5 = 1 ' . $sortid);
	} elseif(isset($_GET['sort2']) && isset($where)){
		$stmt = $pdo->prepare('SELECT * FROM loan where loan5 = 1 and ' . implode('and', $where) . $sortid);
		$stmt->execute($data);
	} elseif(isset($_POST['sort_button']) && isset($where)){
		$stmt = $pdo->prepare('SELECT * FROM loan where loan5 = 1 and ' . implode('and', $where) . $_SESSION['sort']);
		$stmt->execute($data);
	} elseif(!empty($where)){
		$stmt = $pdo->prepare('SELECT * FROM loan where loan5 = 1 and ' . implode('and', $where));
		$stmt->execute($data);
	} else{
		$stmt = $pdo->query('SELECT * FROM loan where loan5 = 1 ');
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