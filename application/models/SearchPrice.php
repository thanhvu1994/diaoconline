<?php

class SearchPrice extends CI_Model {

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
			$query = $this->db->get_where('search_price', $conditions);

        	return $query->row(0, 'SearchPrice');
		} else {
			$query = $this->db->query("SELECT * FROM ci_search_price ORDER BY from_price asc");
			return $query->result('SearchPrice');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('search_price', $conditions);

        	return $query->row_array(0, 'SearchPrice');
		} else {
			$query = $this->db->query("SELECT * FROM ci_search_price ORDER BY from_price asc");
			return $query->result_array('SearchPrice');
		}
	}

	public function set_model($data_insert)
	{
	    return $this->db->insert('search_price', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $this->db->where('id', $id);
        $this->db->update('search_price', $data_insert);
	}

	public function delete_model() {
		$this->db->where('id', $this->id);
  		$this->db->delete('search_price');
	}

	public function getToPrice() {
		return number_format($this->to_price).' VND';
	}

	public function getFromPrice() {
		return number_format($this->from_price).' VND';
	}
}