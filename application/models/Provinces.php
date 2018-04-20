<?php

class Provinces extends CI_Model {

    public function __construct()
    {
    	$this->load->model('district');

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
			$query = $this->db->get_where('provinces', $conditions);

        	return $query->row(0, 'Provinces');
		} else {
			$query = $this->db->query("SELECT * FROM ci_provinces ORDER BY created_date desc");
			return $query->result('Provinces');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('provinces', $conditions);

        	return $query->row_array(0, 'Provinces');
		} else {
			$query = $this->db->query("SELECT * FROM ci_provinces ORDER BY created_date desc");
			return $query->result_array('Provinces');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('provinces', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('provinces', $data_insert);
	}

	public function delete_model() {
		$query = $this->db->query("SELECT * FROM ci_gen_slug WHERE slug = '".$this->slug."' AND type = 'province'");
		$slug = $query->row();
		if (count($slug) > 0) {
			$this->db->where('id', $slug->id);
  			$this->db->delete('gen_slug');
		}

		$query = $this->db->query("SELECT * FROM ci_district WHERE province_id = ".$this->id);
		$districts = $query->result('District');
		if (count($districts) > 0) {
			foreach ($districts as $district) {
				$district->delete_model();
			}
		}

		$this->db->where('id', $this->id);
  		$this->db->delete('provinces');
	}

	public function get_created_date() {
		return date_format(date_create($this->created_date), 'd-m-Y');
	}

	public function get_update_date() {
		return date_format(date_create($this->update_date), 'd-m-Y');
	}

	public function getUrl() {
		return '';
	}

	public function getProvincesFE() {
		$query = $this->db->query("SELECT * FROM ci_provinces ORDER BY province_name asc");
		return $query->result('Provinces');
	}
}