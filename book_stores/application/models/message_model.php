<?php

class message_model extends CI_Model
{
   public function message()
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('to','Admin');
        $books=$this->db->get();
        return $books->result(); 
      }    
       public function message2_id($id)
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('Id',$id);
        $books=$this->db->get();
        return $books->result(); 
      }    
       public function message2_id_student($id)
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('Id',$id);
        $this->db->where('to','Students');
        $books=$this->db->get();
        return $books->result(); 
      }    
      public function message11($limit,$offset)
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('to','Admin');
        $this->db->limit($limit,$offset);
         $books=$this->db->get();
        return $books->result(); 
      }    
       public function delete_message($Id)
      {
         $value=array
         (
           'Id'=>$Id,
         );
            $this->db->where('Id',$Id);
         $this->db->delete('message',$value);
      }    
       public function message_all()
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $books=$this->db->get();
        return $books->result(); 
      }    
      public function message_all2($limit,$offset)
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $this->db->limit($limit,$offset);
        $books=$this->db->get();
        return $books->result(); 
      }    
      public function message_all21($limit,$offset)
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
         $this->db->where('to','Students');
        $this->db->limit($limit,$offset);
        $books=$this->db->get();
        return $books->result(); 
      }    
         public function message_student()
      {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('to','Students');
        $books=$this->db->get();
        return $books->result(); 
      }    
         public function get_message_count(){
    $this->db->SELECT('*');
    $this->db->FROM('message');
      $query = $this->db->get();
      return $query->num_rows();
}
 public function get_message_count_admin(){
    $this->db->SELECT('*');
    $this->db->FROM('message');
     $this->db->where('To','Admin');
      $query = $this->db->get();
      return $query->num_rows();
}
 public function get_message_count_student(){
    $this->db->SELECT('*');
    $this->db->FROM('message');
    $this->db->where('To','Students');
      $query = $this->db->get();
      return $query->num_rows();
}
      public function store_message()
      {
        $Message=$this->input->post('textbox1');
        $To=$this->input->post('To');   
        $From=$this->session->userdata('User_Name');
        $data=array
     (
           'Message'=>$Message,
           'From'=>$From,
           'To'=>$To,
     );
        $this->db->insert('message',$data);
        
        
       
     }
}

?>
