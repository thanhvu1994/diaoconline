<?php $this->load->view('layouts/head'); ?>
<body>
    <a href="#0" class="cd-top">Top</a>
    <div id="container">
        <?php $this->load->view('layouts/header'); ?>
        <div id="content_container">
            <div class="wrap">
                <?php $this->load->view('layouts/banner'); ?>
                <?php $this->load->view($template); ?>
            </div>
        </div>
        <!--FOOTER-->
        <?php $this->load->view('layouts/footer'); ?>
    </body>
</html>