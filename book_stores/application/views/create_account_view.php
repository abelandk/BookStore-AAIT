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
       
        <form class="body3 well text-center text-warrning" action='<?php echo base_url('index.php/')."/account_controller/create_account2"?>' method="post">
          <div class="body3 tablist">
              
             <ul  class="navigation navigation-tabs inline">
                <li> <a href="<?php echo base_url('index.php/')."/login_controller/home2"?>">Home     </a>  </li>
                <li> <a href="<?php echo base_url('index.php/')."/login_controller/book"?>">Books    </a>  </li>
                <li> <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/setting"?>">Setting   </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
             </ul>
             
           </div>
             <label>Enter UserName</label>
          <input type="text" class="span3 text-center" required placeholder="Enter UserName" name="user_name"/></br>
         <label>Enter Password</label>
          <input type="password" class="span3 text-center" required placeholder="Enter Password" name="password"/>
          <label>Confirm Password</label>
          <input type="password" class="span3 text-center" required placeholder="Confirm Password" name="password_conf"/>
          <label>Enter Rank</label>
          <input type="text" class="span3 text-center" required placeholder="Enter Rank" name="rank"/></br>
         <input type="submit" class="btn btn-primary"value="Enter"/>
      
             <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
     </form>
        </div>
                 
   </body>

</html>