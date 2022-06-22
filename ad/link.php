<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/query.php');
if (isset($asp_link)) {
    if (strpos($asp_link, 'digi-tag') !== false) {
        if (isset($gclid)) {
            $link_url = $asp_link . 'l5-' . $adid . "&af=" . $gclid;
        } elseif (isset($yclid)) {
            $link_url = $asp_link . 'l5-' . $adid . "&af=" . $yclid;
        } else {
            $link_url = $asp_link . 'l5-' . $adid;
        }
    } else {
        if (isset($gclid)) {
            $link_url = $asp_link . 'l5-' . $adid . "&gclid=" . $gclid;
        } elseif (isset($yclid)) {
            $link_url = $asp_link . 'l5-' . $adid . "&yclid=" . $yclid;
        } else {
            $link_url = $asp_link . 'l5-' . $adid;
        }
    }
    header("Refresh: 1; URL= $link_url");
    $html = <<<_
        <!DOCTYPE html><html lang="ja">
        <head><meta charset="UTF-8"><title>公式サイトへ移動中</title>
        <!-- Google Tag Manager -->
        <!-- End Google Tag Manager -->
        </head>
        <body>
            <!-- Google Tag Manager (noscript) -->
            <!-- End Google Tag Manager (noscript) -->
            <p style="font-size: 24px; width: 80%; border: 1px #ff9b0b solid; padding: 2em; margin: 50px auto; text-align: center;">公式サイトへ移動中です。<br />
                しばらくお待ちください。</p>
        </body>
        </html>
    _;
} else {
    header("Refresh: 2; URL=https://cardloan-info.net/");
    $html = <<<_
        <!DOCTYPE html><html lang="ja">
        <head><meta charset="UTF-8"><title>元のページに戻ります。</title>
        <!-- Google Tag Manager -->
        <!-- End Google Tag Manager -->
        </head>
        <body>
        <!-- Google Tag Manager (noscript) -->
        <!-- End Google Tag Manager (noscript) -->
            <p style="font-size: 24px; width: 80%; border: 1px #ff9b0b solid; padding: 2em; margin: 50px auto; text-align: center;">新規会員募集は終了致しました。<br />
                TOPページに戻りますのでお待ちください。</p>
        </body>
        </html>
        _;
}
header("Content-Type:text/html; charset=UTF-8");
$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
echo $html;