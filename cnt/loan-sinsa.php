<?php
$tit = "審査が不安|カードローン情報局";
$desc = "カードローンの情報を扱うカードローン情報局。";
?>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>
<div class="top-img">
    <img class="img-fluid" src="/img/top.png" alt="">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-12">
            <main>
                <div class="row mt-80">
                    <div class="col-12">
                        <h2 class="mb-30">今すぐ審査通したい方向けカードローン</h2>
                        <p>来店不要のWEB完結！身分証明書のみで最短30分でご融資可能！24時間振込キャッシング対応</p>
                        <div class="col12">
                            <h2 class="justify-content-center entry-progress ">＼申込みから受取までの簡単３ステップ／</h2>
                            <?php
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) : ?>
                            <img class="img-fluid" src="/img/entry_progress_sp.png" alt="">
                            <?php else:?>
                            <img class="img-fluid" src="/img/entry_progress_pc.png" alt="">
                            <?php endif;?>
                        </div>
                        <h2 class="mb-30">おすすめ2選はこちら</h2>
                        <?php $itemName="promis";require( $_SERVER['DOCUMENT_ROOT'] . '/common/getItem.php');?>
                        <?php $itemName="mobit";require( $_SERVER['DOCUMENT_ROOT'] . '/common/getItem.php');?>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-12">
                        <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/input.php');?>
                    </div>
                </div>
            </main>
            <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/footer2.php'); ?>