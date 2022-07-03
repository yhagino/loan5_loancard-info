<?php
session_start();
if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    $_SESSION['cid'] = $_GET['cid'];
    $_COOKIE['cid'] = $_GET['cid'];
} elseif (isset($_SESSION['cid'])) {
    $cid = $_SESSION['cid'];
    $_COOKIE['cid'] = $_SESSION['cid'];
} elseif (isset($_COOKIE['cid'])) {
    $cid = $_COOKIE['cid'];
    $_SESSION['cid'] = $_COOKIE['cid'];
} elseif (!isset($_SESSION['cid']) && !isset($_GET['cid']) && !isset($cid)) {
    $cid = $urlCheckUrl;
    $_SESSION['cid'] = $cid;
}
if (isset($_GET['gclid'])  && $_GET['gclid'] !== '') {
    $gclid = $_GET['gclid'];
    $_SESSION['gclid'] = $_GET['gclid'];
} elseif (isset($_SESSION['gclid'])) {
    $gclid = $_SESSION['gclid'];
}
if (isset($_GET['yclid'])  && $_GET['yclid'] !== '') {
    $yclid = $_GET['yclid'];
    $_SESSION['yclid'] = $_GET['yclid'];
} elseif (isset($_SESSION['yclid'])) {
    $yclid = $_SESSION['yclid'];
}
?>
<?php
$end = $_SERVER["REQUEST_URI"];
$reset = end(explode('/', $end));
$url = reset(explode('.', $reset));
?>