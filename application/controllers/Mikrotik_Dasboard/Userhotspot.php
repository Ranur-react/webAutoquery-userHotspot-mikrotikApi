<?php

/**
 * 
 */
class Userhotspot extends CI_Controller
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
		$d['ProfileList'] =  $this->MProfile->findAll();
    $d['UserspotList'] =  $this->MUserspot->findAll();

    $template = array(
      'menu' => $this->load->view('MENU/menu', '', TRUE),
      'judul' => 'Daftar User Hotspot',
      'konten' => $this->load->view('_Userhotspot/index', $d, TRUE),
    );
    $this->parser->parse('template/template2', $template);
  }
  // public function tambah()
  // {
  // }
	public function hapus()
	{
		$id = $_GET['id'];
		$this->removeHotspotUser($id);
		$this->MUserspot->delete($id);
		redirect(site_url('userhotspot'));
	}
	public function removeHotspotUser($i)
	{
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/remove"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'.id' => $i,
		);;
		$this->mikapi->write($Code, $data);
	}
	public function tambah()
	{
		$post = $this->input->post();
		$id = $post["profile"];
		$username = $post["username"];
		$paswd = $post["paswd"];
		echo $profile		= $this->MProfile->get($id)[0]->nama;
		$this->addUserHotspot(
			$username,
			$paswd,
			$profile
		);
		echo $id_user = $this->ambilnumHotspotuser($username);
		$this->MUserspot->insert($id_user, $username, $paswd, $id);
		redirect(site_url('userhotspot'));
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
}
