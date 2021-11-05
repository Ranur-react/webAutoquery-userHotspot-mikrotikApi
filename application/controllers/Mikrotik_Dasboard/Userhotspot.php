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
    $this->load->model('MUserspot', 'MUserspot');
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
    $d['UserspotList'] =  $this->MUserspot->findAll();

    $template = array(
      'menu' => $this->load->view('MENU/menu', '', TRUE),
      'judul' => 'Daftar User Hotspot',
      'konten' => $this->load->view('_Userhotspot/index', $d, TRUE),
    );
    $this->parser->parse('template/template2', $template);
  }
  public function tambah()
  {
  }
}
