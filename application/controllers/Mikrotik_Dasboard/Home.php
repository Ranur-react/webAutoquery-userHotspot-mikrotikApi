<?php

/**
 * 
 */
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin', 'DbLogin');
	}
	public function index(){
		redirect('mahasiswa/setup');
	}	
	public function home()
	{

		$template = array(
			'menu' => $this->load->view('MENU/menu', '', TRUE),
			'judul' => 'HOTSPOT MAHASISWA ',
			'konten' => 'Home Pages'
		);
		$this->parser->parse('template/template2', $template);
	}
}
