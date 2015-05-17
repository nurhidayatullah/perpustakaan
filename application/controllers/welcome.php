<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('index');
		$this->load->view('footer');
	}
}