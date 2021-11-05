<?php

/**
 * 
 */
class Printvoucer extends CI_Controller
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
      'judul' => 'Daftar Voucer Login',
      'konten' => $this->load->view('_Voucerhotspot/index', $d, TRUE),
    );
    $this->parser->parse('template/template2', $template);
  }
  public function cetakVoucer()
  {

    $database = json_decode($this->input->post('jsonData'));
    // var_dump($database);
    $d['data'] = $database->data;
    echo $this->load->view('_PrinttoPDf/_multipleVoucer/laporan/laporanpdftes', $d, TRUE);
  }
}
