<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->database();
		// $this->load->model('IoanModel');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('url', 'cookie'));
		// $this->dbram = $this->load->database('ram', true);
		// $this->dbman = $this->load->database('maincore', true);
		// $this->cdbot = "5414998744:AAERPbX6u6j38QLjeJJfrxufQInh483NOos";
		$this->load->library(array('session', 'user_agent', 'upload'));
	}
	public function index(){
		// $this->load->view('view_login');
		$this->load->view('view_dashboard');
	}
	
	public function dashboard(){
		$this->load->view('view_dashboard');
	}
}
