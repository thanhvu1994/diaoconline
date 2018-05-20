<link href="<?php echo base_url('themes/website/bds/Styles/StyleSheet/phonhadat.minf500.css?v=13')?>" rel="stylesheet" />

<div class="wrap margin_bottom"></div>
<div class="wrap">
    <div class="col_670">
        <div class="box_main">
            <div class="box_product">
                <h1 class="titlebox">
                <span>Đất bán tại Việt Nam</span>
                </h1>
                <div class="clear"></div>
                <h2 class="box-result">
                <!-- Tiêu chí tìm kiếm: <b>Đất bán</b>. -->
                <span class="text">
                    Có <b><?php echo count($all_bds) ?></b> bất động sản.
                </span>
                </h2>
            </div>
            <div class="productlist">
                <div class="listbox">
                    <?php if (count($all_bds) > 0):
                        foreach ($all_bds as $key => $row): 
                            $count = $key + 1;
                            $class_name = '';
                            if ($key == 0 || $key % 3 == 0) {
                                $class_name = 'first';
                            } elseif ($count % 3 == 0) {
                                $class_name = 'last';
                            }
                        ?>
                            <div class="item <?php echo $class_name ?>">
                                <a title="<?php echo $row->title ?>" class="avatar" href="<?php echo $row->getUrl() ?>"><img src="<?php echo $row->getFirstImage() ?>" /></a>
                                <div class="wr_info">
                                    <h4 class="title">
                                    <a href="<?php echo $row->getUrl() ?>"><?php echo $row->shorterContent($row->title, 70) ?></a>
                                    </h4>
                                    <div class="time">
                                        <span><?php echo $row->get_created_date() ?></span>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="cl1">
                                            <label>Diện tích</label>
                                            <label>Địa điểm</label>
                                        </div>
                                        <div class="cl2">
                                            <div class="area">
                                                <?php echo $row->area ?> &nbsp;m&#178;
                                            </div>
                                            <div class="address">
                                                <?php echo $row->getLocation(true) ?>
                                            </div>
                                            <div class="text_center">
                                                <div class="price">
                                                    <?php echo $row->getPrice() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wr_view">
                                        
                                    </div>
                                </div>
                            </div>
                            <?php if ($count % 3 == 0 || $key == count($all_bds) - 1): ?>
                                <div class="clear"></div>
                            <?php endif ?>
                        <?php endforeach;
                    endif ?>
                </div>
                
                <div class="paging_2">
                    <ul class="pager">
                        <?php echo $links; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('bds/sidebar'); ?>
</div>
<div class="wrap margin_bottom"></div>
