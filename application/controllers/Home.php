<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();

		$this->load->helper(array('url'));
		$this->load->model('M_home', 'm_home');
	}

	public function index()
	{
		$data['title'] = $this->m_home->title_home();
		$data['content'] = 'home';
		
		$this->load->view('template', $data);
	}

	public function contact()
	{
		$data['title'] = $this->m_home->title_contact();
		$data['content'] = 'contact';
		$this->load->view('template', $data);
	}

	public function about()
	{
		$data['title'] = $this->m_home->title_about();
		$data['content'] = 'about';
		
		$this->load->view('template', $data);
	}

	

	
}
