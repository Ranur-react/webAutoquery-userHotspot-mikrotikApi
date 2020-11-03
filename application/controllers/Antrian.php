<?php 
class Antrian extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mantrian','Ma');
		$this->load->model('Mpasien','Mp');

	}
	public function autoclearAntrian(){
		$a=$this->Ma->viewNow();
		foreach ($a->result_array() as $key) :
			$tgldata= $key['tgldata'];
			$tglnew=$key['tanggalnow'];;

			if($tgldata==$tglnew){					
			}else
			{
				$this->Ma->kosongkanUlang();
				// redirect(site_url('Antrian/index
			}

		endforeach;

	}
	public function index(){
		
		if($this->session->userdata('masuk')==TRUE ){
		$p['tampildata']=$this->Ma->view();

		$p['tampildatapasien']=$this->Ma->viewpasien();
		$template = array (
				'menu' => $this->load->view('template/menu','',TRUE),
				'judul' => 'PENDAFTAR ANTRIAN',
				'konten' => $this->load->view('Antrian/list',$p,TRUE)
		);
		$this->parser->parse('template/template2',$template);
		$this->autoclearAntrian();

            }
            else{
		redirect(site_url('login/index'));

                // redirect('');
            }
		
	}
	public function tambah(){
				$id=$this->uri->segment(3);
				$p=$this->Ma->insert($id);
				// $this->index();
		redirect(site_url('Antrian/index'));
	}
	public function Kosongkan(){
		$this->Ma->kosongkanUlang();
		redirect(site_url('Antrian/index'));
	}
	public function hapus(){
			// echo $p;

		if($this->session->userdata('masuk')==TRUE ){
				$id=$this->uri->segment(3);
				$p=$this->Ma->delete($id);
				// $this->index();
                // redirect('');
		redirect(site_url('Antrian/index'));

            }
            else{
		redirect(site_url('login/index'));

                // redirect('');
            }
	}

}
 ?>