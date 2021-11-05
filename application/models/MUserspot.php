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
}
