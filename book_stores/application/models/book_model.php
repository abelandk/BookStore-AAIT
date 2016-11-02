<?php
class book_model extends CI_Model{
     public function books(){
        $this->load->database();
        $this->db->select('Book_Name,Author,No_Books,Borrowed,Remark');
        //$this->db->select('*');
        $this->db->from('books');
        $books=$this->db->get();
        return $books->result(); 
     // return $books;
        
      } 
       public function book(){
        $this->load->database();
        $this->db->select('Code,Book_Name,Author,Borrowed');
        //$this->db->select('*');
        $this->db->from('book');
        $book=$this->db->get();
        return $book->result(); 
     // return $books;
        
      } 
       public function book_code(){
        $code=$this->input->post('Code');
        $this->load->database();
        $this->db->select('Code,Book_Name,Author,Borrowed');
        //$this->db->select('*');
        $this->db->from('book');
        $this->db->where('Code',$code);
        $book=$this->db->get();
        return $book->result(); 
     // return $books;
        
      } 
     public function books_left1(){
           $this->load->database();
            $this->db->select('Borrowed');
           $this->db->from('books');
           $Borrowed=$this->db->get();
        return $Borrowed->result(); 
          
         
       //  return $Borrowed;
      }
     public function books_left2($code){
           $this->load->database();
            $this->db->SELECT('Book_Name');
    $this->db->FROM('students');
    $this->db->where('Book_Name',$code);
      $query = $this->db->get();
      return $query->num_rows();
  
      }
     public function books_left()
       {
        $this->load->database();
        $code=$this->input->post('Book'); 
        $this->db->SELECT('Book');
        $this->db->FROM('students');
        $this->db->where('Book',$code);
        $query = $this->db->get();
        return $query->num_rows();
      }
      public function update_borrowed($borrowed){
             $a=array(
            'Borrowed'=>$borrowed,
       );
              $code=$this->input->post('Book'); 
           $this->db->where('Code',$code);
      
       
       $this->db->update('books',$a);
        
       
      }
        public function update_borrowed2($data){
           $borrowed=$data['borrowed'];
          $code=$data['code'];
             $a=array(
            'Borrowed'=>$borrowed,
       );
             // $code=$this->input->post('bookname'); 
           $this->db->where('Book_Name',$code);
      
       
       $this->db->update('books',$a);
        
      }
      public function department(){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('departments');
        $books=$this->db->get();
        return $books->result(); 
        
      }
      public function get_count(){
    $this->db->SELECT('*');
    $this->db->FROM('books');
      $query = $this->db->get();
      return $query->num_rows();
}
 public function get_count2(){
    $this->db->SELECT('*');
    $this->db->FROM('student_book');
      $query = $this->db->get();
      return $query->num_rows();
}
     public function get_search($limit,$offset){
         
           $this->load->database();
           $this->db->SELECT('*');
           $this->db->FROM('books');
           $match2=$this->security->xss_clean($this->input->post('Name'));
           $match3 =$this->security->xss_clean($this->input->post('Author'));
           if($match2=='...Name...'&& $match3=='...Author...'){}
           else if($match2!='...Name...'&& $match3=='...Author...')   { $this->db->like('Book_Name',$match2);}
           else if($match2=='...Name...'&& $match3!='...Author...')   { $this->db->like('Author',$match3); }
           else if($match2!='...Name...'&& $match3!='...Author...')   { $this->db->like('Book_Name',$match2);
                                                                                               $this->db->like('Author',$match3);}
          else{}
          $this->db->limit($limit,$offset);
          $query = $this->db->get();
          return $query->result();
     }
     public function get_search2($limit,$offset){
         
           $this->load->database();
           $this->db->SELECT('*');
           $this->db->FROM('students');
           
           $match =$this->security->xss_clean($this->input->post('Id'));
           $match2=$this->security->xss_clean($this->input->post('F_Name'));
           $match3 =$this->security->xss_clean($this->input->post('Department'));
           //$match4 =$this->security->xss_clean($this->input->post('Book_Name'));
           if($match=='' && $match2=='' && $match3=='...Department...'){}
           else if($match!='' && $match2=='' && $match3=='...Department...') { $this->db->like('Id',$match);}
           else if($match=='' && $match2!=''&& $match3=='...Department...')   { $this->db->like('F_Name',$match2);}
           else if($match=='' && $match2==''&& $match3!='...Department...')   { $this->db->like('Department',$match3); }
           else if($match!='' && $match2!=''&& $match3=='...Department...')   { $this->db->like('Id',$match);
                                                                                               $this->db->like('F_Name',$match2);}
           else if($match!='' && $match2==''&& $match3!='...Department...')   { $this->db->like('Id',$match);
                                                                                                 $this->db->like('Department',$match3);
           }
           else if($match=='' && $match2!=''&& $match3!='...Department...')   { $this->db->like('Department',$match3);
                                                                                               $this->db->like('F_Name',$match2);}                                                                  
          else if($match!='' && $match2!=''&& $match3!='...Department...')   { $this->db->like('Department',$match3);
                                                                                               $this->db->like('F_Name',$match2);
                                                                                                 $this->db->like('Id',$match);}                                                            
          else{}
          $this->db->limit($limit,$offset);
          $query = $this->db->get();
          return $query->result();
     }
     public function get_search2_2($limit,$offset){
         
           $this->load->database();
           $this->db->SELECT('*');
           $this->db->FROM('student_book');
           $match =$this->security->xss_clean($this->input->post('Id'));
           $match2=$this->security->xss_clean($this->input->post('Book_Code'));
           $match3 =$this->security->xss_clean($this->input->post('Book_Name'));   
           if($match=='' && $match2=='...Code...' && $match3=='...Name...'){}
           else if($match!='' && $match2=='...Code...' && $match3=='...Name...') { $this->db->like('Id',$match);}
           else if($match=='' && $match2!='...Code...' && $match3=='...Name...')   { $this->db->like('Code',$match2);}
           else if($match=='' && $match2=='...Code...' && $match3!='...Name...')   { $this->db->like('Book_Name',$match3); }
           else if($match!='' && $match2!='...Code...' && $match3=='...Name...')   { $this->db->like('Id',$match);
                                                                                               $this->db->like('Code',$match2);}
           else if($match!='' && $match2=='...Code...' && $match3!='...Name...')   { $this->db->like('Id',$match);
                                                                                                 $this->db->like('Book_Name',$match3);
           }
        
          else if($match!='' && $match2=='...Code...' && $match3=='...Name...')   { $this->db->like('Book_Name',$match3);
                                                                                               $this->db->like('Code',$match2);
                                                                                                 $this->db->like('Id',$match);}
         
          else{}
         $this->db->limit($limit,$offset);
          $query = $this->db->get();
          return $query->result();
     }
     public function Book_Name($code){
          $this->load->helper('text');
         $this->load->database();
           $this->db->SELECT('Book_Name');
           $this->db->FROM('books');
          $this->db->where('Code',$code);
          $query = $this->db->get();
          $b=$query->result();
          return strlen(ascii_to_entities("$b"));
//          $row = $query->row();
//          return $row;
          
     }
     public function insert() {
         $this->load->helper('text');
        $Id=$this->input->post('Id');
        $F_Name=$this->input->post('F_Name');   
        $M_Name=$this->input->post('M_Name');
        $Sex=$this->input->post('Sex');
        $Cell_Phone=$this->input->post('Cell_Phone');
        $Email=$this->input->post('Email');   
        $Department=$this->input->post('Department');
        $Book_Name=$this->input->post('Book_Name');
        $Book_Code=$this->input->post('Book');
        
  //    $book_name=$this->Book_Name($Book);
  // $Book1=ascii_to_entities$book_name);
                //->toString();
 // $a=strlen($Book1);
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
     );
             $data3=array
     (
           'Borrowed'=>1,
     );
            
        $this->db->insert('students',$data);
           $this->db->insert('student_book',$data2);
//        $this->db->insert('student_book',$data2);
//       $this->db->where('Code',$Book_Code);
//        $this->db->update('book',$data3);
     }
     public function change_username($user){
        $name=$this->input->post('New_Name');
        $a=array(
            'User_Name'=>$name,
        );
        $this->db->where('User_Name',$user);
        $this->db->update('login',$a);
     }
     public function change_password($user){
            $password=$this->input->post('cnew_pass');
        $a=array(
            'Password'=>$password,
        );
        $this->db->where('User_Name',$user);
        $this->db->update('login',$a);
     }
     public function insert_department(){
         $Id=$this->input->post('id');
         $Name=$this->input->post('dep_name');
         $value=array
         (
           'Id'=>$Id,
           'Name'=>$Name,
         );
         $this->db->insert('Departments',$value);
     }
      public function delete_department(){
         $Name=$this->input->post('dep_name');
         $value=array
         (
           'Name'=>$Name,
         );
         $this->db->where('Name',$Name);
         $this->db->delete('Departments',$value);
     }
      public function deleteuser($data){
         $Id=$data['id'];
       $code=$data['code'];
         $value=array
         (
           'Id'=>$Id,
         );
         $this->db->where('Id',$Id);
            $this->db->where('Book_Name',$code);
         $this->db->delete('Students',$value);
        // $query = $this->db->delete('Students', array('Id'=>$Id));
       //  return $query;
     }
     public function check_code2(){
         $Name=$this->input->post('book_name');
          $Author=$this->input->post('author');
         $no2=$this->no_books2();
             $value=array
         (
             'No_Books'=>$no2,
         );
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$Author);
         $this->db->update('books',$value);
     }
     public function delete_book3(){
         $Name=$this->input->post('book_name');
          $Author=$this->input->post('author');
          $value=array
         (
           'Book_Name'=>$Name,
             'Author'=>$Author,
         );
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$Author);
         $this->db->where('No_Books',0);
         $this->db->delete('books',$value);
         
     }
     public function no_books2(){
          $Name=  $this->input->post('book_name');
          $Author=  $this->input->post('author');
         $this->db->select('Book_Name');
         $this->db->from('book');
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$Author);
        $book=$this->db->get();
           return $book->num_rows();
     }
     public function code_exist(){
         $Code=$this->input->post('code');
         $this->db->select('Book_Name');
         $this->db->from('book');
         $this->db->where('Code',$Code);
         $book=$this->db->get();
         return $book->num_rows();
         
     }
     
      public function insert_book(){
          $Code=$this->input->post('code');
         $Name=$this->input->post('book_name');
         $author=$this->input->post('author');
         $value=array
         (
           'Code'=>$Code,
           'Book_Name'=>$Name,
           'Author'=>$author,
           'Borrowed'=>'No',
         );
         $this->db->insert('book',$value);
     }
     public function check_book(){
         $Name=$this->input->post('book_name');
         $author=$this->input->post('author');
         $this->load->database();
         $this->db->select('Book_Name');
         $this->db->from('books');
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$author);
         $book=$this->db->get();
         return $book->num_rows();
     }
     public function count_book(){
         $Name=$this->input->post('book_name');
         $author=$this->input->post('author');
         $this->db->select('Book_Name');
         $this->db->from('book');
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$author);
         $book=$this->db->get();
         return $book->num_rows();
     }
     public function update_book(){
          $author=$this->input->post('author');
         $Name=$this->input->post('book_name');
         $no=$this->count_book();
          $data=array
         (
           'No_Books'=>$no,
         );
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$author);
         $this->db->Update('books',$data);
     }
     public function insert_book2(){
         $Name=$this->input->post('book_name');
         $author=$this->input->post('author');
         $no=$this->count_book();;
         $value=array
         ( 'Book_Name'=>$Name,
           'Author'=>$author,
           'No_Books'=>$no,
           'Borrowed'=>'No',
         );
         $this->db->insert('books',$value);
     }
       public function delete_book(){
          $Name=$this->input->post('book_name');
          $Author=$this->input->post('author');
         $value=array
         (
           'Book_Name'=>$Name,
         );
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$Author);
         $this->db->delete('books',$value);
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$Author);
         $this->db->delete('book',$value);
     }
      public function delete_book2_1(){
          $Code=$this->input->post('book_code');
         $value=array
         (
           'Code'=>$Code,
         );
         $this->db->where('Code',$Code);
         $this->db->delete('book',$value);
     }
     public function check_exist(){
         $Name=$this->input->post('book_name');
         $Author=$this->input->post('author');
         $this->db->select('Book_Name');
         $this->db->from('books');
         $this->db->where('Book_Name',$Name);
         $this->db->where('Author',$Author);
         $book=  $this->db->get();
         return $book->num_rows();
     }
      public function delete_book2(){
          $Code=$this->input->post('book_code');
         $value=array
         (
           'Code'=>$Code,
         );
         $this->db->where('Code',$Code);
         $this->db->delete('book',$value);
        $Name=$this->search_code($Code);
         $this->update_code2($Code,$Name);
     }
     public function search_code($Code){
          $this->db->SELECT('Book_Name');
    $this->db->FROM('book');
    $this->db->where('Code',$Code);
      $query = $this->db->get();
      return $query->result();
     }
      public function search_code2(){
          $Code=$this->input->post('book_code');
          $Name=$this->input->post('book_name');
          $Author=$this->input->post('author');
          $this->db->SELECT('Book_Name');
          $this->db->FROM('book');
          $this->db->where('Code',$Code);
          $this->db->where('Book_Name',$Name);
          $this->db->where('Author',$Author);
          $query = $this->db->get();
          return $query->num_rows();
     }
     public function update_code($Code){
      $this->db->SELECT('*');
    $this->db->FROM('book');
    $this->db->where('Code',$Code);
      $query = $this->db->get();
      return $query->num_rows();
}
public function update_code2($Code,$Name){
     $num=$this->update_code($Code);
          $a=array(
            'No_Books'=>$num,
       );
           $this->db->where('Name',$Name);
       $this->db->update('books',$a);
        
       
      
}
     public function login(){
        $username = $this->security->xss_clean($this->input->post('name'));
        $password = $this->security->xss_clean($this->input->post('password'));
         $this->db->select('*');
        $this->db->from('login');
        $this->db->where('User_Name', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get();
        if($query->num_rows == 1)
        {
//$data = array(
//                        'User_Name' => $this->input->post('name'),
//                        'Password' => $this->input->post('password'),
//                    );
//                    $this->session->set_userdata($data);
            return true;
        }
        return false;
    
    
        
     }
     public function rank(){
        $username = $this->security->xss_clean($this->input->post('name'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $this->db->select('rank');
        $this->db->from('login');
        $this->db->where('User_Name',$username);
        $this->db->where('Password', $password);
        $rank = $this->db->get();
       
            return $rank;
  
     }
     public function me2(){
      $Id=$this->session->userdata('User_Name');
         $this->db->select('*');
         $this->db->from('student_book');
         $this->db->where('Id',$Id);
        $me=$this->db->get();
         return $me->result();
        
     }
      public function me(){
         $User_Name=$this->session->userdata('User_Name');;
         $Password=$this->session->userdata('Password');
         $this->db->select('id');
         $this->db->from('login');
         $this->db->where('User_Name',$User_Name);
         $this->db->where('Password',$Password);
      $me=$this->db->get();
         return $me;
     }
     
     
     }?>
