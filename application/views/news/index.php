<link href="<?php echo base_url('themes/website/css/News.css') ?>" rel="stylesheet" type="text/css" />
<!-- <div class="col_240">
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

    <?php $categories = $this->categories->getCategoryNewFE(2);
        if (count($categories) > 0): 
            $count = 0;
            foreach ($categories as $category_id => $category): 
                if (!empty($category['child'])): 
                    if ($count == 0) {
                        $count++;
                        continue;
                    } ?>
                <div id="realty_library" class="margin_bottom">
                    <div class="headline_title_1 rounded_style_5 rounded_box">
                        <h2 class="headline">
                            <a href="<?php echo $this->categories->getUrlCustom(['slug' => $category['slug']]) ?>"><span><?php echo $category['name'] ?></span></a></h2>
                            <a class="grey_link" href="<?php echo $this->categories->getUrlCustom(['slug' => $category['slug']]) ?>">Xem thêm</a>
                    </div>
                    <?php if (!empty($category['child'])): ?>
                    <div class="rounded_style_2 rounded_box">
                        <div class="content">
                            <ul class="listing_1">
                                <?php foreach ($category['child'] as $child_id => $child):?>
                                <li >
                                    <span class="arrow"></span> 
                                    <a href="<?php echo $this->categories->getUrlCustom(['slug_parent' => $category['slug'], 'slug' => $child['slug']]) ?>">
                                        <?php echo $child['name'] ?></a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
                <?php endif;
            endforeach;
        endif ?>
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
</div> -->
<div class="col_650 margin_bottom">
    <?php $new_slider = $this->news->getNewsHome(6, HEADER_NEWS); 
    if (count($new_slider) > 0) :?>
        <div id="sider" class="margin_bottom">
            <div id="jslidernews" class="lof-slidecontent" style="width: 650px; height: 440px;">
                <div class="preload">
                    <div>
                    </div>
                </div>
                <div class="main-slider-content" style="width: 650px; height: 440px;">
                    <ul class="sliders-wrap-inner">
                        <?php foreach ($new_slider as $new): ?>
                            <li>
                                <a href="<?php echo $new->getNewsUrl() ?>">
                                    <img src="<?php echo base_url($new->featured_image); ?>" width="650" height="308" alt="<?php echo $new->title ?>"/>
                                </a>
                                <div class="slide-item">
                                    <h1>
                                        <a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->title ?></a>
                                    </h1>
                                    
                                </div>
                            </li> 
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="navigator-content">
                    <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                            <?php foreach ($new_slider as $new): ?>
                                <li>
                                    <img src="<?php echo base_url($new->featured_image); ?>" width="78" height="60" alt=""/>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    <?php endif ?>
    <?php $categories = $this->categories->getCategoryNewFE(2, '0, 1');
    if (count($categories) > 0): 
        foreach ($categories as $category_id => $category): 
            if (!empty($category['child'])): 
                foreach ($category['child'] as $child_id => $child): 
                    $news = $this->news->getNewsInMenu($child_id, 3); 
                    if (count($news) > 0) :
                        $slug_parent = $this->categories->getSlugParent($child_id) ?>
                        <div class="news_form margin_bottom">
                            <div class="headline_title_1 rounded_style_5 rounded_box">
                                <h2 class="headline">
                                    <a href="<?php echo $this->categories->getUrlCustom(['slug_parent' => $slug_parent, 'slug' => $child['slug']]) ?>">
                                        <span><?php echo $child['name'] ?></span></a></h2>
                                <a href="<?php echo $this->categories->getUrlCustom(['slug_parent' => $slug_parent, 'slug' => $child['slug']]) ?>" class="grey_link">
                                    Xem thêm</a>
                            </div>
                            <div class="rounded_style_2 rounded_box">
                                <div class="body">
                                    <div class="wrapper">
                                        <div class="img">
                                            <a href="<?php echo $news[0]->getNewsUrl() ?>">
                                                <img src="<?php echo base_url($news[0]->featured_image); ?>" width="130" height="100" alt="<?php echo $news[0]->title ?>"/></a></div>
                                        <div class="news_info">
                                            <h2>
                                                <a href="<?php echo $news[0]->getNewsUrl() ?>"><?php echo $news[0]->title ?></a></h2>
                                            <span class="updated_date">Cập nhật : <?php echo $news[0]->get_created_date('d-m-y h:i') ?></span><br />
                                            <p><?php echo $new->shorterContent($new->short_content, 250) ?></p>
                                        </div>
                                    </div>
                                    <?php if (count($news) > 1) :?>
                                        <div class="latest">
                                            <ul class="listing_7">
                                                <?php foreach ($news as $key => $new): 
                                                    if ($key == 0) continue;?>
                                                    <li><span class="arrow"></span><a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->title ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
            <?php endif;
                endforeach;
            endif;
        endforeach;
    endif ?>
</div>

<?php $this->load->view('news/right_sidebar'); ?>

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
            mainWidth: 650,
            height: 500
        });
    });
</script>