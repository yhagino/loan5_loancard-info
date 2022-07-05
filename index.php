<?php
$tit = "カードローン情報局";
$desc = "カードローンの情報を扱うカードローン情報局。";
?>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>
<div class="top-img">
    <img class="img-fluid" src="/img/top.png" alt="">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-12">
            <main>
                <div class="row mt-80">
                    <div class="col-12">
                        <h2 class="mb-30">どうしても審査に通過したい方におすすめのカードローン</h2>
                        <p>WEB完結なら電話連絡なし、郵送物不要でも可能。最短30分審査で即日借入可能なカードローンです。</p>
                    </div>
                </div>
                <div class="row">
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
                </div>
                <div class="row mt-80">
                    <div class="col-12">
                        <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/input.php');?>
                    </div>
                </div>
            </main>
            <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'); ?>