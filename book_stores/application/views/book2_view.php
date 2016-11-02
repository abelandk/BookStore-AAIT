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
       <form class="table text-info text-center" action='<?php echo base_url('index.php/')."/login_controller/search"?>'>
<table class=" table-bordered table-hover table-condensed table-striped">   
    <tr class="error">
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
             <?php echo $pages; ?>
          
           </form>
           </div>
        </body>
        </html>