<?php 
class School_model extends CI_Model {
    function getSchoolAll(){
        //echo "getSchoolAll()";
        $sql = "SELECT * FROM School ORDER BY Name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getSchoolByID($id){
        //echo "getSchoolAll()";
        $sql = "SELECT * FROM School
        WHERE SID='".$id."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function delSchoolByID($id){
        $sql = "UPDATE  School SET  flag  = '0' WHERE SID= ".$id." ";
        $query = $this->db->query($sql);
        return $query;
    }


    function delMajorByID($id){
        $sql = "UPDATE  Major SET  flag  = '0' WHERE MID= ".$id." ";
        $query = $this->db->query($sql);
        return $query;
    }

}