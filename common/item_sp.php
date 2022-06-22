<div class="item_sp mt-15">
    <a href="/ad/<?=$row['name_id'];?>.php">
        <div class="item_sp_box">
            <h2 class="item_sp_tit text-l"><?php echo $row['name'];?></h2>
            <div class="item_sp_detail_img"><img class="detail_img" src="/img/item/<?=$row['name_id'];?>.jpg" alt="">
            </div>
            <div class="item_sp_detail_link">
                <p>融資完了まで <em><?=$row['loantime'];?></em></p>
            </div>
        </div>
    </a>
    <div class="item_sp_detail_table">
        <table class="item_sp_table">
            <tr>
                <th class="item_sp_table-th"><span></span>実質年率</th>
                <td class="item_sp_table-td"><?=$row['Annualrate'];?></td>
                <th class="item_sp_table-th"><span></span>借入限度額</th>
                <td class="item_sp_table-td"><?=$row['limit'];?></td>
            </tr>
            <tr>
                <th class="item_sp_table-th"><span></span>審査時間</th>
                <td class="item_sp_table-td"><span class="red"><?=$row['examination'];?></span></td>
                <th class="item_sp_table-th"><span></span>融資時間</th>
                <td class="item_sp_table-td"><span class="red"><?=$row['loantime'];?></span></td>
            </tr>
        </table>
    </div>
    <p class="fs8 item-attention-p justify-content-center"><?=$row['attention'];?></p>
    <div class="justify-content-center mt-10 mb-10 item-sp-btn"><a href="/ad/<?=$row['name_id'];?>.php"><button
                class="justify-content-center btn col-10"><span></span>公式ページを読む</button></a>
    </div>
    <div class="item-sp-pr">
        <p class="item-pr-p fs10 mb-10"><?=$row['pr'];?></p>
    </div>
</div>