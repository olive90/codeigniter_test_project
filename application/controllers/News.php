<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class News extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index(){
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News Archieve';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($email = NULL){
		$data['news_item'] = $this->news_model->get_news($email);

		if(empty($data['news_item'])){
			show_404();
		}
		$data['name'] = $data['news_item']['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');

	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Save a new student record';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');

		}else{

			$this->news_model->set_news();
			$this->load->view('templates/header', $data);
			$this->load->view('news/success');
			$this->load->view('templates/footer');
			
		}
	}

	public function edit(){
		$id = $this->uri->segment(2);

		if(empty($id)){
			show_404();
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Edit Student Record';
		$data['news_item'] = $this->news_model->get_news_by_id($id);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('news/edit', $data);
			$this->load->view('templates/footer');
		}else{
			$this->news_model->set_news($id);
			redirect(base_url().'index.php/news');
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		if(empty($id)){
			show_404();
		}

		$news_item = $this->news_model->get_news_by_id($id);
		$this->news_model->delete_news($id);
		redirect(base_url().'index.php/news');
	}
}