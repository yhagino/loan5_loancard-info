<?php echo "<!doctype html>";?>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <!-- Google Tag Manager -->
    <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/js/tag_head.php'); ?>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?=$tit;?></title>
    <meta name="description" content="<?=$desc;?>" />
    <link rel="stylesheet" type="text/css" href="/css/content_style.css" />
</head>

<body>
    <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/query.php'); ?>
    <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/js/tag_body.php'); ?>
    <?php
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="/"><img class="img_logo" src="/img/common/logo.png" alt="カードローン情報局" width="160"
                            height="40"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="/">Home</a>
                            <a class="nav-item nav-link" href="#">Features</a>
                            <a class="nav-item nav-link" href="#">Pricing</a>
                            <a class="nav-item nav-link" href="#">Disabled</a>
                        </div>
                    </div>
                </nav>
            </div>
            <?php else:?>
            <header>
                <div class="header_logo"><a href="/"><img class="img_logo" src="/img/common/logo.png" alt="カードローン情報局"
                            width="160" height="40"></a>
                </div>
                <nav class="f_right">
                    <ul class="global-navi">
                        <li class="home"><a href="/">
                                <span>TOP</span>
                            </a></li>
                        <li class=""><a href="/">
                                <span>テキスト</span>
                            </a></li>
                        <li class=""><a href="/">
                                <span>テキスト</span>
                            </a></li>
                        <li class=""><a href="/">
                                <span>テキスト</span>
                            </a></li>
                        <li class=""><a href="/">
                                <span>テキスト</span>
                            </a></li>
                    </ul>
                </nav>
            </header>
            <?php endif;?>