<?php

/**
 * 
 */
defined('BASEPATH') or exit('No direct script acces allowed');

class MProfile extends CI_Model
{

	function findAll()
	{
		return $this->db->query("SELECT*FROM tb_profile")->result_array();
	}
	function get($id)
	{
		return $this->db->query("SELECT*FROM tb_profile where id='$id'")->result();
	}
	public function insert($id, $nama, $jumlah, $masa, $kecepatan)
	{
	
		$this->db->query("INSERT INTO `tb_profile` (`id`,`nama`, `rx`, `tx`, `jumlah_user`, `masa_aktif`) VALUES ('$id','$nama','$kecepatan','$kecepatan','$jumlah','$masa')");
	}
	public function delete($id)
	{
		$this->db->query("DELETE FROM `tb_profile` WHERE `id` = '$id'; ");
	}
}
