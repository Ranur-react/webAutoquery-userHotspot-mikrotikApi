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
}
