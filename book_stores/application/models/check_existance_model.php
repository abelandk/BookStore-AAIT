<?php
class check_existance_model extends CI_Model{
    
    public function Check_Id_1(){
         $Id=$this->input->post('Id');
         $this->db->select('Id');
         $this->db->from('students');
         $this->db->where('Id',$Id);
        $Id2=$this->db->get();
           return $Id2->num_rows();
    }
      public function Check_Code1(){
         $Id=$this->input->post('Id');
         $this->db->select('Code_1');
         $this->db->from('student_book');
         $this->db->where('Id',$Id);
        $book=$this->db->get();
           return $book->num_rows();
    }
     public function Check_Code2(){
         $Id=$this->input->post('Id');
         $this->db->select('Code_2');
         $this->db->from('student_book');
         $this->db->where('Id',$Id);
        $book=$this->db->get();
           return $book->num_rows();
    }
     public function Check_Code3(){
         $Id=$this->input->post('Id');
         $this->db->select('Code_3');
         $this->db->from('student_book');
         $this->db->where('Id',$Id);
        $book=$this->db->get();
           return $book->num_rows();
    }
     public function Check_Code4(){
         $Id=$this->input->post('Id');
         $this->db->select('Code_4');
         $this->db->from('student_book');
         $this->db->where('Id',$Id);
        $book=$this->db->get();
           return $book->num_rows();
    }
     public function Check_Code5(){
         $Id=$this->input->post('Id');
         $this->db->select('Code_5');
        $this->db->from('student_book');
         $this->db->where('Id',$Id);
        $book=$this->db->get();
           return $book->num_rows();
    }
       }
      ?>