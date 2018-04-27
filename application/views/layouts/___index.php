<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi">
    <!-- Mirrored from phonhadat.net/ban-dat-dat-nen.htm by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Apr 2018 07:41:35 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head id="Head1">
        <link href="<?php echo base_url('themes/website/bds/')?>http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=latin,vietnamese,latin-ext" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('themes/website/bds/Styles/StyleSheet/phonhadat.minf500.css?v=13')?>" rel="stylesheet" />
        <link href="<?php echo base_url('themes/website/bds/Scripts/jquery.selectbox-0.2/css/jquery.selectbox.css')?>" rel="stylesheet" />
        <link href="<?php echo base_url('themes/website/bds/Styles/StyleSheet/reset.css')?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url('themes/website/bds/Scripts/jquery-1.7.2.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/website/bds/Scripts/banner.js')?>"></script>
        <link href="<?php echo base_url('themes/website/bds/Scripts/jquery-ui.css')?>" rel="stylesheet" />
        <script src="<?php echo base_url('themes/website/bds/Scripts/jquery.AdvanceHiddenDropbox.min.js')?>"></script>
        <script src="<?php echo base_url('themes/website/bds/Scripts/Search.minf500.js?v=13')?>" type="text/javascript"></script>
        <script src="<?php echo base_url('themes/website/bds/Scripts/jquery-ui.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/website/bds/Scripts/jquery.selectbox-0.2/js/jquery.selectbox-0.2.js')?>"></script>
    </head>
    <body>
        <div class="bg_wr">
            <div class="wrapper">
                <div class="container">
                    <div class="cl_left">
                        <div class="box_search">
                            <div class="search">
                                <div id="searchTitle">
                                    Tìm kiếm bất động sản
                                </div>
                                <div class="listbox">
                                    <div class="type_bds">
                                        <span onclick="ChangeType(38);" id="ban" class="sale active">Nhà đất bán</span>
                                        <span onclick="ChangeType(49);" id="chothue" class="rent">Nhà đất cho thuê</span>
                                    </div>
                                    <div class="search-bds">
                                        <ul>
                                            <li class="item hidden">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddType" id="hddType" value="38" />
                                                <select id="cboType" onchange="ChangeLoaigiaodich($(this).val());">
                                                    <option value="-1">Chọn BĐS</option>
                                                    <option value="38">BĐS Bán</option>
                                                    <option value="49">BĐS Cho Thuê</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddCate" id="hddCate" value="361" />
                                                <select id="cboCate" onchange="ChangeValue('Cate', $(this).val());">
                                                    <option value="-1">Chọn loại nhà đất</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddCity" id="hddCity" value="-1" />
                                                <select id="cboCity" onchange="ChangeCity($(this).val())">
                                                    <option value="-1">Chọn Tỉnh/Thành phố</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddDistrict" id="hddDistrict" value="-1" />
                                                <select id="cboDistrict" onchange="ChangeQuanhuyen($(this).val())">
                                                    <option value="-1">Chọn Quận/Huyện</option>
                                                </select>
                                            </li>
                                            <li class="item ">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddWard" id="hddWard" value="-1" />
                                                <select id="cboWard" onchange="ChangeValue('Ward', $(this).val());">
                                                    <option value="-1">Chọn Phường/Xã</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddArea" id="hddArea" value="-1" />
                                                <select id="cboArea" onchange="ChangeValue('Area', $(this).val());">
                                                    <option value="-1">Chọn diện tích</option>
                                                </select>
                                            </li>
                                            <li class="item last">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddPrice" id="hddPrice" value="-1" />
                                                <select id="cboPrice" onchange="ChangeValue('Price', $(this).val());">
                                                    <option value="-1">Chọn mức giá</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddDirection" id="hddDirection" value="-1" />
                                                <select id="cboDirection" onchange="ChangeValue('Direction', $(this).val());">
                                                    <option value="-1">Chọn hướng nhà</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddProject" id="hddProject" value="-1" />
                                                <select id="cboProject" onchange="ChangeValue('Project', $(this).val());">
                                                    <option value="-1">Chọn Dự án</option>
                                                </select>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddStreet" id="hddStreet" value="-1" />
                                                <select id="cboStreet" onchange="ChangeValue('Street', $(this).val());">
                                                    <option value="-1">Chọn Đường/Phố</option>
                                                </select>
                                            </li>
                                            
                                            <li class="item">
                                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddRoom" id="hddRoom" value="-1" />
                                                <select id="cboRoom" onchange="ChangeValue('Room', $(this).val());">
                                                    <option value="-1">Số phòng ngủ</option>
                                                </select>
                                            </li>
                                            
                                            <li class="wr_bt last">
                                                
                                                <a id="btnSearch" href="javascript:__doPostBack(&#39;ctl00$MainContent$BoxSearch$btnSearch&#39;,&#39;&#39;)">  TÌM KIẾM
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div id="MainContent_BoxHotLink_pnBoxLink">
                            <h2 class="titlebox_hostlink">
                                <span>Liên kết nổi bật</span>
                            </h2>
                            <div class="box_link">
                                <ul>
                                    <li class="first">
                                        <a href="ban-nha-rieng-phuong-ben-thanh.html">
                                            <h3>Bán nhà riêng Phường Bến Thành</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-phuong-pham-ngu-lao-1.html">
                                            <h3>Nhà đất bán Phường Phạm Ngũ Lão</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="cho-thue-can-ho-chung-cu-phuong-binh-trung-dong.html">
                                            <h3>Cho thuê căn hộ chung cư Phường Bình Trưng Đông</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-nha-mat-pho-phuong-5-8.html">
                                            <h3>Bán nhà mặt tiền Phường 5</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-duong-nguyen-van-linh-59.html">
                                            <h3>Nhà đất bán Đường Nguyễn Văn Linh</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-can-ho-chung-cu-can-ho-khang-gia.html">
                                            <h3>Bán căn hộ chung cư Căn Hộ Khang Gia</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-phuong-tan-chanh-hiep-1.html">
                                            <h3>Nhà đất bán Phường Tân Chánh Hiệp</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-phuong-13-7.html">
                                            <h3>Nhà đất bán Phường 13</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-duong-quang-trung-67.html">
                                            <h3>Nhà đất bán Đường Quang Trung</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-nha-be.html">
                                            <h3>Nhà đất bán Huyện Nhà Bè</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-cho-thue-to-hop-nha-cao-tang-671-hoang-hoa-tham.html">
                                            <h3>Nhà đất cho thuê Tổ hợp nhà cao tầng 671 Hoàng Hoa Thám</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-can-ho-chung-cu-phuong-kim-giang-1.html">
                                            <h3>Bán căn hộ chung cư Phường Kim Giang</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-nha-biet-thu-lien-ke-cau-giay.html">
                                            <h3>Bán nhà biệt thự, liền kề Quận Cầu Giấy</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-nha-biet-thu-lien-ke-khu-do-thi-trung-yen.html">
                                            <h3>Bán nhà biệt thự, liền kề Khu đô thị Trung Yên</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-can-ho-chung-cu-vp6-linh-dam.html">
                                            <h3>Bán căn hộ chung cư VP6 Linh Đàm</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-can-ho-chung-cu-toa-nha-intracom1-trung-van.html">
                                            <h3>Bán căn hộ chung cư Tòa nhà Intracom1 - Trung Văn</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-phuong-ha-cau.html">
                                            <h3>Nhà đất bán Phường Hà Cầu</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-dat-nen-du-an-thu-dau-mot-bd.html">
                                            <h3>Bán đất nền dự án Huyện Thủ Dầu Một</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="ban-dat-phuong-phuoc-my.html">
                                            <h3>Bán đất Phường Phước Mỹ</h3>
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="nha-dat-ban-tan-an-la.html">
                                            <h3>Nhà đất bán Huyện Tân An</h3>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="producthot">
                            <div class="type_pr_hot">
                                <span onclick="ChangeProduct(38);" id="pr_hot" class="active">Nhà đất mới nhất</span>
                                <span onclick="ChangeProduct(49);" id="pr_top" class="">Nhà đất tiêu biểu</span>
                            </div>
                            <div class="listbox">
                                <div id="prHost">
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="CHUỘC THÂN!!! Bán gấp 1244m2 Mặt tiền Võ Văn Kiệt, TC 520m2, Chỉ 4.65 Tỷ. LH: 0914.948.512" href="ban-kho-nha-xuong-duong-vo-van-kiet-phuong-7-5/chuoc-than-ban-gap-1244m2-mat-tien-vo-van-kiet-tc-520m2-chi-465-ty-lh-0914948512-pr9959530.html">CHUỘC THÂN!!! Bán gấp 1244m2 Mặt tiền Võ Văn Kiệt, TC 520m2, Chỉ 4.65 Tỷ. LH: 0914.948.512</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_0" title="CHUỘC THÂN!!! Bán gấp 1244m2 Mặt tiền Võ Văn Kiệt, TC 520m2, Chỉ 4.65 Tỷ. LH: 0914.948.512" class="avatar" href="ban-kho-nha-xuong-duong-vo-van-kiet-phuong-7-5/chuoc-than-ban-gap-1244m2-mat-tien-vo-van-kiet-tc-520m2-chi-465-ty-lh-0914948512-pr9959530.html"><img id="MainContent_ProductHot_rptNewProducts_imgAvatar_0" src="../img.phonhadat.net/crop/110x75/2018/04/25/20180425135104-d301.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    1244&nbsp;m&#178;
                                                </span>
                                                <span class="address">
                                                    Quận 6 - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    4.65 Tỷ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Nhà đẹp khủng khiếp Võ thị Sáu, Quận 1, 50m2, 9 tỷ, HXH, Kinh doanh." href="ban-nha-rieng-duong-vo-thi-sau-phuong-tan-dinh-2/nha-dep-khung-khiep-vo-thi-sau-quan-1-50m2-9-ty-hxh-kinh-doanh-pr9959529.html">Nhà đẹp khủng khiếp Võ thị Sáu, Quận 1, 50m2, 9 tỷ, HXH, Kinh doanh.</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_1" title="Nhà đẹp khủng khiếp Võ thị Sáu, Quận 1, 50m2, 9 tỷ, HXH, Kinh doanh." class="avatar" href="ban-nha-rieng-duong-vo-thi-sau-phuong-tan-dinh-2/nha-dep-khung-khiep-vo-thi-sau-quan-1-50m2-9-ty-hxh-kinh-doanh-pr9959529.html"><img id="MainContent_ProductHot_rptNewProducts_imgAvatar_1" src="../img.phonhadat.net/crop/110x75/2018/04/25/20180425135028-501a.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    50&nbsp;m&#178;
                                                </span>
                                                <span class="address">
                                                    Quận 1 - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    9 Tỷ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="VƯỢT BIÊN !! Bán RẼ Nhà Xưởng 1246m2 Mặt tiền An Dương Vương, TC 612m2. GIÁ chỉ 4.75 Tỷ. LH: 0914.948.512" href="ban-kho-nha-xuong-duong-an-duong-vuong-phuong-16-1/vuot-bien-ban-re-nha-xuong-1246m2-mat-tien-an-duong-vuong-tc-612m2-gia-chi-475-ty-lh-0914948512-pr9959528.html">VƯỢT BIÊN !! Bán RẼ Nhà Xưởng 1246m2 Mặt tiền An Dương Vương, TC 612m2. GIÁ chỉ 4.75 Tỷ. ...</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_2" title="VƯỢT BIÊN !! Bán RẼ Nhà Xưởng 1246m2 Mặt tiền An Dương Vương, TC 612m2. GIÁ chỉ 4.75 Tỷ. LH: 0914.948.512" class="avatar" href="ban-kho-nha-xuong-duong-an-duong-vuong-phuong-16-1/vuot-bien-ban-re-nha-xuong-1246m2-mat-tien-an-duong-vuong-tc-612m2-gia-chi-475-ty-lh-0914948512-pr9959528.html"><img id="MainContent_ProductHot_rptNewProducts_imgAvatar_2" src="../img.phonhadat.net/crop/110x75/2018/04/25/20180425135019-536f.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    1246&nbsp;m&#178;
                                                </span>
                                                <span class="address">
                                                    Quận 8 - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    4.75 Tỷ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Thua độ bán gấp 683m2 Trần Xuân Soạn ngang 25m chỉ 4.9 tỷ, liên hệ 093.696.3650" href="ban-dat-quan-7/thua-do-ban-gap-683m2-tran-xuan-soan-ngang-25m-chi-49-ty-lien-he-0936963650-pr9959527.html">Thua độ bán gấp 683m2 Trần Xuân Soạn ngang 25m chỉ 4.9 tỷ, liên hệ 093.696.3650</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_3" title="Thua độ bán gấp 683m2 Trần Xuân Soạn ngang 25m chỉ 4.9 tỷ, liên hệ 093.696.3650" class="avatar" href="ban-dat-quan-7/thua-do-ban-gap-683m2-tran-xuan-soan-ngang-25m-chi-49-ty-lien-he-0936963650-pr9959527.html"><img id="MainContent_ProductHot_rptNewProducts_imgAvatar_3" src="../img.phonhadat.net/crop/110x75/2018/04/25/20180425135010-5cc0.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    683&nbsp;m&#178;
                                                </span>
                                                <span class="address">
                                                    Quận 7 - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    4.9 Tỷ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Bán đất mặt tiền Bình Chánh giá 320 triệu, CK 6% góp dài hạn, SHR từng nền, XD tự do" href="ban-dat-nen-du-an-duong-dinh-duc-thien-72/ban-dat-mat-tien-binh-chanh-gia-320-trieu-ck-6-gop-dai-han-shr-tung-nenxd-tu-do-pr7112838.html">Bán đất mặt tiền Bình Chánh giá 320 triệu, CK 6% góp dài hạn, SHR từng nền, XD tự do</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_4" title="Bán đất mặt tiền Bình Chánh giá 320 triệu, CK 6% góp dài hạn, SHR từng nền, XD tự do" class="avatar" href="ban-dat-nen-du-an-duong-dinh-duc-thien-72/ban-dat-mat-tien-binh-chanh-gia-320-trieu-ck-6-gop-dai-han-shr-tung-nenxd-tu-do-pr7112838.html"><img id="MainContent_ProductHot_rptNewProducts_imgAvatar_4" src="../img.phonhadat.net/crop/110x75/2017/08/04/20170804104517-f613.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    100&nbsp;m&#178;
                                                </span>
                                                <span class="address">
                                                    Bình Chánh - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    6.5 Triệu/m²
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="prTop" style="display: none">
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Đất bình chánh giá rẻ 189 triệu/75m2 góp dài hạn CK 5% xây dựng tự do" href="ban-dat-nen-du-an-duong-835c-xa-binh-chanh-3/dat-binh-chanh-gia-re-189-trieu75m2-gop-dai-han-ck-5-xay-dung-tu-do-pr7185252.html">Đất bình chánh giá rẻ 189 triệu/75m2 góp dài hạn CK 5% xây dựng tự do</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptTop_hplAvatar_0" title="Đất bình chánh giá rẻ 189 triệu/75m2 góp dài hạn CK 5% xây dựng tự do" class="avatar" href="ban-dat-nen-du-an-duong-835c-xa-binh-chanh-3/dat-binh-chanh-gia-re-189-trieu75m2-gop-dai-han-ck-5-xay-dung-tu-do-pr7185252.html"><img id="MainContent_ProductHot_rptTop_imgAvatar_0" src="../img.phonhadat.net/crop/110x75/2017/08/18/20170818134628-abc9.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    Không xác định
                                                </span>
                                                <span class="address">
                                                    Bình Chánh - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    189 Triệu
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Bán đất nền có SHR CSHTHT 250 triệu/100 góp dài hạn ,xây dựng tự do" href="ban-dat-nen-du-an-duong-835b-xa-binh-chanh-3/ban-dat-nen-co-shr-cshtht-250-trieu100-gop-dai-han-xay-dung-tu-do-pr7202653.html">Bán đất nền có SHR CSHTHT 250 triệu/100 góp dài hạn ,xây dựng tự do</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptTop_hplAvatar_1" title="Bán đất nền có SHR CSHTHT 250 triệu/100 góp dài hạn ,xây dựng tự do" class="avatar" href="ban-dat-nen-du-an-duong-835b-xa-binh-chanh-3/ban-dat-nen-co-shr-cshtht-250-trieu100-gop-dai-han-xay-dung-tu-do-pr7202653.html"><img id="MainContent_ProductHot_rptTop_imgAvatar_1" src="../img.phonhadat.net/crop/110x75/2017/08/22/20170822140427-9268.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    Không xác định
                                                </span>
                                                <span class="address">
                                                    Bình Chánh - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    250000.00 Tỷ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Bán nhà MT, 3 lầu, mới, đẹp, đường Nguyễn Phi Khanh, Q1. Dt: 4m x 25m. Giá: 16,5 ty." href="ban-nha-mat-pho-duong-nguyen-phi-khanh-53/ban-nha-mt-3-lau-moi-dep-duong-nguyen-phi-khanh-q1-dt-4m-x-25m-gia-165-ty-pr9959526.html">Bán nhà MT, 3 lầu, mới, đẹp, đường Nguyễn Phi Khanh, Q1. Dt: 4m x 25m. Giá: 16,5 ty.</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptTop_hplAvatar_2" title="Bán nhà MT, 3 lầu, mới, đẹp, đường Nguyễn Phi Khanh, Q1. Dt: 4m x 25m. Giá: 16,5 ty." class="avatar" href="ban-nha-mat-pho-duong-nguyen-phi-khanh-53/ban-nha-mt-3-lau-moi-dep-duong-nguyen-phi-khanh-q1-dt-4m-x-25m-gia-165-ty-pr9959526.html"><img id="MainContent_ProductHot_rptTop_imgAvatar_2" src="../img.phonhadat.net/crop/110x75/2018/04/25/20180425134950-46a2.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    Không xác định
                                                </span>
                                                <span class="address">
                                                    Quận 1 - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    Thỏa thuận
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Đất nền nằm trung tâm hạnh chính 360 triệu/nền CK cao, trả góp dài hạn" href="ban-dat-nen-du-an-cat-tuong-phu-sinh-eco-city/dat-nen-nam-trung-tam-hanh-chinh-360-trieunen-ck-cao-gop-dai-han-pr7281614.html">Đất nền nằm trung tâm hạnh chính 360 triệu/nền CK cao, trả góp dài hạn</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptTop_hplAvatar_3" title="Đất nền nằm trung tâm hạnh chính 360 triệu/nền CK cao, trả góp dài hạn" class="avatar" href="ban-dat-nen-du-an-cat-tuong-phu-sinh-eco-city/dat-nen-nam-trung-tam-hanh-chinh-360-trieunen-ck-cao-gop-dai-han-pr7281614.html"><img id="MainContent_ProductHot_rptTop_imgAvatar_3" src="Images/no-photo.png" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    Không xác định
                                                </span>
                                                <span class="address">
                                                    Đức Hòa - Long An
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    Thỏa thuận
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <h3 class="title">
                                        <a id="hplTitle" title="Đất thổ cư xây tự do, CSHT HT, SH riêng, giá 336 /nền góp 30 tháng CK cao" href="ban-dat-nen-du-an-duong-an-phu-dong-phuong-an-phu-dong-1/dat-tho-cu-xay-tu-docsht-htshr-gia-336-nen-gop-30-thang-ck-cao-pr7297590.html">Đất thổ cư xây tự do, CSHT HT, SH riêng, giá 336 /nền góp 30 tháng CK cao</a>
                                        </h3>
                                        <div class="pr_info">
                                            <a id="MainContent_ProductHot_rptTop_hplAvatar_4" title="Đất thổ cư xây tự do, CSHT HT, SH riêng, giá 336 /nền góp 30 tháng CK cao" class="avatar" href="ban-dat-nen-du-an-duong-an-phu-dong-phuong-an-phu-dong-1/dat-tho-cu-xay-tu-docsht-htshr-gia-336-nen-gop-30-thang-ck-cao-pr7297590.html"><img id="MainContent_ProductHot_rptTop_imgAvatar_4" src="../img.phonhadat.net/crop/110x75/2017/09/06/20170906135057-8a0e.jpg" /></a>
                                            
                                            <div class="cl2">
                                                <span class="area">
                                                    48&nbsp;m&#178;
                                                </span>
                                                <span class="address">
                                                    Quận 12 - Hồ Chí Minh
                                                </span>
                                                <div class="mb10"></div>
                                                <span class="price">
                                                    360 Triệu
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl_right">
                        <div class="box_main">
                            <div class="box_product">
                                <h1 class="titlebox">
                                <span>Đất bán tại Việt Nam</span>
                                </h1>
                                <div class="clear"></div>
                                <h2 class="box-result">
                                Tiêu chí tìm kiếm: <b>Đất bán</b>.
                                <span class="text">
                                    Có <b>41,175</b> bất động sản.
                                </span>
                                </h2>
                                <div class="box-order">
                                    <div class="order">
                                        <select name="ctl00$MainContent$ProductSearchResult1$ddlOrder" onchange="sortchange();setTimeout(&#39;__doPostBack(\&#39;ctl00$MainContent$ProductSearchResult1$ddlOrder\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlOrder">
                                            <option selected="selected" value="0">Th&#244;ng thường</option>
                                            <option value="2">Gi&#225; thấp nhất</option>
                                            <option value="3">Gi&#225; cao nhất</option>
                                            <option value="4">Diện t&#237;ch nhỏ nhất</option>
                                            <option value="5">Diện t&#237;ch lớn nhất</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="productlist">
                                <div class="listbox">
                                    <div class="item first">
                                        <a id="MainContent_ProductSearchResult1_rpProductList_hplAvatar_0" title="Bán đất KDC Dương Hồng 2 Nguyễn Văn Linh nối dài không gian sống lí tưởng, 450 triệu/nền" class="avatar" href="ban-dat-nen-du-an-duong-hong-garden-house/ban-dat-kdc-duong-hong-2-nguyen-van-linh-noi-dai-khong-gian-song-li-tuong-450-trieunen-pr7356575.html"><img id="MainContent_ProductSearchResult1_rpProductList_imgAvatar_0" src="../img.phonhadat.net/crop/226x143/2017/09/14/20170914094300-ec0c.jpg" /></a>
                                        <div class="wr_info">
                                            <h4 class="title">
                                            <a id="hplTitle" href="ban-dat-nen-du-an-duong-hong-garden-house/ban-dat-kdc-duong-hong-2-nguyen-van-linh-noi-dai-khong-gian-song-li-tuong-450-trieunen-pr7356575.html">Bán đất KDC Dương Hồng 2 Nguyễn Văn Linh nối dài không gian sống lí tưởng, 450 ...</a>
                                            </h4>
                                            <div class="time">
                                                <span>25.04.2018</span>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="cl1">
                                                    <label>Diện tích</label>
                                                    <label>Địa điểm</label>
                                                </div>
                                                <div class="cl2">
                                                    
                                                    <div class="area">
                                                        100&nbsp;m&#178;
                                                    </div>
                                                    <div class="address">
                                                        Bình Chánh - Hồ Chí Minh
                                                    </div>
                                                    <div class="text_center">
                                                        <div class="price">
                                                            450 Triệu
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wr_view">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a id="MainContent_ProductSearchResult1_rpProductList_hplAvatar_1" title="Bán một số lô đất cực đẹp khu TĐC, đối diện UB Quán Bàu, đường 15m" class="avatar" href="ban-dat-nen-du-an-phuong-quan-bau/ban-mot-so-lo-dat-cuc-dep-khu-tdc-doi-dien-ub-quan-bau-duong-15m-pr8584160.html"><img id="MainContent_ProductSearchResult1_rpProductList_imgAvatar_1" src="../img.phonhadat.net/crop/226x143/2018/01/10/20180110112703-5001.jpg" /></a>
                                        <div class="wr_info">
                                            <h4 class="title">
                                            <a id="hplTitle" href="ban-dat-nen-du-an-phuong-quan-bau/ban-mot-so-lo-dat-cuc-dep-khu-tdc-doi-dien-ub-quan-bau-duong-15m-pr8584160.html">Bán một số lô đất cực đẹp khu TĐC, đối diện UB Quán Bàu, đường 15m</a>
                                            </h4>
                                            <div class="time">
                                                <span>25.04.2018</span>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="cl1">
                                                    <label>Diện tích</label>
                                                    <label>Địa điểm</label>
                                                </div>
                                                <div class="cl2">
                                                    
                                                    <div class="area">
                                                        126&nbsp;m&#178;
                                                    </div>
                                                    <div class="address">
                                                        Vinh - Nghệ An
                                                    </div>
                                                    <div class="text_center">
                                                        <div class="price">
                                                            12.7 Triệu/m²
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wr_view">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item last">
                                        <a id="MainContent_ProductSearchResult1_rpProductList_hplAvatar_2" title="Bán lô đẹp tại dự án Phú Thọ, gần sân bay Vinh, thuộc lối 2 đường 32m" class="avatar" href="ban-dat-nen-du-an-xa-nghi-phu/ban-lo-dep-tai-du-an-phu-tho-gan-san-bay-vinh-thuoc-loi-2-duong-32m-pr9383718.html"><img id="MainContent_ProductSearchResult1_rpProductList_imgAvatar_2" src="Images/no-photo.png" /></a>
                                        <div class="wr_info">
                                            <h4 class="title">
                                            <a id="hplTitle" href="ban-dat-nen-du-an-xa-nghi-phu/ban-lo-dep-tai-du-an-phu-tho-gan-san-bay-vinh-thuoc-loi-2-duong-32m-pr9383718.html">Bán lô đẹp tại dự án Phú Thọ, gần sân bay Vinh, thuộc lối 2 đường 32m</a>
                                            </h4>
                                            <div class="time">
                                                <span>25.04.2018</span>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="cl1">
                                                    <label>Diện tích</label>
                                                    <label>Địa điểm</label>
                                                </div>
                                                <div class="cl2">
                                                    
                                                    <div class="area">
                                                        140&nbsp;m&#178;
                                                    </div>
                                                    <div class="address">
                                                        Vinh - Nghệ An
                                                    </div>
                                                    <div class="text_center">
                                                        <div class="price">
                                                            1.19 Tỷ
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wr_view">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="pager_controls">
                                    <a href='ban-dat-dat-nen.html' title='P1'>
                                        <div  class='style-pager-row-selected' align='center'>1</div>
                                    </a>
                                    <a href='ban-dat-dat-nen/p2.html'  title='P2'>
                                        <div  class='style-pager-button-next-first-last' align='center'>></div>
                                    </a>
                                    <a href='ban-dat-dat-nen/p1373.html' title='P1373'>
                                        <div  class='style-pager-button-next-first-last' align='center'>Trang cuối</div>
                                    </a>
                                    <span id="MainContent_ProductSearchResult1_ProductsPager">
                                    </span>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $("#ddlOrder").selectbox();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer"></div>
        </div>
    </body>
<!-- Mirrored from phonhadat.net/ban-dat-dat-nen.htm by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Apr 2018 07:42:18 GMT -->
</html>