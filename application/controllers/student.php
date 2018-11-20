<?php

class Student extends CI_Controller{

    public function index(){

        $this->load->view('pages/student_view');
    }

    public function show(){
        // $this->load->model('studentModel');

        $result = $this->studentModel->getStudents();

        foreach ($result as $key) {
           echo $key->name;
           echo $key->phone;
           echo $key->email;
        }


    }
}

?>