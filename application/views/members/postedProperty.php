<div id="content_container">


    <div class="wrap">
        <div id="personal_board" class="margin_bottom">
            <div class="body">
                <div class="basic_info">
                    <div class="info">
                        <h2>Xin chào: <?php echo $user->full_name; ?></h2>
                        <p>Ngày tham gia: <?php echo date('d/m/Y', strtotime($user->created_date)); ?>
                            <br />
                        </p>
                    </div>
                </div>
                <!--<div class="alert margin_left">
                    <ul>
                        <li class="block new_mail"><a href="/thanh-vien/hop-thu/da-nhan" class="icon">THƯ </a>
                            <a href="/thanh-vien/hop-thu/da-nhan">0 THƯ TỪ HỆ THỐNG</a> </li>
                        <li class="block dealing"><a href="/thanh-vien/tai-san/dang-hien-thi" class="icon">TÀI SẢN ĐANG GIAO DỊCH</a>
                            <a href="/thanh-vien/tai-san/dang-hien-thi">0 TS ĐANG GIAO DỊCH</a></li>
                        <li class="block point last"><a href="javascript:void(0)" class="icon"></a>
                            <a href="javascript:void(0)"><span id="UserPoint">0</span> ĐIỂM DOOL</a></li>
                    </ul>
                </div>-->
            </div>
        </div>
        <div class="wrap margin_bottom">
            <div class="col_160">
                <div id="panel">
                    <div class="panel_block active">
                        <h2>
                            <span class="ico_16 ico_panel_0"></span>
                            <a href="javascript:void(0)">QUẢN LÝ TÀI SẢN</a></h2>
                        <ul>
                            <li>
                                <a href="<?php echo base_url('thanh-vien/tai-khoan-cua-toi.html'); ?>">Thông tin tài khoản</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('thanh-vien/doi-mat-khau.html'); ?>">Đổi Mật Khẩu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel_block">
                        <h2>
                            <span class="ico_16 ico_panel_1"></span>
                            <a href="javascript:void(0)">QUẢN LÝ TÀI SẢN</a></h2>
                        <ul>
                            <li>
                                <a href="<?php echo base_url('thanh-vien/dang-tai-san-moi.html'); ?>">Đăng tài sản mới</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('thanh-vien/tai-san-da-dang.html'); ?>">Tài sản đã đăng</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('thanh-vien/tai-san-da-luu.html'); ?>">Tài sản đã lưu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col_790 margin_left">
                <div id="propertise_displaying" class="box">
                    <div  class="headline_11"><h2>TÀI SẢN ĐÃ ĐĂNG (<span id="countProper"><?php echo $countProperty; ?></span>)</h2></div>
                    <div class="body">
                        <div class="propertise_list unpaid">
                            <ul>
                                <?php foreach($properties as $property): ?>
                                    <li id="<?php echo $property->code; ?>">
                                        <div class="short_info">
                                            <div class="img"><a href="<?php echo $property->getEditUrl(); ?>"><img src="<?php echo $property->getFirstImage(); ?>" width="75" height="75" alt="<?php echo $property->name; ?>" /></a></div>
                                            <div class="text">
                                                <span class="property_code">MSTS:<strong><?php echo $property->getCode(); ?></strong></span>
                                                <br />
                                                <h4><a href="<?php echo $property->getEditUrl(); ?>"><?php echo $property->name; ?></a></h4>
                                                <span class="location"><?php echo $property->getDistrictAndProvince(); ?></span>
                                            </div>
                                        </div>
                                        <div class="repair_post">
                                            <span class="updated_date">Ngày tạo : <?php echo date('d/m/Y', strtotime($property->created_date)); ?></span><br />
                                            <a href="<?php echo $property->getEditUrl(); ?>" class="repair"><span class="ico_16 ico_repair_16"></span>Chỉnh sửa</a><br />
                                        </div>
                                        <div class="remove"><a title="Ngừng đăng" href="javascript:void(0)" onclick="GetDataConfirm('/thanh-vien/xoa-tai-san.html/<?php echo $property->code; ?>','<?php echo $property->code; ?>');"><span class="ico_remove_11"></span></a></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="paging_2">
                            <ul class="pager">
                            </ul>
                            <script type="text/javascript">
                                $(function () {
                                    $('.pager').html(LoadPagging(1, 1, '/thanh-vien/tai-san/dang-soan'));
                                });
                            </script>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
