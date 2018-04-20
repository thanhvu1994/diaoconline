<link href="<?php echo base_url('themes/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') ?>" rel="stylesheet" type="text/css" />
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/newController') => 'Tin Tức', 'active' => $title];
        $this->load->view('admin/layouts/breadcrumbs', ['breadcrumb' => $breadcrumb]);
     ?>
    <!-- /.col-lg-12 -->
</div>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <?php echo form_open_multipart($link_submit, ['class' => 'form-horizontal']); ?>
                <div class="form-group">
                    <label class="col-md-12">Tiêu Đề Tiếng Việt <span class="required">*</span></label>
                    <div class="col-md-12">
                        <input required type="text" class="form-control" value="<?php echo (isset($model)) ? $model->title : ''?>" name="title">
                        <?php echo form_error('title'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="col-md-12">Meta Description <span class="required">*</span></label>
                            <div class="col-md-12">
                                <textarea required class="form-control" name="description" rows="5" cols="80"><?php echo (isset($model)) ? $model->description : ''?></textarea>
                                <?php echo form_error('description'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div id="short_content_vn" class="form-group tab-pane fade in active">
                            <label class="col-md-12">Nội Dung Rút Gọn <span class="required">*</span></label>
                            <div class="col-md-12">
                                <textarea required class="form-control" name="short_content" rows="5" cols="80"><?php echo (isset($model)) ? $model->short_content : ''?></textarea>
                                <?php echo form_error('short_content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#short_content_vn">Tiếng Việt</a></li>
                    <li><a data-toggle="tab" href="#short_content_en">Tiếng Anh</a></li>
                </ul>

                <div class="tab-content">
                    <div id="short_content_vn" class="form-group tab-pane fade in active">
                        <label class="col-md-12">Nội Dung Rút Gọn <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input required type="text" class="form-control" value="<?php echo (isset($model)) ? $model->short_content : ''?>" name="short_content">
                            <?php echo form_error('short_content'); ?>
                        </div>
                    </div>
                    <div id="short_content_en" class="form-group tab-pane fade">
                        <label class="col-md-12">Nội Dung Rút Gọn <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input required type="text" class="form-control" value="<?php echo (isset($model)) ? $model->short_content_en : ''?>" name="short_content_en">
                            <?php echo form_error('short_content_en'); ?>
                        </div>
                    </div>
                </div> -->

                <!-- <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#content_vn">Tiếng Việt</a></li>
                    <li><a data-toggle="tab" href="#content_en">Tiếng Anh</a></li>
                </ul> -->

                <div class="tab-content">
                    <div id="content_vn" class="form-group tab-pane fade in active">
                        <label class="col-md-12">Nội Dung <span class="required">*</span></label>
                        <div class="col-md-12">
                        <textarea required class="form-control" name="content" id="editor-full" rows="10" cols="80"><?php echo (isset($model)) ? $model->content : ''?></textarea>
                            <?php echo form_error('content'); ?>
                        </div>
                    </div>
                    <div id="content_en" class="form-group tab-pane fade">
                        <label class="col-md-12">Nội Dung <span class="required">*</span></label>
                        <div class="col-md-12">
                        <textarea required class="form-control" name="content_en" id="editor-full-2" rows="10" cols="80"><?php echo (isset($model)) ? $model->content_en : ''?></textarea>
                            <?php echo form_error('content_en'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="col-md-12">Danh Mục</label>
                            <div class="col-md-12">
                                <select class="form-control" name="category">
                                    <?php if(isset($categories)) : ?>
                                        <?php foreach($categories as $id => $cate): ?>
                                            <option value="<?php echo $id; ?>"><?php echo $cate; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                                <?php echo form_error('category'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="col-md-12">Vị trí trang chủ</label>
                            <div class="col-md-12">
                                <select class="form-control selectpicker" name="location[]" multiple data-style="form-control">
                                    <?php 
                                        $selected = $selected_footer = '';
                                        if (isset($model) && !empty($model->location)) {
                                            $location = json_decode($model->location);
                                            if (in_array(HEADER_NEWS, $location)) {
                                                $selected = 'selected';
                                            }
                                            if (in_array(FOOTER_NEWS, $location)) {
                                                $selected_footer = 'selected';
                                            }
                                        }
                                    ?>
                                    <option value="<?php echo HEADER_NEWS ?>" <?php echo $selected ?>>Header</option>
                                    <option value="<?php echo FOOTER_NEWS ?>" <?php echo $selected_footer ?>>Footer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Hình Ảnh</label>
                    <div class="col-md-12">
                        <?php if (isset($model)): ?>
                            <input type="file" name="featured_image" class="dropify" data-default-file="<?php echo base_url($model->featured_image) ?>" />
                        <?php else: ?>
                            <input type="file" name="featured_image" class="dropify" />
                        <?php endif ?>
                        <?php echo form_error('featured_image'); ?>
                        <?php echo isset($error) ? $error : '' ?>
                        <input type="checkbox" value="1" name="remove_img" id="rm-img" style="display: none">
                    </div>
                </div>

                <!--<div class="form-group">
                    <label class="col-md-12">Language</label>
                    <div class="col-md-12">
                        <select class="form-control" name="language">
                            <option <?php /*echo (isset($model) && $model->language == 'en')? 'selected' : ''; */?> value="en">English</option>
                            <option <?php /*echo (isset($model) && $model->language == 'vn')? 'selected' : ''; */?> value="vn">Tiếng Việt</option>
                        </select>
                        <?php /*echo form_error('slug'); */?>
                    </div>
                </div>-->

                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                <a href="<?php echo base_url('admin/newController')?>" class="btn btn-inverse waves-effect waves-light">Cancel</a>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
        <!-- /.right-sidebar -->
    <!-- /.container-fluid -->
 <script src="<?php echo base_url('themes/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')?>" type="text/javascript"></script>
<script>
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace( 'editor-full', {
         filebrowserBrowseUrl: "<?php echo base_url('themes/admin/plugins/ckfinder/ckfinder.html')?>",
         filebrowserUploadUrl: "<?php echo base_url('themes/admin/plugins/ckfinder/core/connector/php/connector.php').'?command=QuickUpload&type=Files' ?>",
         filebrowserWindowWidth: '1000',
         filebrowserWindowHeight: '700'
     } );

     CKEDITOR.replace( 'editor-full-2', {
         filebrowserBrowseUrl: "<?php echo base_url('themes/admin/plugins/ckfinder/ckfinder.html')?>",
         filebrowserUploadUrl: "<?php echo base_url('themes/admin/plugins/ckfinder/core/connector/php/connector.php').'?command=QuickUpload&type=Files' ?>",
         filebrowserWindowWidth: '1000',
         filebrowserWindowHeight: '700'
     } );

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
 </script>

