<!DOCTYPE html>
<html>
    <head>
        <title>
           Books
        </title>
            <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
             <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
        
    </head>
    <body>
       <div class="container">
            <div class="body6 tablist" background-img="<?php echo base_url()."/img/b.jpg"?>">
             
                 <ul  class="navigation navigation-tabs">
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/insert"?>">Insert     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book2"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/student"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/filter"?>">Filter   </a>  </li>
                 </ul>
             
                 </div>
       <form class="table text-info text-center" action='<?php echo base_url('index.php/')."/login_controller/search"?>'>
<table class=" table-bordered table-hover table-condensed table-striped">   
    <tr class="error">
        <td>Code</td>
         <td>Name</td> 
         <td>Author</td>
           <td>No.Books</td>
         <td>Borrowed</td> 
         <td>Left</td>
            <td>Remark</td>
         </tr>
         
 <?php
echo '<tr>';
           foreach($search as $row){?>
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
                   echo $row->Author ;
                           ?>  
         </td>
              <td>
                <?php 
                 echo $row->No_Books;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Borrowed;
            ?>      
         </td> 
          <td>
           <?php 
           $b=$row->No_Books;
           $a=$row->Borrowed;
            echo $c=$b-$a;
            
            ?>      
         </td> 
         <td>
                  <?php 
                   echo $row->Remark; 
                           ?>  
         </td>
         
         <?php 
         echo '</tr>';
         
         }?>
          
          </table>
               <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
           </form>
           </div>
        </body>
        </html>