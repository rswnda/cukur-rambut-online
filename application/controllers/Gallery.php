<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Gallery extends CI_Controller {
		//function __construct(){
			//parent::__construct();
			//$this->load->helper('url');

	public function index()
	{
		$this->load->view('home/header.php');
		$this->load->view('gallery/gallery.php');
		$this->load->view('home/footer.php');
	}
}
