<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesapi extends CI_Controller {
	public function index()
	{
		// echo "ces --> index<br>";
		// echo $this->input->server('REQUEST_METHOD');
		// var_dump($_GET);
		// var_dump($_POST);
		// var_dump($_REQUEST);
		//$this->load->view('welcome_message');
    }
    public function testAPIs(){
        echo $this->input->server('REQUEST_METHOD');
        echo "====";
        var_dump($_GET);
        echo "===";
		var_dump($_POST);

    }
    public function getSchoolAll(){
        $this->load->model('School_model');
        $data = $this->School_model->getSchoolAll();
        var_dump($data);

    }
    public function getSchoolbyID(){
        $id = $_GET["id"];
        $this->load->model('School_model');
        $data = $this->School_model->getSchoolByID($id);
        var_dump($data);
    }
    public function getSchoolbyKeyword(){

    }
    public function updateSchool(){

    }


}
