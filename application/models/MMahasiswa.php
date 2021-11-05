<?php

/**
 * 
 */
defined('BASEPATH') or exit('No direct script acces allowed');

class MMahasiswa extends CI_Model
{

	function findAll()
	{
		return $this->db->query("SELECT*,IF(username=nobp,'1','0')  AS statusakun FROM `tb_mahasiswa`,`tb_userhotspot` ;")->result_array();
	}
}
