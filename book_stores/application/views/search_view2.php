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
         <td>Inventory No.</td> 
         <td>Serial No.</td>
           <td>Type</td>
         <td>Condition</td> 
         <td>Holder Id</td>
            <td>Location</td>
         </tr>
         
 <?php
echo '<tr>';
           foreach($result as $row){?>
         <td>
           <?php 
            echo $row->inventory_no;
            ?>      
         </td> 
         <td>
                  <?php 
                   echo $row->serial_no ;
                           ?>  
         </td>
              <td>
                <?php 
                 echo $row->type;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->condition;
            ?>      
         </td> 
          <td>
           <?php 

            echo $row->holder_id;
            
            ?>      
         </td> 
         <td>
                  <?php 
                   echo $row->location; 
                           ?>  
         </td>
          <td>
                   <a href="http://localhost/facility_property/index.php/home_controller/Update_Property2/<?php echo $row->inventory_no;?>">Update</a>
         </td>
         
         <?php 
         echo '</tr>';
         
         }?>
          
          </table>
          
           </form>
           </div>
        </body>
        </html>