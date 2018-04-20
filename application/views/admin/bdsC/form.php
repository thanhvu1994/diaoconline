<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/'.$this->router->fetch_class()) => 'Quản lý bất động sản', 'active' => $title];
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
                <h3 class="col-xs-12">Thông tin bất động sản</h3>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tên bất động sản <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['name'] : ''?>" name="Bds[name]" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tiêu đề</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['title'] : ''?>" name="Bds[title]">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-12">
                            <textarea rows="4" name="Bds[description]" class="form-control" required><?php echo (isset($model)) ? $model['description'] : ''?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Meta description</label>
                        <div class="col-md-12">
                            <textarea rows="4" name="Bds[meta_description]" class="form-control"><?php echo (isset($model)) ? $model['meta_description'] : ''?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Loại tin đăng</label>
                        <div class="col-md-12">
                            <select name="Bds[type]" class="form-control">
                                <?php foreach ($this->bds->arr_type as $key => $value): ?>
                                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Loại địa ốc</label>
                        <div class="col-md-12">
                            <select name="Bds[real_type_id]" class="form-control">
                                <?php foreach ($this->realEstateType->get_model() as $row): ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Đường trước nhà</label>
                        <div class="col-md-12">
                            <select name="Bds[front_area_id]" class="form-control">
                                <?php foreach ($this->frontArea->get_model() as $row): ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Dự án</label>
                        <div class="col-md-12">
                            <select name="Bds[project_id]" class="form-control">
                                <option value="0">-- Chọn dự án --</option>
                                <?php foreach ($this->projects->get_model() as $row): ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <h3 class="col-xs-12">Thông tin vị trí</h3>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tỉnh / Thành phố</label>
                        <div class="col-md-12">
                            <select name="Bds[province_id]" class="form-control" id="province">
                                <?php foreach ($this->provinces->get_model() as $row): ?>
                                    <option value="<?php echo $row->id ?>"><?php echo $row->province_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Quân / Huyện</label>
                        <div class="col-md-12">
                            <select name="Bds[district_id]" class="form-control" id="district">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Phường / Xã</label>
                        <div class="col-md-12">
                            <select name="Bds[ward_id]" class="form-control" id="ward">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Đường</label>
                        <div class="col-md-12">
                            <select name="Bds[street_id]" class="form-control" id="street">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Số nhà</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['apartment_number'] : ''?>" name="Bds[apartment_number]">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12">
                    <div id="markermap" class="gmaps"></div>
                </div> -->

                <h3 class="col-xs-12">Chi tiết</h3>
                
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Giá</label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['price'] : ''?>" name="Bds[price]">
                                        <span class="input-group-addon">VND</span>
                                    </div>
                                    <small>Lưu ý: Muốn giá thương lượng thì để trống hoặc 0.</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Đơn vị</label>
                                <div class="col-md-12">
                                    <select name="Bds[unit]" class="form-control">
                                        <?php foreach ($this->bds->unit as $key => $value): ?>
                                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Diện tích sử dụng <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['area'] : ''?>" name="Bds[area]" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Diện tích khuôn viên (chiều ngang) <span class="required">*</span></label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['horizontal_yard_area_after'] : ''?>" name="Bds[horizontal_yard_area]" required>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Diện tích khuôn viên (chiều dài) <span class="required">*</span></label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['vertical_yard_area'] : ''?>" name="Bds[vertical_yard_area]" required>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Diện tích khuôn viên (chiều ngang sau)</label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['horizontal_yard_area_after'] : ''?>" name="Bds[horizontal_yard_area_after]">
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Diện tích xây dựng (chiều ngang) <span class="required">*</span></label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['horizonta_contruction_area'] : ''?>" name="Bds[horizonta_contruction_area]" required>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Diện tích xây dựng (chiều dài) <span class="required">*</span></label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['vertica_contruction_area'] : ''?>" name="Bds[vertica_contruction_area]" required>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="col-md-12">Diện tích xây dựng (chiều ngang sau)</label>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 input-group">
                                        <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['horizonta_contruction_area_after'] : ''?>" name="Bds[horizonta_contruction_area_after]">
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="col-xs-12">Thông tin liên hệ</h3>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Họ và tên <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['poster'] : ''?>" name="Bds[poster]" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Điện thoại</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['phone'] : ''?>" name="Bds[phone]">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Điện thoại di động <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" value="<?php echo (isset($model)) ? $model['cell_phone'] : ''?>" name="Bds[cell_phone]" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['address'] : ''?>" name="Bds[address]" required>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Ghi chú</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control" name="Bds[note]"><?php echo (isset($model)) ? $model['note'] : ''?></textarea>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xs-12">
                    <div class="dropzone">
                        <div class="fallback">
                            <input name="Images[]" type="file" multiple />
                        </div>
                    </div>
                </div> -->

                <div class="col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Hình ảnh</label>
                        <div class="col-md-12">
                            <input type="file" name="Images[]" class="dropify" multiple/>
                            <?php if(isset($images) && !empty($images)): ?>
                                <?php foreach($images as $image): ?>
                                    <div id="image-<?php echo $image->id; ?>" class="gallery">
                                        <span class="close" onClick="deleteImage('<?php echo $image->id; ?>')">&times;</span>
                                        <a target="_blank" href="<?php echo base_url($image->image); ?>">
                                            <img width="100" style="max-height: 120px" src="<?php echo base_url($image->image); ?>"/>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="publish" class="col-md-12">Hiển thị trang chủ</label>
                        <div class="col-md-12">
                            <?php
                                $checked = 'checked';
                                if (isset($model)) {
                                    if ($model['is_featured'] == true) {
                                        $checked = 'checked';
                                    } else {
                                        $checked = '';
                                    }
                                }
                            ?>
                            <input type="checkbox" <?php echo $checked ?> class="js-switch publish-ajax" data-color="#13dafe" value="1" id="publish" name="Bds[is_featured]"/>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 m-t-30">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu</button>
                        <a href="<?php echo base_url('admin/'.$this->router->fetch_class())?>" class="btn btn-inverse waves-effect waves-light">Hủy</a>
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

        var districtId = '<?php echo isset($model) ? $model['district_id'] : 0 ?>';

        changeProvince($('#province').val(), districtId);
        $('#province').change(function() {
            var provinceId = $(this).val();
            changeProvince(provinceId, districtId);
        });
    });

    function changeProvince(provinceId, districtId) {
        var wardId = '<?php echo isset($model) ? $model['ward_id'] : 0 ?>';
        
        $.ajax({
            url: '<?php echo base_url('admin/bdsC/changeProvince') ?>',
            type: 'POST',
            data: {provinceId: provinceId, districtId: districtId},
            success: function (returndata) {
                $('#district').html(returndata);
                changeDistrict($('#district').val(), wardId);
            }
        });
    }

    function changeDistrict(districtId, wardId) {
        var streetId = '<?php echo isset($model) ? $model['street_id'] : 0 ?>';
        $.ajax({
            url: '<?php echo base_url('admin/bdsC/changeDistrict') ?>',
            type: 'POST',
            data: {wardId: wardId, districtId: districtId},
            success: function (returndata) {
                $('#ward').html(returndata);
                changeWard(streetId, $('#ward').val());
            }
        });
    }

    function changeWard(streetId, wardId) {
        $.ajax({
            url: '<?php echo base_url('admin/bdsC/changeWard') ?>',
            type: 'POST',
            data: {wardId: wardId, streetId: streetId},
            success: function (returndata) {
                $('#street').html(returndata);
            }
        });
    }

    function deleteImage(id){
         if(confirm("Bạn có chắc chắn muốn xóa hình này ?")){
             $.ajax({
                 url: '<?php echo base_url('admin/bdsC/deleteImage')?>'+'/'+id,
                 type: 'POST',
                 contentType: "application/json; charset=utf-8",
                 success: function (returndata) {
                     if (returndata === 'Success') {
                         $('#image-'+id).remove();
                     }else{
                         alert(returndata);
                     }
                 },
             });
         }
     };
</script>
