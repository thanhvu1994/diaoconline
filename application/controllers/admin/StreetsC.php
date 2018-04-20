<?php

class StreetsC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('streets');
        $this->load->model('wards');
        $this->load->model('district');
    }

    public function index()
    {
        $data['title'] = 'Quản lý đường';
        $data['template'] = 'admin/streetsC/index';
        $models = $this->streets->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo đường';
    	$data['template'] = 'admin/streetsC/form';
        $data['link_submit'] = base_url('admin/streetsC/create');

        if (isset($_POST['Streets'])) {
            $data_insert = $_POST['Streets'];
            $this->streets->set_model($data_insert);
            redirect('admin/streetsC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa đường';
        $data['template'] = 'admin/streetsC/form';
        $model = $this->streets->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/streetsC/update/'.$id);

        if (isset($_POST['Streets'])) {
            $data_insert = $_POST['Streets'];
            $this->streets->update_model($id, $data_insert);
            redirect('admin/streetsC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->streets->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_streets WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('Streets');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/streetsC/index', 'refresh');
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

    public function changeDistrict() {
        if (!$this->input->is_ajax_request()) {
           exit('No direct script access allowed');
        }

        $ward_id = isset($_POST['wardId']) ? $_POST['wardId'] : 0;
        $district_id = isset($_POST['districtId']) ? $_POST['districtId'] : 0;

        $wards = $this->streets->getDropdownListWard(['district_id' => $district_id]);

        foreach ($wards as $ward) {
            $selected = $ward_id == $ward->id ? 'selected' : '';
            echo '<option value="'.$ward->id.'" '.$selected.'>'.$ward->ward_name.'</option>';
        }
    }

}