<?php

class DirectionC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('direction');
    }

    public function index()
    {
        $data['title'] = 'Quản lý hướng nhà';
        $data['template'] = 'admin/directionC/index';
        $models = $this->direction->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo pháp hướng nhà';
    	$data['template'] = 'admin/directionC/form';
        $data['link_submit'] = base_url('admin/directionC/create');

        if (isset($_POST['Direction'])) {
            $data_insert = $_POST['Direction'];
            $this->direction->set_model($data_insert);
            redirect('admin/directionC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa hướng nhà';
        $data['template'] = 'admin/directionC/form';
        $model = $this->direction->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/directionC/update/'.$id);

        if (isset($_POST['Direction'])) {
            $data_insert = $_POST['Direction'];
            $this->direction->update_model($id, $data_insert);
            redirect('admin/directionC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->direction->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_direction WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('Direction');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/directionC/index', 'refresh');
    }

}