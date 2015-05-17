<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('buku/page');
		$this->load->view('footer');
	}
	public function tes(){
		echo "tes";
	}
}
?>