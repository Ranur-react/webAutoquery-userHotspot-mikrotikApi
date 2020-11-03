<?php 
/**
 * 
 */
class Pasien extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mpasien','Mp');
	}

	public function index(){
		if($this->session->userdata('masuk')==TRUE){
		$p['tampildata']=$this->Mp->view();
		$template = array (
				'menu' => $this->load->view('template/menu','',TRUE),
				'judul' => 'DAFTAR PASIEN',
				'konten' => $this->load->view('Pasien/list',$p,TRUE)
		);
		$this->parser->parse('template/template2',$template);

            }
            else{
                redirect('login/index');
            }
		
	}
	public function tambah(){
		
				$id=$this->uri->segment(3);
				$p=$this->Mp->insert($id);
		// redirect(site_url('Pasien/baruditambah'));
				echo "Selesai";
            
	}
	public function update(){
				$p=$this->Mp->update();
				redirect(site_url('Pasien/index'));
	}
	public function baruditambah(){
		if($this->session->userdata('masuk')==TRUE ){
		$p['tampildata']=$this->Mp->newaddview();
		$template = array (
				'menu' => $this->load->view('template/menu','',TRUE),
				'judul' => 'DAFTAR PASIEN',
				'konten' => $this->load->view('Pasien/listnew',$p,TRUE)
		);
		$this->parser->parse('template/template2',$template);

            }
            else{
                redirect('login/index');
            }
		
	}
	public function hapus(){
			// echo $p;

		if($this->session->userdata('masuk')==TRUE ){
				$id=$this->uri->segment(3);
				$p=$this->Mp->delete($id);
				// $this->index();
				redirect(site_url('Pasien'));
            }
            else{
                redirect('login/index');
            }
	}

}

 ?>