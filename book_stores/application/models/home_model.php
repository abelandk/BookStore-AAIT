<?php
class home_model extends CI_Model{
     public function Property(){
        $this->load->database();
       // $this->db->select('inventory_no','serial_no','description','type','condition','holder_id','location');
        $this->db->select('*');
        $this->db->from('property');
        $property=$this->db->get();
        return $property->result(); 
     // return $books;
     }
      public function Mail(){
        $this->load->database();
        $this->db->select('Id','From','Message','Date');
        $this->db->from('mail');
        $property=$this->db->get();
        return $property->result(); 
     }
     public function search()
             
             {
           $this->load->database();
           $this->db->SELECT('*');
           $this->db->FROM('property');
           $match1=$this->security->xss_clean($this->input->post('Description'));
           $match2=$this->security->xss_clean($this->input->post('Type'));
           $match3=$this->security->xss_clean($this->input->post('Location'));
           $match4 =$this->security->xss_clean($this->input->post('Inventory_No'));
           if($match1==''&& $match2=='...Type...' && $match3==''&& $match4==''){}
           else if($match1!=''&& $match2=='...Type...' && $match3==''&& $match4==''){ $this->db->like('description',$match1);}
           else if($match1==''&& $match2!='...Type...' && $match3==''&& $match4==''){ $this->db->like('type',$match2);}
           else if($match1==''&& $match2=='...Type...' && $match3!=''&& $match4==''){ $this->db->like('location',$match3);}
           else if($match1==''&& $match2=='...Type...' && $match3==''&& $match4!=''){ $this->db->like('serial_no',$match4);}
           else if($match1!=''&& $match2!='...Type...' && $match3==''&& $match4==''){ $this->db->like('description',$match1);
           $this->db->like('type',$match2);
           }
           else if($match1!=''&& $match2=='...Type...' && $match3!=''&& $match4==''){$this->db->like('description',$match1);$this->db->like('location',$match3);}
           else if($match1!=''&& $match2=='...Type...' && $match3==''&& $match4!=''){ $this->db->like('description',$match1);$this->db->like('serial_no',$match4); }
           else if($match1==''&& $match2!='...Type...' && $match3!=''&& $match4==''){$this->db->like('type',$match2); $this->db->like('location',$match3);}
             else if($match1==''&& $match2!='...Type...' && $match3==''&& $match4!=''){$this->db->like('type',$match2);$this->db->like('serial_no',$match4);}
           else if($match1==''&& $match2=='...Type...' && $match3!=''&& $match4!=''){ $this->db->like('location',$match3);$this->db->like('serial_no',$match4); }
         
           else{}

          $query = $this->db->get();
          return $query->result();
     }

      public function register()
     {
        $Description=$this->input->post('Description');
        $Inventory=$this->input->post('Inventory_No');   
        $Serial=$this->input->post('Serial_No');
        $Type=$this->input->post('Type');
        $Location=$this->input->post('Location');
        $Holder=$this->input->post('Holder');   
        $Status=$this->input->post('Status');
        $data=array
     (
           'inventory_no'=>$Inventory,
           'serial_no'=>$Serial,
           'description'=>$Description,
           'type'=>$Type,
           'condition'=>$Status,
           'holder_id'=>$Holder,
           'location'=> $Location,

     );
   
            
        $this->db->insert('property',$data);  
}
      public function search_property($inventory_no)
              {
 
                        $this->load->database();
                        $this->db->select('inventory_no','serial_no','description','type','condition','holder_id','location');
                        //$this->db->select('*');
                        $this->db->from('property');
                        $this->db->where('inventory_no',$inventory_no);
                        $property=$this->db->get();
                        return $property->result(); 
                     // return $books;
     
              }
              public function update()
              {
                    $Inventory_No=$this->input->post('Inventory_No');
                    $Serial_No=$this->input->post('Serial_No');
                    $Description=$this->input->post('Description');
                    $Condition=$this->input->post('Condition');
                    $Holder_Id=$this->input->post('Holder_Id');
                    $Location=$this->input->post('Location');
                     $a=array(
                         'User_Name'=>$name,
                         'Inventory_no'=>$Inventory_No,
                         'serial_no'=>$Serial_No  ,
                         'description' =>$Description,
                         'condition'=>$Condition,
                         'holder_id'  =>$Holder_Id,
                         'location'   =>$Location,
                     );
                     $this->db->where('inventory_no',$Inventory_No);
                     $this->db->update('property',$a);
     }
                  
              }
              
              
              

      ?>