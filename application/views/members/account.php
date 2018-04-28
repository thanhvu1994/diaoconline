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
                            <div id="change_profile" class="rounded_style_3 rounded_box margin_bottom">
                                <div class="headline_12"><h2>Thông tin tài khoản</h2></div>
                                <div class="body">
                                    <fieldset>
                                        <ul>
                                            <li>
                                                <label>Họ và tên</label>
                                                <input class="input_text" id="FullName" name="Users[full_name]" placeholder="Họ và tên" type="text" value="<?php echo $user->full_name; ?>" />
                                            </li>
                                            <li>
                                                <?php
                                                    $dayBirth = date('d', strtotime($user->birth_date));
                                                    $monthBirth = date('m', strtotime($user->birth_date));
                                                    $yearBirth = date('Y', strtotime($user->birth_date));
                                                ?>
                                                <label>Ngày sinh</label>
                                                <select id="AllDay" name="Users[birth_day]">
                                                    <option value="-1">Chọn ng&#224;y</option>
                                                    <?php for($i = 1; $i <= 31; $i++): ?>
                                                        <option <?php echo ($dayBirth == $i)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                                <select id="AllMonth" name="Users[birth_month]">
                                                    <option value="-1">Chọn th&#225;ng</option>
                                                    <?php for($i = 1; $i <= 12; $i++): ?>
                                                        <option <?php echo ($monthBirth == $i)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                                <select id="AllYear" name="Users[birth_year]">
                                                    <option selected="selected" value="-1">Chọn năm</option>
                                                    <?php for($i = 0; $i < 100; $i++): ?>
                                                        <option <?php echo ($yearBirth == date('Y') - $i)? 'selected' : ''; ?> value="<?php echo date('Y') - $i; ?>"><?php echo date('Y') - $i; ?></option>
                                                    <?php endfor; ?>
                                                </select></li>
                                            <li>
                                                <label>Giới tính</label>
                                                <div class="gender">
                                                    <input <?php echo ($user->gender == 'Nam')? 'checked' : ''; ?> id="MenGender" name="Users[gender]" type="radio" value="Nam" /><label for="MenGender">Nam</label>
                                                    <input <?php echo ($user->gender == 'Nu')? 'checked' : ''; ?> id="WomenGender" name="Users[gender]" type="radio" value="Nu" /><label for="WomenGender">Nữ</label>
                                                </div>
                                            </li>
                                            <li>
                                                <label>Địa chỉ</label>
                                                <input class="input_text" id="Address" maxlength="200" name="Users[address]" placeholder="Địa chỉ" type="text" value="<?php echo $user->address; ?>" />
                                            </li>
                                            <li>
                                                <label>Tỉnh / Thành</label>
                                                <?php
                                                $string = read_file('./application/models/vietnam_provinces_cities.json');
                                                $cities = json_decode($string, true);
                                                $districts = (isset($cities[$user->city]['cities']))? $cities[$user->city]['cities'] : array();
                                                ?>
                                                <select id="selectCity" name="Users[city]">
                                                    <option value="">Tỉnh/Thành Phố</option>
                                                    <?php foreach($cities as $value => $city): ?>
                                                        <option <?php echo ($user->city == $value)? 'selected':''; ?> value="<?php echo $value; ?>"><?php echo $city['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </li>
                                            <li>
                                                <label>Quận / Huyện</label>
                                                <div class="dob" id="district">
                                                    <select id="DistrictList" name="Users[district]">
                                                        <option value="">Quận/Huyện</option>
                                                        <?php foreach($districts as $value => $district): ?>
                                                            <option <?php echo ($user->district == $value)? 'selected':''; ?> value="<?php echo $value; ?>"><?php echo $district; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <label>Điện thoại</label>
                                                <div class="tel">
                                                    <input class="input_text" id="Mobile1" maxlength="10" name="Mobile1" placeholder="Điện thoại bàn" type="text" value="<?php echo $user->phone_number; ?>" />
                                                    <input class="input_text" id="Mobile2" maxlength="30" name="Mobile2" placeholder="Di động" type="text" value="<?php echo $user->mobile_number; ?>" />
                                                </div>
                                            </li>
                                            <li>
                                                <label>Tên công ty</label>
                                                <input class="input_text" id="CompanyName" maxlength="200" name="CompanyName" placeholder="Tên công ty" type="text" value="<?php echo $user->company; ?>" />
                                            </li>
                                            <li>
                                                <label>Địa chỉ website</label>
                                                <input class="input_text" id="Website" maxlength="200" name="Website" placeholder="Địa chỉ Website" type="text" value="<?php echo $user->website; ?>" />
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="change_avatar" class="rounded_style_3 rounded_box">
                                <div class="headline_12"><h2>THAY ĐỔI HÌNH ĐẠI DIỆN</h2></div>
                                <div class="body">
                                    <div class="wrapper">
                                        <div class="upload">
                                            <fieldset>
                                                <label></label><input type="file" name="Users[avarta]" id="file" class="input_text"/>
                                            </fieldset>
                                            <div class="note"><p>Lưu ý: Hình đại diện có dung lượng nhỏ hơn 512KB</p></div>
                                            <img class="avatar" src="<?php echo $user->get_avarta(); ?>" />
                                        </div>
                                        <button type="submit" name="SubmitLogo" id="SubmitLogo" class="btn_2"><span>CẬP NHẬT</span></button>
                                    </div>
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
