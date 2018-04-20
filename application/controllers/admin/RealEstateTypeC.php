<?php

class RealEstateTypeC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('realEstateType');
    }

    public function index()
    {
        $data['title'] = 'Quản lý hướng nhà';
        $data['template'] = 'admin/realEstateTypeC/index';
        $models = $this->realEstateType->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo pháp hướng nhà';
    	$data['template'] = 'admin/realEstateTypeC/form';
        $data['link_submit'] = base_url('admin/realEstateTypeC/create');

        if (isset($_POST['RealEstateType'])) {
            $data_insert = $_POST['RealEstateType'];
            $data_insert['slug'] = $this->generateSlug($data_insert['name'], 'real_type');
            $this->realEstateType->set_model($data_insert);
            redirect('admin/realEstateTypeC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa hướng nhà';
        $data['template'] = 'admin/realEstateTypeC/form';
        $model = $this->realEstateType->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/realEstateTypeC/update/'.$id);

        if (isset($_POST['RealEstateType'])) {
            $data_insert = $_POST['RealEstateType'];
            $this->realEstateType->update_model($id, $data_insert);
            redirect('admin/realEstateTypeC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->realEstateType->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_real_estate_type WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('realEstateType');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/realEstateTypeC/index', 'refresh');
    }

}