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
                <div class="box">
                    <div class="headline_11"><h2>
                            ĐĂNG TÀI SẢN MỚI
                        </h2></div>

                    <form id='form-bds' action="#" method="post" class="form_style_3" enctype="multipart/form-data">
                        <div class="body">
                            <div class="mess_head margin_bottom"><strong>Điền chính xác các thông tin dưới đây giúp cho tài sản của bạn xuất hiện chính xác và đầy đủ trong các kết quả theo nhu cầu của người dùng, việc này giúp cho giao dịch của bạn sẽ nhanh hơn.</strong></div>

                            <div class="wrap margin_bottom">
                                <div id="post_info_1" class="rounded_style_1 rounded_box col_509">
                                    <div class="headline_12"><h2>THÔNG TIN CƠ BẢN</h2></div>
                                    <div class="body">
                                        <fieldset>
                                            <ul>
                                                <li class="post_type"><label>Loại tin đăng <span class="hightlight">*</span></label>
                                                    <div class="option">
                                                        <?php if(isset($this->bds->arr_type)): ?>
                                                            <?php foreach($this->bds->arr_type as $value => $type): ?>
                                                                <input <?php echo ($value == $property->type)? 'checked' : ''; ?> type="radio" name="bds[type]" id="at_<?php echo $value; ?>" value="<?php echo $value; ?>">
                                                                <label for="at_<?php echo $value; ?>"><?php echo $type; ?></label>
                                                            <?php endforeach; ?>
                                                        <?php endif;?>
                                                    </div>
                                                </li>
                                                <li class="realty_type" id="dio"><label>Loại địa ốc <span class="hightlight">*</span></label>
                                                    <select id="DioTypeList" name="bds[real_type_id]">
                                                        <option value="">Chọn loại địa ốc</option>
                                                        <?php foreach($this->realEstateType->getModelArray() as $key => $type): ?>
                                                            <option <?php echo ($type['id'] == $property->real_type_id)? 'selected' : ''; ?> value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <select id="DioLineList" name="bds[front_area_id]">
                                                        <option value="">Chọn đường trước nh&#224;</option>
                                                        <?php foreach($this->frontArea->getModelArray() as $key => $type): ?>
                                                            <option <?php echo ($type['id'] == $property->front_area_id)? 'selected' : ''; ?> value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </li>
                                                <li class="location"><label>Vị trí <span class="hightlight">*</span></label>
                                                    <div class="select">
                                                        <select id="selectCity" name="bds[province_id]">
                                                            <option value="">Tỉnh/Th&#224;nh phố</option>
                                                            <?php foreach($this->provinces->getModelArray() as $key => $type): ?>
                                                                <option <?php echo ($type['id'] == $property->province_id)? 'selected' : ''; ?> value="<?php echo $type['id']; ?>"><?php echo $type['province_name']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <span id="districtMember">
                                                            <select class="last" id="selectDistrict" name="bds[district_id]">
                                                                <option value="">Quận/Huyện</option>
                                                                <?php if(!empty($property->district_id)): ?>
                                                                    <option selected value="<?php echo $property->district_id; ?>"><?php echo $property->getDistrict(); ?></option>
                                                                <?php endif;?>
                                                            </select>
                                                        </span>
                                                        <span id="wardMember">
                                                            <select id="selectWard" name="bds[ward_id]">
                                                                <option value="">Phường/X&#227;</option>
                                                                <?php if(!empty($property->ward_id)): ?>
                                                                    <option selected value="<?php echo $property->ward_id; ?>"><?php echo $property->getWard(); ?></option>
                                                                <?php endif;?>
                                                            </select>
                                                        </span>
                                                        <span id="streetMember">
                                                            <select class="last" id="selectStreet" name="bds[street_id]">
                                                                <option value="">Đường</option>
                                                                <?php if(!empty($property->street_id)): ?>
                                                                    <option selected value="<?php echo $property->street_id; ?>"><?php echo $property->getStreet(); ?></option>
                                                                <?php endif;?>
                                                            </select>
                                                        </span>
                                                        <input id="HouseNumber" maxlength="150" name="bds[apartment_number]" placeholder="Số nhà" type="text" value="<?php echo $property->apartment_number; ?>" />
                                                    </div>
                                                </li>
                                                <li class="map">
                                                    <label>Bản đồ</label>
                                                    <div id="map"></div>
                                                    <?php
                                                        $coordi = json_decode($property->coordinate);
                                                    ?>
                                                    <input id="latitude" name="bds[coordinate][]" type="hidden" value="<?php echo (isset($coordi[0]))? $coordi[0]: ''; ?>" />
                                                    <input id="longtitude" name="bds[coordinate][]" type="hidden" value="<?php echo (isset($coordi[1]))? $coordi[1]: ''; ?>" />
                                                </li>
                                                <li class="prj"><label>Thuộc dự án</label>
                                                    <span id="projectMember">
                                                        <select id="ProjectListMember" name="bds[project_id]">
                                                            <option value="0">Danh s&#225;ch dự &#225;n</option>
                                                            <?php foreach($this->projects->get_model() as $key => $type): ?>
                                                                <option <?php echo ($type->id == $property->project_id)? 'selected' : ''; ?> value="<?php echo $type->id; ?>"><?php echo $type->name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </span>
                                                </li>
                                                <li class="price">
                                                    <label>Giá <span class="hightlight">*</span></label>
                                                    <input id="PriceMain" maxlength="18" name="bds[price]" style="margin-right:13px;" type="text" value="<?php echo $property->price; ?>" />
                                                    <select id="AssetPriceList" name="bds[currency]">
                                                        <?php foreach($this->bds->arr_currency as $value => $type): ?>
                                                            <option <?php echo ($value == $property->currency)? 'selected' : ''; ?> value="<?php echo $value; ?>"><?php echo $type; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <p>Lưu ý: Muốn <strong>giá thương lượng</strong> thì <strong>để trống hoặc 0</strong>.</p>
                                                </li>
                                                <li class="unit">
                                                    <label>Đơn vị</label>
                                                    <select id="AssetUnitList" name="bds[unit]" style>
                                                        <?php foreach($this->bds->unit as $value => $type): ?>
                                                            <option <?php echo ($value == $property->unit)? 'selected' : ''; ?> value="<?php echo $value; ?>"><?php echo $type; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </li>
                                                <li class="living_area"><label>Diện tích sử dụng <span class="hightlight">*</span></label>
                                                    <div class="number">
                                                        <input id="DTSD" maxlength="9" name="bds[area]" type="text" value="<?php echo $property->area; ?>" /><label>m2</label>
                                                    </div>
                                                </li>
                                                <li class="total_area">
                                                    <label>Diện tích khuôn viên</label>
                                                    <div class="number">
                                                        <input id="DTKVWidth" name="bds[horizontal_yard_area]" placeholder="chiều ngang" type="text" value="<?php echo $property->horizontal_yard_area; ?>" /><label>m</label>
                                                        <span>x</span>
                                                        <input id="DTKVLength" name="bds[vertical_yard_area]" placeholder="chiều dài" type="text" value="<?php echo $property->vertical_yard_area; ?>" /><label>m</label>
                                                        <div class="check"><input <?php echo ($property->horizontal_yard_area_after != 0 )? 'checked' : ''; ?> type="checkbox" id="chkDTKV" /><label for="chkDTKV">Nở hậu</label></div>
                                                    </div>
                                                    <label id="lbDTKV"></label>
                                                    <div class="number" id="dvDTKV">
                                                        <input id="DTKVWidthBehind" name="bds[horizontal_yard_area_after]" placeholder="chiều ngang sau" style="margin-top:1px;" type="text" value="<?php echo $property->horizontal_yard_area_after; ?>" /><label>m</label>
                                                    </div>
                                                </li>
                                                <li class="used_area"><label>Diện tích xây dựng</label>
                                                    <div class="number">
                                                        <input id="DTXDWidth" name="bds[horizonta_contruction_area]" placeholder="chiều ngang" type="text" value="<?php echo $property->horizonta_contruction_area; ?>" /><label>m</label>
                                                        <span>x</span>
                                                        <input id="DTXDLength" name="bds[vertica_contruction_area]" placeholder="chiều dài" type="text" value="<?php echo $property->vertica_contruction_area; ?>" /><label>m</label>
                                                        <div class="check"><input <?php echo ($property->horizonta_contruction_area_after != 0 )? 'checked' : ''; ?> type="checkbox" id="chkDTXD" /><label for="chkDTXD">Nở hậu</label></div>
                                                    </div>
                                                    <label id="lbDTXD"></label>
                                                    <div class="number" id="dvDTXD">
                                                        <input id="DTXDWidthBehind" name="bds[horizonta_contruction_area_after]" placeholder="chiều ngang sau" style="margin-top:1px;" type="text" value="<?php echo $property->horizonta_contruction_area_after; ?>" /><label>m</label>
                                                    </div>
                                                </li>

                                            </ul>
                                            <script type="text/javascript">
                                                $(function () {
                                                    $('#dvKGMG').attr('style', 'display:none');
                                                    $('#FeeConsign').val('').removeClass();

                                                    $('#ckKGMG').click(function () {
                                                        if ($(this).is(':checked')) {
                                                            $('#dvKGMG').attr('style', 'display:block');
                                                        }
                                                    });
                                                    $('#ckMTG').click(function () {
                                                        if ($(this).is(':checked')) {
                                                            $('#dvKGMG').attr('style', 'display:none');
                                                            $('#FeeConsign').val('').removeClass();
                                                        }
                                                    });
                                                    $('#lbDTKV').attr('style', 'display:none');
                                                    $('#dvDTKV').attr('style', 'display:none');
                                                    $('#chkDTKV').click(function () {
                                                        if ($(this).is(':checked')) {
                                                            $('#lbDTKV').attr('style', 'display:block');
                                                            $('#dvDTKV').attr('style', 'display:block');
                                                        } else {
                                                            $('#lbDTKV').attr('style', 'display:none');
                                                            $('#dvDTKV').attr('style', 'display:none');
                                                            $('#DTKVWidthBehind').val('').removeClass();
                                                        }
                                                    });
                                                    $('#lbDTXD').attr('style', 'display:none');
                                                    $('#dvDTXD').attr('style', 'display:none');
                                                    $('#chkDTXD').click(function () {
                                                        if ($(this).is(':checked')) {
                                                            $('#lbDTXD').attr('style', 'display:block');
                                                            $('#dvDTXD').attr('style', 'display:block');
                                                        } else {
                                                            $('#lbDTXD').attr('style', 'display:none');
                                                            $('#dvDTXD').attr('style', 'display:none');
                                                            $('#DTXDWidthBehind').val('');
                                                            $('#DTXDWidthBehind').removeClass();
                                                        }
                                                    });
                                                });
                                            </script>
                                        </fieldset>
                                    </div>
                                </div>
                                <div id="post_info_2" class="rounded_style_1 rounded_box col_245 margin_left">
                                    <div class="headline_12"><h2>ĐẶC ĐIỂM VÀ TIỆN ÍCH</h2></div>
                                    <div class="body">
                                        <fieldset>
                                            <ul>
                                                <li id="diostatelegal"><label>Tình trạng pháp lý</label>
                                                    <select id="DioStateLegalList" name="bds[phap_ly_id]"><option value="">Chọn t&#236;nh trạng</option>
                                                        <?php foreach($this->phapLy->getModelArray() as $value => $type): ?>
                                                            <option <?php echo ($type['id'] == $property->phap_ly_id)? 'selected' : ''; ?> value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </li>
                                                <li id="diodirection"><label>Hướng tài sản</label>
                                                    <select id="DioDirectionList" name="bds[direction_id]"><option value="">Chọn hướng địa ốc</option>
                                                        <?php foreach($this->direction->getModelArray() as $value => $type): ?>
                                                            <option <?php echo ($type['id'] == $property->direction_id)? 'selected' : ''; ?> value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </li>
                                                <li><label>Số lầu</label>
                                                    <select id="NumberOfFloorList" name="bds[number_of_floor]">
                                                        <option value="-1">Chọn số tầng</option>
                                                        <?php for($i=1; $i <= 200; $i++): ?>
                                                            <option <?php echo ($i == $property->number_of_floor)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </li>
                                                <li><label>Số phòng khách</label>
                                                    <select id="NumberOfLivingRoomList" name="bds[number_of_guest_room]">
                                                        <option value="-1">Chọn số ph&#242;ng kh&#225;ch</option>
                                                        <?php for($i=1; $i <= 200; $i++): ?>
                                                            <option <?php echo ($i == $property->number_of_guest_room)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </li>
                                                <li><label>Số phòng ngủ</label>
                                                    <select id="NumberOfBedRoomList" name="bds[number_of_bed_room]">
                                                        <option value="-1">Chọn số ph&#242;ng ngủ</option>
                                                        <?php for($i=1; $i <= 200; $i++): ?>
                                                            <option <?php echo ($i == $property->number_of_bed_room)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </li>
                                                <li><label>Số phòng tắm/WC</label>
                                                    <select id="NumberOfWCList" name="bds[number_of_rest_room]">
                                                        <option value="-1">Chọn số ph&#242;ng WC</option>
                                                        <?php for($i=1; $i <= 200; $i++): ?>
                                                            <option <?php echo ($i == $property->number_of_rest_room)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </li>
                                                <li><label>Số phòng khác</label>
                                                    <select id="NumberOfRelaxRoomList" name="bds[number_of_other_room]">
                                                        <option value="-1">Chọn số ph&#242;ng kh&#225;c</option>
                                                        <option value="0">0</option>
                                                        <?php for($i=1; $i <= 200; $i++): ?>
                                                            <option <?php echo ($i == $property->number_of_other_room)? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </li>
                                                <?php
                                                    $utilities = json_decode($property->utilities);
                                                ?>
                                                <li><label>Các tiện ích</label></li>
                                                <?php foreach($this->utilities->getModelArray() as $key => $type): ?>
                                                    <li class="check"><input <?php echo (in_array($type['id'], $utilities))? 'checked' : ''; ?> name="bds[utilities][]" id="uti_<?php echo $key; ?>" value="<?php echo $type['id']; ?>" type="checkbox" />
                                                        <label for="uti_<?php echo $key; ?>"><?php echo $type['name']; ?></label></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div id="post_info_3" class="rounded_style_1 rounded_box margin_bottom">
                                <div class="headline_12"><h2>MÔ TẢ CHI TIẾT</h2></div>
                                <div class="body">
                                    <div class="headline_text">
                                        <p><span class="hightlight">Vùng nội dung mô tả này sẽ được kiểm duyệt thông tin trước khi cho phép hiển thị trên <?php echo $this->settings->get_param('defaultPageTitle'); ?></span></p>
                                        <p>Tin đăng nhập nội dung theo đúng quy định sẽ được ưu tiên duyệt hiển thị nhanh hơn.</p>
                                        <p>Vui lòng nhập tiếng Việt có dấu. Nếu bạn không nhập mô tả, hệ thống sẽ lấy mô tả tự động.</p>
                                    </div>
                                    <fieldset>
                                        <ul>
                                            <li></li>

                                            <li><label>Tiêu đề <strong class="hightlight">*</strong></label>
                                                <input id="Title" name="bds[name]" type="text" value="<?php echo $property->name; ?>" /></li>
                                            <li></li>
                                            <li><label>Nội dung mô tả <strong class="hightlight">*</strong></label>
                                                <textarea cols="" id="Detail" maxlength="2000" name="bds[description]" rows=""><?php echo $property->description; ?></textarea>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="post_info_2" class="rounded_style_1 rounded_box margin_bottom">
                                <div class="headline_12"><h2>CẬP NHẬT HÌNH ẢNH</h2></div>
                                <div class="body">
                                    <input type="file" name="bds[images][]" class="dropify" multiple/>
                                </div>
                                <?php
                                $images = $property->getImages();
                                ?>
                                <?php if(!empty($images)): ?>
                                    <?php foreach($images as $image): ?>
                                        <div id="image-<?php echo $image->id; ?>" class="gallery">
                                            <a target="_blank" href="<?php echo base_url($image->image); ?>">
                                                <img width="150" style="max-height: 120px" src="<?php echo base_url($image->image); ?>"/>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div id="post_info_5" class="rounded_style_1 rounded_box margin_bottom">
                                <div class="headline_12"><h2>THÔNG TIN LIÊN HỆ</h2></div>
                                <div class="body">
                                    <fieldset>
                                        <ul>
                                            <li><label>Họ và tên <span class="hightlight">*</span></label>
                                                <input id="ContactName" maxlength="200" name="bds[poster]" type="text" value="<?php echo $property->poster; ?>" /></li>

                                            <li class="phone"><label>Điện thoại</label>
                                                <input id="ContactPhone" maxlength="40" name="bds[phone]" placeholder="Điện thoại bàn" style="width:200px" type="text" value="<?php echo $property->phone; ?>" />
                                                <input id="ContactMobile" maxlength="40" name="bds[cell_phone]" placeholder="Di động" style="width:200px" type="text" value="<?php echo $property->cell_phone; ?>" /><span class="hightlight">*</span></li>
                                            <li><label>Địa chỉ</label>
                                                <input id="ContactAddress" maxlength="200" name="bds[address]" type="text" value="<?php echo $property->address; ?>" /></li>
                                            <li><label>Ghi chú </label>
                                                <input id="ContactNotes" maxlength="200" name="bds[note]" type="text" value="" /></li>
                                        </ul>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="post_info_6" class="rounded_style_1 rounded_box">
                                <div class="headline_12"><h2>HOÀN TẤT</h2></div>

                                <div class="body">
                                    <div class="content">
                                        <h5>Lưu ý:</h5>
                                        <p>Những mục có dấu * là thông tin phải điền đầy đủ. Chỉ khi bạn hoàn tất những thông tin được yêu cầu điền đầy đủ thì các chức năng <strong>Đăng tài sản</strong> mới được kích hoạt</p>
                                        <p>DiaOcOnline không chịu trách nhiệm về những nội dung (chữ/ hình ảnh/ Video) do bạn đăng tải</p>
                                        <fieldset>
                                            <ul>
                                                <li class="agree"><div class="info">
                                                        <p>Khi nhấn nút <strong>ĐĂNG MỚI TÀI SẢN</strong>, bạn đã xác nhận hoàn toàn đồng ý với những <a href="#" target="_blank"><strong>điều khoản thỏa thuận</strong></a></p></div></li>
                                                <li>
                                                    <button type="submit" class="btn_2 btn-save-bds" name="<?php echo STATUS_BDS_PENDING; ?>"><span>ĐĂNG MỚI TÀI SẢN</span></button>
                                                    <button type="submit" class="btn_2 btn-save-bds" name="<?php echo STATUS_BDS_DRAFT; ?>"><span>LƯU LẠI</span></button>
                                                    <a name="SubmitCancel" class="btn_3" href="<?php echo base_url('thanh-vien/tai-khoan-cua-toi.html'); ?>"><span>HỦY BỎ</span></a>
                                                    <input id="status" name="bds[status]" type="hidden" value="1" />
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#selectCity').change(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('members/getDistricts'); ?>',
                data: { city: $(this).val() },
                success: function (data) {
                    if (data != null) {
                        $('#selectDistrict').html(data);
                    }
                }
            });
        });
        $('#selectDistrict').change(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('members/getWards'); ?>',
                data: { district: $(this).val() },
                success: function (data) {
                    if (data != null) {
                        $('#selectWard').html(data);
                    }
                }
            });
        });
        $('#selectWard').change(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('members/getStreets'); ?>',
                data: { ward: $(this).val() },
                success: function (data) {
                    if (data != null) {
                        $('#selectStreet').html(data);
                    }
                }
            });
        });
        $('#selectWard').change(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('members/getStreets'); ?>',
                data: { ward: $(this).val() },
                success: function (data) {
                    if (data != null) {
                        $('#selectStreet').html(data);
                    }
                }
            });
        });
        $('.btn-save-bds').click(function(){
            $('#status').val($(this).attr('name'));
            $('#form-bds').submit();
        });
    </script>
    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 15
            });
            infoWindow = new google.maps.InfoWindow;

            <?php if(!empty($coordi)): ?>
                var myLatLng = {lat: <?php echo $coordi[0]; ?>, lng: <?php echo $coordi[1]; ?>};

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: '<?php echo $property->name; ?>'
                });
            <?php endif; ?>

            <?php if(!empty($coordi)): ?>
                var pos = {lat: <?php echo $coordi[0]; ?>, lng: <?php echo $coordi[1]; ?>};
                map.setCenter(pos);
            <?php else: ?>
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        map.setCenter(pos);
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            <?php endif; ?>

            var marker;

            function placeMarker(location) {
                if ( marker ) {
                    marker.setPosition(location);
                } else {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }
            }

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);

                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longtitude").value = event.latLng.lng();
            });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz-btcJ-FgJzE_KLpn_EAdvbhkbRRrPMg&callback=initMap">
    </script>
    <style>
        #map {
            height: 250px;
            width: 70%;
        }
        .gallery {
            display: inline-block;
        }
    </style>
