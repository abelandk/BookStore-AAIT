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
           <table class="table table-bordered table-striped table-hover text-center">      
    <tr class="error">
        <td>Id</td>
         <td>Code</td> 
         <td>Book_Name</td>
            <td>With-1</td>
             <td>With-2</td>
               <td>Return Book</td>
          </tr>
         
 <?php
echo '<tr>';
           foreach($books as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Code_1;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Book_Name1;
            ?>      
         </td> 
         
        <td>
        <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With1_1;?>"> <?php echo $row->With1_1;?></a>
         </td> 
        <td>
         <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With1_2;?>"> <?php echo $row->With1_2;?></a>
         </td> 
         <td>
 <a onClick="javascript:return confirm('Return <?php echo $row->Book_Name1;?> ?');" href="http://localhost/book_stores/index.php/student_controller/Return_Book/<?php echo $row->Code_1;?>">
           <span>Return Book</span>
     </a>
         </td> 
        
         <?php 
         echo '</tr>';
         
         }?>
           <?php
echo '<tr>';
           foreach($books as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Code_2;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Book_Name2;
            ?>      
         </td> 
         
        <td>
        <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With2_1;?>"> <?php echo $row->With2_1;?></a>
         </td> 
        <td>
         <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With2_2;?>"> <?php echo $row->With2_2;?></a>
         </td> 
         <td>
 <a onClick="javascript:return confirm('Return <?php echo $row->Book_Name2;?> ?');" href="http://localhost/book_stores/index.php/student_controller/Return_Book/<?php echo $row->Code_2;?>">
           <span>Return Book</span>
     </a>
         </td> 
        
         <?php 
         echo '</tr>';
         
         }?>
          <?php
echo '<tr>';
           foreach($books as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Code_3;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Book_Name3;
            ?>      
         </td> 
         
        <td>
        <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With3_1;?>"> <?php echo $row->With3_1;?></a>
         </td> 
        <td>
         <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With3_2;?>"> <?php echo $row->With3_2;?></a>
         </td> 
         <td>
 <a onClick="javascript:return confirm('Return <?php echo $row->Book_Name3;?> ?');" href="http://localhost/book_stores/index.php/student_controller/Return_Book/<?php echo $row->Code_3;?>">
           <span>Return Book</span>
     </a>
         </td> 
        
         <?php 
         echo '</tr>';
         
         }?>
          <?php
echo '<tr>';
           foreach($books as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Code_4;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Book_Name4;
            ?>      
         </td> 
         
        <td>
        <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With4_1;?>"> <?php echo $row->With4_1;?></a>
         </td> 
        <td>
         <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With4_2;?>"> <?php echo $row->With4_2;?></a>
         </td> 
         <td>
 <a onClick="javascript:return confirm('Return <?php echo $row->Book_Name4;?> ?');" href="http://localhost/book_stores/index.php/student_controller/Return_Book/<?php echo $row->Code_4;?>">
           <span>Return Book</span>
     </a>
         </td> 
        
         <?php 
         echo '</tr>';
         
         }?>
          <?php
echo '<tr>';
           foreach($books as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Code_5;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Book_Name5;
            ?>      
         </td> 
         
        <td>
        <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With5_1;?>"> <?php echo $row->With5_1;?></a>
         </td> 
        <td>
         <a href="http://localhost/book_stores/index.php/student_controller/show_with/<?php echo $row->With5_2;?>"> <?php echo $row->With5_2;?></a>
         </td> 
         <td>
 <a onClick="javascript:return confirm('Return <?php echo $row->Book_Name5;?> ?');" href="http://localhost/book_stores/index.php/student_controller/Return_Book/<?php echo $row->Code_5;?>">
           <span>Return Book</span>
     </a>
         </td> 
        
         <?php 
         echo '</tr>';
         
         }?>
         
          </table>
            
                                

                     
            <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
                         </div>
                 </div>
                 </div>
                 
       </body>
      </html>