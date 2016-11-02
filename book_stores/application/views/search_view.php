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
 
       <form  action='<?php echo base_url('index.php/')."/home_controller/Search_Property2"?>' method="post">
                 <div class="c10">
                     
                  <div class="c8 span4 ">
                 
                    <ul style="width:200px" class="unstyled">
                         <li>  <label class="text-center">Description</label>
                        <li><input type="text" name="Description"/>
        <li>  <label class="text-center">Type</label>
           <select class="text-center" name="Type"> 
               <option select="selected">...Type...</option>  
               <?php  foreach($result as $row){?>
               <option><?php echo $row->type ?></option> 
                <?php }?> 
                </select></li>
          <li>  <label class="text-center">Location</label>
           </li><input type="text" name="Location"/>
                 <li>  <label class="text-center">Inventory_No</label>
                <li><input type="text" name="Inventory_No"/>
          <li>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" class="btn btn-primary" value="Search"/></li>
           </ul>

            <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
                 </div>
             <div class="c9 span5 " >

               

 
               </div>  
                     </div>
          
                   </form>
                 
                 
        </body>
        </html>