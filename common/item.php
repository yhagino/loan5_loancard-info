<div class="item_box col-12 mt-15">
    <h2 class="item_tit"><a href="/ad/<?=$row['url'];?>"><?php echo $row['name'];?></a></h2>
    <div class=" item_detail_box">
        <div class="item_detail_img"><a href="/ad/<?=$row['url'];?>"><img class="detail_img" src="/img/common/ad.png"
                    alt=""></a></div>
        <div class="item_detail_glid2">
            <a href="/ad/<?=$row['url'];?>">
                <div class="item_detail_link">
                    <p>融資完了まで <?=$row['loantime'];?><span></span></p>
                </div>
            </a>
        </div>
        <div class="item_detail_glid3">
            <div class="item_detail_text">
                <span class="item_detail_text_tit">POINT</span>
                <ul class="item_detail_text_ul">
                    <li class="item_detail_text_li">・<?=$row['kariretaPointList1'];?></li>
                    <li class="item_detail_text_li">・<?=$row['kariretaPointList2'];?></li>
                    <li class="item_detail_text_li">・<?=$row['kariretaPointList3'];?></li>
                </ul>
            </div>
        </div>
        <div class="item_detail_table">
            <table class="item_table">
                <tr>
                    <th class="item_table-th ann"><span></span>実質年率</th>
                    <th class="item_table-th lim"><span></span>借入限度額</th>
                    <th class="item_table-th exa"><span></span>審査時間</th>
                    <th class="item_table-th loa"><span></span>融資時間</th>
                    <th class="item_table-th conveni"><span></span>対応コンビニ</th>
                </tr>
                <tr>
                    <td class="item_table-td"><?=$row['Annualrate'];?></td>
                    <td class="item_table-td"><?=$row['limit'];?></td>
                    <td class="item_table-td"><span class="red"><?=$row['examination'];?></span></td>
                    <td class="item_table-td"><span class="red"><?=$row['loantime'];?></span></td>
                    <td class="conveni item_table-td"><?php
if($row['convenienceSeven'] == 1){echo '<div class="icon seveneleven"></div>';}
if($row['convenienceLowson'] == 1){echo '<div class="icon lawson"></div>';}
if($row['convenienceFamima'] == 1){echo '<div class="icon familymart"></div>';}
if($row['convenienceMinistop'] == 1){echo '<div class="icon ministop"></div>';}
?></td>
                </tr>
            </table>
        </div>
    </div>
    <p class="fs8 item-attention-p"><?=$row['attention'];?></p>
    <div class="justify-content-center mt-10 mb-10 item-btn"><button
            class="justify-content-center btn col-10"><span></span>この条件で検索</button>
    </div>
    <div class="item-pr">
        <p class="item-pr-p fs10 mb-10"><?=$row['pr'];?></p>
    </div>
</div>