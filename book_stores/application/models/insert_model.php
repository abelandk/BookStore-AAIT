<?php
class insert_model extends CI_Model{
    
    public function insert1(){
         $Id=$this->input->post('Id');
         $Book_Name=$this->input->post('Book_Name');
         $Code=$this->input->post('Book');
          $a=array(
              'Code_1'=>$Code,
            'Book_Name1'=>$Book_Name,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
    }
      public function insert2(){
         $Id=$this->input->post('Id');
         $Book_Name=$this->input->post('Book_Name');
         $Code=$this->input->post('Book');
          $a=array(
              'Code_2'=>$Code,
            'Book_Name2'=>$Book_Name,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
    }
    public function insert3(){
         $Id=$this->input->post('Id');
         $Book_Name=$this->input->post('Book_Name');
         $Code=$this->input->post('Book');
          $a=array(
              'Code_3'=>$Code,
            'Book_Name3'=>$Book_Name,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
    }
    public function insert4(){
         $Id=$this->input->post('Id');
         $Book_Name=$this->input->post('Book_Name');
         $Code=$this->input->post('Book');
          $a=array(
              'Code_4'=>$Code,
            'Book_Name4'=>$Book_Name,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
    }
     public function insert5(){
         $Id=$this->input->post('Id');
         $Book_Name=$this->input->post('Book_Name');
         $Code=$this->input->post('Book');
          $a=array(
              'Code_5'=>$Code,
            'Book_Name5'=>$Book_Name,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
    }
    public function update1(){
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With1_1'=>$Id_1,
        );
           $b=array(
              'With1_1'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
    }
    public function update2_1(){
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With2_1'=>$Id_1,
        );
           $b=array(
              'With2_1'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
    }
     public function update3_1(){
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With3_1'=>$Id_1,
        );
           $b=array(
              'With3_1'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
    }
     public function update4_1(){
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With4_1'=>$Id_1,
        );
           $b=array(
              'With4_1'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
    }
     public function update5_1(){
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With5_1'=>$Id_1,
        );
           $b=array(
              'With5_1'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
    }
public function update2(){
    $Id_2=$this->input->post('Id_2');
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With1_2'=>$Id_1,
              'With1_1'=>$Id_2,
        );
           $b=array(
              'With1_2'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$b);
    }
    public function update2_2(){
    $Id_2=$this->input->post('Id_2');
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With2_2'=>$Id_1,
              'With2_1'=>$Id_2,
        );
           $b=array(
              'With2_2'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$b);
    }
     public function update3_2(){
    $Id_2=$this->input->post('Id_2');
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With3_2'=>$Id_1,
              'With3_1'=>$Id_2,
        );
           $b=array(
              'With3_2'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$b);
    }
     public function update4_2(){
    $Id_2=$this->input->post('Id_2');
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With4_2'=>$Id_1,
              'With4_1'=>$Id_2,
        );
           $b=array(
              'With4_2'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$b);
    }
     public function update5_2(){
    $Id_2=$this->input->post('Id_2');
        $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
          $a=array(
              'With5_2'=>$Id_1,
              'With5_1'=>$Id_2,
        );
           $b=array(
              'With5_2'=>$Id,
        );
        $this->db->where('Id',$Id);
        $this->db->update('student_book',$a);
        $this->db->where('Id',$Id_1);
        $this->db->update('student_book',$b);
        $this->db->where('Id',$Id_2);
        $this->db->update('student_book',$b);
    }
    public function insert_new1(){
         $Id_1=$this->input->post('Id_1');
         $Id=$this->input->post('Id');
        $F_Name=$this->input->post('F_Name');   
        $M_Name=$this->input->post('M_Name');
        $Sex=$this->input->post('Sex');
        $Cell_Phone=$this->input->post('Cell_Phone');
        $Email=$this->input->post('Email');   
        $Department=$this->input->post('Department');
        $Book_Name=$this->input->post('Book_Name');
        $Book_Code=$this->input->post('Book');

        $data=array
     (
           'Id'=>$Id,
           'F_Name'=>$F_Name,
           'M_Name'=>$M_Name,
           'Sex'=>$Sex,
           'Cell_Phone'=>$Cell_Phone,
           'Email'=>$Email,
           'Department'=>$Department,
          
     );
           $data2=array
     (
                  
           'Id'=>$Id,
           'Code_1'=>$Book_Code,
           'Book_Name1'=>$Book_Name,
               'With1_1'=>$Id_1,
     );    
            $a=
                    array
     (
               'With1_1'=>$Id,
     );    
        $this->db->insert('students',$data);
           $this->db->insert('student_book',$data2);
           $this->db->where('Id',$Id_1);
           $this->db->update('student_book',$a);
    }
    public function update3(){
        $Id_1=$this->input->post('Id_1');
         $Id_2=$this->input->post('Id_2');
         $Id=$this->input->post('Id');
          $a=
                    array
     (
               'With2_1'=>$Id_2,
     );   
           $b=
                    array
     (
               'With2_1'=>$Id,
     );   
          $this->db->where('Id',$Id);
           $this->db->update('student_book',$a);
           $this->db->where('Id',$Id_1);
           $this->db->update('student_book',$b);
           $this->db->where('Id',$Id_2);
           $this->db->update('student_book',$b);
    }
       }
      ?>