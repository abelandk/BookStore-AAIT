<!DOCTYPE html>
<html>
       <head> 
          <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
           <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
       </head>
  <body>
         <div class="body3 well container">
         <div class="head">
             <img src='<?php echo base_url()."img/aait.jpg"?>' hight="145" width="1000">
                 </div>
         <div class="body3 tablist">
             
                 <ul  class="navigation navigation-tabs inline">
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/home2"?>">Home     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/setting"?>">Setting  </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
                 </ul>
            
                 </div>
                 <div>
              <div class="body3 tablist">
            
                 <ul  class="navigation unstyled navigation-tabs">
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/insert"?>">Insert     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book2"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/student"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/filter"?>">Filter   </a>  </li>
                 </ul>
            
                 </div>
                 <div>

      
    
    <form class="" action='<?php echo base_url('index.php/')."/login_controller/student2"?>' method="post">
<ul class="navigation navigation-tabs unstyled">
<li> <label class="text-center">Id</label>
            <input name="Id" type="text" class="text-center"  placeholder="Enter Id"></li>
   <li>   <label class="text-center">First Name</label>
            <input name="F_Name" type="text" class=" text-center"  placeholder="Enter First Name"> </li>          
<li><label class="text-center">Department</label>
            <select name="Department" class="text-center">
            <option select="selected">...Department...</option> 
            <?php  foreach($department as $row){?>                
            <option><?php echo $row->Name?></option>  
            <?php }?> 
            </select></li>
<!--          <li>  <label class="text-center">Book Name</label>
<select name="Book_Name" class="text-center" > 
               <option select="selected" >...Name...</option>  
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Book_Name?></option> 
                <?php }?> 
                </select></li>-->
        <li>   <input type="submit" class="btn btn-primary" value="Search"/></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li> <a href="<?php echo base_url('index.php/')."/login_controller/search_book"?>">Search By Book Name</a>  </li>
           </ul>
           </form>

  

 
                 </div>
                     <div>
                        <!--<form class="" action='<?php echo base_url('index.php/')."/login_controller/student2"?>' method="post">-->
           <table class="table table-bordered table-striped table-hover text-center">      
    <tr class="error">
        <td>Id</td>
         <td>Name</td> 
         <td>Father</td>
           <td>Sex</td> 
         <td>Phone</td>
           <td>Email</td>
         <td>#Books</td> 
 
         </tr>
         
 <?php
echo '<tr>';
           foreach($search as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->F_Name;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->M_Name;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Sex;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Cell_Phone;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Email;
            ?>      
         </td> 
         <td>
 <a href="http://localhost/book_stores/index.php/student_controller/books_borrowed/<?php echo $row->Id;?>">
           <?php 
            echo $row->Book_No;
            ?>   
     </a>
         </td> 
        
<!--           <td>
                  <?php 
                   echo $row->Department ;
                           ?>  
         </td>
         <td name='bookname'>
                  <?php 
                   echo $row->Book_Name ;
                           ?>  
         </td>
              <td>
                <?php 
                 echo $row->Borrowed_Date;
                 ?>   
                </td>
         <td>
<a onClick="javascript:return confirm('Are you sure you want to delete a record?');" class="btn btn-primary"
   href="http://localhost/book_stores/index.php/login_controller/delete_user/<?php echo $row->Id;?>"><i class="icon-remove abc"></i>&nbsp;Delete</a>
href="<?php echo base_url(); ?>index.php/logincontroller/updateemployee/<?php echo $row->Employee_ID; ?>" ><i class="icon-edit abc"></i>&nbsp;| Edit</a></td>     

  <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">      
                </td>
        -->
         <?php 
         echo '</tr>';
         
         }?>
          
          </table>
                             <?php echo $pages; ?>
           <!--</form>-->
            <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
                         </div>
                 </div>
                 </div>
                 
       </body>
      </html>