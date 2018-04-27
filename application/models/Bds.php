<?php

class Bds extends CI_Model {

	public $arr_type = [
        TYPE_SELL => 'Bán / Sang nhượng',
        TYPE_FOR_RENT => 'Cho thuê',
        TYPE_BUY => 'Cần mua',
        TYPE_RENT => 'Cần thuê',
    ];

    public $unit = [
    	ALL => 'Tổng diện tích',
    	METERS => 'm2',
    	MONTH => 'Tháng'
    ];

    public function __construct()
    {	
    	$this->load->model('realEstateType');
	    $this->load->database();
		$this->load->helper('url');
    }

    public function getRule() {
    	$rules = [
    	];

    	return $rules;
    }

	public function get_model($conditions = [])
	{
		if (!empty($conditions)) {
			$query = $this->db->get_where('bds', $conditions);

        	return $query->row(0, 'Bds');
		} else {
			$query = $this->db->query("SELECT * FROM ci_bds ORDER BY created_date desc");
			return $query->result('Bds');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('bds', $conditions);

        	return $query->row_array(0, 'Bds');
		} else {
			$query = $this->db->query("SELECT * FROM ci_bds ORDER BY created_date desc");
			return $query->result_array('Bds');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('bds', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('bds', $data_insert);
	}

	public function delete_model() {
		$this->db->where('id', $this->id);
  		$this->db->delete('bds');
	}

	public function get_created_date() {
		return date_format(date_create($this->created_date), 'd-m-Y');
	}

	public function get_update_date() {
		return date_format(date_create($this->update_date), 'd-m-Y');
	}

	public function getType() {
		if (isset($this->arr_type[$this->type])) {
			return $this->arr_type[$this->type];
		}
    }

    public function getRealType() {
    	if ($this->real_type_id) {
    		$model = $this->realEstateType->get_model(['id' => $this->real_type_id]);

    		if ($model) {
    			return $model->name;
    		}
    	}

    	return '';
    }

    public function getPhapLy() {
        $this->load->model('phapLy');
        if ($this->phap_ly_id) {
            $model = $this->phapLy->get_model(['id' => $this->phap_ly_id]);

            if ($model) {
                return $model->name;
            }
        }

        return '';
    }

    public function getDirection() {
        $this->load->model('direction');
        if ($this->direction_id) {
            $model = $this->direction->get_model(['id' => $this->direction_id]);

            if ($model) {
                return $model->name;
            }
        }

        return '';
    }

    public function getFrontArea() {
        $this->load->model('frontArea');
        if ($this->direction_id) {
            $model = $this->frontArea->get_model(['id' => $this->front_area_id]);

            if ($model) {
                return $model->name;
            }
        }

        return '';
    }

    public function getUtility() {
        $this->load->model('utilities');

        $utilities = [];
        if (!empty($this->utility_id)) {
            $arr_id = json_decode($this->utility_id);

            if (is_array($arr_id) && !empty($arr_id)) {
                $query = $this->db->query("SELECT * FROM ci_utilities WHERE id IN (".implode(',', $arr_id).") ORDER BY name asc");
                $utilities = $query->result('Utilities');
            }
        }

        return $utilities;
    }

    public function getBdsMenu($limit = 13) {
    	$query = $this->db->query("SELECT * FROM ci_bds ORDER BY created_date desc LIMIT ".$limit);
		return $query->result('Bds');
    }

    public function getUrl() {
    	return base_url($this->slug.'.html');
    }

    public function getFirstImage(){
        $query = $this->db->query("SELECT * FROM ci_product_images WHERE product_id = '".$this->id."'");
        $images = $query->result();

        if(!empty($images)){
            return base_url($images[0]->image);
        }else{
            return base_url('/uploads/bds/no_image.png');
        }
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

    public function getBdsFeatured() {
        $query = $this->db->query("SELECT * FROM ci_bds WHERE is_featured = 1 ORDER BY created_date desc");
        return $query->result('Bds');
    }

    public function getImages(){
        $query = $this->db->query("SELECT * FROM ci_product_images WHERE product_id = '".$this->id."'");
        $images = $query->result('ProductImages');

        return $images;
    }

    public function getYardArea() {
        $result = $this->horizontal_yard_area .'x'. $this->vertical_yard_area;
        if (!empty($this->horizontal_yard_area_after)) {
            $result .= 'x'.$this->horizontal_yard_area_after;
        }

        return $result;
    }

    public function getContructionArea() {
        $result = $this->horizonta_contruction_area .'x'. $this->vertica_contruction_area;
        if (!empty($this->horizonta_contruction_area_after)) {
            $result .= 'x'.$this->horizonta_contruction_area_after;
        }

        return $result;
    }

    public function getPrice() {
        return $this->price;
    }
}