<?php
   class login_controller extends CI_Controller
      {
         function __construct()
            {
               parent::__construct();
            }
    public function index()
            {
               $this->load->view('login_view');//load the login page!
            }
    public function home()
            {
               $this->load->model('book_model');//load the model named book_model!
               $result=$this->book_model->login();
               //return the login value yes if allowed to login no if not allowed!
         if(!$result)
            {
              $this->load->view('login_view');//if you are not allowed to login load the login page again!
            }
         else
            {
               $this->load->library('session');//if you are allowed to login..
               $user=array
                  (
                     'User_Name'=>$this->input->post('name'), //..store the user name,...
                     'Password'=>$this->input->post('password'), //...password and...
                     'is_logged'=>1, //is logged in? in the session library!
                  );
      
               $query = $this->book_model->rank(); //returns the rank of the user
              $row = $query->row();
               $rank=$row->rank;
               if($rank==1)
                 {
//                               $this->load->model('message_model');
//        $list =$this->message_model->message11(5,$start);
//         $data['message']=$list;
//         $config['base_url']=  base_url().'index.php/login_controller/home/';
//                   $config['total_rows']= $this->message_model->get_message_count_admin($list);
//                   $config['per_page']=3;
//                   $this->pagination->initialize($config);
//                   $data['pages']=$this->pagination->create_links();
//                    ;//..save the password and the user name in session for later uses and
//                 $this->session->set_userdata($user);
//                    $this->load->view('home_view',$data);   //..load the home page
                    $this->session->set_userdata($user);//..save the password and the user name in session for later uses and
                    $this->load->model('message_model');
                    $data['message']=$this->message_model->message();
                    $this->load->view('home_view',$data);   //..load the home page
                 }
               else if($rank==2)
                 {
                    $this->session->set_userdata($user);//..save the password and the user name in session for later uses and
                    $this->load->model('message_model');
                    $data['message']=$this->message_model->message_student();
                    //$this->session->set_userdata($user);
                    $this->load->view('viewer_view',$data);   //..load the home page
                   // $this->load->view('viewer_view');//students view
                 }
               else
                 {
                    $this->load->view('correct');//check out your account by contacting the administrator view
                 }
       
            }
            }
         public function home2()
            {
               if($this->session->userdata('is_logged')==1)
                  {
                    $this->load->model('message_model');
                   $data['message']=$this->message_model->message();
                     $this->load->view('home_view',$data); 
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
        $data['book']=$this->book_model->book();  
        $this->load->view('book_view',$data);}
         else{
             $this->load->view('login_view');
         }
      

    
    }
    public function books($start=0){
      
      if($this->session->userdata('is_logged')==1){
           $this->load->model('book_model');
       $datas=array();
       $data=array();
        $datas['book']=$this->book_model->book();  
      $list=$this->book_model->get_search(20,$start);
      
        $data['search']=$list;
                   $config['base_url']=  base_url().'index.php/login_controller/books/';
                   $config['total_rows']= $this->book_model->get_count($list);
                   $config['per_page']=20;
                   $this->pagination->initialize($config);
                   $data['pages']=$this->pagination->create_links();
              
 
       $this->load->view('book3_view',$datas);
     $this->load->view('book2_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         }
      
    }
     public function books2($start=0){
    
       if($this->session->userdata('is_logged')==1){
              $this->load->model('book_model');
       $datas=array();
       $data=array();
        $datas['book']=$this->book_model->book();  
      $list=$this->book_model->get_search(20,$start);
//       $this->load->view('book_2_view',$datas);
//     $this->load->view('book2_view',$data);
        $data['search']=$list;
                   $config['base_url']=  base_url().'index.php/login_controller/books2/';
                   $config['total_rows']= $this->book_model->get_count($list);
                   $config['per_page']=20;
                   $this->pagination->initialize($config);
                   $data['pages']=$this->pagination->create_links();
              
      $this->load->view('book3_view',$datas);
     $this->load->view('book2_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         }
        
    }
    public function book_code(){
          if($this->session->userdata('is_logged')==1){
               $this->load->model('book_model');
         $data=array();
        $data['book']=$this->book_model->book();
        $this->load->view('book_code_view',$data);
    }
    else{
             $this->load->view('login_view');
    }}
    public function book_code2(){
          if($this->session->userdata('is_logged')==1){
               $this->load->model('book_model');
         $data=array();
         $datas['search']=$this->book_model->book_code();
        $data['book']=$this->book_model->book();
        $this->load->view('book_code1_view',$data);
        $this->load->view('book_code2_view',$datas);
    }
    else{
             $this->load->view('login_view');
    }}
  public function students(){
      if($this->session->userdata('is_logged')==1){
      $this->load->view('students_view');
     
     }
         else{
             $this->load->view('login_view');
         }
       
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
       
       
  }
   public function student2($start=0){
     
           if($this->session->userdata('is_logged')==1){
                  $this->load->model('book_model');
       //$data=array();
          $datas=array();
            //$data['search']=$this->book_model->get_search2();
     // $datas['search']=$this->book_model->get_search2(20,$start);
          $list=$this->book_model->get_search2(20,$start);
          $datas['search']=$list;
                   $config['base_url']=  base_url().'index.php/login_controller/student2/';
                   $config['total_rows']= $this->book_model->get_count($list);
                   $config['per_page']=20;
                   $this->pagination->initialize($config);
                   $datas['pages']=$this->pagination->create_links();
        $datas['department']=$this->book_model->department();
     // $datas['book']=$this->book_model->book();  
           $this->load->view('student2_view',$datas);
       // $this->load->view('student2_view',$data);
     
           
           
           
        
     }
         else{
             $this->load->view('login_view');
         }
       

      
  }
   public function student2_2($start=0){
     
           if($this->session->userdata('is_logged')==1){
                  $this->load->model('book_model');
       $data=array();
          $datas=array();
          $list=$this->book_model->get_search2_2(20,$start);
          $datas['search']=$list;
                   $config['base_url']=  base_url().'index.php/login_controller/student2/';
                   $config['total_rows']= $this->book_model->get_count2($list);
                   $config['per_page']=20;
                   $this->pagination->initialize($config);
                   $datas['pages']=$this->pagination->create_links();
       // $datas['department']=$this->book_model->department();
     $datas['book']=$this->book_model->book();  
           $this->load->view('student_2_2_view',$datas);
       // $this->load->view('student2_view',$data);
     
           
           
           
        
     }
         else{
             $this->load->view('login_view');
         }
   }
  public function filter(){}
   public function search_book(){
       $this->load->model('book_model');
       $data['book']=$this->book_model->book();
       $this->load->view('search_book_view',$data);
   }
  public function insert(){
    
       if($this->session->userdata('is_logged')==1){
             $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $data['book']=$this->book_model->book();  
      $this->load->view('insert_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         }
       
     
  }
   public function book2(){
     
          if($this->session->userdata('is_logged')==1){
                 $this->load->model('book_model');
         $data=array();
        $data['book']=$this->book_model->book(); 
     $this->load->view('book_2_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         } 
   }
   public function insert_Db(){
        if($this->session->userdata('is_logged')==1){
             $this->load->model('check_existance_model');
              $Id=$this->check_existance_model->Check_Id_1();
      if($Id!=0){
          $this->load->view('Existing_student_view');
          $this->existing_view();
      }
      else{
          $this->insert_Db2();
      }
        }
         else{
             $this->load->view('login_view');
         } 
   }
   public function insert_Db2(){
       if($this->session->userdata('is_logged')==1){
            if(isset($_POST['Next'])){
                 $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->book_model->insert();
       //$this->with_Db_1($Id);
        $this->load->view('insert_with_view',$data);
     
   }
   else{
      $data=array();
      $datas=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $data['book']=$this->book_model->book();   
      $this->book_model->insert();
      $this->load->view('insert_view',$data);}
   
           }
         else{
             $this->load->view('login_view');
         }
      
   }
   public function existing_view(){
         if($this->session->userdata('is_logged')==1){
   
       $this->load->model('book_model');
       $data['department']=$this->book_model->department();
      $data['book']=$this->book_model->book();
         $this->load->view('existing_insert_view',$data);}
    else{
             $this->load->view('login_view');
         }
         
         }
   public function exist_insert(){
        if($this->session->userdata('is_logged')==1){
             $this->load->model('check_existance_model');
              $Id=$this->check_existance_model->Check_Id_1();
      if($Id!=0){
          $this->exist_insert_Db();
      }
      else{
          $this->load->view('new_student_view');
          $this->insert();
      }
            
        }
         else{
             $this->load->view('login_view');
   }}
public function exist_insert_Db(){
    if($this->session->userdata('is_logged')==1){
        $this->load->model('check_existance_model');
              $Id1=$this->check_existance_model->Check_Code1();
              $Id2=$this->check_existance_model->Check_Code2();
              $Id3=$this->check_existance_model->Check_Code3();
              $Id4=$this->check_existance_model->Check_Code4();
              $Id5=$this->check_existance_model->Check_Code5();
              
 if($Id1==0){
         if(isset($_POST['Next_Exist'])){
       $data=array();
      
       $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert1();
        $this->load->view('exist_insert_with_view',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert1();
        $this->load->view('new_insert_view',$data);
     
   }
   else{
      $this->load->model('insert_model');;   
      $this->insert_model->insert1();
      $this->insert();
   
           }
              }
              elseif($Id2==0){
                   if(isset($_POST['Next_Exist'])){
       $data=array();
      
       $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert2();
        $this->load->view('exist_insert_with_view',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert2();
        $this->load->view('new_insert_view',$data);
     
   }
   else{
      $this->load->model('insert_model');;   
      $this->insert_model->insert2();
      $this->insert();
   
           }
              }
              elseif($Id3!=0){
                              if(isset($_POST['Next_Exist'])){
       $data=array();
      
       $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert3();
        $this->load->view('exist_insert_with_view',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert3();
        $this->load->view('new_insert_view',$data);
     
   }
   else{
      $this->load->model('insert_model');;   
      $this->insert_model->insert3();
      $this->insert();
   
           }
              }
              elseif($Id4!=0){
                              if(isset($_POST['Next_Exist'])){
       $data=array();
      
       $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert4();
        $this->load->view('exist_insert_with_view',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert4();
        $this->load->view('new_insert_view',$data);
     
   }
   else{
      $this->load->model('insert_model');;   
      $this->insert_model->insert4();
      $this->insert();
   
           }
              }
              elseif($Id5!=0){
                              if(isset($_POST['Next_Exist'])){
       $data=array();
      
       $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert5();
        $this->load->view('exist_insert_with_view',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert5();
        $this->load->view('new_insert_view',$data);
     
   }
   else{
      $this->load->model('insert_model');;   
      $this->insert_model->insert5();
      $this->insert();
   
           }
              }
              else{
                   $data['Id']=$this->input->post('Id');
                  $this->load->view('you_cant_borrow_view',$data);
              
                  $this->home();
              }
    }
     else{
             $this->load->view('login_view');
   }
}
public function exist_insert_Db2(){
    if($this->session->userdata('is_logged')==1){
        $this->load->model('check_existance_model');
              $Id1=$this->check_existance_model->Check_Code1();
              $Id2=$this->check_existance_model->Check_Code2();
              $Id3=$this->check_existance_model->Check_Code3();
              $Id4=$this->check_existance_model->Check_Code4();
              $Id5=$this->check_existance_model->Check_Code5();
              
              if($Id1==0){
                    if(isset($_POST['Next_Exist'])){
                 $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
      $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert1();
        $this->insert_model->update1();
        $this->load->view('exist_insert_with_view2',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
        $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert1();
       $this->insert_model->update1();
        $this->load->view('new_insert_view2',$data);
     
   }
   else{
      $this->load->model('insert_model');   
      $this->insert_model->insert1();
      $this->insert_model->update1();
      $this->insert();
   
           }
              }
              elseif($Id2==0){
                   if(isset($_POST['Next_Exist'])){
                 $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
      $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert2();
        $this->insert_model->update2_1();
        $this->load->view('exist_insert_with_view2',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
        $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert2();
       $this->insert_model->update2_1();
        $this->load->view('new_insert_view2',$data);
     
   }
   else{
      $this->load->model('insert_model');   
      $this->insert_model->insert2();
      $this->insert_model->update2_1();
      $this->insert();
   
           }
              }
              elseif($Id3==0){ 
                  if(isset($_POST['Next_Exist'])){
                 $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
      $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert3();
        $this->insert_model->update3_1();
        $this->load->view('exist_insert_with_view2',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
        $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert3();
       $this->insert_model->update3_1();
        $this->load->view('new_insert_view2',$data);
     
   }
   else{
      $this->load->model('insert_model');   
      $this->insert_model->insert3();
      $this->insert_model->update3_1();
      $this->insert();
   
           }
           
   }
              elseif($Id4==0){ 
                  if(isset($_POST['Next_Exist'])){
                 $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
      $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert4();
        $this->insert_model->update4_1();
        $this->load->view('exist_insert_with_view2',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
        $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert4();
       $this->insert_model->update4_1();
        $this->load->view('new_insert_view2',$data);
     
   }
   else{
      $this->load->model('insert_model');   
      $this->insert_model->insert4();
      $this->insert_model->update4_1();
      $this->insert();
   
           }
           
   }
              elseif($Id5==0){
                   if(isset($_POST['Next_Exist'])){
                 $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
      $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert5();
        $this->insert_model->update5_1();
        $this->load->view('exist_insert_with_view2',$data);
     
   }
   else if(isset($_POST['Next_New'])){
        $data=array();
      $this->load->model('book_model');
      $data['department']=$this->book_model->department();
      $this->load->model('book_model');
      $this->load->model('insert_model');
        $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
       $this->insert_model->insert5();
       $this->insert_model->update5_1();
        $this->load->view('new_insert_view2',$data);
     
   }
   else{
      $this->load->model('insert_model');   
      $this->insert_model->insert5();
      $this->insert_model->update5_1();
      $this->insert();
   
           }
                  }
              else{
                  $data['Id']=$this->input->post('Id');
                  $this->load->view('you_cant_borrow_view',$data);
              
                  $this->home();
              }
    }
     else{
             $this->load->view('login_view');
   }
}

public function exist_insert_Db3(){
    if($this->session->userdata('is_logged')==1){
        $this->load->model('check_existance_model');
              $Id1=$this->check_existance_model->Check_Code1();
              $Id2=$this->check_existance_model->Check_Code2();
              $Id3=$this->check_existance_model->Check_Code3();
              $Id4=$this->check_existance_model->Check_Code4();
              $Id5=$this->check_existance_model->Check_Code5();
              
              if($Id1==0){
      $this->load->model('insert_model');
       $this->insert_model->insert1();
        $this->insert_model->update2();
        $this->insert();
       
  
              }
              elseif($Id2==0){
                  $this->load->model('insert_model');
       $this->insert_model->insert2();
        $this->insert_model->update2_2();
        $this->insert();
              }
              elseif($Id3==0){
                  $this->load->model('insert_model');
       $this->insert_model->insert3();
        $this->insert_model->update3_2();
        $this->insert();
              }
              elseif($Id4==0){
                  $this->load->model('insert_model');
       $this->insert_model->insert4();
        $this->insert_model->update4_2();
        $this->insert();
              }
              elseif($Id5==0){
                  $this->load->model('insert_model');
       $this->insert_model->insert5();
        $this->insert_model->update5_2();
        $this->insert();
              }
              else{
                  $data['Id']=$this->input->post('Id');
                  $this->load->view('you_cant_borrow_view',$data);
                  $this->home();
              }
    }
     else{
             $this->load->view('login_view');
   }
}
public function new_insert2(){
    $this->load->model('insert_model');
    $this->insert_model->insert_new1();
     if(isset($_POST['Next_Exist'])){
          $data['Id_1']=$this->input->post('Id_1');
       $data['Id']=$this->input->post('Id');
       $data['Book_Name']=$this->input->post('Book_Name');
       $data['Book_Code']=$this->input->post('Book');
         $this->load->view('exist_insert_with_view2',$data);
     }
     else if(isset($_POST['Next_New'])){
           $data['Id_1']=$data->input->post('Id_1');
            $data['Id']=$data->input->post('Id');
         $this->load->view('new_insert_view2',$data);
     }
     else{
         $this->insert();
     }
    
}
public function new_insert3(){
    $this->load->model('insert_model');
       $this->insert_model->insert_new1();
        $this->insert_model->update3();
        $this->insert();
}
   public function with_Db_1(){
       if($this->session->userdata('is_logged')==1){
       if(isset($_POST['Save'])){
               $data=array();
      $this->load->model('book_model');
      $this->load->model('student_model');
      $data['department']=$this->book_model->department();
      $this->student_model->update();
      $this->student_model->insert();
      $this->load->view('insert_view',$data);
       }
        else{
                $data=array();
      $this->load->model('book_model');
      $this->load->model('student_model');
      $data['department']=$this->book_model->department();
      $this->student_model->insert();
             $this->student_model->update();
               $data['Id_1']=$this->input->post('Id_1');
               $data['Id_2']=$this->input->post('Id_2');
               $data['Book_Name']=$this->input->post('Book_Name');
               $data['Book_Code']=$this->input->post('Book_Code');
               //$data['Id_2']=$this->input->post('Id');
              $this->load->view('insert_with_view_2',$data);
   }}
         else{
             $this->load->view('login_view');
         }
      
        
   }
   public function with_Db_2(){
        if($this->session->userdata('is_logged')==1){
//               if(isset($_POST['Save'])){
          $data=array();
      $this->load->model('book_model');
      $this->load->model('student_model');
      $data['department']=$this->book_model->department();
       $this->student_model->update2();
       $this->student_model->update3();
      $this->student_model->insert_2();
       $this->student_model->update4();
      
               $this->load->view('insert_view',$data);}
//               else{
//                   
//                $data=array();
//      $this->load->model('book_model');
//      $this->load->model('student_model');
//      $data['department']=$this->book_model->department();
//       $data['Id_1']=$this->input->post('Id_1');
//       $this->student_model->update2();
//      $this->student_model->insert();
//               $this->load->view('insert_with_view_3',$data);}
//        }
       else{
             $this->load->view('login_view');
         }
      
   }
    public function with_Db_3(){
        if($this->session->userdata('is_logged')==1){
          $data=array();
      $this->load->model('book_model');
      $this->load->model('student_model');
      $data['department']=$this->book_model->department();
       $this->student_model->update3();
      $this->student_model->insert();
               $this->load->view('insert_view',$data);}}
   public function setting(){
        if($this->session->userdata('is_logged')==1){
  $this->load->view('setting_view');
     
     }
         else{
             $this->load->view('login_view');
         }
      
     
   }
    public function change_password(){
          if($this->session->userdata('is_logged')==1){
  $this->load->view('change_password_view');
     
     }
         else{
             $this->load->view('login_view');
         }
   
    }
     public function change_password2(){
       
          if($this->session->userdata('is_logged')==1){
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
             else{  $this->load->view('change_password_view');}
         }
         else{
             $this->load->view('change_password_view');
             
             }
        
     
     }
         else{
             $this->load->view('login_view');
         }
         
    }
    public function change_username(){
       
                  if($this->session->userdata('is_logged')==1){
                       $username=array();
        $username['name']=$this->session->userdata('User_Name');
 $this->load->view('change_name_view',$username);
     
     }
         else{
             $this->load->view('login_view');
         }
       
    }
    public function change_username2(){
         if($this->session->userdata('is_logged')==1){
      $username=$this->input->post('New_Name');
      $this->load->model('book_model');
      $user=$this->session->userdata('User_Name');
      $this->book_model->change_username($user);
      $this->session->set_userdata('User_Name',$username);
    $this->home2();
    }
    else{
             $this->load->view('login_view');
         }}
     public function insert_department(){
          if($this->session->userdata('is_logged')==1){
$this->load->view('department_view');
     
     }
         else{
             $this->load->view('login_view');
         }
       
         
     }
     public function insert_department2(){
         
          if($this->session->userdata('is_logged')==1){
              $data=array();
         $this->load->model('book_model');
         $this->book_model->insert_department();
         $data['Id']=$this->input->post('id');
         $data['Name']=$this->input->post('dep_name');
 $this->load->view('congra_view2',$data);
        $this->load->view('setting_view');
     
     }
         else{
             $this->load->view('login_view');
         }
     
     }
         public function delete_department(){
          
              if($this->session->userdata('is_logged')==1){
                     $data=array();
             $this->load->model('book_model');
             $data['dep']=$this->book_model->department();
 $this->load->view('delete_dep_view',$data);
     
     }
         else{
             $this->load->view('login_view');
         }
         }
          public function delete_department2(){
           
            if($this->session->userdata('is_logged')==1){
                   $data=array();
             $this->load->model('book_model');
             $this->book_model->delete_department();
         $data['Name']=$this->input->post('dep_name');
  $this->load->view('congra_view3',$data);
        $this->load->view('setting_view');
     
     }
         else{
             $this->load->view('login_view');
         }
         }
      public function insert_book(){
            if($this->session->userdata('is_logged')==1){
  $this->load->view('insert_book_view');
     
     }
         else{
             $this->load->view('login_view');
         }
           
      }
       public function insert_book2(){
            
           if($this->session->userdata('is_logged')==1){
                
         $this->load->model('book_model');
         $code=$this->book_model->code_exist();
         if($code!=0){
             $data2['Name']=$this->input->post('code');
             $this->load->view('doesnt_exist_view2',$data2);
             $this->load->view('insert_book_view');
             
         }
         else{
             $this->insert_book3();
         }
         
     }
         else{
             $this->load->view('login_view');
         }
        
      }
      public function insert_book3(){
          if($this->session->userdata('is_logged')==1){
              $data=array();
              $this->load->model('book_model');
          $this->book_model->insert_book();
         $book=$this->book_model->check_book();
         if($book!=0){
             //$no=$this->book_model->count_book();
             $this->book_model->update_book();
         }
         else{
             $this->book_model->insert_book2();
         }
         $data['Code']=$this->input->post('code');
         $data['Name']=$this->input->post('book_name');
  $this->load->view('congra_view4',$data);
          $this->load->view('setting_view');}
      else{
             $this->load->view('login_view');
         }
      }
          public function delete_message($start=0){
              
                     if($this->session->userdata('is_logged')==1){
                          $this->load->model('message_model');
        $list =$this->message_model->message_all2(5,$start);
         $data['message']=$list;
         $config['base_url']=  base_url().'index.php/login_controller/view_all_Message/';
                   $config['total_rows']= $this->message_model->get_message_count($list);
                   $config['per_page']=3;
                   $this->pagination->initialize($config);
                   $data['pages']=$this->pagination->create_links();
        $this->load->view('message_view',$data); 
                    
     }
         else{
             $this->load->view('login_view');
         }
            
          }
               public function delete_message2($Id){
              
                     if($this->session->userdata('is_logged')==1){
                           //$data=array();
                        $from=$this->input->post('from');
                        $user_name=$this->session->userdata('User_Name');
                       // if($from!=$user_name){
//                             $this->load->view('cannot_delete_view');
//                            $this->delete_message(); 
                      //  }
//                        else
//                            {
                            $this->load->model('message_model');
             $this->message_model->delete_message($Id);
 $this->delete_message(); 
                            
//                        }
                            
                            
                        
            
     }
         else{
             $this->load->view('login_view');
         }
            
          }
          public function delete_book_choose(){
                  if($this->session->userdata('is_logged')==1){
                  $this->load->view('delete_book_choose_view');}
                  else{
             $this->load->view('login_view');
         }
          }
              public function delete_book(){
              
                     if($this->session->userdata('is_logged')==1){
                           $data=array();
             $this->load->model('book_model');
             $data['book']=$this->book_model->books();
 $this->load->view('delete_book_view',$data); 
     }
         else{
             $this->load->view('login_view');
         }
            
          }
           public function delete_book_1(){
              
                     if($this->session->userdata('is_logged')==1){
                           $data=array();
             $this->load->model('book_model');
             $data['book']=$this->book_model->book();
 $this->load->view('delete_book2_view',$data); 
     }
         else{
             $this->load->view('login_view');
         }
            
          }
            public function delete_book2(){
          if($this->session->userdata('is_logged')==1){
              $data=array();
             $this->load->model('book_model');
             $book=$this->book_model->check_exist();
             if($book!=0){
                 $this->book_model->delete_book(); 
                 $data['Name']=$this->input->post('book_name');
                 $data['Author']=$this->input->post('author');
                 $this->load->view('congra_view5',$data);
                 $this->load->view('setting_view');
             }
             else{
                 $data2['Name']=$this->input->post('book_name');
                 $data2['Author']=$this->input->post('author');
                 $data['book']=$this->book_model->books();
                 $this->load->view('Doesnt_exist_view',$data2);
                 $this->load->view('delete_book_view',$data);
                 
             }
             
        
       }
         else{
             $this->load->view('login_view');
         }    }
   public function delete_book2_1(){
          if($this->session->userdata('is_logged')==1){
              $data=array();
             $this->load->model('book_model');
             $no=$this->book_model->search_code2();
              if($no!=0){
             $this->book_model->delete_book2_1();
             $this->book_model->check_code2();
             $this->book_model->delete_book3();
              $data['Name']=$this->input->post('book_code');
 $this->load->view('congra_view5',$data);
        $this->load->view('setting_view');
         }
            else{ $data['Code']= $this->input->post('book_code');
             $data['Name']=  $this->input->post('book_name');
          $data['Author']=  $this->input->post('author');
          $this->load->view('doesnt_exist_view3',$data);
           $this->load->view('setting_view');
            }
             
        
       }
         else{
             $this->load->view('login_view');
         }    }
 
           public function delete_user($Id){
          if($this->session->userdata('is_logged')==1){
         $this->load->model('book_model');
         $data['id']=$Id;
         $data['code']=$this->input->post('bookname'); 
         $this->book_model->deleteuser($data);
        //$this->book_model->deleteuser($Id);
//        $this->book_model->update();
      $this->delete_user2($this->input->post('bookname'));
       
     $this->student();
       }
         else{
             $this->load->view('login_view');
         }    }
          public function delete_user2($code){
              if($this->session->userdata('is_logged')==1){
                   $this->load->model('book_model');
                  //  $code=$this->input->post('bookname'); 
      $data['borrowed']=$this->book_model->books_left2($code); 
      $data['code']=$code;
       if($data['borrowed']!=0){
       $this->book_model->update_borrowed2($data);}
       else{
            $data['borrowed']=0;
       $this->book_model->update_borrowed2($data);
            
       }
          }
          else{
             $this->load->view('login_view');
          } }
         
          public function return_book(){
               if($this->session->userdata('is_logged')==1){
 $this->load->view('return_view');
     
     }
     
         else{
             $this->load->view('login_view');
         }
               
          }
public function sinout(){
               if($this->session->userdata('is_logged')==1){
              $this->session->unset_userdata('User_Name');
               $this->session->unset_userdata('Password');
               $this->session->sess_destroy();
               redirect(base_url());
               
               }
               else{
             $this->load->view('login_view');
         }     
          }
 public function Message(){
               if($this->session->userdata('is_logged')==1)
                  {
                  
         $this->load->model('message_model');
         $this->message_model->store_message();
         $data['message']=$this->message_model->message();
        $this->load->view('home_view',$data); 
                  }
 else { $this->load->view('login_view');}
         
          }
           public function view_all_Message($start=0){
               if($this->session->userdata('is_logged')==1)
                  {
                   if('view_all_messages'){
                  
         $this->load->model('message_model');
        $list =$this->message_model->message_all2(5,$start);
         $data['message']=$list;
         $config['base_url']=  base_url().'index.php/login_controller/view_all_Message/';
                   $config['total_rows']= $this->message_model->get_message_count($list);
                   $config['per_page']=3;
                   $this->pagination->initialize($config);
                   $data['pages']=$this->pagination->create_links();
        $this->load->view('notifications_view',$data); 
                   }
                   else{
                       $this->Message();
                   }
                  }
 else { $this->load->view('login_view');}
         
          }
             public function more_Message($id){
               if($this->session->userdata('is_logged')==1)
                  {
           $this->load->model('message_model');
                   $data['message']=$this->message_model->message2_id($id);
                     $this->load->view('one_notification_view',$data); 
                   }
                  
                  
 else { $this->load->view('login_view');
         
          }
           }
              public function more_Message_student($id){
               if($this->session->userdata('is_logged')==1)
                  {
           $this->load->model('message_model');
                   $data['message']=$this->message_model->message2_id_student($id);
                     $this->load->view('one_notification_student_view',$data); 
                   }
                  
                  
 else { $this->load->view('login_view');
         
          }
           }
          
      
    }
    ?>