<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script acces allowed');

class Mantrian extends CI_Model
{
	function insert($id){
		$i=0;
		$MX=0;
		foreach ($this->viewcount()  as $r) {
			$i=$r['cnt'];
		}
		foreach ($this->viewcountMAX()  as $r) {
			$Mx=$r['Mx'];
		}

		if($i<1){
			$this->db->query("INSERT INTO tb_antrian values('1','$id',now(),'1')");
		}else{
			$s=$Mx+1;
			$data = $this->db->query("SELECT * FROM tb_antrian WHERE id_pasien='$id' AND tanggal=DATE_FORMAT(NOW(),'%Y-%m-%d') AND STATUS='1'");
			if ($data->num_rows() == null ) {
				$this->db->query("INSERT INTO tb_antrian values('$s','$id',now(),'1')");
			} 

		}
	}
	function viewpasien(){
		return $this->db->query("SELECT*FROM `tb_pasien` WHERE `id_ktp` NOT IN (SELECT tb_antrian.`id_pasien` FROM `tb_antrian` WHERE status='1');")->result_array();
	}
	function view()
	{
		# code...
		return $this->db->query("SELECT *,(LEFT(`tb_antrian`.`tanggal`,4)-LEFT(`tb_pasien`.`tgl`,4)) AS usia FROM tb_antrian JOIN tb_pasien ON id_ktp=id_pasien WHERE STATUS NOT IN('SELESAI_ANTRI') ORDER BY NO ASC;");
	}
	function viewNow()
	{
		# code...
		return $this->db->query("SELECT (LEFT(`tb_antrian`.`tanggal`,4)-LEFT(`tb_pasien`.`tgl`,4)) AS usia,DATE_FORMAT(NOW(), '%Y%m%d') AS tanggalnow,DATE_FORMAT(tanggal, '%Y%m%d') AS tgldata FROM tb_antrian JOIN tb_pasien ON id_ktp=id_pasien WHERE STATUS NOT IN('SELESAI_ANTRI') ORDER BY NO ASC;");
	}
	function viewcount(){
					return $this->db->query("SELECT COUNT(`tb_antrian`.`no`) AS cnt FROM tb_antrian JOIN tb_pasien ON id_ktp=id_pasien WHERE STATUS NOT IN('SELESAI_ANTRI') ORDER BY NO ASC;
			")->result_array();
	}
	function viewcountMAX(){
					return $this->db->query("SELECT MAX(`tb_antrian`.`no`) AS Mx FROM tb_antrian JOIN tb_pasien ON id_ktp=id_pasien WHERE STATUS NOT IN('SELESAI_ANTRI') ORDER BY NO ASC;
			")->result_array();
	}
	function delete($id){
		
		$pindah=$this->db->query("UPDATE `tb_antrian` SET `status` = 'SELESAI_ANTRI' WHERE `no` = '$id';");
		$pindah=$this->db->query("INSERT INTO `tb_antrianhistory` (`tb_antrianhistory`.`no`,`tb_antrianhistory`.`id`,`tb_antrianhistory`.`tgl`,`tb_antrianhistory`.`status`) SELECT * FROM `tb_antrian` WHERE NO='$id';");
		$hapus=$this->db->query("DELETE FROM `tb_antrian` WHERE `no` = '$id';");

	}
		function deletedaily(){
		$pindah=$this->db->query("UPDATE `tb_antrian` SET `status` = 'SELESAI_ANTRI' WHERE `tb_antrian`.`tanggal` NOT IN (SELECT `tb_antrian`.`tanggal` FROM `tb_antrian` WHERE `tb_antrian`.`tanggal`=DATE_FORMAT(NOW(), '%Y-%m-%d'));");

		$pindah=$this->db->query("INSERT INTO `tb_antrianhistory` (`tb_antrianhistory`.`no`,`tb_antrianhistory`.`id`,`tb_antrianhistory`.`tgl`,`tb_antrianhistory`.`status`) SELECT `tb_antrian`.`tanggal` FROM `tb_antrian` WHERE `tb_antrian`.`tanggal`=DATE_FORMAT(NOW(), '%Y-%m-%d');");
		$hapus=$this->db->query("DELETE FROM `tb_antrian` WHERE `tb_antrian`.`tanggal` NOT IN (SELECT `tb_antrian`.`tanggal` FROM `tb_antrian` WHERE `tb_antrian`.`tanggal`=DATE_FORMAT(NOW(), '%Y-%m-%d'));");

	}


	

	function kosongkanUlang(){
		 $this->db->query("INSERT INTO `tb_antrianhistory` (`tb_antrianhistory`.`no`,`tb_antrianhistory`.`id`,`tb_antrianhistory`.`tgl`,`tb_antrianhistory`.`status`) SELECT * FROM `tb_antrian` ");
		 $this->db->query("DELETE FROM tb_antrian");
	}
}
 ?>