<?php

 class account_controller extends CI_Controller{
     public function create_account(){
          if($this->session->userdata('is_logged')==1)
                  {
              $this->load->view('create_account_view');
                  }
 else {
                      $this->load->view('login_view');
 }
     }
      public function create_account2(){
          if($this->session->userdata('is_logged')==1)
                  {
              $data=array();
              $UserName=$this->input->post('user_name');
               $Password=$this->input->post('password');
                $Password_Conf=$this->input->post('password_conf');
                 //$Rank=$this->input->post('rank');
                  $this->load->database();
             $this->load->model('account_model');
                 $exist=$this->account_model->exists($UserName);
                 if($exist!=0){
                      $this->load->view('account_exist_view');
 $this->create_account();                 
//show the username already exists view
                 }
                 elseif($Password==$Password_Conf)  {
              $this->load->database();
             $this->load->model('account_model');
             $this->account_model->new_account();
                 }
                 else{
                    $this->create_account();
             
                 }

    
 }
              
                  
 else {
                      $this->load->view('login_view');
 }
     }
    
}
?>
