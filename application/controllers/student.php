<?php

class Student extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('studentModel');
    }



    public function index(){
        $data['students'] = $this->studentModel->getAllStudents();       
       
        $this->load->view('students/index', $data);
    }

    public function add(){

        $this->load->view('students/add-edit');
    }


}

?>