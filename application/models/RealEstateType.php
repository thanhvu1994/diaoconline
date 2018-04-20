<?php

class RealEstateType extends CI_Model {

    public function __construct()
    {
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
			$query = $this->db->get_where('real_estate_type', $conditions);

        	return $query->row(0, 'RealEstateType');
		} else {
			$query = $this->db->query("SELECT * FROM ci_real_estate_type ORDER BY created_date desc");
			return $query->result('RealEstateType');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('RealEstateType', $conditions);

        	return $query->row_array(0, 'RealEstateType');
		} else {
			$query = $this->db->query("SELECT * FROM ci_real_estate_type ORDER BY created_date desc");
			return $query->result_array('RealEstateType');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('real_estate_type', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('real_estate_type', $data_insert);
	}

	public function delete_model() {
		$query = $this->db->query("SELECT * FROM ci_gen_slug WHERE slug = '".$this->slug."' AND type = 'real_type'");
		$slug = $query->row();
		if (count($slug) > 0) {
			$this->db->where('id', $slug->id);
  			$this->db->delete('gen_slug');
		}

		$this->db->where('id', $this->id);
  		$this->db->delete('real_estate_type');
	}

	public function get_created_date() {
		return date_format(date_create($this->created_date), 'd-m-Y');
	}

	public function get_update_date() {
		return date_format(date_create($this->update_date), 'd-m-Y');
	}
}