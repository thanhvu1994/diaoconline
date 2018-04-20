<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/'.$this->router->fetch_class()) => 'Quản lý đường', 'active' => $title];
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
                        <label class="col-md-12">Tỉnh thành</label>
                        <div class="col-md-12">
                            <?php $provinces = $this->district->getDropdownListProvince(); ?>
                            <select class="form-control" name="Streets[province_id]" id="select-province" required>
                                <?php
                                foreach ($provinces as $province):
                                    $selected = ($model['province_id'] == $province->id) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $province->id?>" <?php echo $selected ?>><?php echo $province->province_name?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Quận / huyện</label>
                        <div class="col-md-12">
                            <select class="form-control" name="Streets[district_id]" id="district" required>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Thuộc phường / xã</label>
                        <div class="col-md-12">
                            <select class="form-control" name="Streets[ward_id]" id="ward" required>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tên đường</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['street_name'] : ''?>" name="Streets[street_name]" required>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
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
        var districtId = '<?php echo isset($model) ? $model['district_id'] : 0 ?>';

        changeProvince($('#select-province').val(), districtId);
        $('#select-province').change(function() {
            var provinceId = $(this).val();
            changeProvince(provinceId, districtId);
        });
    });

    function changeProvince(provinceId, districtId) {
        var wardId = '<?php echo isset($model) ? $model['ward_id'] : 0 ?>';
        
        $.ajax({
            url: '<?php echo base_url('admin/streetsC/changeProvince') ?>',
            type: 'POST',
            data: {provinceId: provinceId, districtId: districtId},
            success: function (returndata) {
                $('#district').html(returndata);
                changeDistrict($('#district').val(), wardId);
            }
        });
    }

    function changeDistrict(districtId, wardId) {
        $.ajax({
            url: '<?php echo base_url('admin/streetsC/changeDistrict') ?>',
            type: 'POST',
            data: {wardId: wardId, districtId: districtId},
            success: function (returndata) {
                $('#ward').html(returndata);
            }
        });
    }
</script>
