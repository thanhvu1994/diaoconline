<?php $this->load->view('layouts/search'); ?>
<div id="content_main" class="wrap">
    <div class="col_650  margin_bottom">
        <?php $this->load->view('layouts/news_index'); ?>
        <div class="col_650">
            <?php //$this->load->view('layouts/partner_index'); ?>
            <?php //$this->load->view('layouts/project_index'); ?>
        </div>
        <?php $this->load->view('layouts/bds_index'); ?>
        <?php $this->load->view('layouts/news_footer'); ?>
    </div>
    <?php $this->load->view('layouts/right_side_bar'); ?>
</div>