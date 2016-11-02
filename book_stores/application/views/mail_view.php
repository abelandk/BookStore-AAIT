<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
            <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
        
    </head>
    <body>  
        <div class="container well">
         <div class="head">
             <img src='<?php echo base_url()."img/aait.jpg"?>' hight="145" width="1000">
                 </div>
         <div class="body3 tablist">
             <form >
                 <ul  class="navigation navigation-tabs inline">
                    <li  class="active"> <a href="<?php echo base_url('index.php/')."/home_controller/Home2"?>">Home     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/home_controller/Property"?>">Property </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/home_controller/Mail"?>">Mail</a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/home_controller/Setting"?>">Setting  </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/home_controller/Logout"?>">Logout   </a>  </li>
                 </ul>
             </form>
 
       <form class="table text-info text-center" >
  <?php
           foreach($result as $row){
               echo '</br>';
  echo "ID :  ";
       echo  $row->Id;
       echo '</br>';
    echo "From :  ";
        echo $row->From;
     echo '</br>';
     echo "Message ";
                 echo $row->Message;
        echo '</br>';
     echo "Date :  ";
            echo $row->Date;
        echo '</br>';?>
           
<a onClick="javascript:return confirm('Are you sure you want to delete a record?');" class="btn btn-primary"
   href="http://localhost/facility_property/index.php/home_controller/Delete_Mail/<?php echo $row->Id;?>"><i class="icon-remove abc"></i>&nbsp;Delete</a>
  </br>
  </br>
       <?php    }?>
  
           </form>
           </div>
        </body>
        </html>