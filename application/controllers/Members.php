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
        $this->load->model('provinces');
        $this->load->model('settings');
        $this->load->library('pagination');
        $this->load->database();
        $this->load->helper('file');
        $config['upload_path']          = './uploads/members';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = FALSE;
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

            $data['title'] = 'Tài Khoản :'.$user->full_name;
            $data['description'] = 'Tài Khoản :'.$user->full_name;
            $data['user'] = $user;
        }else {
            redirect('sites/index', 'refresh');
        }
        $data['template'] = 'members/changePassword';
        $this->load->view('layouts/index', $data);
    }

    public function newProperty(){
        $data['template'] = 'members/newProperty';
        $this->load->view('layouts/index', $data);
    }
}