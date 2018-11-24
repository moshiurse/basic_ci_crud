<?php

class Student extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('studentModel');
    }



    public function index(){
        $data['students'] = $this->studentModel->getStudents();  
       
        $this->load->view('students/index', $data);
    }

    public function add(){
        $data['title'] = 'Create Student';
        $data['button'] = "Create Student";
        $data['student'] = "NA";
        $data['req'] = "student/create";
        $this->load->view('students/add-edit', $data);
    }

    public function create(){


        $this->studentModel->insert();
        $data['msg'] = "Succesfully Inserted data";
        $this->load->view('students/success', $data);
    }

    public function edit($id){

        $data['student'] = $this->studentModel->getStudents($id);
        $data['button'] = "Update Student";
        $this->load->view('students/add-edit', $data);

    }

    public function update(){

        $this->studentModel->update();
        $data['msg'] = "Succesfully Updated data";
        $this->load->view('students/success', $data);
    }


    public function delete($id){
        $this->studentModel->delete($id);
        redirect("student/");
    }

    public function view($id){

        $data['student'] = $this->studentModel->getStudents($id);
        $this->load->view('students/view', $data);
    }
    
    public function success(){

        $this->load->view('students/success');
    }

}

?>