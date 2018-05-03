<?php $bds = $this->bds->getBdsFeatured();
if (count($bds) > 0) :?>
<div class="col_650  margin_bottom">
    <div id="home_posted_property" class="col_650 margin_bottom">
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <div class="group_real">
                    <div class="headline_title_1 rounded_style_5 rounded_box">
                        <ul class="headline_tab">
                            <li class="actived"><span class="L"></span><a href="<?php echo base_url('dia-oc.html'); ?>">Tài sản nổi bật</a><span class="R"></span></li>
                        </ul>
                    </div>
                    <ul class="listing_1">
                        <?php foreach ($bds as $key => $row): 
                            $class_name = $key % 2 == 0 ? '' : 'margin_left'?>
                            <li class="<?php echo $class_name ?>">
                                <div class="posted_block hightlight_type_3 ">
                                    <div class="img"><a href="<?php echo $row->getUrl() ?>">
                                    <img src="<?php echo $row->getFirstImage() ?>" width="120" height="120" alt="<?php echo $row->name ?>"/></a></div>
                                    <div class="posted_info">
                                        <h2><a style="color: #b31f24;" href="<?php echo $row->getUrl() ?>"><?php echo $row->name ?></a></h2>
                                        <span class="location"><a class="link-ext" href="<?php echo base_url('dia-oc.html'); ?>"><?php echo $row->getDistrict(); ?></a>,
                                        <a class="link-ext" href="<?php echo base_url('dia-oc.html'); ?>"><?php echo $row->getProvince(); ?></a></span><br />
                                        <span class="price"><?php echo $row->getPrice(); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <a class="view_all" href="<?php echo base_url('dia-oc.html'); ?>">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>