<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/'.$this->router->fetch_class()) => 'Quản lý dự án', 'active' => $title];
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
                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-md-12">Tên dự án <span class="required">*</span></label>
                            <div class="col-md-12">
                                <input required type="text" class="form-control" value="<?php echo (isset($model)) ? $model->name : ''?>" name="Project[name]">
                                <?php echo form_error('title'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-12">Tiêu Đề</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model->title : ''?>" name="Project[title]">
                                <?php echo form_error('title'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-md-12">Nội Dung Rút Gọn <span class="required">*</span></label>
                            <div class="col-md-12">
                                <textarea rows="4" class="form-control" name="Project[short_content]" required><?php echo (isset($model)) ? $model->short_content : ''?></textarea>
                                <?php echo form_error('short_content'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-12">Meta Description</label>
                            <div class="col-md-12">
                                <textarea rows="4" class="form-control" name="Project[description]"><?php echo (isset($model)) ? $model->description : ''?></textarea>
                                <?php echo form_error('description'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Nội Dung <span class="required">*</span></label>
                    <div class="col-md-12">
                        <textarea required class="form-control" name="Project[content]" id="editor-full" rows="10" cols="80">
                            <?php echo (isset($model)) ? $model->content : ''?>
                        </textarea>
                        <?php echo form_error('content'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Hình Ảnh</label>
                    <div class="col-md-12">
                        <?php if (isset($model) && !empty($model->featured_image)): ?>
                            <input type="file" name="Project[featured_image]" class="dropify" data-default-file="<?php echo base_url($model->featured_image) ?>" />
                        <?php else: ?>
                            <input type="file" name="Project[featured_image]" class="dropify" />
                        <?php endif ?>
                        <?php echo form_error('featured_image'); ?>
                        <?php echo isset($error) ? $error : '' ?>
                        <input type="checkbox" value="1" name="remove_img" id="rm-img" style="display: none">
                    </div>
                </div>

                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                <a href="<?php echo base_url('admin/project')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
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
    });

    CKEDITOR.replace( 'editor-full', {
        filebrowserBrowseUrl: "<?php echo base_url('themes/admin/plugins/ckfinder/ckfinder.html')?>",
        filebrowserUploadUrl: "<?php echo base_url('themes/admin/plugins/ckfinder/core/connector/php/connector.php').'?command=QuickUpload&type=Files' ?>",
        filebrowserWindowWidth: '1000',
        filebrowserWindowHeight: '700'
    });
</script>
