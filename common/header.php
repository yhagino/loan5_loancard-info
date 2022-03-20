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
    <div class="container-fluid">
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