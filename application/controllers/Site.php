<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this->load->view('site/site_index');
	}
	
	public function about(){
		$this->load->view('site/site_about');
	}
	
	public function contact_info(){
		echo "<h1>This is contact us page</h1>";
	}

	public function service($id = '', $name = ''){
		echo "<h3>This is our service page</h3><p>ID: " . $id . " AND Service Name: " . $name . "<p>";
	}
	
	public function product($id = ''){
		echo "<h3>Product name: <br>" . $id . "</h3>";
	}
}
