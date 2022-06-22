<?php
session_start();
if (isset($_GET['adid'])) {
    $adid = $_GET['adid'];
    $_SESSION['adid'] = $_GET['adid'];
    $_COOKIE['adid'] = $_GET['adid'];
} elseif (isset($_SESSION['adid'])) {
    $adid = $_SESSION['adid'];
    $_COOKIE['adid'] = $_SESSION['adid'];
} elseif (isset($_COOKIE['adid'])) {
    $adid = $_COOKIE['adid'];
    $_SESSION['adid'] = $_COOKIE['adid'];
} elseif (!isset($_SESSION['adid']) && !isset($_GET['adid']) && !isset($adid)) {
    $adid = $urlCheckUrl;
    $_SESSION['adid'] = $adid;
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