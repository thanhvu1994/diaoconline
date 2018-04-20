<?php

class Direction extends CI_Model {

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
			$query = $this->db->get_where('direction', $conditions);

        	return $query->row(0, 'Direction');
		} else {
			$query = $this->db->query("SELECT * FROM ci_direction ORDER BY created_date desc");
			return $query->result('Direction');
		}
	}

	public function getModelArray($conditions = []) {
		if (!empty($conditions)) {
			$query = $this->db->get_where('direction', $conditions);

        	return $query->row_array(0, 'Direction');
		} else {
			$query = $this->db->query("SELECT * FROM ci_direction ORDER BY created_date desc");
			return $query->result_array('Direction');
		}
	}

	public function set_model($data_insert)
	{
	    $data_insert['created_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);

	    return $this->db->insert('direction', $data_insert);
	}

	public function update_model($id, $data_insert)
	{
	    $data_insert['update_date'] = gmdate('Y-m-d H:i:s', time()+7*3600);
	    $this->db->where('id', $id);
        $this->db->update('direction', $data_insert);
	}

	public function delete_model() {
		$this->db->where('id', $this->id);
  		$this->db->delete('direction');
	}

	public function get_created_date() {
		return date_format(date_create($this->created_date), 'd-m-Y');
	}

	public function get_update_date() {
		return date_format(date_create($this->update_date), 'd-m-Y');
	}
}