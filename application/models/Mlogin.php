<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script acces allowed');

class Mlogin extends CI_Model
{
	
	function masuk($user,$pass)
	{
		# code...
		return $this->db->query("SELECT * FROM admin where id='$user' and password=md5('$pass')");

	}
}
 ?>