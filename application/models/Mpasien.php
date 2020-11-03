<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script acces allowed');

class Mpasien extends CI_Model
{
	function insert($id){
			$this->db->query("INSERT INTO `tb_pasien` (`id_ktp`,NIK,nama) VALUES ('$id','','')");				
	}
	function update(){
			$id = $this->input->post('id_card',TRUE);
			$a = $this->input->post('nik',TRUE);
			$b = $this->input->post('nama',TRUE);
			$c = $this->input->post('tgl',TRUE);
			$d = $this->input->post('alamat',TRUE);
			$e = $this->input->post('hp',TRUE);
			$this->db->query("UPDATE `tb_pasien` SET `NIK` = '$a',`nama` = '$b' , `tgl` = '$c' , `alamat` = '$d' , `hp` = '$e' WHERE `id_ktp` = '$id';");
	}
	function view()
	{
		# code...
		return $this->db->get('tb_pasien')->result_array();
	}
	function newaddview()
	{
		# code...
		return $this->db->query("SELECT*FROM tb_pasien WHERE `tb_pasien`.`NIK`='' OR `tb_pasien`.`nama`='';")->result_array();;

	}
	
	function delete($id){
		return $this->db->query("DELETE FROM `tb_pasien` WHERE `id_ktp` = '$id';");
	}
}
 ?>