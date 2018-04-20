<?php

class GenSlug extends CI_Model {

    public function __construct()
    {
	    $this->load->database();
		$this->load->helper('url');
    }

	public function get_model($conditions = [])
	{
		if (!empty($conditions)) {
			$query = $this->db->get_where('gen_slug', $conditions);

        	return $query->row(0, 'GenSlug');
		} else {
			$query = $this->db->query("SELECT * FROM ci_gen_slug ORDER BY created_date desc");
			return $query->result('GenSlug');
		}
	}
}