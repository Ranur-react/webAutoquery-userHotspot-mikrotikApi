<?php

/**
 * 
 */
defined('BASEPATH') or exit('No direct script acces allowed');

class MMahasiswa extends CI_Model
{

	function findAll()
	{
		return $this->db->query("SELECT *,IF((SELECT username FROM `tb_userhotspot` WHERE username=nobp)=nobp,'1','0')  AS statusakun FROM tb_mahasiswa;")->result_array();
	}
	public function findUnregister()
	{
		return $this->db->query("SELECT *,IF((SELECT username FROM `tb_userhotspot` WHERE username=nobp)=nobp,'1','0')  AS statusakun FROM tb_mahasiswa WHERE (IF((SELECT username FROM `tb_userhotspot` WHERE username=nobp)=nobp,'1','0'))=0;")->result_array();
	}
}
