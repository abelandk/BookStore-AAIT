<!Doctype html>
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
       
        <form class="well text-center text-warrning">
          <div class="body3 tablist">
              
             <ul  class="navigation navigation-tabs inline">
                <li> <a href="<?php echo base_url('index.php/')."/me_controller/home2"?>">Home     </a>  </li>
                <li> <a href="<?php echo base_url('index.php/')."/me_controller/book"?>">Books    </a>  </li>
                <li class="active"> <a href="<?php echo base_url('index.php/')."/me_controller/me"?>">Me</a>  </li>
                <li> <a href="<?php echo base_url('index.php/')."/me_controller/setting_me"?>">Setting   </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
             </ul>
             
           </div>
                    
        
        
                  
         <ul class="text-center unstyled">
   <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/me_controller/change_password"?>">Change Password</a> </li></br>
   <li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/me_controller/change_username"?>">Change UserName</a> </li></br> 
     </ul>
             <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
     </form>
        </div>
                 
   </body>

</html>