<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesapi extends CI_Controller {
	public function index()
	{
        
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

    public function insertSchool(){
        
    }

    public function updateSchool(){

    }

    public function deleteSchool1($id){
        //echo $id;
        $this->load->model('School_model');
        $code = "";
        if($id != ""){
            $data = $this->School_model->getSchoolByID($id);
            if(count($data)>0){
                $data = $this->School_model->delSchoolByID($id);
                if($data > 0 ){
                    echo "Del OK";
                    $code = "SUC";
                }else{
                    echo "Del Not OK";
                    $code = "NOSUC";
                }
            }else{
                $code = "NOSUC";
            }
        }else{
            $code = "NOSUC";
        }
        echo $code;
        
    }
    public function deleteSchool2(){
        $id = $_GET["id"];
    
        echo $id;
        $this->load->model('School_model');
        $data = $this->School_model->delSchoolByID($id);
        if($data > 0 ){
            echo "Del OK";
        }else{
            echo "Del Not OK";
        }

    }
    public function deleteSchool3(){
        $id = $_POST["id"];
        echo $id;
        $this->load->model('School_model');
        $data = $this->School_model->delSchoolByID($id);
        if($data > 0 ){
            echo "Del OK";
        }else{
            echo "Del Not OK";
        }
    }

    public function deleteMajor($id){
        // APIs ?????????????????? admin ?????????????????????????????????????????? (autority == 1)
        $username = $_POST["user_login"];
        $password = $_POST["password_login"];
        $this->load->model('User_model');
        //$arr_auto = array(1,2,3);// Set 1
        $arr_auto = array(1);// Set 1
        if($this->User_model->check_user_autority($username,$password,$arr_auto)){
            echo "Login OK";
            $this->load->model('School_model');
            $data = $this->School_model->delMajorByID($id);
            if($data > 0 ){
                echo "Del OK";
            }else{
                echo "Del Not OK";
            }
        }else{
            echo "Login NOT-OK";
        }

    }

    //1 : loclhost/ict60_322/index.php/Cesapi/deleteSchool?id=125
    //2 : loclhost/ict60_322/index.php/Cesapi/deleteSchool/125
    //3 : loclhost/ict60_322/index.php/Cesapi/deleteSchool



}
