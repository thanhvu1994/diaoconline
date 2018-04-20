<?php

class PhapLy extends CI_Model {

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
			$query = $this->db->get_where('phap_ly', $conditions);

        	return $query->row(0, 'PhapLy');
		} else {
			$query = $this->db->query("SELECT * FROM ci_phap_ly ORDER BY created_date desc");
			return $query->result('PhapLy');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('phap_ly', $conditions);

        	return $query->row_array(0, 'PhapLy');
		} else {
			$query = $this->db->query("SELECT * FROM ci_phap_ly ORDER BY created_date desc");
			return $query->result_array('PhapLy');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('phap_ly', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('phap_ly', $data_insert);
	}

	public function delete_model() {
		$this->db->where('id', $this->id);
  		$this->db->delete('phap_ly');
	}

	public function get_created_date() {
		return date_format(date_create($this->created_date), 'd-m-Y');
	}

	public function get_update_date() {
		return date_format(date_create($this->update_date), 'd-m-Y');
	}
}