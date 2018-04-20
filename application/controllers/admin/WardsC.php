<?php

class WardsC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('wards');
        $this->load->model('district');
    }

    public function index()
    {
        $data['title'] = 'Quản lý phường / xã';
        $data['template'] = 'admin/wardsC/index';
        $models = $this->wards->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo phường / xã';
    	$data['template'] = 'admin/wardsC/form';
        $data['link_submit'] = base_url('admin/wardsC/create');

        if (isset($_POST['Wards'])) {
            $data_insert = $_POST['Wards'];
            $this->wards->set_model($data_insert);
            redirect('admin/wardsC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa phường / xã';
        $data['template'] = 'admin/wardsC/form';
        $model = $this->wards->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/wardsC/update/'.$id);

        if (isset($_POST['Wards'])) {
            $data_insert = $_POST['Wards'];
            $this->wards->update_model($id, $data_insert);
            redirect('admin/wardsC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->wards->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_wards WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('Wards');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/wardsC/index', 'refresh');
    }

    public function changeProvince() {
        if (!$this->input->is_ajax_request()) {
           exit('No direct script access allowed');
        }

        $province_id = isset($_POST['provinceId']) ? $_POST['provinceId'] : 0;
        $district_id = isset($_POST['districtId']) ? $_POST['districtId'] : 0;

        $districts = $this->wards->getDropdownListDistrict(['province_id' => $province_id]);

        foreach ($districts as $district) {
            $selected = $district_id == $district->id ? 'selected' : '';
            echo '<option value="'.$district->id.'" '.$selected.'>'.$district->district_name.'</option>';
        }
    }

}