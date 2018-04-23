<div class="col_300 margin_left">
    <?php $ads = $this->banner->getAdsByLocation(SIDEBAR_ADVERTISEMENT); 
    if (count($ads) > 0) :?>
    <div id="position_2" class ='banner_300x250'>
        <?php foreach ($ads as $ad): ?>
            <div>
                <a href="<?php echo !empty($ad->url) ? $ad->url : 'javascript:void(0)' ?>" target="_blank">
                    <img src="<?php echo $ad->get_image() ?>" width="300px" height="250px"/>
                </a>
            </div>
        <?php endforeach ?>
    </div>
    <?php endif; ?>
    <script type='text/javascript'>
        var Banner2=1;
        function Random_Banner2(){
            var _Arr=document.getElementById("position_2").getElementsByTagName("div");
            for (i=0; i<=_Arr.length-1; i++) {
                _Arr[i].className='bannerHide';
            }    
            _Arr[Banner2 - 1].className='bannerShow';
            var tempBanner = $(_Arr[Banner2 - 1]).html(); 
            $(_Arr[Banner2 - 1]).html(''); 
            $(_Arr[Banner2 - 1]).html(tempBanner);    
            window.setTimeout("Random_Banner2()" ,25000);    
            Banner2 = Banner2 + 1;    
            if(Banner2 > _Arr.length)        
                Banner2 = 1;
        }
        Random_Banner2();
    </script>
    <div class="menu_col_left">
        <?php $categories = $this->categories->getCategoryNewFE(2); 
        if (count($categories) > 0): 
            foreach ($categories as $category_id => $category): ?>
                <div class="margin_bottom" style="clear:both;display:table;">
                    <div class="headline_title_1 rounded_style_5 rounded_box">
                        <div class="TL"></div>
                        <div class="TR"></div>
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <h2 class="headline"><a href="<?php echo $this->categories->getUrlCustom(['slug' => $category['slug']]) ?>"><span><?php echo $category['name'] ?></span></a></h2>
                    </div>
                    <div class="headline_title_2 rounded_box">
                    <?php if (!empty($category['child'])): ?>
                            <ul>
                                <?php foreach ($category['child'] as $child_id => $child):
                                    $class = isset($active) && $active == $child_id ? 'actived' : '';?>
                                    <li style="width:100%" class="<?php echo $class ?>"><a style="width:100%" href="<?php echo $this->categories->getUrlCustom(['slug_parent' => $category['slug'], 'slug' => $child['slug']]) ?>"><?php echo $child['name'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                    <?php endif ?>
                    </div>
                </div>
            <?php endforeach;
        endif ?>
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
    <?php $bds = $this->bds->getBdsMenu(5);
    if (count($bds) > 0) :?>
        <div class="asset-spec-left margin_bottom">
            <div class="headline_title_1 rounded_style_5 rounded_box">
                <h2 class="headline"><span>TÀI SẢN MỚI NHẤT</span></h2>
            </div>
            <div class="rounded_style_2 rounded_box">
                <div class="content">
                    <ul class="listing_1">
                        <?php foreach ($bds as $row): ?>
                            <li>
                                <a href="<?php echo $row->getUrl(); ?>" >
                                    <h2>
                                        <img src="<?php echo $row->getFirstImage(); ?>" style="float:left; margin-right:5px;" width="45" height="45" alt="<?php echo $row->name; ?>" title="<?php echo $row->name; ?>" />
                                        <?php echo $row->shorterContent($row->name, 55) ?>
                                    </h2>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>