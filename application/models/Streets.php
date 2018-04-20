<?php

class Streets extends CI_Model {

    public function __construct()
    {
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
			$query = $this->db->get_where('streets', $conditions);

        	return $query->row(0, 'Streets');
		} else {
			$query = $this->db->query("SELECT * FROM ci_streets ORDER BY created_date desc");
			return $query->result('Streets');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('streets', $conditions);

        	return $query->row_array(0, 'Streets');
		} else {
			$query = $this->db->query("SELECT * FROM ci_streets ORDER BY created_date desc");
			return $query->result_array('Streets');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('streets', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('streets', $data_insert);
	}

	public function delete_model() {
		$this->db->where('id', $this->id);
  		$this->db->delete('streets');
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

	public function getWard() {
		if ($this->ward_id) {
			$query = $this->db->query("SELECT * FROM ci_wards WHERE id = ".$this->ward_id);
			$model = $query->row();

			if (count($model) > 0) {
				return $model->ward_name;
			}
		}

		return '';
	}

	public function getProvinceName() {
		if ($this->province_id) {
			$query = $this->db->query("SELECT * FROM ci_provinces WHERE id = ".$this->province_id);
			$model = $query->row();

			if (count($model) > 0) {
				return $model->province_name;
			}
		}

		return '';
	}

	public function getDistrictName() {
		if ($this->district_id) {
			$query = $this->db->query("SELECT * FROM ci_district WHERE id = ".$this->district_id);
			$model = $query->row();

			if (count($model) > 0) {
				return $model->district_name;
			}
		}

		return '';
	}

	public function getDropdownListWard($conditions = []) {
		$query = $this->db->get_where('wards', $conditions);
		$models = $query->result('Wards');
		return $models;
	}
}