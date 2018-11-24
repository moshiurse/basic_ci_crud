<?php

class StudentModel extends CI_Model{

    function __construct(){
        parent::__construct();

        $this->load->database();
    }


public function getStudents($id = false){
    if ($id === FALSE)
    {
            $query = $this->db->get('student');
            return $query->result_array();
    }

    $query = $this->db->get_where('student', array('id' => $id));
    return $query->row_array();
}

public function insert() {
    $this->load->helper('url');

    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone')
    );

    return $this->db->insert('student', $data);
}

public function update() {

    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone')
    );

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('student', $data);
}

public function delete($id){
    $this -> db -> where('id', $id);
    $this -> db -> delete('student');
}


}


?>