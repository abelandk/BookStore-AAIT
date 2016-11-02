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

      
    
    <form class="" action='<?php echo base_url('index.php/')."/login_controller/student2_2"?>' method="post">
<ul class="navigation navigation-tabs unstyled">
    <li> <label class="text-center">Id</label>
            <input name="Id" type="text" class="text-center"  placeholder="Enter Id"></li>
    <li><label class="text-center">Book Code</label>
<select name="Book_Code" class="text-center" > 
               <option select="selected" >...Code...</option>  
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Code?></option> 
                <?php }?> 
                </select></li>
   <li>  <label class="text-center">Book Name</label>
<select name="Book_Name" class="text-center" > 
               <option select="selected" >...Name...</option>  
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Book_Name?></option> 
                <?php }?> 
                </select></li>
        <li>   <input type="submit" class="btn btn-primary" value="Search"/></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li> <a href="<?php echo base_url('index.php/')."/login_controller/student"?>">Search By Id</a>  </li>
           </ul>
           </form>

  

 
                 </div>
                     <div>
                        <!--<form class="" action='<?php echo base_url('index.php/')."/login_controller/student2_2"?>' method="post">-->
         <table class="table table-bordered table-striped table-hover text-center">      
    <tr class="error">
        <td>Id</td>
         <td>Code</td> 
         <td>Book_Name</td>
           <td>Borrowed Date</td> 
         <td>Return Date</td>
            <td>With-1</td>
             <td>With-2</td>
               <td>Return Book</td>
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
            echo $row->Code;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Book_Name;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Borrowed_Date;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Return_Date;
            ?>    
             </td>
               
       
        <td>
        <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With_1;?>"> <?php echo $row->With_1;?></a>
         </td> 
        <td>
         <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With_2;?>"> <?php echo $row->With_2;?></a>
         </td> 
         <td>
 <a onClick="javascript:return confirm('Return <?php echo $row->Book_Name;?> ?');" href="http://localhost/book_stores/index.php/student_controller/Return_Book/<?php echo $row->Code;?>">
           <span>Return Book</span>
     </a>
         </td> 
        
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