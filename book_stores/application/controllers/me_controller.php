<?php
 class me_controller extends CI_Controller{
     
     public function me(){
         if($this->session->userdata('is_logged')==1)
                  {
         $this->load->model('book_model');
         $data=array();
         $data1=array();
        $data['User_Name']=$this->session->userdata('User_Name');
        $data['Password']=$this->session->userdata('Password');
         $me1=$this->book_model->me();
         $user=array
                  (
                     'Id'=>$this->input->post($me1),
                  );
          $this->session->set_userdata($user);
         $data1['me']=$this->book_model->me2();
         $this->load->view('me_view',$data1);
     }
     else
                  {
                     $this->load->view('login_view');
                  }
                  }
     

                         public function view_all_Message_student($start=0){
               if($this->session->userdata('is_logged')==1)
                  {
                   if('view_all_messages'){
                  
         $this->load->model('message_model');
        $list =$this->message_model->message_all21(5,$start);
         $data['message']=$list;
         $config['base_url']=  base_url().'index.php/login_controller/view_all_Message/';
                   $config['total_rows']= $this->message_model->get_message_count_student($list);
                   $config['per_page']=3;
                   $this->pagination->initialize($config);
                   $data['pages']=$this->pagination->create_links();
        $this->load->view('notifications_student_view',$data); 
                   }
                   else{
                       $this->Message();
                   }
                  }
 else { $this->load->view('login_view');}
         
          }
                   
     public function setting_me(){
         if($this->session->userdata('is_logged')==1)
                  {
         $this->load->view('setting_me_view');
                  }
                  else
                  {
                     $this->load->view('login_view');
                  }
     }
     
     public function home2()
            {
              
               if($this->session->userdata('is_logged')==1)
                  {
                    $this->load->model('message_model');
                   $data['message']=$this->message_model->message_student();
                     $this->load->view('viewer_view',$data); 
                  }
               else
                  {
                     $this->load->view('login_view');
                  }
           }
    
            public function book(){
       
     if($this->session->userdata('is_logged')==1){
          $this->load->model('book_model');
         $data=array();
        $data['book']=$this->book_model->books();  
        $this->load->view('bookme_view',$data);}
         else{
             $this->load->view('login_view');
         }
      

    
    }
     public function books($start=0){
      
      if($this->session->userdata('is_logged')==1){
           $this->load->model('book_model');
       $datas=array();
       $data=array();
        $datas['book']=$this->book_model->books();  
      $list=$this->book_model->get_search(20,$start);
      
        $data['search']=$list;
                   $config['base_url']=  base_url().'index.php/login_controller/books/';
                   $config['total_rows']= $this->book_model->get_count($list);
                   $config['per_page']=20;
                   $this->pagination->initialize($config);
                   $data['pages']=$this->pagination->create_links();
              
 
       $this->load->view('book3me_view',$datas);
     $this->load->view('book2me_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         }
      
    }
    
     public function change_username(){
       if($this->session->userdata('is_logged')==1)
                  {
                       $username=array();
        $username['name']=$this->session->userdata('User_Name');
 $this->load->view('changemy_name_view',$username);
     
                  }
                  else
                  {
                     $this->load->view('login_view');
                  }
    }
    public function change_username2(){
        if($this->session->userdata('is_logged')==1)
                  {
        
      $username=$this->input->post('New_Name');
      $this->load->model('book_model');
      $user=$this->session->userdata('User_Name');
      $this->book_model->change_username($user);
      $this->session->set_userdata('User_Name',$username);
    $this->home2();
                  }
                  else
                  {
                     $this->load->view('login_view');
                  }
     }
       public function change_password(){
if($this->session->userdata('is_logged')==1)
                  {
  $this->load->view('changemy_password_view');
                  }
 else
                  {
                     $this->load->view('login_view');
                  }
   
    }
     public function change_password2(){
         if($this->session->userdata('is_logged')==1)
                  {
                $password=$this->input->post('old_pass');
         $password1=$this->input->post('new_pass');
         $password2=$this->input->post('cnew_pass');
         $password_session=$this->session->userdata('Password');
         $name=$this->session->userdata('User_Name');
 if($password==$password_session){
             if($password1==$password2){
             $this->load->model('book_model');
             $this->book_model->change_password($name);
             $this->session->set_userdata('Password',$password1);
              $this->home2();
             
             }
             else{  $this->load->view('changemy_password_view');}
         }
         else{
             $this->load->view('changemy_password_view');
             
             }
                  }
     
     

         else
                  {
                     $this->load->view('login_view');
                  }
    }
     
 }
?>
