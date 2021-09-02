<?php 
class User_model extends CI_Model {

    function check_user_autority($username, $password,$arr_autority){
        $sql = "SELECT * FROM users WHERE username = '".$username."' AND password='".$password."' AND active_flag = 1 ";
        $query = $this->db->query($sql);
        $login = false;
        foreach ($query->result() as $row){
            if($row->password == $password){
                foreach($arr_autority as $ato){
                    if($ato== $row->autority){
                        $login = true;
                    }
                }
            } 
        }
        return $login;


    }


}