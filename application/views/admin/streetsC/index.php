<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', 'active' => $title];
        $this->load->view('admin/layouts/breadcrumbs', ['breadcrumb' => $breadcrumb]);
     ?>
    <!-- /.col-lg-12 -->
</div>
<!-- /row -->

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <?php 
                $column = [
                    [
                        'header' => 'Tên đường',
                        'value' => 'street_name',
                        'type' => 'field'
                    ],
                    [
                        'header' => 'Phường / xã',
                        'value' => 'getWard',
                        'type' => 'function',
                    ],
                    [
                        'header' => 'Quận / huyện',
                        'value' => 'getDistrictName',
                        'type' => 'function',
                    ],
                    [
                        'header' => 'Tỉnh / thành',
                        'value' => 'getProvinceName',
                        'type' => 'function',
                    ],
                    [
                        'header' => 'Ngày cập nhật',
                        'value' => 'get_update_date',
                        'type' => 'function',
                    ],
                ];
             ?>
            <?php echo $this->load->widget('table', [$this->router->fetch_class(), $models, $column]); ?>
        </div>
    </div>
</div>
<!-- /.row -->
