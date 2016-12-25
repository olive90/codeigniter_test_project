<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}

	public function get_news($email = FALSE){

		if($email === FALSE){
			$query = $this->db->get('tb_student');
			return $query->result_array();
		}

		$query = $this->db->get_where('tb_student', array('email' => $email));
		return $query->row_array();
	}

	public function get_news_by_id($id = 0){
		if($id === 0){
			$query = $this->db->get('tb_student');
			return $query->result_array();
		}
	}

	public function set_news($id = 0){
		$this->load->helper('url');

		$email = url_title($this->input->post('email'), 'dash', TRUE);

		$data = array(
			'name' => $this->input->post('name'),
			'phone_number' => $this->input->post('phone_number'),
			'email' => $email
		);

		if($id == 0){
			return $this->db->insert('tb_student', $data);
		}else{
			$this->db->where('student_id', $id);
			return $this->db->update('tb_student', $data);
		}
	}

	public function delete_news($id){
		$this->db->where('student_id', $id);
		return $this->db->delete('tb_student');
	}
}