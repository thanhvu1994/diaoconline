<script type="text/javascript">
    $(function () {
        $('#email').val('');
        $('#TuKhoaTimKiem').val('');
        $("#LoaiTinDang,#LoaiDiaOc,#KhuVuc,#KhoangGia,#QuanHuyen").uniform({
            selectAutoWidth: true
        });
    });
</script>
<div id="status_search" class="wrap margin_bottom clearfix">
    <div id="status" class="rounded_style_1 rounded_box">
        <div class="content">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2" style="padding-top:7px">Tài sản đang có</td>
                </tr>
                <tr>
                    <td style="padding-top:7px;text-align:right"><span class="count1">57.272</span></td>
                    <td style="text-align:left;padding-left:5px;"><span class="count2">(giao dịch)</span></td>
                </tr>
                <tr>
                    <td style="padding-top:7px;text-align:right"><span class="count1">1.548.567</span></td>
                    <td style="text-align:left;padding-left:5px;"><span class="count2">(tham khảo)</span></td>
                </tr>
            </table>
            <a href="sieu-thi.html" class="btn_discover">
                Khám phá ngay</a>
            </div>
        </div>
        <div id="home_search" class="rounded_style_1 rounded_box">
            <div class="content">
                <div class="select_search_type rounded_style_5 rounded_box">
                    <div class="content">
                        <ul class="search_tab">
                            <li class="actived" id="tabtimkiemts"><span class="L"></span><a href="javascript:void(0)">
                                Tìm kiếm tài sản</a> <span class="R"></span></li>
                                <li id="tabtimnhanhts"><a href="javascript:void(0)"><span>Xem nhanh theo loại tài sản</span></a></li>
                            <!--<li><a href="/sieu-thi/loc?thechap=1"><span>Xem
                            tài sản đấu giá</span></a></li>-->
                            <li><a href="sieu-thi/loc7638.html?noibat=1"><span>Tài sản nổi bật</span></a></li>
                            <li><a href="sieu-thi/locc618.html?chinhchu=1"><span>Tài sản chính chủ</span></a></li>
                            <li><a href="sieu-thi/loc980e.html?nhasv=1"><span>Nhà trọ sinh viên</span></a></li>
                        </ul>
                    </div>
                </div>
            <div id="timkiemts" class="search_form">
                <form class="form_style_1" action="http://diaoconline.vn/sieu-thi/loc" method="post">
                    <fieldset>
                        <div class="left_form">
                            <div class="rowElem">
                                <input type="text" class="home_search_input" placeholder="Ví dụ: nhà mặt tiền quận 5"
                                value="" name="TuKhoaTimKiem" id="TuKhoaTimKiem" title="Ví dụ: nhà mặt tiền; quận 5" />
                            </div>
                            <div class="propertise_type margin_right_form">
                                <div class="divUni-1">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="LoaiTinDang" name="LoaiTinDangList" style="width:150px"><option value="1">B&#225;n / Sang nhượng</option>
                                            <option value="2">Cho thu&#234;</option>
                                            <option value="3">Cần mua</option>
                                            <option value="4">Cần thu&#234;</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="divUni-2">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="LoaiDiaOc" name="LoaiDiaOcList"><option value="">Chọn loại địa ốc</option>
                                            <option value="27">Đất vườn</option>
                                            <option value="26">Căn hộ dich vụ</option>
                                            <option value="25">Kh&#225;ch Sạn - Nh&#224; Phố</option>
                                            <option value="1">Villa - Biệt thự</option>
                                            <option value="20">Nh&#224; phố</option>
                                            <option value="6">Nh&#224; tạm</option>
                                            <option value="9">Văn ph&#242;ng</option>
                                            <option value="8">Căn hộ chung cư</option>
                                            <option value="10">Căn hộ cao cấp</option>
                                            <option value="12">Đất dự &#225;n - Quy hoạch</option>
                                            <option value="11">Đất ở - Đất thổ cư</option>
                                            <option value="23">Đất l&#226;m nghiệp</option>
                                            <option value="13">Đất n&#244;ng nghiệp</option>
                                            <option value="14">Đất cho sản xuất</option>
                                            <option value="19">Nh&#224; Kho - Xưởng</option>
                                            <option value="17">Nh&#224; h&#224;ng - Kh&#225;ch sạn</option>
                                            <option value="15">Mặt bằng - Cửa h&#224;ng</option>
                                            <option value="16">Ph&#242;ng trọ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="divUni-2">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="KhuVuc" name="ThanhPhoList"><option value="">Tỉnh/Th&#224;nh phố</option>
                                            <option value="2">H&#224; Nội</option>
                                            <option value="3">TP.HCM</option>
                                            <option value="71">Đ&#224; Nẵng</option>
                                            <option value="53">Đồng Nai</option>
                                            <option value="61">B&#236;nh Dương</option>
                                            <option value="35">Long An</option>
                                            <option value="69">An Giang</option>
                                            <option value="68">B&#224; Rịa - Vũng T&#224;u</option>
                                            <option value="67">Bắc Giang</option>
                                            <option value="66">Bắc Kạn</option>
                                            <option value="65">Bạc Li&#234;u</option>
                                            <option value="64">Bắc Ninh</option>
                                            <option value="63">Bến Tre</option>
                                            <option value="62">B&#236;nh Định</option>
                                            <option value="60">B&#236;nh Phước</option>
                                            <option value="59">B&#236;nh Thuận</option>
                                            <option value="58">C&#224; Mau</option>
                                            <option value="72">Cần Thơ</option>
                                            <option value="57">Cao Bằng</option>
                                            <option value="56">Đắk Lắk</option>
                                            <option value="55">Đắk N&#244;ng</option>
                                            <option value="54">Điện Bi&#234;n</option>
                                            <option value="52">Đồng Th&#225;p</option>
                                            <option value="51">Gia Lai</option>
                                            <option value="50">H&#224; Giang</option>
                                            <option value="49">H&#224; Nam </option>
                                            <option value="47">H&#224; Tĩnh</option>
                                            <option value="46">Hải Dương</option>
                                            <option value="70">Hải Ph&#242;ng</option>
                                            <option value="45">Hậu Giang</option>
                                            <option value="44">H&#242;a B&#236;nh</option>
                                            <option value="43">Hưng Y&#234;n</option>
                                            <option value="42">Kh&#225;nh H&#242;a</option>
                                            <option value="41">Ki&#234;n Giang</option>
                                            <option value="40">Kon Tum</option>
                                            <option value="39">Lai Ch&#226;u</option>
                                            <option value="38">L&#226;m Đồng</option>
                                            <option value="37">Lạng Sơn</option>
                                            <option value="36">L&#224;o Cai</option>
                                            <option value="34">Nam Định</option>
                                            <option value="33">Nghệ An</option>
                                            <option value="32">Ninh B&#236;nh</option>
                                            <option value="31">Ninh Thuận</option>
                                            <option value="30">Ph&#250; Thọ</option>
                                            <option value="29">Ph&#250; Y&#234;n</option>
                                            <option value="28">Quảng B&#236;nh</option>
                                            <option value="27">Quảng Nam</option>
                                            <option value="26">Quảng Ng&#227;i</option>
                                            <option value="25">Quảng Ninh</option>
                                            <option value="24">Quảng Trị</option>
                                            <option value="23">S&#243;c Trăng</option>
                                            <option value="22">Sơn La</option>
                                            <option value="21">T&#226;y Ninh</option>
                                            <option value="19">Th&#225;i B&#236;nh</option>
                                            <option value="18">Th&#225;i Nguy&#234;n</option>
                                            <option value="17">Thanh H&#243;a</option>
                                            <option value="16">Thừa Thi&#234;n Huế</option>
                                            <option value="15">Tiền Giang</option>
                                            <option value="14">Tr&#224; Vinh</option>
                                            <option value="13">Tuy&#234;n Quang</option>
                                            <option value="12">Vĩnh Long</option>
                                            <option value="11">Vĩnh Ph&#250;c</option>
                                            <option value="10">Y&#234;n B&#225;i</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="divUni-2">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="QuanHuyen" name="QuanHuyenList"><option value="">Quận/Huyện</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn_home_search"><span>Tìm kiếm</span></button>
                    </fieldset>
                </form>
            </div>
            <div id="timnhanhts" class="infiniteCarousel select_search_item" style="display: none">
                <div class="wrapper">
                    <ul>
                        <li><a href="sieu-thi/nha-pho-c20.html">
                            <span class="ico_30 ico_home_1_30"></span><strong>NH&#192; PHỐ</strong></a></li>
                        <li><a href="sieu-thi/van-phong-c9.html">
                                <span class="ico_30 ico_home_2_30"></span><strong>VĂN PH&#210;NG CHO THU&#202;</strong></a></li>
                        <li><a href="sieu-thi/can-ho-cao-cap-c10.html">
                                    <span class="ico_30 ico_home_3_30"></span><strong>CĂN HỘ CAO CẤP</strong></a></li>
                        <li><a href="sieu-thi/villa-biet-thu-c1.html">
                            <span class="ico_30 ico_home_4_30"></span><strong>VILLA BIỆT THỰ</strong></a></li>
                        <li><a href="sieu-thi/dat-lam-nghiep-c23.html">
                                <span class="ico_30 ico_home_5_30"></span><strong>ĐẤT L&#194;M NGHIỆP</strong></a></li>
                        <li><a href="sieu-thi/dat-nong-nghiep-c13.html">
                                    <span class="ico_30 ico_home_6_30"></span><strong>ĐẤT N&#212;NG NGHIỆP</strong></a></li>
                        <li><a href="sieu-thi/dat-o-dat-tho-cu-c11.html">
                            <span class="ico_30 ico_home_7_30"></span><strong>ĐẤT Ở ĐẤT THỔ CƯ</strong></a></li>
                        <li><a href="sieu-thi/dat-du-an-quy-hoach-c12.html">
                                <span class="ico_30 ico_home_8_30"></span><strong>ĐẤT QUY HOẠCH</strong></a></li>
                        <li><a href="sieu-thi/dat-cho-san-xuat-c14.html">
                                    <span class="ico_30 ico_home_9_30"></span><strong>ĐẤT SẢN XUẤT</strong></a></li>
                        <li><a href="sieu-thi/nha-hang-khach-san-c17.html">
                            <span class="ico_30 ico_home_10_30"></span><strong>NH&#192; H&#192;NG KH&#193;CH SẠN</strong></a></li>
                    </ul>
                </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#timnhanhts').attr('style', 'display:none');
                        $('#tabtimkiemts').click(function () {
                            $('#tabtimnhanhts').removeClass('actived');
                            $('#tabtimnhanhts').html('<a href="javascript:void(0)"><span>Xem nhanh theo loại tài sản</span></a>');
                            $('#timnhanhts').attr('style', 'display:none');
                            $('#timkiemts').attr('style', 'display:block');
                            $('#tabtimkiemts').html('<span class="L"></span><a href="javascript:void(0)">Tìm kiếm tài sản</a><span class="R"></span>');
                            $(this).addClass('actived');

                        });
                        $('#tabtimnhanhts').click(function () {
                            $('#tabtimkiemts').removeClass('actived');
                            $('#tabtimkiemts').html('<a href="javascript:void(0)"><span>Tìm kiếm tài sản</span></a>');
                            $('#timkiemts').attr('style', 'display:none');
                            $('#timnhanhts').attr('style', 'display:block');
                            $('#tabtimnhanhts').html('<span class="L"></span><a href="javascript:void(0)">Xem nhanh theo loại tài sản</a><span class="R"></span>');
                            $(this).addClass('actived');
                        });
                    });
                </script>
            </div>
        </div>
    </div>