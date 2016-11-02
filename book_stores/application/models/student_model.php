<?php
class student_model extends CI_Model{
    public function no_books_borrowed($Id){
        
        $this->load->database();
         $this->db->select('Id');
        $this->db->count('Id');
        $this->db->from('book');
        $this->db->where('Id',$Id);
        $book=$this->db->get();
        return $book->result(); 
    }
     public function books_borrowed($Id){
        
        $this->load->database();
         $this->db->select('*');
        $this->db->from('student_book');
        $this->db->where('Id',$Id);
//        $this->db->Like('With_1',$Id);
//        $this->db->Like('With_2',$Id);
        
        $book=$this->db->get();
        return $book->result(); 
    }
    
    public function With_info($Id){
        
        $this->load->database();
         $this->db->select('*');
        $this->db->from('students');
        $this->db->where('Id',$Id);
        $book=$this->db->get();
       return $book->result(); 
    }
     
    public function update(){
      $Id_2=$this->input->post('Id_2');
     $Id_1=$this->input->post('Id_1');
   
        $a=array(
            'With1_1'=>$Id_2,
        );
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$a);
    }
     public function update_1(){
      $Id_2=$this->input->post('Id_2');
     $Id_1=$this->input->post('Id_1');
   
        $a=array(
            'With1_1'=>$Id_1,
        );
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$a);
    }
     public function update2(){
     $Id_1=$this->input->post('Id_1');
     $Id_3=$this->input->post('Id_3');
        $a=array(
            'With1_2'=>$Id_3,
        );
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$a);
    }
      public function update3(){
     $Id_2=$this->input->post('Id_2');
     $Id_3=$this->input->post('Id_3');
        $a=array(
            'With1_2'=>$Id_3,
        );
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$a);
    }
      public function update4(){
     $Id_1=$this->input->post('Id_1');
     $Id_2=$this->input->post('Id_2');
     $Id_3=$this->input->post('Id_3');
        $a=array(
            'With1_1'=>$Id_1,
            'With1_2'=>$Id_2,
        );
        $this->db->where('Id',$Id_3);
        $this->db->update('student_book',$a);
    }
    public function insert(){
        $this->load->helper('text');
        $Id_1=$this->input->post('Id_1');
         $Id_2=$this->input->post('Id_2');
        $F_Name=$this->input->post('F_Name');   
        $M_Name=$this->input->post('M_Name');
        $Sex=$this->input->post('Sex');
        $Cell_Phone=$this->input->post('Cell_Phone');
        $Email=$this->input->post('Email');   
        $Department=$this->input->post('Department');
        $Book_Name=$this->input->post('Book_Name');   
        $Book_Code=$this->input->post('Book_Code');
        $data=array
     (
           'Id'=>$Id_2,
           'F_Name'=>$F_Name,
           'M_Name'=>$M_Name,
           'Sex'=>$Sex,
           'Cell_Phone'=>$Cell_Phone,
           'Email'=>$Email,
           'Department'=>$Department,
          
     );
        $data2=array
                (
             'Id'=>$Id_2,
             'Book_Name1'=>$Book_Name,
           'Code_1'=>$Book_Code,
                );
        $this->db->insert('students',$data);
        $this->db->insert('student_book',$data2);
        $this->update_1();

    }
    
     public function insert_2(){
        $this->load->helper('text');
        $Id_3=$this->input->post('Id_3');
        $F_Name=$this->input->post('F_Name');   
        $M_Name=$this->input->post('M_Name');
        $Sex=$this->input->post('Sex');
        $Cell_Phone=$this->input->post('Cell_Phone');
        $Email=$this->input->post('Email');   
        $Department=$this->input->post('Department');
        $Book_Name=$this->input->post('Book_Name');   
        $Book_Code=$this->input->post('Book_Code');
        $data=array
     (
           'Id'=>$Id_3,
           'F_Name'=>$F_Name,
           'M_Name'=>$M_Name,
           'Sex'=>$Sex,
           'Cell_Phone'=>$Cell_Phone,
           'Email'=>$Email,
           'Department'=>$Department,
          
     );
        $data2=array
                (
             'Id'=>$Id_3,
             'Book_Name1'=>$Book_Name,
           'Code_1'=>$Book_Code,
                );
        $this->db->insert('students',$data);
       // $this->db->where('Id',$Id);
        $this->db->insert('student_book',$data2);

    }
    public function Return_Book($Code){
         $value=array
         (
           'Code1'=>$Code,
         );
         $this->db->where('Code1',$Code);
         $this->db->delete('student_book',$value);
    }
     
    
      }?>