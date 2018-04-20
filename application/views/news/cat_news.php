<div class="col_460 margin_left margin_bottom">
    <div id="news_listing" class="news_form margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline"><span>Thị trường địa ốc</span></h2>
            <div class="paging_2">
                <ul class="pager">
                    <?php echo $links; ?>
                </ul>
            </div>
        </div>
        <div>
            <div class="breadcrumb">
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="../tin-tuc.html" itemprop="url" title="Th&#244;ng tin Địa ốc"><span itemprop="title">Thông tin Địa ốc</span></a>&raquo;            
                </div>
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="<?php echo $link_1 ?>" itemprop="url" title="<?php echo $parent_category_name ?>"><span itemprop="title"><?php echo $parent_category_name ?></span></a>&raquo;            
                </div>
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="<?php echo $link_2 ?>" itemprop="url" title="<?php echo $category_name ?>"><span itemprop="title"><?php echo $category_name ?></span></a>
                </div>
            </div>
        </div>
        <?php if (count($news) > 0): ?>
            <div class="rounded_style_2 rounded_box">
                <div class="TL"></div>
                <div class="TR"></div>
                <div class="BL"></div>
                <div class="BR"></div>
                <div class="body">
                    <ul>
                        <?php foreach ($news as $new): ?>
                            <li >
                                <div class="wrapper">
                                    <div class="img">
                                        <a href="<?php echo $new->getNewsUrl() ?>">
                                            <img src="<?php echo base_url($new->featured_image); ?>" width="130" height="100" alt="<?php echo $new->title ?>"/>
                                        </a>
                                    </div>
                                    <div class="news_info">
                                        <h2><a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->title ?></a></h2>
                                        <span class="updated_date">Cập nhật : <?php echo $new->get_created_date('d-m-y h:i') ?></span><br />
                                        <p><?php echo $new->shorterContent($new->short_content, 160) ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="paging_2">
        <ul class="pager">
            <?php echo $links; ?>
        </ul>
    </div>
</div>


