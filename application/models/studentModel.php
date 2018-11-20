<?php

class StudentModel extends CI_Model{


public function getStudents(){

    $query = $this->db->get('student');

    return $query->result();
}



}

?>