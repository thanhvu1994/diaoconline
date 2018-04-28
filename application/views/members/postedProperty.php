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
                                <a href="<?php echo base_url('tai-khoan-cua-toi.html'); ?>">Thông tin tài khoản</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('doi-mat-khau.html'); ?>">Đổi Mật Khẩu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel_block">
                        <h2>
                            <span class="ico_16 ico_panel_1"></span>
                            <a href="javascript:void(0)">QUẢN LÝ TÀI SẢN</a></h2>
                        <ul>
                            <li>
                                <a href="<?php echo base_url('dang-tai-san-moi.html'); ?>">Đăng tài sản mới</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('tai-san-da-dang.html'); ?>">Tài sản đã đăng</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('tai-san-da-luu.html'); ?>">Tài sản đã lưu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col_790 margin_left">
                <div id="propertise_displaying" class="box">
                    <div  class="headline_11"><h2>TÀI SẢN ĐÃ ĐĂNG (<?php echo $countProperty; ?>)</h2></div>
                    <div class="body">
                        <div class="propertise_list unpaid">
                            <ul>
                                <li id="item_1593785">
                                    <div class="short_info">
                                        <div class="img"><a href="/thue-can-ho-dich-vu-c26/phong-tro-123-i1593785"><img src="http://image.diaoconline.vn/sieu-thi/can-ho-dich-vu_350.jpg" width="75" height="75" alt="Ph&#242;ng trọ 123" /></a></div>
                                        <div class="text">
                                            <span class="property_code">MSTS:<strong>1593785</strong></span>
                                            <br />
                                            <h4><a href="/thue-can-ho-dich-vu-c26/phong-tro-123-i1593785">Phòng trọ 123</a></h4>
                                            <span class="location">Vị trí: Từ Liêm, Hà Nội</span>
                                        </div>
                                    </div>
                                    <div class="repair_post">
                                        <span class="updated_date">Ngày tạo: 29/04/2018</span><br />
                                        <a href="/thanh-vien/tai-san-dang-moi/1593785" class="repair"><span class="ico_16 ico_repair_16"></span>Chỉnh sửa</a><br />
                                    </div>
                                    <div class="remove"><a title="Ngừng đăng" href="javascript:void(0)" onclick="GetDataConfirm('/thanh-vien/tai-san-ngung-dang/1593785','item_1593785');"><span class="ico_remove_11"></span></a></div>
                                </li>

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
