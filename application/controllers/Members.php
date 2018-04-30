<?php
require_once APPPATH . 'core/Front_Controller.php';

class Members extends Front_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('partner');
        $this->load->model('products');
        $this->load->model('categories');
        $this->load->model('banner');
        $this->load->model('users');
        $this->load->model('posts');
        $this->load->model('projects');
        $this->load->model('news');
        $this->load->model('bds');
        $this->load->model('realEstateType');
        $this->load->model('frontArea');
        $this->load->model('provinces');
        $this->load->model('district');
        $this->load->model('wards');
        $this->load->model('streets');
        $this->load->model('phapLy');
        $this->load->model('direction');
        $this->load->model('utilities');
        $this->load->model('settings');
        $this->load->model('productImages');
        $this->load->library('pagination');
        $this->load->database();
        $this->load->helper('file');

        $config['upload_path']          = './uploads/bds';
        $config['allowed_types']        = '*';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
    }

    public function myAccount(){
        if(!isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        $info_login_fe = $this->session->userdata['logged_in_FE'];
        $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
        $user = $query->row('1', 'Users');
        if (count($user) > 0) {
            if (isset($_POST['Users'])) {
                $data_insert = $_POST['Users'];

                unset($data_insert['confirm_password']);
                unset($data_insert['birth_day']);
                unset($data_insert['birth_month']);
                unset($data_insert['birth_year']);
                if (isset($_POST['Users']['birth_day']) && $_POST['Users']['birth_month'] && $_POST['Users']['birth_year']) {
                    $birth_date = $_POST['Users']['birth_year'].'-'.$_POST['Users']['birth_month'].'-'.$_POST['Users']['birth_day'];
                    $data_insert['birth_date'] = date_format(date_create($birth_date), 'Y-m-d');
                }

                if (isset($_FILES['Users']['name']) && !empty($_FILES['Users']['name'])) {
                    $files = $_FILES;
                    $_FILES['image']['name'] = $files['Users']['name']['avarta'];
                    $_FILES['image']['type'] = $files['Users']['type']['avarta'];
                    $_FILES['image']['tmp_name'] = $files['Users']['tmp_name']['avarta'];
                    $_FILES['image']['error'] = $files['Users']['error']['avarta'];
                    $_FILES['image']['size'] = $files['Users']['size']['avarta'];

                    if (!$this->upload->do_upload('image')) {
                        $data_insert['avarta'] = $user->avarta;
                    } else {
                        $uploadData = $this->upload->data();
                        $image = '/uploads/members/'. $uploadData['file_name'];
                        $data_insert['avarta'] = $image;
                        @unlink('.'.$user->avarta);
                    }
                }

                $this->users->update_model($user->id, $data_insert);

                $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
                $user = $query->row('1', 'Users');

                $data['msg'] = 'Cập nhật thông tin thành công!';
            }

            $data['title'] = 'Tài Khoản :'.$user->full_name;
            $data['description'] = 'Tài Khoản :'.$user->full_name;
            $data['user'] = $user;
        }else {
            redirect('sites/index', 'refresh');
        }
        $this->load->model('billingAddress');
        $data['template'] = 'members/account';
        $this->load->view('layouts/index', $data);
    }

    public function changePassword(){
        if(!isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        $info_login_fe = $this->session->userdata['logged_in_FE'];
        $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
        $user = $query->row('1', 'Users');
        if (count($user) > 0) {
            if (isset($_POST['Users'])) {
                $data_insert = $_POST['Users'];

                if($user->password_hash == md5($_POST['Users']['password'])){
                    if($_POST['Users']['new_password'] == $_POST['Users']['confirm_password']){
                        $data_insert['password'] = $data_insert['new_password'];
                        $data_insert['password_hash'] = md5($data_insert['new_password']);
                        unset($data_insert['new_password']);
                        unset($data_insert['confirm_password']);

                        $this->users->update_model($user->id, $data_insert);

                        $data['msg'] = 'Cập nhật mật khẩu thành công!';
                    }else{
                        $data['error'] = 'Mật khẩu mới và xác nhận không giống nhau.';
                    }
                }else{
                    $data['error'] = 'Mật khẩu cũ không đúng.';
                }
            }

            $data['title'] = 'Đổi mật khẩu tài khoản:'.$user->full_name;
            $data['description'] = 'Đổi mật khẩu tài khoản:'.$user->full_name;
            $data['user'] = $user;
        }else {
            redirect('sites/index', 'refresh');
        }
        $data['template'] = 'members/changePassword';
        $this->load->view('layouts/index', $data);
    }

    public function newProperty(){
        if(!isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        $info_login_fe = $this->session->userdata['logged_in_FE'];
        $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
        $user = $query->row('1', 'Users');
        if (count($user) > 0) {
            if(isset($_POST['bds'])){
                $data_insert = $_POST['bds'];

                $data_insert['coordinate'] = json_encode($data_insert['coordinate']);
                $data_insert['slug'] = $this->generateSlug($data_insert['name'], 'bds');
                $data_insert['user_id'] = $user->id;

                if(isset($data_insert['utilities'])){
                    $data_insert['utilities'] = json_encode($data_insert['utilities']);
                }

                $data_insert['title'] = $data_insert['name'];
                $data_insert['meta_description'] = $data_insert['description'];
                $this->bds->set_model($data_insert);

                $id = $this->db->insert_id();
                $arrFiles = [];
                if(isset($_FILES['bds'])){
                    $arrFiles = $this->reArrayFiles($_FILES['bds']);
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

                if($data_insert['status'] == STATUS_BDS_DRAFT){
                    redirect('thanh-vien/tai-san-da-luu.html', 'refresh');
                }else{
                    redirect('thanh-vien/tai-san-da-dang.html', 'refresh');
                }
            }

            $data['title'] = 'Đăng tài sản mới';
            $data['description'] = 'Đăng tài sản mới';
            $data['user'] = $user;
        }else {
            redirect('sites/index', 'refresh');
        }

        $data['template'] = 'members/newProperty';
        $this->load->view('layouts/index', $data);
    }

    public function property($code){
        if(!isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        $info_login_fe = $this->session->userdata['logged_in_FE'];
        $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
        $user = $query->row('1', 'Users');
        if (count($user) > 0) {
            $data['property'] = $this->bds->get_model(array('code' => $code));

            if(!empty($data['property'])){
                if(isset($_POST['bds'])){
                    $data_insert = $_POST['bds'];

                    $data_insert['coordinate'] = json_encode($data_insert['coordinate']);
                    $data_insert['slug'] = $this->generateSlug($data_insert['name'], 'bds');
                    $data_insert['user_id'] = $user->id;

                    if(isset($data_insert['utilities'])){
                        $data_insert['utilities'] = json_encode($data_insert['utilities']);
                    }

                    $data_insert['title'] = $data_insert['name'];
                    $data_insert['meta_description'] = $data_insert['description'];
                    $this->bds->update_model($data['property']->id, $data_insert);

                    $id = $data['property']->id;
                    $arrFiles = [];
                    if(isset($_FILES['bds'])){
                        $arrFiles = $this->reArrayFiles($_FILES['bds']);
                    }

                    if (!empty($arrFiles)) {
                        $this->productImages->delete_all_model($data['property']->id);
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

                    if($data_insert['status'] == STATUS_BDS_DRAFT){
                        redirect('thanh-vien/tai-san-da-luu.html', 'refresh');
                    }else{
                        redirect('thanh-vien/tai-san-da-dang.html', 'refresh');
                    }
                }

                $data['title'] = 'Chỉnh sửa tài sản';
                $data['description'] = 'Chỉnh sửa tài sản';
                $data['user'] = $user;
            }
        }else {
            redirect('sites/index', 'refresh');
        }

        $data['template'] = 'members/property';
        $this->load->view('layouts/index', $data);
    }

    public function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']['images']);
        $file_keys = array_keys($file_post);

        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key]['images'][$i];
            }
        }

        return $file_ary;
    }

    public function generateSlug($str, $type){
        $str = trim(mb_strtolower($str));
        $str = str_replace("-"," ",$str);
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);

        if (empty($str)) {
            $str = 'n-a';
        }
        $count = '';

        $slug = $this->createSlug($str, $type, $count);

        return $slug;
    }

    public function createSlug($slug, $type, &$count) {
        if ($count != '') {
            $str = $slug.'-'.$count;
            $count++;
        } else {
            $str = $slug;
            $count = 1;
        }
        $query = $this->db->query("SELECT * FROM ci_gen_slug WHERE slug = '".$str."'");
        $row = $query->row();

        if (count($row) > 0) {
            return $this->createSlug($slug, $type, $count);
        } else {
            $data['slug'] = $str;
            $data['type'] = $type;
            $this->db->insert('gen_slug', $data);

            return $str;
        }
    }

    public function postedProperty(){
        if(!isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        $info_login_fe = $this->session->userdata['logged_in_FE'];
        $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
        $user = $query->row('1', 'Users');
        if (count($user) > 0) {
            $data['countProperty'] = $this->bds->countPostedPropertyOfUser($user->id);
            $data['properties'] = $this->bds->postedPropertyOfUser($user->id);

            $data['title'] = 'Tài sản đã đăng';
            $data['description'] = 'Tài sản đã đăng';
            $data['user'] = $user;
        }else {
            redirect('sites/index', 'refresh');
        }

        $data['template'] = 'members/postedProperty';
        $this->load->view('layouts/index', $data);
    }

    public function savedProperty(){
        if(!isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        $info_login_fe = $this->session->userdata['logged_in_FE'];
        $query = $this->db->get_where('users', array('email' => $info_login_fe['email'], 'application_id' => FE));
        $user = $query->row('1', 'Users');
        if (count($user) > 0) {
            $data['countProperty'] = $this->bds->countSavedPropertyOfUser($user->id);
            $data['properties'] = $this->bds->savedPropertyOfUser($user->id);

            $data['title'] = 'Tài sản đã lưu';
            $data['description'] = 'Tài sản đã lưu';
            $data['user'] = $user;
        }else {
            redirect('sites/index', 'refresh');
        }

        $data['template'] = 'members/postedProperty';
        $this->load->view('layouts/index', $data);
    }

    public function deleteProperty($code) {
        $this->db->delete('bds', array('code' => $code));

        $property = $this->bds->get_model(array('code' => $code));

        if($property){
            $this->productImages->delete_all_model($property->id);
        }


        echo json_encode(array(
            'msg' => true
        ));
    }

    public function getDistricts(){
        $city = $_POST['city'];

        $districts = $this->district->getDistrictOfProvince($city);

        $result = '<option value="">Quận/Huyện</option>';

        foreach($districts as $district){
            $result .= '<option value="'.$district['id'].'">'.$district['district_name'].'</option>';
        }

        echo $result;
    }

    public function getWards(){
        $district = $_POST['district'];

        $wards = $this->wards->getWardsOfDistrict($district);

        $result = '<option value="">Phường/Xã</option>';

        foreach($wards as $ward){
            $result .= '<option value="'.$ward['id'].'">'.$ward['ward_name'].'</option>';
        }

        echo $result;
    }

    public function getStreets(){
        $ward = $_POST['ward'];

        $streets = $this->streets->getStreetsOfWard($ward);

        $result = '<option value="">Đường</option>';

        foreach($streets as $street){
            $result .= '<option value="'.$street['id'].'">'.$street['street_name'].'</option>';
        }

        echo $result;
    }
}