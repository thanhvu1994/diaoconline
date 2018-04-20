<link href="<?php echo base_url('themes/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') ?>" rel="stylesheet" type="text/css" />
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/menu') => 'Menu', 'active' => $title];
        $this->load->view('admin/layouts/breadcrumbs', ['breadcrumb' => $breadcrumb]);
     ?>
    <!-- /.col-lg-12 -->
</div>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="row">
            <!-- Tab panes -->
            <?php echo form_open_multipart($link_submit, ['class' => 'form-horizontal']); ?>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tên danh mục</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model->category_name : ''?>" name="Categories[category_name]" required>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-md-12">Tên danh mục tiếng anh</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model->category_name_en : ''?>" name="Categories[category_name_en]" required>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-md-12">Đường dẫn</label>
                        <div class="col-md-12">
                            <?php $url = isset($model) ? $model->url : '';?>
                            <select class="form-control" name="Categories[url]">
                                <option value="0"> -- Chọn đường dẫn -- </option>
                                <?php foreach ($this->posts->get_dropdown_posts() as $post_url => $title): 
                                        $selected = ($url == $post_url) ? 'selected' : ''; ?>
                                    <option value="<?php echo $post_url?>" <?php echo $selected?>><?php echo $title?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12">Lớp cha</label>
                        <div class="col-sm-12">
                            <?php
                                $id = isset($model) ? $model->id : 0;
                                $parent_id = isset($model) ? $model->parent_id : 0;
                                $categories = $this->categories->get_dropdown_category($id, 'menu');
                            ?>
                            <select class="form-control" name="Categories[parent_id]" id="parent_id">
                                <option value="0"> -- Chọn lớp cha -- </option>
                                <?php
                                if (!empty($categories)) :
                                    foreach ($categories as $category_id => $category_name):
                                        $selected = ($parent_id == $category_id) ? 'selected' : ''; ?>
                                        <option value="<?php echo $category_id?>" <?php echo $selected?>><?php echo $category_name?></option>
                                    <?php endforeach;
                                endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Thứ tự</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model->display_order : ''?>" name="Categories[display_order]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Hiển thị thông tin</label>
                        <div class="col-md-12">
                            <?php 
                                if (isset($model)) {
                                    $checked_new = ($model->show_type == 'new') ? 'checked' : '';
                                    $checked_bds = ($model->show_type == 'bds') ? 'checked' : '';
                                    $checked = ($model->show_type == '') ? 'checked' : '';
                                } else {
                                    $checked = 'checked';
                                    $checked_new = '';
                                    $checked_bds = '';
                                }
                            ?>
                            <div class="col-xs-4">
                                <input type="radio" class="change-type" name="Categories[show_type]" value="" <?php echo $checked ?>> Không<br>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" class="change-type" name="Categories[show_type]" value="new" <?php echo $checked_new ?>> Tin tức<br>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" class="change-type" name="Categories[show_type]" value="bds" <?php echo $checked_bds ?>> Bất động sản<br>
                            </div>
                        </div>
                    </div>
                    <?php $hidden = $checked_new == 'checked' ? '' : 'hidden'; ?>
                    <div class="form-group show-new <?php echo $hidden ?>">
                        <label class="col-md-12">Loại tin</label>
                        <div class="col-md-12">
                            <?php $cat_news = $this->categories->getCategoryByLevel('news', 1); ?>
                            <select class="form-control" name="Categories[type_id]">
                                <option value="0">-------</option>
                                <?php foreach ($cat_news as $new): 
                                    $selected = (isset($model) && $model->type_id == $new->id) ? 'selected' : ''; ?>
                                    <option value="<?php echo $new->id ?>" <?php echo $selected ?>><?php echo $new->category_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tiêu đề</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model->title : ''?>" name="Categories[title]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mô tả</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="Categories[description]"><?php echo (isset($model)) ? $model->description : ''?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Vị trí menu</label>
                        <div class="col-md-12">
                            <select class="form-control selectpicker" name="Categories[location][]" multiple data-style="form-control">
                                <?php 
                                    $selected = $selected_footer = '';
                                    if (isset($model) && !empty($model->location)) {
                                        $location = json_decode($model->location);
                                        if (in_array(HEADER_MENU, $location)) {
                                            $selected = 'selected';
                                        }
                                        if (in_array(FOOTER_MENU, $location)) {
                                            $selected_footer = 'selected';
                                        }
                                        if (in_array(FOOTER_MENU_2, $location)) {
                                            $selected_footer = 'selected';
                                        }
                                    }
                                ?>
                                <option value="<?php echo HEADER_MENU ?>" <?php echo $selected ?>>Header</option>
                                <option value="<?php echo FOOTER_MENU ?>" <?php echo $selected_footer ?>>Footer</option>
                                <option value="<?php echo FOOTER_MENU_2 ?>" <?php echo $selected_footer ?>>Link Footer</option>
                            </select>
                        </div>
                    </div>
                </div>
<!--                <div class="col-xs-12">-->
<!--                    <div class="form-group">-->
<!--                        <label class="col-md-12">Hình ảnh</label>-->
<!--                        <div class="col-md-12">-->
<!--                            --><?php //if (isset($model) && $model->thumb != ''): ?>
<!--                                <input type="file" name="thumb" class="dropify" data-default-file="--><?php //echo base_url($model->thumb) ?><!--" />-->
<!--                            --><?php //else: ?>
<!--                                <input type="file" name="thumb" class="dropify" />-->
<!--                            --><?php //endif ?>
<!--                            <input type="checkbox" value="1" name="remove_img" id="rm-img" style="display: none">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-xs-12 text-center">
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu</button>
                    <a href="<?php echo base_url('admin/menu')?>" class="btn btn-inverse waves-effect waves-light">Hủy</a>
                </div>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('themes/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')?>" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        var drEvent = $('.dropify').dropify();
        drEvent.on('dropify.beforeClear', function(event, element){
            if(confirm("Bạn có chắc chắn muốn xóa hình này ?")) {
                $('#rm-img').prop('checked', true);
                return true;
            }
            return false;
        });

        $('.change-type').change(function() {
            if ($(this).val() == 'new') {
                $('.show-new').removeClass('hidden');
            } else {
                $('.show-new').addClass('hidden');
            }
        });

//        $('#type_category').change(function() {
//            var id = '<?php //echo isset($model) ? $model->id : 0 ?>//';
//            $.ajax({
//                url: '<?php //echo base_url('admin/category/changeParent')?>//',
//                type: 'POST',
//                data: {id: id, type: $('#type_category').val()},
//                success: function (returndata) {
//                    $('#parent_id').html(returndata);
//                },
//            });
//        });
    });
</script>
