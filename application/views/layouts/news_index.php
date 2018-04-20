<div class="col_650 margin_bottom">
    <?php $news = $this->news->getNewsHome(11, HEADER_NEWS); ?>
    <?php if (count($news) > 0): ?>
        <div id="hot_latest_news">
            <div class="slides_container">
                <?php foreach ($news as $key => $new): 
                    if ($key >= 5) continue; ?>
                        <div class="slide_content">
                            <a href="<?php echo $new->getNewsUrl() ?>">
                                <img src="<?php echo base_url($new->featured_image); ?>" width="310" height="200" alt="<?php echo $new->title ?>" style="float:left"/>
                            </a>
                            <div class="body">
                                <h2 class="larger_title"><a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->title ?></a></h2>
                                <span class="updated_date"><?php echo $new->get_update_date() ?></span><br />
                                <p><?php echo $new->shorterContent($new->short_content, 260) ?></p>
                            </div>
                        </div>
                <?php endforeach ?>
            </div>
            <div class="paging_1">
                <?php $count = count($news) >= 5 ? 5 : count($news) ?>
                <ul>
                    <?php for ($i=1; $i <= $count; $i++) { ?>
                        <li><a href="#"><?php echo $i ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php if (count($news) > 5): ?>
            <div id="updated_news_list">
                <h3 class="headline_title"><span>THÔNG TIN MỚI CẬP NHẬT</span></h3>
                <ul class="listing_1">
                    <?php foreach ($news as $key => $new): 
                        if ($key < 5) continue; ?>
                        <li class="updated_news_section">
                            <div class="updated_news_descript">
                                <h2><a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->title ?></a></h2>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
    <?php endif ?>
</div>

<script type="text/javascript">
    $(function () {
    // slide show trang chu
    $('#hot_latest_news').slides({
        preload: true,
        generateNextPrev: true,
        play: 5000,
        generatePagination: false,
        generateNextPrev: false,
        pagination: true,
        paginationClass: 'paging_1',
        currentClass: 'actived',
        preloadImage: '/Content/loading.gif'
        });
    });
</script>