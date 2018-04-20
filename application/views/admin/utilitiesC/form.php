<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/utilitiesC') => 'Quản lý tiện ích', 'active' => $title];
        $this->load->view('admin/layouts/breadcrumbs', ['breadcrumb' => $breadcrumb]);
     ?>
    <!-- /.col-lg-12 -->
</div>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="row">
            <?php echo form_open_multipart($link_submit, ['class' => 'form-horizontal']); ?>
                <div class="form-group">
                    <label class="col-md-12">Tên tiện ích</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['name'] : ''?>" name="Utilities[name]" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu</button>
                        <a href="<?php echo base_url('admin/utilitiesC')?>" class="btn btn-inverse waves-effect waves-light">Hủy</a>
                    </div>
                </div>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
