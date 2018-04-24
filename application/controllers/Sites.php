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
        } else {
            $model_slug = $this->genSlug->get_model(['slug' => $slug]);
            if (count($model_slug) > 0) {
                if ($model_slug->type == 'news') {
                    $this->detailNew($slug);
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

    private function paginationNews(&$data, $query, $arr_condition, $url, $num) {
        $config['base_url'] = base_url($url);
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

        $data['news'] = $this->news->getNews($config["per_page"], $page, $arr_condition);
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

    public function newProducts(){
        $data['title'] = 'Sản Phẩm Mới';
        $data['description'] = 'Sản Phẩm Mới';

        $data['treeCategory'] = $this->categories->getCategoryFE();

        $config['base_url'] = base_url('san-pham-moi.html');
        $config['total_rows'] = $this->products->countNewProducts();
        $config['per_page'] = 40;
        $config['uri_segment'] = 2;
        $config['use_page_numbers'] = TRUE;

        $config["prev_link"] = "Back";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "<li>";

        $config["next_link"] = 'Next';
        $config["next_tag_open"] = "<li>";
        $config["next_tag_open"] = "<li>";

        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";

        $config["cur_tag_open"] = "<li class='current'>";
        $config["cur_tag_close"] = "</li>";

        if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        if (count($_GET) > 0) $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
        $data['products'] = $this->products->getNewProducts($config["per_page"], ($page-1)*$config["per_page"]);
        $data['countProducts'] = $config['total_rows'];
        $data["links"] = $this->pagination->create_links();

        $data['template'] = 'sites/newProducts';

        $this->load->view('layouts/index', $data);
    }

    public function featureProducts(){
        $data['title'] = 'Sản Phẩm Tiêu Biểu';
        $data['description'] = 'Sản Phẩm Tiêu Biểu';

        $data['treeCategory'] = $this->categories->getCategoryFE();

        $config['base_url'] = base_url('san-pham-hot.html');
        $config['total_rows'] = $this->products->countFeatureProducts();
        $config['per_page'] = 40;
        $config['uri_segment'] = 2;
        $config['use_page_numbers'] = TRUE;

        $config["prev_link"] = "Back";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "<li>";

        $config["next_link"] = 'Next';
        $config["next_tag_open"] = "<li>";
        $config["next_tag_open"] = "<li>";

        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";

        $config["cur_tag_open"] = "<li class='current'>";
        $config["cur_tag_close"] = "</li>";

        if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        if (count($_GET) > 0) $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
        $data['products'] = $this->products->getFeatureProducts($config["per_page"], ($page-1)*$config["per_page"]);
        $data['countProducts'] = $config['total_rows'];
        $data["links"] = $this->pagination->create_links();

        $data['template'] = 'sites/featureProducts';

        $this->load->view('layouts/index', $data);
    }

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
}