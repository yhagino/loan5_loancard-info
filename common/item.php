<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
        if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) : ?>
<div class="item_sp_con">
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/common/item_sp.php'); ?>
</div>
<?php else:?>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/common/item_pc.php'); ?>
<?php endif;?>