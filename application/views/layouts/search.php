<script type="text/javascript">
    $(function () {
        $('#email').val('');
        $('#TuKhoaTimKiem').val('');
        $("#LoaiTinDang,#LoaiDiaOc,#KhuVuc,#KhoangGia,#QuanHuyen").uniform({
            selectAutoWidth: true
        });
    });
</script>
<div id="status_search" class="wrap margin_bottom clearfix">
    <div id="home_search" class="rounded_style_1 rounded_box">
        <div class="content">
            <div class="select_search_type rounded_style_5 rounded_box">
                <div class="content">
                    <ul class="search_tab">
                        <li class="actived" id="tabtimkiemts">
                            <span class="L"></span>
                            <a href="javascript:void(0)">Tìm kiếm</a> <span class="R"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="timkiemts" class="search_form">
                <form class="form_style_1" action="<?php echo base_url('tim-kiem.html') ?>" method="get" id="search-form">
                    <fieldset>
                        <div class="left_form">
                            <div class="rowElem">
                                <input type="text" class="home_search_input" placeholder="Ví dụ: nhà mặt tiền quận 5"
                                value="" name="name" id="TuKhoaTimKiem" title="Ví dụ: nhà mặt tiền; quận 5" />
                            </div>
                            <div class="propertise_type margin_right_form">
                                <div class="divUni-1">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="LoaiTinDang" name="loai" style="width:150px">
                                            <option value="">Chọn loại nhà đất</option>
                                            <?php foreach ($this->bds->arr_type as $key => $value): 
                                                $selected = '';
                                                if (isset($_GET['loai']) && $_GET['loai'] == $key)
                                                    $selected = 'selected';?>
                                                <option value="<?php echo $key ?>" <?php echo $selected ?>><?php echo $value ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="divUni-2">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="LoaiDiaOc" name="do">
                                            <option value="">Chọn loại địa ốc</option>
                                            <?php foreach ($this->realEstateType->get_model() as $row):
                                                $selected = '';
                                                if (isset($_GET['do']) && $_GET['do'] == $row->id)
                                                    $selected = 'selected';?>
                                                <option value="<?php echo $row->id ?>" <?php echo $selected ?>><?php echo $row->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="divUni-2">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="KhuVuc" name="tp">
                                            <option value="">Chọn Tỉnh/Thành phố</option>
                                            <?php foreach ($this->provinces->get_model() as $row):
                                                $selected = '';
                                                if (isset($_GET['tp']) && $_GET['tp'] == $row->id)
                                                    $selected = 'selected';?>
                                                <option value="<?php echo $row->id ?>" <?php echo $selected ?>><?php echo $row->province_name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="divUni-2">
                                    <div class="wid-left">
                                    </div>
                                    <div class="wid">
                                        <select id="QuanHuyen" name="quan">
                                            <option value="">Chọn Quận/Huyện</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn_home_search"><span>Tìm kiếm</span></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#province').change(function() {
            var provinceId = $(this).val();
            changeProvince(provinceId);
        });
    });
    function changeProvince(provinceId) {
        var districtId = '';
        $.ajax({
            url: '<?php echo base_url('sites/changeProvince') ?>',
            type: 'POST',
            data: {provinceId: provinceId, districtId: districtId},
            success: function (returndata) {
                $('#QuanHuyen').html(returndata);
            }
        });
    }
</script>