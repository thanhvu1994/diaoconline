<?php

class Wards extends CI_Model {

    public function __construct()
    {
    	$this->load->model('district');
    	$this->load->model('streets');

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
			$query = $this->db->get_where('wards', $conditions);

        	return $query->row(0, 'Wards');
		} else {
			$query = $this->db->query("SELECT * FROM ci_wards ORDER BY created_date desc");
			return $query->result('Wards');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('wards', $conditions);

        	return $query->row_array(0, 'Wards');
		} else {
			$query = $this->db->query("SELECT * FROM ci_wards ORDER BY created_date desc");
			return $query->result_array('Wards');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('wards', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('wards', $data_insert);
	}

	public function delete_model() {
		$query = $this->db->query("SELECT * FROM ci_streets WHERE ward_id = ".$this->id);
		$streets = $query->result('Streets');
		if (count($streets) > 0) {
			foreach ($streets as $street) {
				$street->delete_model();
			}
		}

		$this->db->where('id', $this->id);
  		$this->db->delete('wards');
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

	public function getDistrict() {
		if ($this->district_id) {
			$query = $this->db->query("SELECT * FROM ci_district WHERE id = ".$this->district_id);
			$model = $query->row();

			if (count($model) > 0) {
				return $model->district_name;
			}
		}

		return '';
	}

	public function getProvinceName() {
		if ($this->district_id) {
			$query = $this->db->query("SELECT * FROM ci_district WHERE id = ".$this->district_id);
			$model = $query->row();

			if (count($model) > 0) {
				$province = $this->provinces->get_model(['id' => $model->province_id]);
				if (count($province) > 0) {
					return $province->province_name;
				}
			}
		}

		return '';
	}

	public function getDropdownListDistrict($conditions = []) {
		$query = $this->db->get_where('district', $conditions);
		$models = $query->result('District');
		return $models;
	}
}