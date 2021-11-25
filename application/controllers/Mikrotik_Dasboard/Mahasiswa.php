<?php

/**
 * 
 */
class Mahasiswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLogin', 'DbLogin');
    $this->load->model('MMahasiswa', 'MMahasiswa');
		$this->load->model('MUserspot', 'MUserspot');
		$this->load->model('MProfile', 'MProfile');

  }

  public function index()
  {
    $data = $this->DbLogin->show();
    if ($this->mikapi->Connect($data['ip'], $data['username'], $data['password']) != "Connected") {
      redirect(site_url('Login'));
    }
    $this->indexOri();

  }


  public function indexOri()
  {
    $d['MahasiswaList'] =  $this->MMahasiswa->findAll();
		$d['ProfileList'] =  $this->MProfile->findAll();
    $template = array(
      'menu' => $this->load->view('MENU/menu', '', TRUE),
      'judul' => 'User Otomatis Mahasiswa',
      'konten' => $this->load->view('_Mahasiswa/index', $d, TRUE),
    );
    $this->parser->parse('template/template2', $template);
  }
	public function setup()
	{
		$post = $this->input->post();
		$id = $post["profile"];
		echo $profile		= $this->MProfile->get($id)[0]->nama;

		foreach ($this->MMahasiswa->findUnregister() as $data) :
			// $data['nobp'];
			$paswd='123';
			$this->addUserHotspot(
				$data['nobp'],
				$paswd,
				$profile
			);
			echo $id_user= $this->ambilnumHotspotuser($data['nobp']);
			$this->MUserspot->insert($id_user, $data['nobp'], $paswd, $id);
		endforeach;
		redirect(site_url('mahasiswa'));
	}
	public function ambilnumHotspotuser($name)
	{
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/print"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'?name' => $name,
		);
		$datax = $this->mikapi->write($Code, $data);
		$d = $datax[0];
		// echo  $d['.id'];
		return $d['.id'];
	}
	public function addUserHotspot($name, $paswd, $profile)
	{
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/add"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'name' => $name,
			'password' => $paswd,
			'profile' => $profile,
		);;
		$this->mikapi->write($Code, $data);
	}
  public function tambah()
  {
  }

}
