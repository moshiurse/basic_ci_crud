<?php

class StudentModel extends CI_Model{

    function __construct(){
        parent::__construct();

        $this->load->database();
    }


public function getAllStudents(){
    $query = $this->db->get('student');

    return $query->result();
}

public function insert($data = array()) {
    $insert = $this->db->insert('student', $data);
    if($insert){
        return $this->db->insert_id();
    }else{
        return false;
    }
}

public function update($data, $id) {
    if(!empty($data) && !empty($id)){
        $update = $this->db->update('student', $data, array('id'=>$id));
        return $update?true:false;
    }else{
        return false;
    }
}

public function delete($id){
    $delete = $this->db->delete('student',array('id'=>$id));
    return $delete?true:false;
}


}


?>