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
  }
}
