<?php 
/**
 * 
 */
class Template extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
	}
		public function index2(){
		
		$template = array (
				'menu' => $this->load->view('template/menu','',TRUE),
				'judul' => 'Antrian Rumah Sakit Spesial Penyakit Dalam',
				'konten' => $this->load->view('template/front','',TRUE)
		);
		$this->parser->parse('template/template',$template);
          	}
	public function index(){
		if($this->session->userdata('masuk')==TRUE){
                // $user=$this->session->userdata('user');
		$template = array (
				'menu' => $this->load->view('template/menu','',TRUE),
				'judul' => 'Antrian Rumah Sakit Spesial Penyakit Dalam',
				'konten' => $this->load->view('template/beranda','',TRUE)
		);
		$this->parser->parse('template/template2',$template);

            }
            else{
                redirect(site_url('Login'));
            }
		
	}
}

 ?>