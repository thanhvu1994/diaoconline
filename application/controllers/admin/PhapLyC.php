<?php

class PhapLyC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('phapLy');
    }

    public function index()
    {
        $data['title'] = 'Quản lý pháp lý';
        $data['template'] = 'admin/phapLyC/index';
        $models = $this->phapLy->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo pháp lý';
    	$data['template'] = 'admin/phapLyC/form';
        $data['link_submit'] = base_url('admin/phapLyC/create');

        if (isset($_POST['PhapLy'])) {
            $data_insert = $_POST['PhapLy'];
            $this->phapLy->set_model($data_insert);
            redirect('admin/phapLyC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa pháp lý';
        $data['template'] = 'admin/phapLyC/form';
        $model = $this->phapLy->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/phapLyC/update/'.$id);

        if (isset($_POST['PhapLy'])) {
            $data_insert = $_POST['PhapLy'];
            $this->phapLy->update_model($id, $data_insert);
            redirect('admin/phapLyC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->phapLy->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_phap_ly WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('phapLy');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/phapLyC/index', 'refresh');
    }

}