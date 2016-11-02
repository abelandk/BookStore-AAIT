<?php
 class student_controller extends CI_Controller{
     
     public function books_borrowed($Id){
          if($this->session->userdata('is_logged')==1){
        
              $this->load->model('student_model');
              $data['books']=$this->student_model->books_borrowed($Id);
              $this->load->view('books_borrowed_view',$data);
     }
     else{
             $this->load->view('login_view');
         }
 }
 
 public function with_1(){
      if($this->session->userdata('is_logged')==1){
          $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $data['book']=$this->book_model->book();   
      $this->book_model->insert();
      $this->load->view('insert_with_view');
     }
     else{
             $this->load->view('login_view');
         }
 }
 public function with_info($With_1){
      if($this->session->userdata('is_logged')==1){
         $this->load->model('student_model');
    //  $this->books_borrowed($Id);
      $data['books']=$this->student_model->with_info($With_1);
      $this->load->view('with_view',$data);
     }
     else{
             $this->load->view('login_view');
         }
 }
 public function with_Db_1(){
      if($this->session->userdata('is_logged')==1){
          $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->student_model->insert();
      $this->load->view('insert_with_view',$data);
     }
     else{
             $this->load->view('login_view');
         }
 }
 
 public function show_with($Id){
      if($this->session->userdata('is_logged')==1){
        
              $this->load->model('student_model');
              $data['books']=$this->student_model->With_info($Id);
              $this->load->view('with_view',$data);
     }
     else{
             $this->load->view('login_view');
         }
 }
 public function Return_Book($Code){
      $this->load->model('student_model');
      $this->student_model->Return_Book($Code);
      $this->student();
 }
    public function student(){
      $data=array();
       if($this->session->userdata('is_logged')==1){
            $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $data['book']=$this->book_model->book();  
    $this->load->view('student_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         }
       
       
  }}
?>
