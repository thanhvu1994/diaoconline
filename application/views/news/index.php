<link href="<?php echo base_url('themes/website/css/News.css') ?>" rel="stylesheet" type="text/css" />
<div class="col_240">
    <div id="top_news" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline"><span>THÔNG TIN XEM NHIỀU NHẤT</span></h2>
        </div>
        <?php $news = $this->news->get_model([], 5); ?>
        <div class="rounded_style_7 rounded_box">
            <ul class="listing_5">
                <?php foreach ($news as $new): ?>
                    <li >
                        <div class="img">
                            <a href="<?php echo $new->getNewsUrl() ?>">
                                <img src="<?php echo base_url($new->featured_image); ?>" width="90" height="70" alt="<?php echo $new->title ?>"/></a>
                        </div>
                        <div class="right">
                            <h2>
                                <a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->shorterContent($new->title, 60) ?></a>
                            </h2>
                            <span class="updated_date"><?php echo $new->get_created_date('d-m-y h:i') ?></span>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div id="left_search" class="rounded_style_1 rounded_box margin_bottom">
        <script type="text/javascript">
            $(function () {
                $("#FormSearch").submit(function () {
                    if ($('#KeySearch').val().trim().length <= 2) {
                        $('#KeySearch').focus();
                        return false;
                    } else {
                        return true;
                    }
                });
            });
        </script>
        <div class="body">
            <form action="http://diaoconline.vn/tin-tuc/tim-kiem" id="FormSearch" method="post" class="form_style_1">
                <fieldset>
                    <div class="business_search_type margin_bottom_form">
                        <input type="text" class="input_text" value="" id="KeySearch" name="KeySearch" placeholder="Nhập từ khóa cần tìm"/>
                        <button type="submit" name="Submit" id="Submit" class="btn_2"><span>TÌM KIẾM</span></button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div id="realty_library" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/thu-vien-dia-oc-c44.html"><span>Thư Viện Địa Ốc</span></a></h2>
                <a href="tin-tuc/thu-vien-dia-oc-c44.html" class="grey_link">Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <ul class="listing_1">
                    <li >
                        <span class="arrow"></span> 
                        <a href="tin-tuc/cac-bieu-mau-nha-dat-c21.html">
                            Các biểu mẫu nhà đất</a>
                    </li>
                    <li >
                        <span class="arrow"></span> 
                        <a href="tin-tuc/ban-do-qh-su-dung-dat-c19.html">
                            Bản đồ QH sử dụng đất
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="pricing" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="bang-gia-du-an.html"><span>BẢNG GIÁ DỰ ÁN</span></a></h2>
                <a href="bang-gia-du-an.html" class="grey_link">Xem thêm</a>
            </div>
            <div class="rounded_style_2 rounded_box">
                <div class="content">
                    <ul class="listing_1">
                        <li >
                            <span class="arrow"></span>
                            <a href="bang-gia-du-an/binh-duong-c61.html">Bảng giá dự án Bình Dương</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    <div id="business_news" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline"><a href="ban-tin-dia-oc.html"><span>BẢN TIN ĐỊA ỐC</span></a></h2>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <ul>
                    <li>
                        <div class="headline_wrap">
                            <div class="headline">
                                <h3><a href="ban-tin-dia-oc.html">Bản tin Savills</a></h3>
                            </div>
                            <div class="logo"><a href="ban-tin-dia-oc.html" title="Bản tin Savills"><img src="../image.diaoconline.vn/ban-tin-dia-oc/2013/01/17/8CD-savills.jpg" width="89" height="39" alt="Savills" /></a></div>
                        </div>
                        <div class="listing">
                            <ul>
                                <li>
                                    <span class="arrow"></span><a href="http://image.diaoconline.vn/FilesBanTin/2017/07/24/bao-cao-thi-truong-bds-viet-nam-quy-2-2017.pdf" title="B&#225;o c&#225;o thị trường BĐS Việt Nam Qu&#253; 2/2017" target="_blank">Báo cáo thị trường BĐS Việt Nam Quý 2/2017</a></li>
                                    <li><span class="arrow"></span><a href="http://image.diaoconline.vn/FilesBanTin/2017/02/21/chi-so-gia-bds-tphcm-quy-4-2016.pdf" title="Chỉ số gi&#225; BĐS TPHCM Qu&#253; 4-2016" target="_blank">Chỉ số giá BĐS TPHCM Quý 4-2016</a>
                                    </li>
                                    <li class="last">
                                        <span class="arrow"></span><a href="http://image.diaoconline.vn/FilesBanTin/2017/02/21/chi-so-gia-bds-ha-noi-quy-4-2016.pdf" title="Chỉ số gi&#225; BĐS H&#224; Nội Qu&#253; 4-2016" target="_blank">Chỉ số giá BĐS Hà Nội Quý 4-2016</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                    </ul>
                </div>
            </div>
    </div>
</div>
<div class="col_400 margin_left margin_bottom">
    <div id="sider" class="margin_bottom">
        <div id="jslidernews" class="lof-slidecontent" style="width: 400px; height: 440px;">
            <div class="preload">
                <div>
                </div>
            </div>
            <div class="main-slider-content" style="width: 400px; height: 440px;">
                <ul class="sliders-wrap-inner">
                    <li><a href="tin-tuc/thi-truong-dia-oc-c18/danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao-i70259.html">
                        <img src="../image.diaoconline.vn/tin-tuc/2018/04/15/large-176-danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao.jpg" width="400" height="308" alt="Đánh thu&#234;́ nhà tr&#234;n 700 tri&#234;̣u đồng: B&#244;̣ Tài chính giải thích th&#234;́ nào?"/></a>
                        <div class="slide-item">
                            <h1>
                                <a href="tin-tuc/thi-truong-dia-oc-c18/danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao-i70259.html">Đánh thuế nhà trên 700 triệu đồng: Bộ Tài chính giải thích thế nào?</a></h1>
                            
                        </div>
                    </li> 
                </ul>
            </div>
            <div class="navigator-content">
                <div class="navigator-wrapper">
                    <ul class="navigator-wrap-inner">
                        <li>
                            <img src="../image.diaoconline.vn/tin-tuc/2018/04/15/thumb-176-danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao.jpg" width="78" height="60" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/thi-truong-dia-oc-c18.html">
                    <span>Thị trường địa ốc</span></a></h2>
            <a href="tin-tuc/thi-truong-dia-oc-c18.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/thi-truong-dia-oc-c18/danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao-i70259.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/04/15/thumb-176-danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao.jpg" width="130" height="100" alt="Đánh thu&#234;́ nhà tr&#234;n 700 tri&#234;̣u đồng: B&#244;̣ Tài chính giải thích th&#234;́ nào?"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/thi-truong-dia-oc-c18/danh-thue-nha-tren-700-trieu-dong-bo-tai-chinh-giai-thich-the-nao-i70259.html">Đánh thuế nhà trên 700 triệu đồng: Bộ Tài chính giải thích thế nào?</a></h2>
                        <span class="updated_date">Cập nhật 5 giờ 19 ph&#250;t trước</span><br />
                        <p>Một trong những nội dung đang gây chú ý đó là việc Bộ Tài chính đề nghị đánh thuế đối với  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                        <li><span class="arrow"></span><a href="tin-tuc/thi-truong-dia-oc-c18/yeu-cau-ha-noi-han-che-xay-nha-thap-tang-ngoai-trung-tam-i70258.html">Yêu cầu Hà Nội hạn chế xây nhà thấp tầng ngoài trung tâm</a></li>
                        <li><span class="arrow"></span><a href="tin-tuc/thi-truong-dia-oc-c18/dac-khu-con-dang-ban-gia-dat-da-len-con-sot-i70257.html">Đặc khu còn đang bàn, giá đất đã lên cơn sốt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/hoat-dong-doanh-nghiep-c23.html">
                    <span>Hoạt động Doanh nghiệp</span></a></h2>
            <a href="tin-tuc/hoat-dong-doanh-nghiep-c23.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/hoat-dong-doanh-nghiep-c23/can-ho-11-ty-tien-ich-van-nguoi-me-i70148.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/04/09/thumb-952-can-ho-11-ty-tien-ich-van-nguoi-me.jpg" width="130" height="100" alt="Căn hộ 1,1 tỷ, tiện &#237;ch vạn người m&#234;"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/hoat-dong-doanh-nghiep-c23/can-ho-11-ty-tien-ich-van-nguoi-me-i70148.html">Căn hộ 1,1 tỷ, tiện ích vạn người mê</a></h2>
                        <span class="updated_date">Cập nhật 09/04/2018 08:51</span><br />
                        <p>Sở hữu căn hộ giá vừa túi tiền nhưng vẫn tận hưởng được mọi tiện ích đẳng cấp luôn là điều mơ ước đối với  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                            <li><span class="arrow"></span><a href="tin-tuc/hoat-dong-doanh-nghiep-c23/ca-ngan-nguoi-xep-hang-cho-rut-tham-mua-can-ho-phu-my-hung-midtown-o-dot-mo-ban-thu-tu-i70040.html">Cả ngàn người xếp hàng, chờ rút thăm mua căn hộ Phú Mỹ Hưng Midtown ở đợt mở bán thứ tư</a></li>
                            <li><span class="arrow"></span><a href="tin-tuc/hoat-dong-doanh-nghiep-c23/savills-bo-nhiem-hai-vi-tri-giam-doc-moi-tai-bo-phan-cho-thue-thuong-mai-tphcm-va-ha-noi-i69684.html">Savills bổ nhiệm hai vị trí giám đốc mới tại bộ phận cho thuê thương mại TPHCM và Hà Nội</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/chinh-sach-quy-hoach-c16.html">
                    <span>Ch&#237;nh s&#225;ch - Quy hoạch</span></a></h2>
            <a href="tin-tuc/chinh-sach-quy-hoach-c16.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/chinh-sach-quy-hoach-c16/chung-cu-khach-san-truong-hoc-thuoc-dien-mua-bao-hiem-chay-no-i69587.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/03/06/thumb-FDE-chung-cu-khach-san-truong-hoc-thuoc-dien-mua-bao-hiem-chay-no.jpg" width="130" height="100" alt="Chung cư, kh&#225;ch sạn, trường học thuộc diện mua bảo hiểm ch&#225;y nổ"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/chinh-sach-quy-hoach-c16/chung-cu-khach-san-truong-hoc-thuoc-dien-mua-bao-hiem-chay-no-i69587.html">Chung cư, khách sạn, trường học thuộc diện mua bảo hiểm cháy nổ</a></h2>
                        <span class="updated_date">Cập nhật 06/03/2018 08:47</span><br />
                        <p>Nghị định số 23/2018/NĐ-CP quy định về bảo hiểm cháy, nổ bắt buộc có hiệu lực từ ngày 15/4/2018 nêu rõ nhiều  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                            <li><span class="arrow"></span><a href="tin-tuc/chinh-sach-quy-hoach-c16/quan-10-se-co-2-pho-chuyen-doanh-lam-thuong-hieu-i69485.html">Quận 10 sẽ có 2 phố chuyên doanh làm thương hiệu</a></li>
                            <li><span class="arrow"></span><a href="tin-tuc/chinh-sach-quy-hoach-c16/phat-hien-hang-loat-sai-pham-tai-nhieu-du-an-lat-da-via-he-o-ha-noi-i69414.html">Phát hiện hàng loạt sai phạm tại nhiều dự án lát đá vỉa hè ở Hà Nội</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/tai-chinh-chung-khoan-c57.html">
                    <span>T&#224;i ch&#237;nh - Chứng kho&#225;n</span></a></h2>
            <a href="tin-tuc/tai-chinh-chung-khoan-c57.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/tai-chinh-chung-khoan-c57/co-phieu-cua-chu-dau-tu-chung-cu-carina-plaza-tiep-tuc-do-san-i69935.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/03/26/thumb-A91-co-phieu-cua-chu-dau-tu-chung-cu-carina-plaza-tiep-tuc-do-san.jpg" width="130" height="100" alt="Cổ phiếu của chủ đầu tư chung cư Carina Plaza tiếp tục đỏ s&#224;n"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/tai-chinh-chung-khoan-c57/co-phieu-cua-chu-dau-tu-chung-cu-carina-plaza-tiep-tuc-do-san-i69935.html">Cổ phiếu của chủ đầu tư chung cư Carina Plaza tiếp tục đỏ sàn</a></h2>
                        <span class="updated_date">Cập nhật 26/03/2018 13:49</span><br />
                        <p>Phiên giao dịch sáng 26/3, cổ phiếu NBB của chủ đầu tư chưng cư Carina Plaza là Công ty Cổ phần Đầu tư Năm  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                            <li><span class="arrow"></span><a href="tin-tuc/tai-chinh-chung-khoan-c57/mua-cang-quy-nhon-roi-rut-ruot-nhieu-du-an-nam-i-i68963.html">Mua cảng Quy Nhơn rồi "rút ruột": Nhiều dự án nằm ì</a></li>
                            <li><span class="arrow"></span><a href="tin-tuc/tai-chinh-chung-khoan-c57/ngoai-hoi-dat-ky-luc-53-ti-usd-i68558.html">Ngoại hối đạt kỷ lục 53 tỉ USD</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/xay-dung-c25.html">
                    <span>X&#226;y dựng</span></a></h2>
            <a href="tin-tuc/xay-dung-c25.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/xay-dung-c25/gia-cat-xay-dung-bien-dong-manh-pho-thu-tuong-yeu-cau-7-bo-vao-cuoc-i70209.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/04/12/thumb-762-gia-cat-xay-dung-bien-dong-manh-pho-thu-tuong-yeu-cau-7-bo-vao-cuoc.jpg" width="130" height="100" alt="Gi&#225; c&#225;t x&#226;y dựng biến động mạnh, Ph&#243; Thủ tướng y&#234;u cầu 7 Bộ v&#224;o cuộc"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/xay-dung-c25/gia-cat-xay-dung-bien-dong-manh-pho-thu-tuong-yeu-cau-7-bo-vao-cuoc-i70209.html">Giá cát xây dựng biến động mạnh, Phó Thủ tướng yêu cầu 7 Bộ vào cuộc</a></h2>
                        <span class="updated_date">Cập nhật 12/04/2018 09:15</span><br />
                        <p>Trước tình tình giá cát xây dựng biến động mạnh, Phó Thủ tướng Trịnh Đình Dũng đã yêu cầu 7 Bộ: Xây dựng,  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                        <li><span class="arrow"></span><a href="tin-tuc/xay-dung-c25/nganh-xi-mang-dang-ban-re-tai-nguyen-i70083.html">Ngành xi-măng đang bán rẻ tài nguyên</a></li>
                        <li><span class="arrow"></span><a href="tin-tuc/xay-dung-c25/sau-cat-dan-xay-dung-lai-meo-mat-voi-gia-thep-i70015.html">Sau cát, dân xây dựng lại “méo mặt” với giá thép</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/bat-dong-san-the-gioi-c24.html">
                    <span>Bất động sản thế giới</span></a></h2>
            <a href="tin-tuc/bat-dong-san-the-gioi-c24.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/bat-dong-san-the-gioi-c24/sydney-chia-lam-3-thanh-pho-i70252.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/04/15/thumb-3DB-sydney-chia-lam-3-thanh-pho.jpg" width="130" height="100" alt="Sydney chia l&#224;m 3 th&#224;nh phố"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/bat-dong-san-the-gioi-c24/sydney-chia-lam-3-thanh-pho-i70252.html">Sydney chia làm 3 thành phố</a></h2>
                        <span class="updated_date">Cập nhật 5 giờ 41 ph&#250;t trước</span><br />
                        <p>Thành phố Sydney đông dân nhất ở Australia lên kế hoạch chia thành 3 thành phố trong vòng 20 năm. Kế hoạch  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                            <li><span class="arrow"></span><a href="tin-tuc/bat-dong-san-the-gioi-c24/thanh-pho-nao-co-gia-bat-dong-san-tang-nhanh-nhat-the-gioi-i70205.html">Thành phố nào có giá bất động sản tăng nhanh nhất thế giới?</a></li>
                            <li><span class="arrow"></span><a href="tin-tuc/bat-dong-san-the-gioi-c24/gia-nha-singapore-tang-manh-nhat-trong-8-nam-i70155.html">Giá nhà Singapore tăng mạnh nhất trong 8 năm</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <a href="tin-tuc/ngoai-kieu-viet-kieu-c17.html">
                    <span>Ngoại kiều - Việt kiều</span></a></h2>
            <a href="tin-tuc/ngoai-kieu-viet-kieu-c17.html" class="grey_link">
                Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <div class="wrapper">
                    <div class="img">
                        <a href="tin-tuc/ngoai-kieu-viet-kieu-c17/luong-kieu-hoi-ve-tphcm-uoc-dat-52-ty-usd-i69396.html">
                            <img src="../image.diaoconline.vn/tin-tuc/2018/02/26/thumb-77C-luong-kieu-hoi-ve-tphcm-uoc-dat-52-ty-usd.jpg" width="130" height="100" alt="Lượng kiều hối về TP.HCM ước đạt 5,2 tỷ USD"/></a></div>
                    <div class="news_info">
                        <h2>
                            <a href="tin-tuc/ngoai-kieu-viet-kieu-c17/luong-kieu-hoi-ve-tphcm-uoc-dat-52-ty-usd-i69396.html">Lượng kiều hối về TP.HCM ước đạt 5,2 tỷ USD</a></h2>
                        <span class="updated_date">Cập nhật 26/02/2018 09:48</span><br />
                        <p>Ngày 24/2, Công ty Tư vấn bất động sản Savills Việt Nam đã có báo cáo tổng quan về xu hướng đầu tư của Việt  ...</p>
                    </div>
                </div>
                <div class="latest">
                    <ul class="listing_7">
                            <li><span class="arrow"></span><a href="tin-tuc/ngoai-kieu-viet-kieu-c17/viet-kieu-ngheo-song-trong-nhung-can-phong-chat-choi-o-little-sai-gon-i68618.html">Việt kiều nghèo sống trong những căn phòng chật chội ở Little Sài Gòn</a></li>
                            <li><span class="arrow"></span><a href="tin-tuc/ngoai-kieu-viet-kieu-c17/go-vuong-cho-nguoi-nuoc-ngoai-mua-nha-tren-thong-duoi-van-tac-i68124.html">Gỡ vướng cho người nước ngoài mua nhà: Trên thông, dưới vẫn tắc</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col_300 margin_left">
    <div id="position_60" class ='banner_300x250'>
        <div>
            <a href="doanh-nghiep/cong-ty-luat-tnhh-duc-an-i1491/gioi-thieu.html" target="_blank">
                <img src="../image.diaoconline.vn/banner-dool/2014/03/27/295-Luat_DucAn_300x250.gif" width="300px" height="250px"/>
            </a>
        </div>
        <div>
            <a href="doanh-nghiep/cong-ty-luat-tnhh-duc-an-i1491/gioi-thieu.html" target="_blank"><img src="../image.diaoconline.vn/banner-dool/2014/03/27/295-Luat_DucAn_300x250.gif" width="300px" height="250px"/></a>
        </div>
    </div>
    <script type='text/javascript'>
        var Banner60=1;
        function Random_Banner60(){    
            var _Arr=document.getElementById("position_60").getElementsByTagName("div");    
            for (i=0; i<=_Arr.length-1; i++) {        
                _Arr[i].className='bannerHide';    
            }    
            _Arr[Banner60 - 1].className='bannerShow';    
            var tempBanner = $(_Arr[Banner60 - 1]).html(); 
            $(_Arr[Banner60 - 1]).html(''); 
            $(_Arr[Banner60 - 1]).html(tempBanner);   
            window.setTimeout("Random_Banner60()" ,25000);    
            Banner60 = Banner60 + 1;    
            if(Banner60 > _Arr.length)        
                Banner60 = 1;
        }
        Random_Banner60();
    </script>
    <div id="event" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                VIỆT NAM ĐẸP QUA ẢNH
            </h2>
            <a href="viet-nam-dep-qua-anh.html" class="grey_link">Xem thêm</a>
        </div>
        <div>
            <img src="../image.diaoconline.vn/vietnam-dep-qua-anh/2018/03/23/thumb-249-hoa-gao-thang-3-cho-bao-thuong-nho.jpg" alt="Hoa gạo th&#225;ng 3 chở bao thương nhớ" width="310" height="175" />
            <div style="font: Bold 12px Arial; padding: 5px 0px;">
                Hoa gạo tháng 3 chở bao thương nhớ</div>
        </div>
    </div>
    <div id="law_advisory" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline"><a href="tin-tuc/cafe-luat-c26.html"><span>TƯ VẤN CAFE LUẬT</span></a></h2>
            <a href="tin-tuc/cafe-luat-c26.html" class="grey_link">Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <ul class="listing_1">
                    <li >
                        <a href="tin-tuc/hop-thuc-hoa-c61/co-the-uy-quyen-thuc-hien-thu-tuc-chuyen-muc-dich-su-dung-dat-khong-i69796.html">
                        <img src="../image.diaoconline.vn/tin-tuc/2018/03/19/thumb-F9E-co-the-uy-quyen-thuc-hien-thu-tuc-chuyen-muc-dich-su-dung-dat-khong.jpg" alt="C&#243; thể ủy quyền thực hiện thủ tục chuyển mục đ&#237;ch sử dụng đất kh&#244;ng?" width="80" height="61" class="img-left"/>
                         Có thể ủy quyền thực hiện thủ tục chuyển mục đích sử dụng đất không?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="fengsui_advisory" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
            <a href="kham-pha/phong-thuy-c9.html"><span>Phong Thủy</span></a></h2>
            <a href="kham-pha/phong-thuy-c9.html" class="grey_link">Xem thêm</a>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="body">
                <ul class="listing_1">
                    <li >
                        <a href="kham-pha/phong-thuy-c9/cach-dat-ban-tho-trong-nha-o-va-chung-cu-i70041.html">
                        <img src="../image.diaoconline.vn/kham-pha/2018/04/02/thumb-4E8-cach-dat-ban-tho-trong-nha-o-va-chung-cu.jpg" alt="C&#225;ch đặt ban thờ trong nh&#224; ở v&#224; chung cư" width="80" height="61" class="img-left"/>
                         Cách đặt ban thờ trong nhà ở và chung cư</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="headline_8 margin_bottom">
            <h2>TÀI SẢN MỚI NHẤT</h2>
        </div>
        <div class="content">
            <ul class="listing_4 asset-spec-box">
                <li><a href="ban-nha-pho-c20/ban-sang-nhuong-nha-phoquan-tan-binhtphcm-mat-tien-duong-bau-cat-so-hong-i1589246.html" >
                    <img src="../image.diaoconline.vn/sieu-thi/2018/04/15/thumb-950-BCE5CC.jpg" width="75" height="75" alt="B&#225;n / Sang nhượng nh&#224; phốQuận T&#226;n B&#236;nhTP.HCM, mặt tiền đường, B&#224;u C&#225;t, Sổ hồng" title="B&#225;n / Sang nhượng nh&#224; phốQuận T&#226;n B&#236;nhTP.HCM, mặt tiền đường, B&#224;u C&#225;t, Sổ hồng" /></a>
                    <div class="right">
                        <h2>
                            <a href="ban-nha-pho-c20/ban-sang-nhuong-nha-phoquan-tan-binhtphcm-mat-tien-duong-bau-cat-so-hong-i1589246.html" title="B&#225;n / Sang nhượng nh&#224; phốQuận T&#226;n B&#236;nhTP.HCM, mặt tiền đường, B&#224;u C&#225;t, Sổ hồng">Bán / Sang nhượng nhà phốQuận Tân BìnhTP.HCM, mặt tiền đường, Bàu Cát, Sổ hồng</a></h2>
                        <span class="price">20 tỷ</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<link href="<?php echo base_url('themes/website/js/lofslidernews/styleNews.css') ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('themes/website/js/lofslidernews/jquery.easing.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('themes/website/js/lofslidernews/script.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // buttons for next and previous item                        
        $('#jslidernews').lofJSidernews({ interval: 3000,
            direction: 'opacitys',
            easing: 'easeInOutExpo',
            duration: 1200,
            auto: true,
            maxItemDisplay: 5,
            navPosition: 'horizontal', // horizontal
            navigatorHeight: 60,
            navigatorWidth: 80,
            mainWidth: 400,
            height: 500
        });
    });
</script>