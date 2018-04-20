<?php

class UtilitiesC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('utilities');
    }

    public function index()
    {
        $data['title'] = 'Quản lý tiện ích';
        $data['template'] = 'admin/utilitiesC/index';
        $models = $this->utilities->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo tiện ích';
    	$data['template'] = 'admin/utilitiesC/form';
        $data['link_submit'] = base_url('admin/utilitiesC/create');

        if (isset($_POST['Utilities'])) {
            $data_insert = $_POST['Utilities'];
            $this->utilities->set_model($data_insert);
            redirect('admin/utilitiesC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa tiện ích';
        $data['template'] = 'admin/utilitiesC/form';
        $model = $this->utilities->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/utilitiesC/update/'.$id);

        if (isset($_POST['Utilities'])) {
            $data_insert = $_POST['Utilities'];
            $this->utilities->update_model($id, $data_insert);
            redirect('admin/utilitiesC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->utilities->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_utilities WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('Utilities');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/utilitiesC/index', 'refresh');
    }

}