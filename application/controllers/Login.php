<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MUserspot', 'MUserspot');
		$this->load->model('MLogin','DbLogin');
		$this->load->library(array('session','form_validation'));
		
	}

public function index()
{
	$data = $this->DbLogin->show();
	
		 if ($this->mikapi->Connect($data['ip'],$data['username'],$data['password'])=="Connected") {
	                redirect(site_url('Home'));
	     }else{
					$this->Login();

	     }
}

 
	public function Loginmik()
    {    
	     $ip=$this->input->post('ip',true);
	     $us=$this->input->post('un',true);
	     $pas=$this->input->post('pw',true);
	     if ($this->mikapi->Connect($ip,$us,$pas)=="Connected") {
	     			$this->DbLogin->insert($ip,$us,$pas);
	                redirect(site_url('Home'));
	     }else{
					echo "Password / username salah";

	     }
 }
 	public function Login(){

		$template = array (
				'menu' => $this->load->view('MENU/kosong','',TRUE),
				'judul' => 'Login TO Mikrotik ',
				'konten' => $this->load->view('KONTEN/Connect','',TRUE)
		);
		$this->parser->parse('template/template2',$template);

            
	}
	public  function  UbahPaswd(){

		 $username = $this->input->post('username', true);
		 $olpaswd = $this->input->post('old', true);
		 $newpaswd = $this->input->post('pw', true);
		//checkusername
		if(count($this->MUserspot->CheckUsername($username))){
			//checkpassword
			if (count($this->MUserspot->CheckPassword($username, $olpaswd))) {
				//gantipassword
				 if($this->MUserspot->UpdatePassword($username, $newpaswd)){
					//redirect to new page
					echo "<script>alert(\"Berhasil mengubah password\");</script>";
					$id_user = $this->ambilnumHotspotuser($username);
					echo $this->UpdatePasswordUserHotspot(
						$id_user,
						$newpaswd
					);
					redirect('awal');
				 }else{
					echo "<script>alert(\"Password Gagal Di ubah\");window.location.href='gantiPassword';</script>";

				 }
			}else{
				 echo "<script>alert(\"Password Lama salah, hubungi operator untuk mereset\");window.location.href='gantiPassword';</script>";
			}


		}else{
				 echo "<script>alert(\"Username Tidak Ditemukan\");window.location.href='gantiPassword';</script>";

		}
	}
	public function UpdatePasswordUserHotspot($id,$paswd){
		$data = $this->DbLogin->show();
		$Code['command'] = "/ip/hotspot/user/edit"; //perntah
		$Code['ArrayValue'] = array(         //value dari perintah
			'.id' => $id,
			'password' => $paswd,
		);
		$this->mikapi->write($Code, $data);
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
	public function gantiPassword()
	{

		$template = array(
			'menu' => $this->load->view('MENU/kosong', '', TRUE),
			'judul' => 'Change Password',
			'konten' => $this->load->view('KONTEN/ChangePassword', '', TRUE)
		);
		$this->parser->parse('template/template2', $template);
	}
	
	
	public function logout(){

		$template = array (
				'menu' => $this->load->view('MENU/kosong','',TRUE),
				'judul' => 'Login TO Mikrotik ',
				'konten' => $this->load->view('KONTEN/Connect','',TRUE)
		);
		$this->parser->parse('template/templateawal',$template);

            
	}
 // public function Cetak()
 // {
 //   // $this->mikapi->write("/ip/address/print");
 //   $this->mikapi->write("/ip/hotspot/user/add/name=aaaa");
 	
 // }


}

 ?>
