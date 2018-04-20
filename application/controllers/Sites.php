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
    }

    public function actionLevelOne($slug) {
        $this->load->model('genSlug');
        $model_slug = $this->genSlug->get_model(['slug' => $slug]);
        if (count($model_slug) > 0) {
            if ($model_slug->type == 'news') {
                $this->detailNew($slug);
            }
        } else {
            redirect('sites', 'refresh');
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
}