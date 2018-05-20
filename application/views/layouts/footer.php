<link href="<?php echo base_url('themes/website/css/responsive_footer.css')?>" rel="stylesheet" type="text/css" />
<div id="footer">
    <div id="footer_top">
        <div id="bottom_menu" class="wrap">
            <?php $menus = $this->categories->get_menuFE(FOOTER_MENU);
            if (!empty($menus)) :
                $count = 1;
                foreach ($menus as $menu_id => $menu): 
                    $id = $count == 3 ? 'project_menu' : 'news_menu';
                    $class= $count == count($menus) ? 'last' : ''; ?>
                <div id="<?php echo $id ?>" class="<?php echo $class ?>">
                    <h4>»<?php echo $menu['name'] ?></h4>
                    <?php if (!empty($menu['child'])): ?>
                    <ul>
                        <?php foreach ($menu['child'] as $childs): ?>
                            <li><a href="<?php echo !empty($childs['url']) ? base_url($childs['url']) : 'javascript:void(0)' ?>"><?php echo $childs['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                    <?php endif; ?>
                </div>
            <?php $count++;
                endforeach;
            endif ?>
        </div>
    </div>
    <div id="footer_bottom" style="background: #0071b5;;">
        <div id="foot_content" class="wrap">
            <div style="position: relative; float: right; width: 120px; padding-top: 10px;" id="bocongthuong"></div>
                <?php $menus = $this->categories->get_menuFE(FOOTER_MENU_2);
                    if (!empty($menus)) :?>
                    <div id="foot_nav">
                        <ul>
                            <?php foreach ($menus as $menu_id => $menu): ?>
                                <li class="first"><a href="<?php echo !empty($menu['url']) ? base_url($menu['url']) : 'javascript:void(0)' ?>"><?php echo $menu['name'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="copyright" style="padding-top: 10px;">
                    <div class="copyrightOnFooter-left">
                        <?php echo $this->settings->get_param('copyrightOnFooter'); ?>
                    </div>
                    <p style="width: 20%;float: left;">
                        <a href="javascript:void(0)" target="_blank">
                            <img src="<?php echo $this->settings->getFooterImg() ?>">
                        </a>
                    </p>
                    <div class="copyrightOnFooter-right">
                        <?php echo $this->settings->get_param('copyrightOnFooter_right'); ?>
                        <div id="social_network" style="float: right">
                            <div class="join_network" style="border-left: none">
                                <ul style="width: 236px; padding: 10px 0 10px 10px;">
                                    <?php if (!empty($this->settings->get_param('facebook'))): ?>
                                        <li class="facebook"><a href="<?php echo $this->settings->get_param('facebook'); ?>" target="_blank">facebook</a></li>
                                    <?php endif ?>
                                    <?php if (!empty($this->settings->get_param('twitter'))): ?>
                                        <li class="twitter"><a href="<?php echo $this->settings->get_param('twitter'); ?>" target="_blank">twitter</a></li>
                                    <?php endif ?>
                                    <?php if (!empty($this->settings->get_param('youtube'))): ?>
                                        <li class="youtube"><a href="<?php echo $this->settings->get_param('youtube'); ?>" target="_blank">youtube</a></li>
                                    <?php endif ?>
                                    <?php if (!empty($this->settings->get_param('googleplus'))): ?>
                                        <li class="google"><a href="<?php echo $this->settings->get_param('googleplus'); ?>" target="_blank">google</a></li>
                                    <?php endif ?>
                                    <?php if (!empty($this->settings->get_param('linkedin'))): ?>
                                        <li class="linkedin"><a href="<?php echo $this->settings->get_param('linkedin'); ?>" target="_blank">linkedin</a></li>
                                    <?php endif ?>
                                </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('themes/website/js/uniform/uniform.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('themes/website/js/script.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('themes/website/js/tooltip/tooltipsy.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('themes/website/js/slides/slides.min.jquery.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('themes/website/js/doolv330c8.js?1419')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('themes/website/js/jquery-scrolltofixed-min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('themes/website/js/jquery.stickyelement.js')?>" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkW8RSEEuZ_e5PXRmkoLmu0kPNc6Rzzj8&signed_in=true&callback=initMap">
</div>