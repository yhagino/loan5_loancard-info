<div class="row mt-10 input-box">
    <div class="col-12 input mt-30">
        <h2 class="input-tit"><span>簡単クレジットカード検索</span></h2>
        <form name="search" method="post" action="https://cardloan-info.net/search/index.php<?php echo $linkid; ?>">
            <div class="form-row mb-20">
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="sokujitu" name="sokujitu" value="1"><label class="form-check-label"
                            for="sokujitu">即日融資可能</label></div>
                </div>
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="murisoku" name="murisoku" value="1"><label class="form-check-label"
                            for="murisoku">無利息期間有</label></div>
                </div>
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="raitenhuyou" name="raitenhuyou" value="1"><label class="form-check-label"
                            for="raitenhuyou">来店不要</label></div>
                </div>
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="teirate" name="teirate" value="1"><label class="form-check-label"
                            for="teirate">低金利</label></div>
                </div>
            </div>
            <div class="form-row mb-20">
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="shufu"
                            name="shufu" value="1"><label class="form-check-label" for="shufu">主婦OK</label></div>
                </div>
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="bankloan" name="bankloan" value="1"><label class="form-check-label"
                            for="bankloan">銀行系ローン</label></div>
                </div>
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="highlimit" name="highlimit" value="1"><label class="form-check-label"
                            for="highlimit">限度額が高い </label></div>
                </div>
                <div class="form-group col-12 col-md mb-sm-10 ml-md-2 p-2 border rounded checkbox">
                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                            id="nocredit"><label class="form-check-label" for="nocredit">担保不要</label></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-md-4"><label for="FormSelect1">借入限度額</label><select
                        class="form-control" id="FormSelect1" name="limit_id">
                        <option value="">指定なし</option>
                        <option value="50">50万円以上</option>
                        <option value="100">100万円以上</option>
                        <option value="300">300万円以上</option>
                    </select></div>
                <div class="form-group col-12 col-md-4"><label for="FormSelect2">最短審査時間</label><select
                        class="form-control" id="FormSelect2" name="examination_id">
                        <option value="">指定なし</option>
                        <option value="0.5">30分</option>
                        <option value="1">1時間以内</option>
                        <option value="3">3時間以内</option>
                        <option value="24">当日中</option>
                    </select></div>
                <div class="form-group col-12 col-md-4"><label for="FormSelect3">最短融資スピード</label><select
                        class="form-control" id="FormSelect3" name="loantime_id">
                        <option value="">指定なし</option>
                        <option value="0.5">30分</option>
                        <option value="1">1時間以内</option>
                        <option value="3">3時間以内</option>
                        <option value="24">当日中</option>
                    </select></div>
            </div>
            <div class="form-row">
                <table class="col-12 table">
                    <tr>
                        <th class="input-th">利用可能なコンビニ</th>
                        <td class="input-td">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="1"
                                    name="convenience_id">
                                <label class="form-check-label" for="inlineCheckbox11">セブンイレブン</label>
                            </div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox12" value="2" name="convenience_id"><label
                                    class="form-check-label" for="inlineCheckbox12">ローソン</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox13" value="3" name="convenience_id"><label
                                    class="form-check-label" for="inlineCheckbox13">ファミリーマート</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox14" value="4" name="convenience_id"> <label
                                    class="form-check-label" for="inlineCheckbox14">サンクス</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox15" value="5" name="convenience_id"><label
                                    class="form-check-label" for="inlineCheckbox15">ミニストップ</label></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="input-th">借入方法<span class="fs8">（複数選択可）</span></th>
                        <td>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox21" value="1"><label class="form-check-label"
                                    for="inlineCheckbox21">口座振込</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox22" value="2"><label class="form-check-label"
                                    for="inlineCheckbox22">ATM/CD（コンビニ）</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox23" value="3"><label class="form-check-label"
                                    for="inlineCheckbox23">ATM/CD</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox24" value="4"><label class="form-check-label"
                                    for="inlineCheckbox24">店舗窓口</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox25" value="5"><label class="form-check-label"
                                    for="inlineCheckbox25">インターネット</label></div>
                        </td>
                    </tr>
                    <tr>
                        <th class="input-th">返済方法<span class="fs8">（複数選択可）</span></th>
                        <td>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox31" value="1"><label class="form-check-label"
                                    for="inlineCheckbox31">口座振込</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox32" value="2"><label class="form-check-label"
                                    for="inlineCheckbox32">ATM/CD（コンビニ）</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox33" value="3"><label class="form-check-label"
                                    for="inlineCheckbox33">ATM/CD</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox34" value="4"><label class="form-check-label"
                                    for="inlineCheckbox34">店舗窓口</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox"
                                    id="inlineCheckbox35" value="5"><label class="form-check-label"
                                    for="inlineCheckbox35">口座引落し</label></div>
                        </td>
                    </tr>
                </table>
            </div>
    </div>
    <div class="form-row justify-content-center mb-30 input-btn"><button type="submit"
            class="btn col-10">この条件で検索</button></div>
    </form>
</div>
</div>