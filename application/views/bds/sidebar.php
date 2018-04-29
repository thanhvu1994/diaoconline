<div class="col_280 margin_left">
    <div class="box_search">
        <div class="search">
            <div class="listbox">
                <div class="type_bds">
                    <span id="chothue" class="rent active">Tìm nhanh</span>
                </div>
                <div class="search-bds">
                    <ul>
                        <li class="item">
                            <select id="">
                                <option value="-1">Chọn loại nhà đất</option>
                            </select>
                        </li>
                        <li class="item">
                            <select id="cboCity">
                                <option value="-1">Chọn Tỉnh/Thành phố</option>
                            </select>
                        </li>
                        <li class="item">
                            <select id="cboDistrict">
                                <option value="-1">Chọn Quận/Huyện</option>
                            </select>
                        </li>
                        <li class="item ">
                            <select id="cboWard">
                                <option value="-1">Chọn Phường/Xã</option>
                            </select>
                        </li>
                        <li class="wr_bt last">
                            <a id="btnSearch" href="javascript:void(0)">  TÌM KIẾM</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php $newest = $this->bds->getBdsMenu(5);
    if (count($newest) > 0) :?>
        <div class="producthot">
            <div class="type_pr_hot">
                <span id="pr_hot" class="active">Nhà đất mới nhất</span>
            </div>
            <div class="listbox">
                <div id="prHost">
                    <?php foreach ($newest as $row): 
                        if ($row->id == $bds->id) continue; ?>
                        <div class="item">
                            <h3 class="title">
                            <a id="hplTitle" title="<?php echo $row->title ?>" href="<?php echo $row->getUrl() ?>"><?php echo $row->shorterContent($row->title, 90) ?></a>
                            </h3>
                            <div class="pr_info">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_0" title="<?php echo $row->title ?>" class="avatar" href="<?php echo $row->getUrl() ?>">
                                    <img src="<?php echo $row->getFirstImage() ?>" />
                                </a>
                                <div class="cl2">
                                    <span class="area">
                                        <?php echo $row->area ?>&nbsp;m&#178;
                                    </span>
                                    <span class="address">
                                        <?php echo $row->getLocation(true) ?>
                                    </span>
                                    <span class="price">
                                        <?php echo $row->getPrice() ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>