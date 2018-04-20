<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo $title ?></h4>
    </div>
    <?php
        $breadcrumb = [base_url('admin/system') => 'Dashboard', base_url('admin/'.$this->router->fetch_class()) => 'Quản lý phường xã', 'active' => $title];
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
                            <select class="form-control" id="select-province" required>
                                <?php
                                $district_id = isset($model) ? $model['district_id'] : 0;
                                $district_selected = $this->district->get_model(['id' => $district_id]);
                                foreach ($provinces as $province):
                                    $selected = ($district_selected && $district_selected->province_id == $province->id) ? 'selected' : '';
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
                            <select class="form-control" name="Wards[district_id]" id="wards" required>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Tên phường / xã</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="<?php echo (isset($model)) ? $model['ward_name'] : ''?>" name="Wards[ward_name]" required>
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
        var districtId = '<?php echo (isset($model)) ? $model['district_id'] : 0 ?>';
        changeProvince($('#select-province').val(), districtId);
        $('#select-province').change(function() {
            var provinceId = $(this).val();
            changeProvince(provinceId, districtId);
        });
    });

    function changeProvince(provinceId, districtId) {
        $.ajax({
            url: '<?php echo base_url('admin/wardsC/changeProvince') ?>',
            type: 'POST',
            data: {provinceId: provinceId, districtId: districtId},
            success: function (returndata) {
                $('#wards').html(returndata);
            }
        });
    }
</script>
