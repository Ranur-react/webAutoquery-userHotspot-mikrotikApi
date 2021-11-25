<?php

/**
 * 
 */
defined('BASEPATH') or exit('No direct script acces allowed');

class MUserspot extends CI_Model
{

	function findAll()
	{
		return $this->db->query("SELECT*FROM `tb_userhotspot` JOIN `tb_profile` ON `id`=`profile_id`;")->result_array();
	}
	public function insert($id, $nama, $paswd, $profile_id)
	{
		$this->db->query("INSERT INTO `tb_userhotspot` (`id_hotspot`, `username`, `password`, `profile_id`) VALUES ('$id', '$nama', '$paswd', '$profile_id');");
	}
}
