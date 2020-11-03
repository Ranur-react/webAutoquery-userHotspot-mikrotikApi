<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
        $this->load->model('Mantrian','Ma');

	}
        public function autoclearAntrian(){
        $a=$this->Ma->viewNow();
        foreach ($a->result_array() as $key) :
            $tgldata= $key['tgldata'];
            $tglnew=$key['tanggalnow'];;

            if($tgldata!=$tglnew){  
                $this->Ma->kosongkanUlang();                
            }

        endforeach;

    }
	function index(){
        $this->autoclearAntrian();
		if($this->session->userdata('masuk')==TRUE){
			redirect(site_url('Template'));
		}else{
			$this->load->view('login/login');
		}
		// $this->load->view('login/login');
	}
	function masuk(){
		$u=strip_tags(str_replace("'","'", $this->input->post('your_name',true)));	
		$p=strip_tags(str_replace("'","'", $this->input->post('your_pass',true)));
		$qry=$this->Mlogin->masuk($u,$p);
		if(strlen($u)==''||strlen($p)==''){

            $this->session->set_flashdata('msg','Username atau Password tidak boleh kosong');
            $url=site_url();redirect($url);
		}
		else{
            if($qry->num_rows() > 0){
                $v=$qry->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('status_login','oke');
                $this->session->set_userdata('user',$v['id']);
                $this->session->set_userdata('nama',$v['nama']);
                $this->session->set_userdata('level',$v['level']);
            }
            else{
                $this->session->set_userdata('masuk',FALSE);
            }

        }
            if($this->session->userdata('masuk')==TRUE){
                $user=$this->session->userdata('user');
            redirect(site_url('Template'));
//                redirect(site_url('template/index'));
            }
            else{
                $this->session->set_flashdata('msg','Periksa kembali username dan password anda');
                $url=site_url('login/index');
                redirect($url);
            }		
	}
	   public function Logout()
        {
            $this->session->sess_destroy();
            redirect(site_url());

        }
}
 ?>