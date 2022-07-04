<?php
$tit = "検索結果|カードローン情報局";
$desc = "カードローンの情報を扱うカードローン情報局。";
include_once( $_SERVER['DOCUMENT_ROOT'] . '/search/result.php');
?>
<?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'); ?>
<div class="container-fluid">
    <div class="row mt-10 mb-20">
        <form class="col-12" name="search" action="https://cardloan-info.net/search/index.php" method="post"
            accept-charset="utf-8">
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
        </form>
    </div>
    <!-- form end -->
    <div class="row">
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
        <?php include( $_SERVER['DOCUMENT_ROOT'] . '/common/item.php');?>
        <?php }; ?>
    </div>
    </main>
    <?php include_once( $_SERVER['DOCUMENT_ROOT'] . '/common/footer2.php'); ?>