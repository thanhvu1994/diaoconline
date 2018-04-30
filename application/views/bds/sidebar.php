<div class="col_280 margin_left">
    <div class="box_search">
        <div class="search">
            <div class="listbox">
                <div class="type_bds">
                    <span id="chothue" class="rent active">Tìm nhanh</span>
                </div>
                <form action="<?php echo base_url('tim-kiem.html') ?>" type="get" id="search-form">
                    <div class="search-bds">
                        <ul>
                            <li class="item">
                                <select id="" name="loai">
                                    <option value="">Chọn loại nhà đất</option>
                                    <?php foreach ($this->bds->arr_type as $key => $value): 
                                        $selected = '';
                                        if (isset($_GET['loai']) && $_GET['loai'] == $key)
                                            $selected = 'selected';?>
                                        <option value="<?php echo $key ?>" <?php echo $selected ?>><?php echo $value ?></option>
                                    <?php endforeach ?>
                                </select>
                            </li>
                            <li class="item">
                                <select id="" name="do">
                                    <option value="">Chọn loại địa ốc</option>
                                    <?php foreach ($this->realEstateType->get_model() as $row):
                                        $selected = '';
                                        if (isset($_GET['do']) && $_GET['do'] == $row->id)
                                            $selected = 'selected';?>
                                        <option value="<?php echo $row->id ?>" <?php echo $selected ?>><?php echo $row->name ?></option>
                                    <?php endforeach ?>
                                </select>
                            </li>
                            <li class="item">
                                <select id="province" name="tp">
                                    <option value="">Chọn Tỉnh/Thành phố</option>
                                    <?php foreach ($this->provinces->get_model() as $row):
                                        $selected = '';
                                        if (isset($_GET['tp']) && $_GET['tp'] == $row->id)
                                            $selected = 'selected';?>
                                        <option value="<?php echo $row->id ?>" <?php echo $selected ?>><?php echo $row->province_name ?></option>
                                    <?php endforeach ?>
                                </select>
                            </li>
                            <li class="item">
                                <select id="district" name="quan">
                                    <option value="">Chọn Quận/Huyện</option>
                                </select>
                            </li>
                            <li class="item ">
                                <select id="ward" name="phuong">
                                    <option value="">Chọn Phường/Xã</option>
                                </select>
                            </li>
                            <li class="wr_bt last">
                                <a id="btnSearch" href="javascript:void(0)">  TÌM KIẾM</a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php $newest = $this->bds->getBdsMenu(5);
    if (count($newest) > 0) :?>
        <div class="producthot">
            <div class="type_pr_hot">
                <span id="pr_hot" class="active">Nhà đất mới nhất</span>
            </div>
            <div class="listbox">
                <div id="prHost">
                    <?php foreach ($newest as $row): 
                        if (isset($bds) && $row->id == $bds->id) continue; ?>
                        <div class="item">
                            <h3 class="title">
                            <a title="<?php echo $row->title ?>" href="<?php echo $row->getUrl() ?>"><?php echo $row->shorterContent($row->title, 90) ?></a>
                            </h3>
                            <div class="pr_info">
                                <a title="<?php echo $row->title ?>" class="avatar" href="<?php echo $row->getUrl() ?>">
                                    <img src="<?php echo $row->getFirstImage() ?>" />
                                </a>
                                <div class="cl2">
                                    <span class="area">
                                        <?php echo $row->area ?>&nbsp;m&#178;
                                    </span>
                                    <span class="address">
                                        <?php echo $row->getLocation(true) ?>
                                    </span>
                                    <span class="price">
                                        <?php echo $row->getPrice() ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#btnSearch').click(function() {
            $('#search-form').submit();
        }) ;
        changeProvince($('#province').val());
        $('#province').change(function() {
            var provinceId = $(this).val();
            changeProvince(provinceId);
        });
    });
    function changeProvince(provinceId) {
        var districtId = '<?php echo (isset($_GET['quan'])) ? $_GET['quan'] :'' ?>';
        $.ajax({
            url: '<?php echo base_url('sites/changeProvince') ?>',
            type: 'POST',
            data: {provinceId: provinceId, districtId: districtId},
            success: function (returndata) {
                $('#district').html(returndata);
                changeDistrict($('#district').val());
            }
        });
    }

    function changeDistrict(districtId) {
        var wardId = '<?php echo (isset($_GET['phuong'])) ? $_GET['phuong'] :'' ?>';
        $.ajax({
            url: '<?php echo base_url('sites/changeDistrict') ?>',
            type: 'POST',
            data: {districtId: districtId, wardId: wardId},
            success: function (returndata) {
                $('#ward').html(returndata);
            }
        });
    }
</script>