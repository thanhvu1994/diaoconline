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
                        <a class='link_cate' href="javascrip:void(0)">
                            <b>Vị trí:</b> <span><?php echo $bds->getLocation() ?></span></a>
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
                    <span id="savedNews">
                        <span>Lưu tin</span>
                    </span>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <?php $this->load->view('bds/sidebar'); ?>
</div>

<script>
(function() { 
    Galleria.loadTheme('<?php echo base_url('themes/website/galleria/themes/classic/galleria.classic.min.js')?>');
    Galleria.run('#myGallery');
}());
</script>
