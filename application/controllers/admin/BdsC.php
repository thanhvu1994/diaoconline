<?php

class BdsC extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('bds');
        $this->load->model('realEstateType');
        $this->load->model('frontArea');
        $this->load->model('provinces');
        $this->load->model('district');
        $this->load->model('wards');
        $this->load->model('streets');
        $this->load->model('projects');
        $this->load->model('productImages');

        $config['upload_path']          = './uploads/bds';
        $config['allowed_types']        = '*';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);

        if (!file_exists('./uploads/bds')) {
            mkdir('./uploads/bds', 0777, true);
        }
    }

    public function index()
    {
        $data['title'] = 'Quản lý bất động sản';
        $data['template'] = 'admin/bdsC/index';
        $models = $this->bds->get_model();
        $data['models'] = $models;
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo bất động sản';
    	$data['template'] = 'admin/bdsC/form';
        $data['link_submit'] = base_url('admin/bdsC/create');

        if (isset($_POST['Bds'])) {
            $data_insert = $_POST['Bds'];
            $data_insert['slug'] = $this->generateSlug($data_insert['name'], 'bds');

            $this->bds->set_model($data_insert);
            $id = $this->db->insert_id();
            $arrFiles = [];
            if(isset($_FILES['Images'])){
                $arrFiles = $this->reArrayFiles($_FILES['Images']);
            }

            if (!empty($arrFiles)) {
                $_FILES = $arrFiles;
                foreach ($_FILES as $key => $value) {
                    if ($this->upload->do_upload($key)) {
                        $uploadData = $this->upload->data();
                        $image = '/uploads/bds/'. $uploadData['file_name'];

                        $this->productImages->set_model(array(
                            'product_id' => $id,
                            'image' => $image,
                            'created_date' => gmdate('Y-m-d H:i:s', time()+7*3600)
                        ));
                    }
                }
            }
            
            redirect('admin/bdsC/index', 'refresh');
        }

		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Chỉnh sửa bất động sản';
        $data['template'] = 'admin/bdsC/form';
        $model = $this->bds->getModelArray(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/bdsC/update/'.$id);
        $data['images'] = $this->productImages->get_images($id);

        if (isset($_POST['Bds'])) {
            $data_insert = $_POST['Bds'];

            $arrFiles = [];
            if(isset($_FILES['Images'])){
                $arrFiles = $this->reArrayFiles($_FILES['Images']);
            }

            if (!empty($arrFiles)) {
                $_FILES = $arrFiles;
                foreach ($_FILES as $key => $value) {
                    if ($this->upload->do_upload($key)) {
                        $uploadData = $this->upload->data();
                        $image = '/uploads/bds/'. $uploadData['file_name'];

                        $this->productImages->set_model(array(
                            'product_id' => $id,
                            'image' => $image,
                            'created_date' => gmdate('Y-m-d H:i:s', time()+7*3600)
                        ));
                    }
                }
            }

            $this->bds->update_model($id, $data_insert);
            redirect('admin/bdsC/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }

    public function delete($id) {
        $model = $this->bds->get_model(['id' => $id]);

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
            $query = $this->db->query("SELECT * FROM ci_bds WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('bds');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/bdsC/index', 'refresh');
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

    public function changeWard() {
        if (!$this->input->is_ajax_request()) {
           exit('No direct script access allowed');
        }

        $ward_id = isset($_POST['wardId']) ? $_POST['wardId'] : 0;
        $street_id = isset($_POST['streetId']) ? $_POST['streetId'] : 0;

        $streets = $this->db->get_where('streets', ['ward_id' => $ward_id])->result('Streets');

        foreach ($streets as $street) {
            $selected = $street_id == $street->id ? 'selected' : '';
            echo '<option value="'.$street->id.'" '.$selected.'>'.$street->street_name.'</option>';
        }
    }

    public function deleteImage($id) {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

        $model = $this->productImages->get_model(array('id' => $id));

        if($model){
            $this->productImages->delete_model($id);
            @unlink('.'.$model->image);
            echo 'Success';
        }else{
            echo 'Cannot find image to delete!';
        }
    }

}