<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	var $title_home = 'Home'; 

	var $title_about = 'About';

	var $title_contact = 'Contact';

	public function __construct() {
		parent::__construct();
	}

	public function title_home() {
		
		$data = $this->title_home;

		return $data;
	}

	public function title_about() {

		$data = $this->title_about;

		return $data;

	}

	public function title_contact() {

		$data = $this->title_contact;

		return $data;
		
	}
	

}
