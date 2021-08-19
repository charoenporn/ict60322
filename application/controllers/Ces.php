<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ces extends CI_Controller {
	public function index()
	{
		echo "ces --> index<br>";
		echo $this->input->server('REQUEST_METHOD');
		var_dump($_GET);
		var_dump($_POST);
		var_dump($_REQUEST);
		//$this->load->view('welcome_message');
	}
	public function getSchool(){
		//echo "ces --> getSchool()";
		$this->load->model('School_model');
		$this->School_model->getSchoolAll();
	}
	public function getMajor(){
		//echo "ces --> getSchool()";
		$this->load->model('School_model');
		$this->School_model->getSchoolAll();
	}
	public function getStudent(){
		//echo "ces --> getSchool()";
		$this->load->model('School_model');
		$this->School_model->getSchoolAll();
	}

	public function setNewSchool(){
		$data1 = $_GET['ID'];
		$data2 = $_GET['NAME'];
		$data3 = $_GET['TELNO'];
		
		echo "ID:".$data1;
		echo "NAME:".$data2;
		echo "TELNO:".$data3;
	}

}
