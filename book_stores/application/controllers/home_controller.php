<?php
   class home_controller extends CI_Controller
      {
         function __construct()
            {
               parent::__construct();
            }

    public function index()
            {
                $this->load->model('home_model');//load the model named home_model!
               $result['type']=$this->home_model->Property();
               $this->load->view('home_view',$result);//load the home page!
            
        
            }
   public function Property()
            {
               $this->load->view('property_view');//load the property page!
            }
         
    public function Register_Property()
            {
        
                $this->load->view('register_view');//load the register property page!
        
            }
    public function Register_Db()
            {
        
                $data=array();
                $this->load->model('home_model');  
                $this->home_model->register();
                $this->load->view('register_view');//load the register property page!
        
            }        
    public function Update_Property()
            {
                $this->load->model('home_model');//load the model named home_model!
                $result['result']=$this->home_model->Property();
                $this->load->view('search_view',$result);//load the home page!
            }
    public function Update_Property2($inventory_no)
            {
                $this->load->model('home_model');//load the model named home_model!
                $result['result']=$this->home_model->search_property($inventory_no);
                $this->load->view('update_view',$result);//load the home page!
            }
    public function Update_Db()
            {
                $this->load->model('home_model');//load the model named home_model!
                $this->home_model->update();
                $result['result']=$this->home_model->Property();
                $this->load->view('search_view',$result);//load the home page!
            }
    public function Search_Property()
            {
                $this->load->model('home_model');//load the model named home_model!
                $result['result']=$this->home_model->search();
            }
    public function Search_Property2()
            {
                $this->load->model('home_model');//load the model named home_model!
                $result['result']=$this->home_model->search();
                $this->load->view('search_view2',$result);
            }      
    public function Give_Property()
            {
                 $this->load->view('give_view');//load the give property page!
            }
    public function Give_Db()
            {
                $this->load->model('home_model');//load the model named home_model!
                $this->home_model->register();
                $this->load->view('give_view');//load the give property page!
            }
    public function Home2()
            {
              $this->load->model('home_model');//load the model named home_model!
               $result['result']=$this->home_model->Property();
               $this->load->view('home_view',$result);//load the home page!
            }
    public function Mail()
            {
              $this->load->model('home_model');//load the model named home_model!
               $result['result']=$this->home_model->Mail();
               $this->load->view('mail_view',$result);//load the home page!
            }
      
       public function Logout()
            {
            
            }
      
      
      
            }?>