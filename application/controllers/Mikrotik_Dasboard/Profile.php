<?php

/**
 * 
 */
class Profile extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MLogin', 'DbLogin');
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

    $template = array(
      'menu' => $this->load->view('MENU/menu', '', TRUE),
      'judul' => 'Level User Hotspot',
      'konten' => $this->load->view('_Profile/index', $d, TRUE),
    );
    $this->parser->parse('template/template2', $template);
  }
  public function tambah()
  {
		$post = $this->input->post();
		$nama = $post["nama"];
		$kecepatan = $post["kecepatan"];
		$jumlah = $post["jumlah"];
		$masa = $post["masa"];
		$this->addUserHotspotProfile($nama, $jumlah, $masa, $kecepatan);
		$id= $this->ambilnumHotspotProfile($nama);
		$this->MProfile->insert($id,$nama, $jumlah, $masa, $kecepatan);
		$this->session->set_flashdata('msg', sukses('Berhasil Menambah data Profile'));
		redirect(site_url('profile'));
  }
	public function destroy()
	{
		$id=$_GET['id'];
		$this->removeHotspotProfile($id);
		$this->MProfile->delete($id);
		redirect(site_url('profile'));
		# code...
	}
	public function removeHotspotProfile($i)
	{
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/profile/remove"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'.id' => $i,
		);;
		$this->mikapi->write($Code, $data);
	}
	public function ambilnumHotspotProfile($name)
	{
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/profile/print"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'?name' => $name,
		);
		$datax = $this->mikapi->write($Code, $data);
		$d = $datax[0];
		// echo  $d['.id'];
		return $d['.id'];
	}
	public function addUserHotspotProfile($name, $jumlah, $masa,$kecepatan)
	{
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/profile/add"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'name' => $name,
			'shared-users' => $jumlah,
			'session-timeout' => $masa.'d',
			'rate-limit' => $kecepatan,
		);;
		$this->mikapi->write($Code, $data);
	}
}
