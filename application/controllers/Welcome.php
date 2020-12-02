<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts= $this->queries->getPosts();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}
	public function create(){
		$this->load->view('create'); 
	}
	public function save(){
		$this->form_validation->set_rules("nama","nama","required");
		$this->form_validation->set_rules("nim","nim","required");
		$this->form_validation->set_rules("email","email","required");
		if($this->form_validation->run()){
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addPost($data)){
               $this->session->set_flashdata('msg','berhasil dimasukan!');
			}
			else{
				$this->session->set_flashdata('msg','gagal dimasukan!');
			}
			return redirect('welcome');
		}
		else{
			$this->load->view('create'); 
		}
	}
}
