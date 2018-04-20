<div class="row m-b-30">
    <div class="col-xs-12">
        <a href="<?php echo base_url('admin/'.$controller_name.'/create')?>" class="btn btn-create"><i class="fa fa-plus"></i> Thêm mới</a>
        <button data-href="<?php echo base_url('admin/'.$controller_name.'/bulkDelete')?>" class="btn btn-danger bulk-delete"><i class="fa fa-trash-o"></i> Xóa tất cả</button>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <form enctype="multipart/form-data" id="index_grid-bulk" action="" method="post">
                <table id="data-table" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="no-sort text-center"><input type="checkbox" name="" id="select_all"></th>
                            <?php foreach ($column as $value): ?>
                            	<th <?php echo isset($value['htmlOption']) ? $value['htmlOption'] : '' ?>><?php echo $value['header'] ?></th>
                            <?php endforeach ?>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($models as $model): ?>
                            <tr id="tr-<?php echo $model->id?>">
                                <td class="text-center check-element"><input type="checkbox" name="select[]" value="<?php echo $model->id ?>"></td>
                                <?php foreach ($column as $value): ?>
                                	<td><?php echo ($value['type'] == 'field') ? $model->$value['value'] : $model->$value['value'](); ?></td>
                                <?php endforeach ?>
                                <td class="button-column">
                                    <a class="btn btn-danger" href="<?php echo base_url('admin/'.$controller_name.'/update/'.$model->id)?>" title="Cập nhật"><i class="fa fa-edit"></i></a>
                                    <a href="javascrip:void(0)" data-href="<?php echo base_url('admin/'.$controller_name.'/delete/'.$model->id)?>" class="button-delete btn btn-danger" title="Xóa"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#data-table').DataTable();

        $('#select_all').change(function() {
            var checkboxes = $(this).closest('table').find(':checkbox');
            checkboxes.prop('checked', $(this).is(':checked'));
        });
        $("input[type='checkbox'].check-element").change(function(){
            var a = $("input[type='checkbox'].check-element");
            if(a.length == a.filter(":checked").length){
                alert('all checked');
            }
        });
        $('.button-delete').click(function() {
            if (confirm('Are you sure want to delete this item?')) {
        		var href = $(this).data('href');
                $.ajax({
                    url: href,
                    type: 'POST',
                    success: function (returndata) {
                        if (returndata == 1) {
                            location.reload();
                            // $(this).closest('tr').remove();
                        }
                    }
                });
            }
        });
        
        $('.bulk-delete').click(function() {
            var atLeastOneIsChecked = $('input[name=\"select[]\"]:checked').length > 0;
            var actionUrl = $('.bulk-delete').data('href');
            if (!atLeastOneIsChecked)
            {
                alert('Chọn ít nhất 1 dữ liệu bạn muốn xóa.');
            }
            else if (window.confirm('Bạn có chắc muốn xóa những dữ liệu đã chọn?'))
            {
                var formObj = $('.table-responsive').find('form');
                if (formObj)
                {
                    document.getElementById(formObj.attr('id')).action = actionUrl;
                    document.getElementById(formObj.attr('id')).submit();
                }
            }
        });
    });
</script>