<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['titulo'] = 'Crônicas dos Reinos Esquecidos';
		$data['subtitulo'] = "Dober's RPG";
		$data['users'] = $this->login_model->getUsersList();

		$this -> load -> view('includes/html_header',$data);
		$this -> load -> view('includes/html_navbar');
		$this -> load -> view('ola_vis2');
		$this -> load -> view('includes/html_footer');
	}
}
