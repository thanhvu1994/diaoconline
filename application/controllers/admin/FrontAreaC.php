<?php

class FrontAreaC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontArea');
    }

    public function index()
    {
        $data['title'] = 'Quản lý đường trước nhà';
        $data['template'] = 'admin/frontAreaC/index';
        $models = $this->frontArea->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo đường trước nhà';
    	$data['template'] = 'admin/frontAreaC/form';
        $data['link_submit'] = base_url('admin/frontAreaC/create');

        if (isset($_POST['FrontArea'])) {
            $data_insert = $_POST['FrontArea'];
            $this->frontArea->set_model($data_insert);
            redirect('admin/frontAreaC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa đường trước nhà';
        $data['template'] = 'admin/frontAreaC/form';
        $model = $this->frontArea->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/frontAreaC/update/'.$id);

        if (isset($_POST['FrontArea'])) {
            $data_insert = $_POST['FrontArea'];
            $this->frontArea->update_model($id, $data_insert);
            redirect('admin/frontAreaC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->frontArea->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_front_area WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('FrontArea');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/frontAreaC/index', 'refresh');
    }

}