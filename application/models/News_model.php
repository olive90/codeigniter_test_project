<?php

class News_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}

	public function get_news($slug = FALSE){

		if($slug === FALSE){
			$query = $this->db->get('tb_student');
			return $query->result_array();
		}

		$query = $this->db->get_where('tb_student', array('slug' => $slug));
		return $query->row_array();
	}
}