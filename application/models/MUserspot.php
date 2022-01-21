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
	public function CheckUsername($var)
	{
		return $this->db->query("SELECT*FROM `tb_userhotspot` username WHERE username='$var';")->result_array();
	}
	public function CheckPassword($email,$paswd)
	{
		return $this->db->query("SELECT*FROM `tb_userhotspot` WHERE username='$email' and  password='$paswd' ")->result_array();
	}
	public function UpdatePassword($email, $paswd)
	{
		return $this->db->query("UPDATE tb_userhotspot SET password='$paswd' WHERE  username='$email' ");
	}
	public function insert($id, $nama, $paswd, $profile_id)
	{
		$this->db->query("INSERT INTO `tb_userhotspot` (`id_hotspot`, `username`, `password`, `profile_id`) VALUES ('$id', '$nama', '$paswd', '$profile_id');");
	}
	public function delete($id)
	{
		$this->db->query("DELETE FROM `tb_userhotspot` WHERE `id_hotspot` = '$id'; ");
	}
}
