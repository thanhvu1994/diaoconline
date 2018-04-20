<?php

class ProvincesC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('provinces');
    }

    public function index()
    {
        $data['title'] = 'Quản lý Tỉnh/Thành';
        $data['template'] = 'admin/provincesC/index';
        $models = $this->provinces->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo Tỉnh/Thành';
    	$data['template'] = 'admin/provincesC/form';
        $data['link_submit'] = base_url('admin/provincesC/create');

        if (isset($_POST['Provinces'])) {
            $data_insert = $_POST['Provinces'];
            $data_insert['slug'] = $this->generateSlug($data_insert['province_name'], 'province');
            $this->provinces->set_model($data_insert);
            redirect('admin/provincesC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa Tỉnh/Thành';
        $data['template'] = 'admin/provincesC/form';
        $model = $this->provinces->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/provincesC/update/'.$id);

        if (isset($_POST['Provinces'])) {
            $data_insert = $_POST['Provinces'];
            $this->provinces->update_model($id, $data_insert);
            redirect('admin/provincesC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->provinces->get_model(['id' => $id]);

        if (count($model) > 0) {
            $model->delete_model();
            echo 1;
        } else {
            echo 0;
        }
    }

    public function bulkDelete() {
        $deleteItems = isset($_POST['select']) ? $_POST['select'] : [];

        if (!empty($deleteItems)) {
            $query = $this->db->query("SELECT * FROM ci_provinces WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('Provinces');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/provincesC/index', 'refresh');
    }

}