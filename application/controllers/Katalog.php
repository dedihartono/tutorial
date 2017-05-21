<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Katalog extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));

		$this->load->model('Mdl_katalog', 'katalog');
	}
	
	public function index()
	{
		$this->load->view('form_tambah');	
	}

	public function simpan() {
		$data = array(
				 'nm_katalog' 	=> $this->input->post('nm_katalog'),
				 'harga' 		=> $this->input->post('harga'),
				 'keterangan' 	=> $this->input->post('keterangan'),
			);

		$this->katalog->save($data);

		redirect($this->index);
	}

	public function simpan2() {

		$nm_katalog = $this->input->post('nm_katalog');
		$harga 		= $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');

		$this->katalog->save2($nm_katalog, $harga, $keterangan);


		redirect($this->index);

	}

	public function simpan3() {
		
		$nm_katalog = $this->input->post('nm_katalog');
		$harga 		= $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');

		$this->katalog->save3($nm_katalog, $harga, $keterangan);


		redirect($this->index);

	}
}