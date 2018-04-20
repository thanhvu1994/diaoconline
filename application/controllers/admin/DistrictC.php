<?php

class DistrictC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('district');
    }

    public function index()
    {
        $data['title'] = 'Quản lý Quận/Huyện';
        $data['template'] = 'admin/districtC/index';
        $models = $this->district->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo Quận/Huyện';
    	$data['template'] = 'admin/districtC/form';
        $data['link_submit'] = base_url('admin/districtC/create');

        if (isset($_POST['District'])) {
            $data_insert = $_POST['District'];
            $data_insert['slug'] = $this->generateSlug($data_insert['district_name'], 'district');
            $this->district->set_model($data_insert);
            redirect('admin/districtC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa Quận/Huyện';
        $data['template'] = 'admin/districtC/form';
        $model = $this->district->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/districtC/update/'.$id);

        if (isset($_POST['District'])) {
            $data_insert = $_POST['District'];
            $this->district->update_model($id, $data_insert);
            redirect('admin/districtC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->district->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_district WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('District');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/districtC/index', 'refresh');
    }

}