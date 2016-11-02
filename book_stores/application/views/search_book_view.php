<!DOCTYPE html>
<html>
       <head> 
          <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
           <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
       </head>
  <body>
         <div class="body3 well container">
         <div class="head">
             <img src='<?php echo base_url()."img/aait.jpg"?>' hight="145" width="1000">
                 </div>
         <div class="body3 tablist">
             
                 <ul  class="navigation navigation-tabs inline">
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/home2"?>">Home     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/setting"?>">Setting  </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
                 </ul>
            
                 </div>
                 <div>
              <div class="body3 tablist">
            
                 <ul  class="navigation unstyled navigation-tabs">
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/insert"?>">Insert     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book2"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/student"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/filter"?>">Filter   </a>  </li>
                 </ul>
            
                 </div>
                 <div>

      
    
    <form class="" action='<?php echo base_url('index.php/')."/login_controller/student2_2"?>' method="post">
<ul class="navigation navigation-tabs unstyled">
    <li> <label class="text-center">Id</label>
            <input name="Id" type="text" class="text-center"  placeholder="Enter Id"></li>
    <li><label class="text-center">Book Code</label>
<select name="Book_Code" class="text-center" > 
               <option select="selected" >...Code...</option>  
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Code?></option> 
                <?php }?> 
                </select></li>
   <li>  <label class="text-center">Book Name</label>
<select name="Book_Name" class="text-center" > 
               <option select="selected" >...Name...</option>  
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Book_Name?></option> 
                <?php }?> 
                </select></li>
        <li>   <input type="submit" class="btn btn-primary" value="Search"/></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li> <a href="<?php echo base_url('index.php/')."/login_controller/student"?>">Search By Id</a>  </li>
           </ul>
           </form>

  

 
                 </div>
                     <div>
           
            <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
                         </div>
                 </div>
                 </div>
                 
       </body>
      </html>