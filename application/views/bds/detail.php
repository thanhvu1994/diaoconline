<link href="<?php echo base_url('themes/website/css/Asset.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('themes/website/bds/Styles/StyleSheet/phonhadat.minf500.css?v=13')?>" rel="stylesheet" />
<script src="<?php echo base_url('themes/website/galleria/galleria-1.5.7.min.js') ?>"></script>

<style type="text/css">
    .box_detail{
        padding: 10px;
    }
</style>
<div class="wrap margin_bottom"></div>
<div class="wrap">
    <div class="col_670 margin_bottom">
        <div class="box_detail rounded_style_2 rounded_box margin_bottom">
            <div class="detail_top">
                <h1 class="h1">
                    <?php echo $bds->title ?>
                </h1>
                <div class="box_area">
                    <h2 class="h2">
                        <a class='link_cate' href="/ban-nha-mat-pho-duong-hoang-mai-8.htm"><b>Vị trí:</b> <span>Bán nhà mặt phố tại Đường Hoàng Mai</span></a> - Quận Hoàng Mai - Hà Nội
                    </h2>
                    <div class="wr_price">
                        <span>Giá:</span>
                        <?php echo $bds->getPrice() ?>
                        <span style="margin-left: 20px;">Diện tích:</span>
                        <?php echo $bds->area ?> &nbsp;m&#178;
                    </div>
                </div>
                <div class="info">
                    <h4>Thông tin mô tả</h4>
                    <div class="text">
                        <?php echo $bds->description ?>
                    </div>
                </div>
            </div>
            <div class="detail_botton">
                <?php $images = $bds->getImages(); ?>
                <div class="box_taps">
                    <div class="titlebox">
                        <span id="spanImage" class="active_taps">Hình ảnh (<?php echo count($images) ?>)</span>
                    </div>
                    <div class="listbox">
                        <div id="divAlbum" class="spanImage box" style="display: block">
                            <ul id="myGallery" class="slide_show">
                                <?php foreach ($images as $image): ?>
                                    <li>
                                        <img src="<?php echo base_url($image->image) ?>" alt="<?php echo $bds->title ?>" />
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details_other">
                <div class="item thongtinkhac" id="thongtinkhac">
                    <h4><span>Đặc điểm bất động sản</span></h4>
                    <table id="tbl3">
                        <tr>
                            <td>Tổng diện tích sử dụng</td>
                            <td><?php echo $bds->area ?> &nbsp;m&#178;</td>
                        </tr>
                        <tr>
                            <td>Diện tích khuôn viên</td>
                            <td><?php echo $bds->getYardArea() ?> &nbsp;m&#178;</td>
                        </tr>
                        <tr>
                            <td>Diện tích xây dựng</td>
                            <td><?php echo $bds->getContructionArea() ?> &nbsp;m&#178;</td>
                        </tr>
                        <tr>
                            <td>Loại địa ốc</td>
                            <td><?php echo $bds->getRealType() ?></td>
                        </tr>
                        <tr>
                            <td>Tình trạng pháp lý</td>
                            <td><?php echo $bds->getPhapLy() ?></td>
                        </tr>
                        <tr>
                            <td>Hướng</td>
                            <td><?php echo $bds->getDirection() ?></td>
                        </tr>
                        <tr>
                            <td>Đường trước nhà</td>
                            <td><?php echo $bds->getFrontArea() ?></td>
                        </tr>
                        <tr>
                            <td>Số tầng</td>
                            <td><?php echo $bds->number_of_floor ?></td>
                        </tr>
                        <tr>
                            <td>Số phòng khách</td>
                            <td><?php echo $bds->number_of_guest_room ?></td>
                        </tr>
                        <tr>
                            <td>Số phòng ngủ</td>
                            <td><?php echo $bds->number_of_bed_room ?></td>
                        </tr>
                        <tr>
                            <td>Số phòng tắm/WC</td>
                            <td><?php echo $bds->number_of_rest_room ?></td>
                        </tr>
                        <tr>
                            <td>Số phòng khác</td>
                            <td><?php echo $bds->number_of_other_room ?></td>
                        </tr>
                        <tr>
                            <td>Ngày đăng tin</td>
                            <td><?php echo $bds->get_created_date() ?></td>
                        </tr>
                    </table>
                </div>
                <div class="item lienhe" id="lienhe">
                    <?php $utilities = $bds->getUtility();
                    if (count($utilities) > 0) :?>
                        <h4><span>Tiện ích</span></h4>
                        <table id="tbl2" style="margin-bottom: 30px">
                            <?php foreach ($utilities as $utility): ?>
                                <tr>
                                    <td><?php echo $utility->name ?></td>
                                    <td><p class="ico_16 ico_check_16"></p></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    <?php endif ?>
                    <h4><span>Thông tin liên hệ</span></h4>
                    <table id="tbl2">
                        <tr>
                            <td>Tên liên lạc</td>
                            <td>
                                <?php echo $bds->poster ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?php echo $bds->address ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?php echo $bds->phone ?></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td><?php echo $bds->cell_phone ?></td>
                        </tr>
                    </table>
                </div>

                <div class="tienich">
                    <![if !IE]>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526b16ce15374888"></script>
                    <div class="addthis_native_toolbox" style="float: left;margin-top:3px;"></div>
                    <![endif]>
                    <span id="savedNews">
                        <span onclick="poroductSaved(this,'8077548');">Lưu tin</span>
                    </span>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
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
                            <li class="item">
                                <select id="cboArea">
                                    <option value="-1">Chọn diện tích</option>
                                </select>
                            </li>
                            <li class="item last">
                                <select id="cboPrice">
                                    <option value="-1">Chọn mức giá</option>
                                </select>
                            </li>
                            <li class="item">
                                <select id="cboDirection">
                                    <option value="-1">Chọn hướng nhà</option>
                                </select>
                            </li>
                            <li class="item">
                                <select id="cboProject">
                                    <option value="-1">Chọn Dự án</option>
                                </select>
                            </li>
                            <li class="item">
                                <select id="cboStreet">
                                    <option value="-1">Chọn Đường/Phố</option>
                                </select>
                            </li>
                            <li class="item">
                                <select id="cboRoom">
                                    <option value="-1">Số phòng ngủ</option>
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
                                        <img id="<?php echo $row->getFirstImage() ?>" />
                                    </a>
                                    <div class="cl2">
                                        <span class="area">
                                            <?php echo $row->area ?>&nbsp;m&#178;
                                        </span>
                                        <span class="address">
                                            Quận 6 - Hồ Chí Minh
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
</div>

<script>
(function() { 
    Galleria.loadTheme('<?php echo base_url('themes/website/galleria/themes/classic/galleria.classic.min.js')?>');
    Galleria.run('#myGallery');
}());
</script>
