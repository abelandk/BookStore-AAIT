<?php
class account_model extends CI_Model{
    
     public function new_account(){
        $user_name=$this->input->post('user_name');
        $password=$this->input->post('password');   
         $Rank=$this->input->post('rank');
        $data=array
     (
            
            
           'User_Name'=>$user_name,
           'Password'=>$password,
           'rank'=>$Rank,
          
     );
        $this->db->insert('login',$data);
     
      } 
       public function exists($username){
          $this->load->database();
            $this->db->select('User_Name');
           $this->db->from('login');
            $this->db->where('User_Name',$username);
           $name=$this->db->get();
        return $name->result(); 
          
     
} }
      ?>