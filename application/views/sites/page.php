<div id="content_container">
    <div class="wrap">
        <div id="news_listing" class="news_form margin_bottom">
            <div class="rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                <div class="breadcrumb">
                    <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo base_url(); ?>" itemprop="url" title="Trang Chủ"><span itemprop="title">Trang Chủ</span></a>
                        »            </div>
                    <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url" title="<?php echo $page->title; ?>"><span itemprop="title"><?php echo $page->title; ?></span></a>
                    </div>
                </div>

                <div class="body">
                    <h2 class="sub_title"></h2>
                    <h1 class="larger_title"><?php echo $page->title; ?></h1>
                    <span class="updated_date">Cập nhật <?php echo date('d/m/Y H:i', strtotime($page->created_date)); ?></span><br>
                    <div class="news-content">
                        <?php echo $page->content; ?>
                    </div>
            </div>
        </div>
    </div>
</div>