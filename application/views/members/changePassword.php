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


        <div id="personal" class="wrap margin_bottom">
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
                            <!-- <li>
                                <a href="<?php echo base_url('thanh-vien/tai-san-da-luu.html'); ?>">Tài sản đã lưu</a>
                            </li> -->
                            <li>
                                <a href="<?php echo base_url('thanh-vien/tai-san-luu-xem-sau.html'); ?>">Tài sản lưu xem sau</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col_790 margin_left">
                <!-- InstanceBeginEditable name="content main" -->
                <div class="box">
                    <div class="headline_11">
                        <h2>TÀI KHOẢN CỦA TÔI</h2>
                    </div>
                    <div class="body">
                        <form action="#" method="post" class="account_form form_style_3" enctype = "multipart/form-data">
                            <?php if(isset($msg)): ?>
                                <div class="validation-summary-errors" style="color: green; background-color: white;"><ul><li><?php echo $msg; ?></li>
                                    </ul></div>
                            <?php endif; ?>
                            <?php if(isset($error)): ?>
                                <div class="validation-summary-errors"><ul><li><?php echo $error; ?></li>
                                    </ul></div>
                            <?php endif; ?>
                            <div id="change_pass" class="rounded_style_3 rounded_box margin_bottom"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                                <div class="headline_12"><h2>THAY ĐỔI MẬT KHẨU</h2></div>
                                <div class="body">
                                    <fieldset>
                                        <ul>
                                            <li>
                                                <label></label>
                                                <input class="input_text" id="Password" name="Users[password]" placeholder="Nhập mật khẩu cũ" type="password" value="">
                                            </li>
                                            <li>
                                                <label></label>
                                                <input class="input_text" id="NewPassword" name="Users[new_password]" placeholder="Nhập mật khẩu mới" type="password" value="">
                                            </li>
                                            <li>
                                                <label></label>
                                                <input class="input_text" id="ConfirmNewPassword" name="Users[confirm_password]" placeholder="Nhập lại mật khẩu mới" type="password" value="">
                                            </li>
                                            <li>
                                                <button type="submit" name="SubmitPassword" id="SubmitPassword" class="btn_2">
                                                    <span>CẬP NHẬT</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- InstanceEndEditable -->
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $('#selectCity').change(function(){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('sites/getDistricts'); ?>',
            data: { city: $(this).val() },
            success: function (data) {
                if (data != null) {
                    $('#DistrictList').html(data);
                }
            }
        });
    });
</script>
