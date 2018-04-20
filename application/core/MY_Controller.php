<?php
class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // load model admin
        $this->load->model('users');
        $this->load->model('menus');
        $this->load->model('posts');
        $this->load->model('news');
        $this->load->model('products');
        $this->load->model('projects');
        $this->load->model('productImages');
        $this->load->model('productOption');
        $this->load->model('productOptionValue');
        $this->load->model('categories');
        $this->load->model('productCategory');
        $this->load->model('settings');

        // validate user
        if (!$this->users->check_logged()) {
            redirect('admin/login', 'refresh');
        }
        // load helper
        $this->load->helper('url_helper');
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');

    }

    public function _remap($method, $params = array())
    {
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
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
}