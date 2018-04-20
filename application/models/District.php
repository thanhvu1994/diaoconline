<?php

class District extends CI_Model {

    public function __construct()
    {
    	$this->load->model('provinces');
    	$this->load->model('wards');

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
			$query = $this->db->get_where('district', $conditions);

        	return $query->row(0, 'District');
		} else {
			$query = $this->db->query("SELECT * FROM ci_district ORDER BY created_date desc");
			return $query->result('District');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('district', $conditions);

        	return $query->row_array(0, 'District');
		} else {
			$query = $this->db->query("SELECT * FROM ci_district ORDER BY created_date desc");
			return $query->result_array('District');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('district', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('district', $data_insert);
	}

	public function delete_model() {
		$query = $this->db->query("SELECT * FROM ci_gen_slug WHERE slug = '".$this->slug."' AND type = 'district'");
		$slug = $query->row();
		if (count($slug) > 0) {
			$this->db->where('id', $slug->id);
  			$this->db->delete('gen_slug');
		}

		$query = $this->db->query("SELECT * FROM ci_wards WHERE district_id = ".$this->id);
		$wards = $query->result('Wards');
		if (count($wards) > 0) {
			foreach ($wards as $ward) {
				$ward->delete_model();
			}
		}

		$this->db->where('id', $this->id);
  		$this->db->delete('district');
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

	public function getProvince() {
		if ($this->province_id) {
			$query = $this->db->query("SELECT * FROM ci_provinces WHERE id = ".$this->province_id);
			$model = $query->row();

			if (count($model) > 0) {
				return $model->province_name;
			}
		}

		return '';
	}

	public function getDropdownListProvince() {
		$query = $this->db->query("SELECT * FROM ci_provinces");
		$models = $query->result('Provinces');
		return $models;
	}
}