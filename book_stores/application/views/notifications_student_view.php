<!DOCTYPE html>
<html>
       <head> 
          <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
           <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
       </head>
  <body>
      
         <div class="container">
              
         <div class="head">
             <img src='<?php echo base_url()."img/aait.jpg"?>' hight="145" width="1000">
                 </div>
         <div class="body3 tablist">
            <form class="well">
                 <ul  class="navigation navigation-tabs inline">
                    <li> <a href="<?php echo base_url('index.php/')."/Me_controller/home2"?>">Home     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/Me_controller/book"?>">Books    </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/me_controller/Me"?>">Me </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/Me_controller/setting_me"?>">Setting   </a>  </li>
                <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
                 </ul>
           
    
    <?php
           foreach($message as $row){
               echo '</br>';
    echo "Message :  ";
             echo   $row->Message;
              echo '</br>';
    echo "From :  ";
        echo "Adminstrator";
     echo '</br>';
     echo "Date :  ";
            echo $row->Date;
        echo '</br>';?>
           

  </br>
       <?php    }?>
        <?php echo $pages; ?>
        
                 </form>
    
    
                 </div>
             
                 </div>
       <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
                 </div>
      
            
       
        </body>
        </html>
  