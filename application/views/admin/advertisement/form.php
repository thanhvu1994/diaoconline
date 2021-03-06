<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/advertisement') => 'Quản lý quảng cáo', 'active' => $title];
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
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tiêu đề Quảng cáo</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model->name : ''?>" name="Banner[name]">
                            <?php echo form_error('name'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Đường dẫn</label>
                        <div class="col-md-12">
                            <input type="text" name="Banner[url]" class="form-control" value="<?php echo (isset($model)) ? $model->url : ''?>">
                            <?php echo form_error('url'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Vị trí</label>
                        <div class="col-md-12">
                            <select class="form-control" name="Banner[location]">
                                <?php $selected = (isset($model) && $model->location == HEADER_ADVERTISEMENT) ? 'selected' : '';
                                $selected_right = (isset($model) && $model->location == SIDEBAR_ADVERTISEMENT) ? 'selected' : ''; ?>
                                <option value="<?php echo HEADER_ADVERTISEMENT ?>" <?php echo $selected ?>>Header</option>
                                <option value="<?php echo SIDEBAR_ADVERTISEMENT ?>" <?php echo $selected_right ?>>Sidebar Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publish" class="col-md-12">Hiển thị</label>
                        <div class="col-md-12">
                            <?php
                                $checked = 'checked';
                                if (isset($model)) {
                                    if ($model->publish == true) {
                                        $checked = 'checked';
                                    } else {
                                        $checked = '';
                                    }
                                }
                            ?>
                            <input type="checkbox" <?php echo $checked ?> class="js-switch publish-ajax" data-color="#13dafe" value="1" id="publish" name="Banner[publish]"/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Hình ảnh</label>
                        <div class="col-md-12">
                            <?php if (isset($model) && $model->image != ''): ?>
                                <input type="file" name="Banner[image]" class="dropify" data-default-file="<?php echo base_url($model->image) ?>" />
                            <?php else: ?>
                                <input type="file" name="Banner[image]" class="dropify" />
                            <?php endif ?>
                            <?php echo form_error('image'); ?>
                            <?php echo isset($error) ? $error : '' ?>
                            <input type="checkbox" value="1" name="remove_img" id="rm-img" style="display: none">
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu</button>
                        <a href="<?php echo base_url('admin/advertisement')?>" class="btn btn-inverse waves-effect waves-light">Hủy</a>
                    </div>
                </div>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var drEvent = $('.dropify').dropify();
        drEvent.on('dropify.beforeClear', function(event, element){
            if(confirm("Bạn có chắc chắn muốn xóa hình này ?")) {
                $('#rm-img').prop('checked', true);
                return true;
            }
            return false;
        });
    })
</script>
