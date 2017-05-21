<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/



class Mdl_katalog extends CI_Model
{
	var $table = 'katalog';

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function save($data) {

		$this->db->insert($this->table, $data);
	}

	public function save2($nm_katalog, $harga, $ketengan) {
		
		$data = array (

			'nm_katalog' 	=> $nm_katalog,
			'harga' 		=> $harga,
			'keterangan' 	=> $ketengan,
		);

		$this->db->insert($this->table, $data);
	}

	public function save3($nm_katalog, $harga, $keterangan) {
		$this->db->query(
			"INSERT INTO katalog 
			(nm_katalog, harga, keterangan) 
			VALUES 
			('$nm_katalog', '$harga', '$keterangan')"
		);
	}
}