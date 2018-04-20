<?php

class SearchPriceC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('searchPrice');
    }

    public function index()
    {
        $data['title'] = 'Quản lý giá tìm kiếm';
        $data['template'] = 'admin/searchPriceC/index';
        $models = $this->searchPrice->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo giá tìm kiếm';
    	$data['template'] = 'admin/searchPriceC/form';
        $data['link_submit'] = base_url('admin/searchPriceC/create');

        if (isset($_POST['SearchPrice'])) {
            $data_insert = $_POST['SearchPrice'];
            $this->searchPrice->set_model($data_insert);
            redirect('admin/searchPriceC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa giá tìm kiếm';
        $data['template'] = 'admin/searchPriceC/form';
        $model = $this->searchPrice->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/searchPriceC/update/'.$id);

        if (isset($_POST['SearchPrice'])) {
            $data_insert = $_POST['SearchPrice'];
            $this->searchPrice->update_model($id, $data_insert);
            redirect('admin/searchPriceC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->searchPrice->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_search_price WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('SearchPrice');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/searchPriceC/index', 'refresh');
    }

}