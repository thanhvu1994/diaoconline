<?php
class News extends CI_Model {

    public function __construct()
    {
            $this->load->database();
	    	$this->load->helper('url');
    }

    public function getRule() {
    	$rules = [
    		'title' => 'isset',
    		'short_content' => 'isset',
    		'content' => 'isset',
    	];

    	return $rules;
    }

	public function get_model($conditions = [], $limit = '')
	{
		if (!empty($conditions)) {
			$query = $this->db->get_where('news', $conditions);
        	return $query->row(0,'News');
		} else {
            $str_limit = (empty($limit)) ? '' : ' LIMIT '.$limit;

			$query = $this->db->query("SELECT * FROM ci_news ORDER BY created_date desc".$str_limit);
			return $query->result('News');
		}
	}

	public function set_model($image, $slug)
	{
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'short_content' => $this->input->post('short_content'),
            'content' => $this->input->post('content'),
            'category_id' => $this->input->post('category'),
            'featured_image' => $image,
            'slug' => $slug,
            'language' => 'vn',
            'created_date' => gmdate('Y-m-d H:i:s', time()+7*3600),
        );

        $location = '';
        if (is_array($this->input->post('location'))) {
            $location = json_encode($this->input->post('location'));
        }
        $data['location'] = $location;
	    return $this->db->insert('news', $data);
	}

	public function update_model($id,$image)
	{
	    $data = array(
	        'title' => $this->input->post('title'),
	        // 'title_en' => $this->input->post('title_en'),
	        'description' => $this->input->post('description'),
	        'short_content' => $this->input->post('short_content'),
	        // 'short_content_en' => $this->input->post('short_content_en'),
	        'content' => $this->input->post('content'),
	        // 'content_en' => $this->input->post('content_en'),
            'category_id' => $this->input->post('category'),
            'featured_image' => $image,
            'language' => 'vn',
            'created_date' => gmdate('Y-m-d H:i:s', time()+7*3600),
	    );
        $location = '';
        if (is_array($this->input->post('location'))) {
            $location = json_encode($this->input->post('location'));
        }
        $data['location'] = $location;
	    $this->db->where('id', $id);
        $this->db->update('news', $data);
	}

	public function delete_model($id) {
        if (is_file('./'.$this->featured_image)) {
            unlink('./'.$this->featured_image);
        }
		$this->db->where('id', $id);
  		$this->db->delete('news');
	}

	public function get_created_date($type = 'd-m-Y') {
		return date_format(date_create($this->created_date), $type);
	}

	public function get_update_date() {
		return date_format(date_create($this->update_date), 'd-m-Y');
	}

	public function get_dropdown_posts() {
		$result = ['sites/news' => 'News'];
		$news = $this->get_model();
		if (count($news) > 0) {
			foreach ($news as $new) {
				$url = 'pages/'.$new->slug;
				$result[$url] = $new->title;
			}
		}

		return $result;
	}

    public function getNews($limit, $start, $arr_condition){
        $this->db->limit($limit, $start);
        $this->db->order_by('created_date desc');
        $query = $this->db->get_where('news', $arr_condition);

        return $query->result('News');
    }

    public function countNews($query){
        return $query->num_rows();
        // return $this->db->count_all_results();
    }

    public function fb_comment_count()
    {
        $json = json_decode(file_get_contents('https://graph.facebook.com/?ids=' . base_url('new-'.$this->getCategoryLink().'/'.$this->slug.'.html')));
        return isset($json->url->comments) ? $json->url->comments : 0;
    }

    public function generateSlug($str){
        $maxid = 0;
        $row = $this->db->query('SELECT MAX(id) AS `maxid` FROM `ci_news`')->row();
        if ($row) {
            $maxid = $row->maxid;
        }

        $str = trim(mb_strtolower($str));
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
            return 'n-a';
        }

        return $str.'-'.$maxid;
    }

    function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }

    public function getFieldFollowLanguage($field) {
        if ($this->session->userdata['languages'] == 'en')
            $field = $field.'_en';

        return $this->$field;
    }

    public function getCategory(){
        $query = $this->db->get_where('categories', array('id' => $this->category_id) );
        $category = $query->row('0', 'Categories');

        if($category){
            return $category->title;
        }else{
            return '';
        }
    }

    public function getCategoryLink(){
        $query = $this->db->get_where('categories', array('id' => $this->category_id) );
        $category = $query->row('0', 'Categories');

        if($category){
            return $category->slug;
        }else{
            return '';
        }
    }

    public function getNewsUrl() {
        return base_url().$this->slug.'.html';
    }

    public function getNewsInMenu($cat_id, $limit = 10) {
        $this->load->model('categories');
        $arr_cat = [$cat_id];
        $this->categories->getArrayChild($cat_id, $arr_cat);
        if ($cat_id == 0) {
            $query = $this->db->query("SELECT * FROM ci_news ORDER BY created_date desc LIMIT ".$limit);
        } else {
            if (empty($arr_cat)) {
                $arr_cat = [0];
            }
            $query = $this->db->query("SELECT * FROM ci_news WHERE category_id IN (".implode(',', $arr_cat).") ORDER BY created_date desc LIMIT ".$limit);
        }
        $news = $query->result('News');

        return $news;
    }

    public function getNewsHome($limit, $location) {
        $query = $this->db->query("SELECT * FROM ci_news WHERE location LIKE '%\"".$location."\"%' ORDER BY created_date desc LIMIT ".$limit);
        $news = $query->result('News');

        return $news;
    }

    public function shorterContent($text, $chars_limit)
    {   
        $text = strip_tags($text);
        if (strlen($text) > $chars_limit) {
            $length = (int)(strlen($text) / $chars_limit);
            $new_text = substr($text, 0, strpos($text, ' ', $chars_limit));
            // Trim off white space
            $new_text = trim($new_text);
            // Add at end of text ...
            return $new_text . "...";
        } else {
            return $text;
        }
    }
}