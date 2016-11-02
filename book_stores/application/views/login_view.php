<!DOCTYPE html>
<html>
   <head>
      <title>
         welcome!
      </title>
      <style>
         #bo
            {
              background-color:rgb(59, 129, 59);
               //background-image: url('<?php echo base_url()."/img/bd.jpg"?>');
               padding-top: 180px;
               padding-bottom:320px;
               padding-left: 450px;
               padding-right: 530px;
            //background-size:50%;
               color:blue;
               background-repeat:no-repeat;
               height:100px;
               
            }
       </style>
       <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
    </head>
    <body>
       <div id="bo">
          <div>
            
                
             
                   
          <div>
          <form action='<?php echo base_url('index.php/')."/login_controller/home"?>' method="post" name=""class="well">
           <!--<span style="color:black;text-align:center"><strong>LogIn</strong></span>-->
        <label>UserName</label>
       <input required class="span3 text-info" type="text" placeholder="Enter UserName" name="name"/>
        <label>Password</label>
        <input required class="span3 text-info" type="password" placeholder="Enter Password" name="password"/></br>
            <input class="btn btn-primary" type="submit" name="login" value="LogIn"/>
     </br>
     </br>
         <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
                     </form>
            </div>
                    </div>
            </div>

                    
                     
               
        
        </body>
        </html>