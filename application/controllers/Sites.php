<?php
require_once APPPATH . 'core/Front_Controller.php';

class Sites extends Front_Controller {

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
        $this->load->library('pagination');
        $this->load->database();
        $this->load->helper('file');
    }

    public function actionLevelOne($slug) {
        $this->load->model('genSlug');
        if ($slug == 'tin-tuc') {
            $this->news($slug);
        } elseif($slug == 'dia-oc') {
            $this->bds($slug);
        } else {
            $model_slug = $this->genSlug->get_model(['slug' => $slug]);
            if (count($model_slug) > 0) {
                if ($model_slug->type == 'news') {
                    $this->detailNew($slug);
                } elseif ($model_slug->type == 'bds') {
                    $this->bdsDetail($slug);
                } elseif ($model_slug->type == 'province') {
                    $this->bdsProvince($slug);
                } elseif ($model_slug->type == 'cat_new') {
                    $this->categoryIndex($slug);
                } elseif ($model_slug->type == 'page') {
                    $this->detailPage($slug);
                }
            } else {
                redirect('sites', 'refresh');
            }
        }
    }

    public function actionLevelTwo($slug_parent, $slug, $page = '') {
        $this->load->model('genSlug');
        $model_slug_parent = $this->genSlug->get_model(['slug' => $slug_parent]);
        $model_slug = $this->genSlug->get_model(['slug' => $slug]);
        if (count($model_slug_parent) > 0 && count($model_slug) > 0) {
            if ($model_slug_parent->type == 'cat_new' && $model_slug->type == 'cat_new') {
                $this->categoryNew($slug_parent, $slug);
            }
        } else {
            redirect('sites', 'refresh');
        }
    }

    public function index() {
        $data['title'] = 'Trang Chủ';
        $data['description'] = 'Trang Chủ';

        $data['template'] = 'sites/index';

		$this->load->view('layouts/index', $data);
    }

    ////////////// Page news /////////////
    public function news() {
        $data['title'] = 'Tin tức';
        $data['description'] = 'Tin tức';

        $data['template'] = 'news/index';

        $this->load->view('layouts/index', $data);
    }

    private function categoryIndex($slug) {
        $data['title'] = 'Tin tức';
        $data['description'] = 'Tin tức';

        $data['template'] = 'news/layout';

        $category_parent = $this->categories->get_model(['slug' => $slug, 'type' => 'news']);
        $arr_cat = [0];
        $this->categories->getArrayChild($category_parent->id, $arr_cat);
        $num = 2;
        $data['active'] = 0;
        $condition = 'WHERE category_id IN ('.implode(',', $arr_cat).')';
        $arr_condition = $arr_cat;
        $data['parent_category_name'] = $category_parent->category_name;
        $data['link_1'] = 'javascript:void(0)';
        $query = $this->db->query("SELECT * FROM ci_news ".$condition." ORDER BY created_date desc");
        $this->paginationNews($data, $query, $arr_condition, base_url($slug.'.html'), $num, 'or');

        if ($this->news->countNews($query) == 1) {
            $data['template_sub'] = 'news/detail';
        } else {
            $data['template_sub'] = 'news/cat_news';
        }

        $this->load->view('layouts/index', $data);
    }

    private function categoryNew($slug_parent, $slug) {
        $data['title'] = 'Tin tức';
        $data['description'] = 'Tin tức';

        $data['template'] = 'news/layout';

        $category_parent = $this->categories->get_model(['slug' => $slug_parent, 'type' => 'news']);
        $category = $this->categories->get_model(['slug' => $slug, 'type' => 'news']);
        $num = 3;
        $data['active'] = 0;
        if (count($category_parent) > 0 && count($category) > 0 && $category_parent->id == $category->parent_id) {
            $url = $this->categories->getUrlCustom(['slug_parent' => $category_parent->slug, 'slug' => $category->slug]);
            $data['active'] = $category->id;
            $condition = 'WHERE category_id = '.$category->id;
            $arr_condition = ['category_id' => $category->id];
            $data['parent_category_name'] = $category_parent->category_name;
            $data['link_1'] = $this->categories->getUrlCustom(['slug' => $category_parent->slug]);
            $data['category_name'] = $category->category_name;
            $data['link_2'] = $url;
        }
        $query = $this->db->query("SELECT * FROM ci_news ".$condition." ORDER BY created_date desc");
        $this->paginationNews($data, $query, $arr_condition, $url, $num);

        if ($this->news->countNews($query) == 1) {
            $data['template_sub'] = 'news/detail';
        } else {
            $data['template_sub'] = 'news/cat_news';
        }

        $this->load->view('layouts/index', $data);
    }

    private function paginationNews(&$data, $query, $arr_condition, $url, $num, $type = 'and') {
        $config['base_url'] = $url;
        $config['total_rows'] = $this->news->countNews($query);
        $config['per_page'] = PAGINATION_FE;
        $config['uri_segment'] = 2;
        $config['use_page_numbers'] = TRUE;

        $config["prev_tag_open"] = "<li id='pagination_previous_bottom' class='pagination_previous'>";
        $config["prev_tag_close"] = "<li>";

        $config["next_tag_open"] = "<li id='pagination_next_bottom' class='pagination_next'>";
        $config["next_tag_open"] = "<li>";

        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";

        $config["cur_tag_open"] = "<li class='actived'><a href='javascript:void(0)'>";
        $config["cur_tag_close"] = "</a></li>";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment($num)) ? $this->uri->segment($num) : 1;
        $page = $config['per_page'] * ($page-1);

        if ($type == 'or') {
            $query = $this->db->query("SELECT * FROM ci_news WHERE category_id in (".implode(',', $arr_condition).") LIMIT ".$page.','.$config["per_page"]);

            $data['news'] = $query->result('News');
        } else {
            $data['news'] = $this->news->getNews($config["per_page"], $page, $arr_condition);
        }
        $data["links"] = $this->pagination->create_links();
    }

    private function detailNew($slug) {
        $data['template'] = 'news/layout';
        $data['template_sub'] = 'news/detail';
        $new = $this->news->get_model(['slug' => $slug]);
        $data['new'] = $new;
        if (count($new) > 0) {
            $data['title'] = $new->title;
            $data['description'] = $new->description;

            $category = $this->categories->get_model(['id' => $new->category_id]);
            $category_parent = $this->categories->get_model(['id' => $category->parent_id]);
            if (count($category) > 0 && count($category_parent) > 0) {
                $data['parent_category_name'] = $category_parent->category_name;
                $data['link_1'] = $this->categories->getUrlCustom(['slug' => $category_parent->slug]);
                $data['category_name'] = $category->category_name;
                $data['link_2'] = $this->categories->getUrlCustom(['slug_parent' => $category_parent->slug, 'slug' => $category->slug]);
                $data['active'] = $category->id;
            }

            $query = $this->db->query("SELECT * FROM ci_news WHERE category_id = '{$new->category_id}' AND id != '{$new->id}' ORDER BY created_date desc LIMIT 6");
            $news = $query->result('News');
            $data['news'] = $news;
            $this->load->view('layouts/index', $data);
        }
    }

    ////////////// End page news /////////////

    private function detailPage($slug){
        $data['template'] = 'sites/page';
        $page = $this->posts->get_model(['slug' => $slug]);

        if (count($page) > 0) {
            $data['page'] = $page;
            $data['title'] = $page->title;
            $data['description'] = $page->description;

            $this->load->view('layouts/index', $data);
        }else{
            redirect('sites/index', 'refresh');
        }
    }

    ////////////// Page bds /////////////
    private function bds($slug) {
        $data['title'] = '';
        $data['description'] = '';

        $data['template'] = 'bds/index';
        $url = 'dia-oc.html';
        $num = 2;
        $query = $this->db->query("SELECT * FROM ci_bds ORDER BY created_date desc");
        $this->paginationBds($data, $query, [], $url, $num);

        $this->load->view('layouts/index', $data);
    }

    public function bdsProvince($slug) {
        $data['title'] = '';
        $data['description'] = '';

        $data['template'] = 'bds/index';
        $url = base_url($slug.'.html');
        $num = 2;
        $province = $this->provinces->get_model(['slug' => $slug]);
        if (count($province) > 0) {
            $query = $this->db->query("SELECT * FROM ci_bds WHERE province_id = ".$province->id." ORDER BY created_date desc");
            $this->paginationBds($data, $query, ['province_id' => $province->id], $url, $num);
            $this->load->view('layouts/index', $data);
        }

    }

    private function paginationBds(&$data, $query, $arr_condition, $url, $num, $arr_like = []) {
        $config['base_url'] = base_url($url);
        $config['total_rows'] = $query->num_rows();
        $config['per_page'] = PAGINATION_FE;
        $config['uri_segment'] = 2;
        $config['use_page_numbers'] = TRUE;

        $config["prev_tag_open"] = "<li id='pagination_previous_bottom' class='pagination_previous'>";
        $config["prev_tag_close"] = "<li>";

        $config["next_tag_open"] = "<li id='pagination_next_bottom' class='pagination_next'>";
        $config["next_tag_open"] = "<li>";

        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";

        $config["cur_tag_open"] = "<li class='actived'><a href='javascript:void(0)'>";
        $config["cur_tag_close"] = "</a></li>";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment($num)) ? $this->uri->segment($num) : 1;
        $page = $config['per_page'] * ($page-1);

        $data['all_bds'] = $this->bds->getBds($config["per_page"], $page, $arr_condition, $arr_like);
        $data["links"] = $this->pagination->create_links();
    }

    private function bdsDetail($slug) {
        $data['template'] = 'bds/detail';
        $bds = $this->bds->get_model(['slug' => $slug]);
        $data['title'] = $bds->title;
        $data['description'] = $bds->description;
        $data['bds'] = $bds;
        $this->load->view('layouts/index', $data);
    }
    ////////////// End page bds /////////////

    public function register(){
        $data['title'] = 'Đăng Ký';
        $data['description'] = 'Đăng Ký';
        $data['template'] = 'sites/register';
        $string = read_file('./application/models/vietnam_provinces_cities.json');

        if (isset($_POST['Users'])) {
            $data_insert = $_POST['Users'];
            $email = $data_insert['email'];
            $query = $this->db->get_where('users', array('email' => $email, 'application_id' => FE));
            $users = $query->row('1', 'Users');
            if (count($users) > 0) {
                $data['error_user_exists'] = 'An account using this email address has already been registered. Please enter a valid password or request a new one.';
            } else {
                if($_POST['Users']['password'] != $_POST['Users']['confirm_password']){
                    $data['error_password_not_match'] = 'Password and Password Confirm not Matched!';
                }else{
                    unset($data_insert['confirm_password']);
                    unset($data_insert['birth_day']);
                    unset($data_insert['birth_month']);
                    unset($data_insert['birth_year']);
                    if (isset($_POST['Users']['birth_day']) && $_POST['Users']['birth_month'] && $_POST['Users']['birth_year']) {
                        $birth_date = $_POST['Users']['birth_year'].'-'.$_POST['Users']['birth_month'].'-'.$_POST['Users']['birth_day'];
                        $data_insert['birth_date'] = date_format(date_create($birth_date), 'Y-m-d');
                    }
                    $this->users->set_model($data_insert);
                    redirect('sites/login', 'refresh');
                }
            }
        }
        $this->load->view('layouts/index', $data);
    }

    public function getDistricts(){
        $city = $_POST['city'];

        $string = read_file('./application/models/vietnam_provinces_cities.json');
        $cities = json_decode($string, true);

        $result = '<option value="">Quận/Huyện</option>';

        if(isset($cities[$city]['cities']) && !empty($cities[$city]['cities'])){
            foreach($cities[$city]['cities'] as $value => $district){
                $result .= '<option value="'.$value.'">'.$district.'</option>';
            }
        }

        echo $result;
    }

    public function login() {
        $data['title'] = 'Đăng Nhập';
        $data['description'] = 'Đăng Nhập';
        $data['template'] = 'sites/login';

        if(isset($this->session->userdata['logged_in_FE'])){
            redirect('sites', 'refresh');
        }

        if (isset($_POST['Users'])) {
            $query = $this->db->get_where('users', array('email' => $_POST['Users']['email'], 'password_hash' => md5($_POST['Users']['password'])));
            $user = $query->row('1', 'Users');

            if (count($user) > 0) {
                $session_data = array(
                    'full_name' => $user->full_name,
                    'email' => $user->email,
                );
                // Add user data in session
                $this->session->set_userdata('logged_in_FE', $session_data);

                $remember = $_POST['Users']['remember_me'];
                if($remember){
                    $this->session->set_userdata('remember_me', true);
                }
                
                redirect('sites', 'refresh');
            }else{
                $data['error'] = 'Thông tin đăng nhập không hợp lệ.';
            }
        }
        $this->load->view('layouts/index', $data);
    }

    public function logout() {
        // Removing session data
        $sess_array = [];
        if(isset($this->session->userdata['logged_in_FE'])){
            $this->session->unset_userdata('logged_in_FE', $sess_array);
        }
        redirect('sites', 'refresh');
    }

    public function forgot() {
        $data['template'] = 'sites/forgot';

        if (isset($_POST['email'])) {
            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['smtp_host'] = 'smtp.gmail.com';
            $config['smtp_user'] = 'lucjfer0407@gmail.com';
            $config['smtp_pass'] = 'cbqltyrncpgreijv';
            $config['smtp_port'] = '465';
            $config['smtp_crypto'] = 'ssl';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $this->email->initialize($config);

            $query_user = $this->db->get_where('users', array('email' => $_POST['email'], 'application_id' => FE));
            $user = $query_user->row('1', 'Users');

            if ($user) {
                $this->email->from('diaoconline@admin.com', 'DiaOcOnline Admin');
                $this->email->to($_POST['email']);
                $this->email->subject('Mật khẩu cho tài khoản tại '.$this->settings->get_param('defaultPageTitle'));

                $body = 'Gửi '.$user->full_name."\n";
                $body .= 'Chúng tôi đã nhận được yêu cầu gửi lại mật khẩu cho tài khoản '.$user->email."\n";
                $body .= 'Đây là mật khẩu hiện tại của bạn: '.$user->password."\n";
                $body .= 'Xin cảm ơn!'."\n";
                $body .= 'DiaOcOnline Admin'."\n";
                $this->email->message($body);

                $this->email->send();

                $data['msg'] = 'Mật khẩu đã được gửi về mail đăng ký, vui lòng kiểm tra mail!';
            }else{
                $data['error'] = 'Tài khoản không tồn tại';
            }
        }
        $this->load->view('layouts/index', $data);
    }

    public function changeProvince() {
        if (!$this->input->is_ajax_request()) {
           exit('No direct script access allowed');
        }

        $province_id = isset($_POST['provinceId']) ? $_POST['provinceId'] : 0;
        $district_id = isset($_POST['districtId']) && !empty($_POST['districtId']) ? $_POST['districtId'] : 0;
        $districts = $this->wards->getDropdownListDistrict(['province_id' => $province_id]);

        echo '<option value="">Chọn Quận/Huyện</option>';
        foreach ($districts as $district) {
            $selected = $district->id == $district_id ? 'selected' : '';
            echo '<option value="'.$district->id.'" '.$selected.'>'.$district->district_name.'</option>';
        }
    }

    public function changeDistrict() {
        if (!$this->input->is_ajax_request()) {
           exit('No direct script access allowed');
        }

        $district_id = isset($_POST['districtId']) ? $_POST['districtId'] : 0;
        $ward_id = isset($_POST['wardId']) && !empty($_POST['wardId']) ? $_POST['wardId'] : 0;
        $wards = $this->streets->getDropdownListWard(['district_id' => $district_id]);
        
        echo '<option value="">Chọn Phường/Xã</option>';
        foreach ($wards as $ward) {
            $selected = $ward->id == $ward_id ? 'selected' : '';
            echo '<option value="'.$ward->id.'" '.$selected.'>'.$ward->ward_name.'</option>';
        }
    }

    public function search() {
        $data['title'] = 'Trang Chủ';
        $data['description'] = 'Trang Chủ';

        $data['template'] = 'bds/index';
        $url = 'dia-oc.html';
        $num = 2;
        $arr_condition = $arr_like = [];
        if (isset($_GET) && !empty($_GET)) {
            $condition = [];
            if (isset($_GET['loai']) && !empty($_GET['loai'])) {
                $type = $_GET['loai'];
                $arr_condition['type'] = $type;
                $condition[] = 'type = '.$type;
            }
            if (isset($_GET['do']) && !empty($_GET['do'])) {
                $real_type_id = $_GET['do'];
                $arr_condition['real_type_id'] = $real_type_id;
                $condition[] = 'real_type_id = '.$real_type_id;
            }
            if (isset($_GET['tp']) && !empty($_GET['tp'])) {
                $province_id = $_GET['tp'];
                $arr_condition['province_id'] = $province_id;
                $condition[] = 'province_id = '.$province_id;
            }
            if (isset($_GET['quan']) && !empty($_GET['quan'])) {
                $district_id = $_GET['quan'];
                $arr_condition['district_id'] = $district_id;
                $condition[] = 'district_id = '.$district_id;
            }
            if (isset($_GET['phuong']) && !empty($_GET['phuong'])) {
                $ward_id = $_GET['phuong'];
                $arr_condition['ward_id'] = $ward_id;
                $condition[] = 'ward_id = '.$ward_id;
            }
            if (isset($_GET['name']) && !empty($_GET['name'])) {
                $name = $_GET['name'];
                $arr_like['name'] = $name;
                $arr_like['description'] = $name;
                $condition[] = 'name LIKE "%'.$name.'%" OR description LIKE "%'.$name.'%"';
            }
        }
        if (!empty($condition)) {
            $query = $this->db->query("SELECT * FROM ci_bds WHERE ".implode("\x20AND\x20", $condition)." ORDER BY created_date desc");
        } else {
            $query = $this->db->query("SELECT * FROM ci_bds ORDER BY created_date desc");
        }
        $this->paginationBds($data, $query, $arr_condition, $url, $num, $arr_like);

        $this->load->view('layouts/index', $data);
    }
}