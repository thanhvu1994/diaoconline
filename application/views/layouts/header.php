<div id="header" class="margin_bottom">
    <div id="head_content" class="wrap">
        <span id="logo"><a href="<?php echo base_url() ?>" title="Về trang chủ DiaOcOnline.vn">Địa Ốc Online</a></span>
        <div id="head_nav">
            <?php $menus = $this->categories->get_menuFE(HEADER_MENU);
            if (!empty($menus)) :?>
                <ul>
                    <?php foreach ($menus as $menu_id => $menu): ?>
                        <li>
                            <a href="<?php echo !empty($menu['url']) ? base_url($menu['url']) : 'javascript:void(0)' ?>"><?php echo $menu['name'] ?></a>
                            <?php if (!empty($menu['child'])): ?>
                                <div class="sub_menu">
                                    <div class="wrap">
                                        <div class="col_178">
                                            <div class="left_menu">
                                                <ul>
                                                <?php foreach ($menu['child'] as $childs): ?>
                                                    <li><a href="<?php echo !empty($childs['url']) ? base_url($childs['url']) : 'javascript:void(0)' ?>"><?php echo $childs['name'] ?></a></li>
                                                <?php endforeach ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col_463">
                                            <div class="info">
                                                <div class="headline rounded_style_6 rounded_box">
                                                    <div class="content">
                                                        <h2><?php echo ($menu['show_type'] == 'new') ? 'THÔNG TIN MỚI NHẤT' : 'TÀI SẢN NỔI BẬT'?> </h2>
                                                    </div>
                                                </div>
                                                <?php 
                                                    if ($menu['show_type'] == 'new') {
                                                        $shows = $this->news->getNewsInMenu($menu['type_id']); 
                                                    } elseif ($menu['show_type'] == 'bds') {
                                                        $shows = $this->bds->getBdsMenu();
                                                    }
                                                ?>
                                                <?php if (count($shows) > 0): ?>
                                                    <div class="content_inner rounded_style_7 rounded_box">
                                                        <div class="content">
                                                            <?php if ($menu['show_type'] == 'new'): ?>
                                                                <div class="img">
                                                                    <a href="<?php echo $shows[0]->getNewsUrl() ?>">
                                                                        <img src="<?php echo base_url($shows[0]->featured_image); ?>" width="200" height="154" alt="<?php echo $shows[0]->title ?>" title="<?php echo $shows[0]->title ?>"/>
                                                                    </a>
                                                                </div>
                                                                <div class="right">
                                                                    <h2>
                                                                        <a href="<?php echo $shows[0]->getNewsUrl() ?>"><?php echo $shows[0]->title ?></a>
                                                                    </h2>
                                                                    <span class="updated_date"><?php echo $shows[0]->get_update_date() ?></span>
                                                                    <br />
                                                                    <p><?php echo $shows[0]->shorterContent($shows[0]->short_content, 260) ?></p>
                                                                </div>
                                                            <?php elseif($menu['show_type'] == 'bds'): ?>
                                                                <?php foreach ($shows as $key => $show): 
                                                                    if ($key >= 3) continue; ?>
                                                                        <div class="real_block">
                                                                            <a href="<?php echo $show->getUrl() ?>">
                                                                                <img src="<?php echo $show->getFirstImage() ?>" width="140" height="140"  alt="<?php echo $show->name ?>"/>
                                                                            </a>
                                                                            <h3>
                                                                                <a href="<?php echo $show->getUrl() ?>">
                                                                                    <?php echo $show->shorterContent($show->name, 55) ?>
                                                                                </a>
                                                                            </h3>
                                                                        </div>
                                                                <?php endforeach ?>
                                                            <?php endif ?>
                                                        </div>
                                                    </div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        <?php if (count($shows) > 1): ?>
                                        <div class="col_290 margin_left">
                                            <div class="latest">
                                                <div class="headline rounded_style_6 rounded_box">
                                                    <div class="content">
                                                        <h2><?php echo ($menu['show_type'] == 'new') ? 'THÔNG TIN MỚI CẬP NHẬT' : 'CÁC TÀI SẢN MỚI ĐĂNG'?> </h2>
                                                    </div>
                                                </div>
                                                <div class="content_inner">
                                                    <ul>
                                                        <?php if ($menu['show_type'] == 'new'): 
                                                            foreach ($shows as $key => $show): 
                                                                if ($key == 0) continue; ?>
                                                                <li><span class="bullet"></span><a href="<?php echo $show->getNewsUrl() ?>" title="<?php echo $show->title ?>">
                                                                    <?php echo $show->shorterContent($show->title, 50) ?>
                                                                </a></li> 
                                                            <?php endforeach;
                                                        elseif ($menu['show_type'] == 'bds') :
                                                            foreach ($shows as $key => $show): 
                                                                if ($key < 3) continue; ?>
                                                                <li><span class="bullet"></span><a href="<?php echo $show->getUrl() ?>" title="<?php echo $show->name ?>">
                                                                    <?php echo $show->shorterContent($show->name, 50) ?>
                                                                </a></li> 
                                                            <?php endforeach;
                                                        endif ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            <?php endif ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </div>
        <div id="acc_section">
            <div class="left_cn">
            </div>
            <div class="right_cn">
            </div>
            <div class="content default">
                <ul>
                    <li class="login">
                        <span class="login_ico ico_24 ico_login_24"></span>
                        <a href="dang-nhap.html">Đăng nhập</a>
                    </li>
                    <li class="register">
                        <span class="register_ico ico_24 ico_register_24"></span>
                        <a href="dang-ky.html" class="register">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="post_propertise">
            <a href="dang-nhap3a45.html">ĐĂNG TÀI SẢN CỦA BẠN</a>
        </div>
    </div>
</div>