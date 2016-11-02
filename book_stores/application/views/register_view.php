<!DOCTYPE html>
<html>
       <head> 
          <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
           <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
       </head>
  <body>
         <div class="well container">
         <div class="head">
             <img src='<?php echo base_url()."img/aait.jpg"?>' hight="145" width="1000">
                 </div>
         <div class="body3 tablist">
             <form >
                 <ul  class="navigation navigation-tabs inline">
                    <li> <a href="<?php echo base_url('index.php/')."/home_controller/home2"?>">Home     </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/home_controller/Property"?>">Property </a>  </li>
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
                 </div>
                 <div>
              <div class="body3 ">
             
               Register Property
             
                 </div>

             <div class="body4 c7">
   <form action="<?php echo base_url('index.php');?>/home_controller/Register_Db" method="POST" class="text-center span5">

                                <label>Description</label>
                                      <input name="Description" type="text" class="span3 text-center"  placeholder="Name of the property"/>
                                <label>Inventory Number</label>
                                      <input name="Inventory_No" type="text" class="span3 text-center"  placeholder="Inventory Number"/>
                                <label>Serial Number</label>
                                      <input name="Serial_No" type="text" class="span3 text-center"  placeholder="Serial Number"/>
                                <label>Type</label>
                                <select class="text-center" name="Type"> 
                                         <option  select="selected">...Type...</option>  
                                         <?php  foreach($result as $row){?>
                                         <option><?php echo $row->type ?></option> 
                                          <?php }?> 
                                          </select>
                                <label>Location</label>
                                      <input name="Location"  type="text" class="span3 text-center"  placeholder="Location">
                                <label>Holder</label>
                                      <input name="Holder" type="text" class="span3 text-center"   placeholder="Holder Name">
                                <label>Status</label>
                                       <input name="Status" type="text" class="span3 text-center"   placeholder="Property Satatus"></br>
                                <input type="submit" name="Save" class="btn btn-primary" value="Save">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
          
   
   
     </form>
                 </div>
                 </div>
                 </div>
                 
      </body>
      </html>