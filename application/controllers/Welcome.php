<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		echo "welcome --> index";
		//$this->load->view('welcome_message');
	}
	public function hello(){
		echo "welcome --> hello";
	}

	public function hi($name){
		echo "welcome --> hi : ".$name;
	}

}
