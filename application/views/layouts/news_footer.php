<div id="box_news" class="col_650">
    <?php $news = $this->news->getNewsHome(4, FOOTER_NEWS); 
    if (count($news) > 0) :?>
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <div class="content">
                <ul class="headline_tab">
                    <li class="actived"><span class="L"></span><a href="kham-pha/kham-pha-trai-nghiem-c3.html">Kh&#225;m Ph&#225;</a><span class="R"></span></li>
                    <li><a href="kham-pha/khong-gian-song-c7.html"><span>Kh&#244;ng Gian Sống</span></a></li>
                    <li><a href="kham-pha/the-gioi-kien-truc-c4.html"><span>Thế Giới Kiến Tr&#250;c</span></a></li>
                    <li><a href="kham-pha/phong-thuy-c9.html"><span>Phong Thủy</span></a></li>
                    <li><a href="kham-pha/mach-ban-c6.html"><span>M&#225;ch Bạn</span></a></li>
                    <li><a href="kham-pha/thuong-hieu-c11.html"><span>Thương Hiệu</span></a></li>
                </ul>
            </div>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <div class="latest_news">
                    <div class="img"><a href="<?php echo $news[0]->getNewsUrl() ?>"><img src="<?php echo base_url($news[0]->featured_image); ?>" width="400" height="250" alt="<?php echo $news[0]->title ?>"/></a></div>
                    <div class="news_info">
                        <?php $category = $this->categories->get_model(['id' => $news[0]->category_id]);
                        if (count($category) > 0) :?>
                            <div class="category"><a href="<?php echo $category->getUrl() ?>">»<?php echo $category->category_name?></a></div>
                        <?php endif?>
                        <h2 class="larger_title"><a href="<?php echo $news[0]->getNewsUrl() ?>"><?php echo $news[0]->title ?></a></h2>
                        <div class="updated_date"><span><?php echo $news[0]->get_update_date() ?></span></div>
                        <br />
                        <p><?php echo $news[0]->shorterContent($news[0]->short_content, 260) ?></p>
                    </div>
                </div>
                <?php if (count($news) > 1): ?>
                    <div class="other_news">
                        <h3 class="headline_title"><span>CÁC TIN KHÁC</span></h3>
                        <ul>
                            <?php foreach ($news as $key => $new): 
                                if ($key == 0) continue; ?>
                                <li >
                                    <div class="news_block">
                                        <a href="<?php echo $new->getNewsUrl() ?>">
                                        <img src="<?php echo base_url($new->featured_image); ?>" width="200" height="125" alt="<?php echo $new->title ?>" title="<?php echo $new->title ?>"/></a>
                                        <br />
                                        <a href="<?php echo $new->getNewsUrl() ?>"><?php echo $new->shorterContent($new->title, 80) ?></a>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
                
            </div>
        </div>
    <?php endif; ?>
</div>