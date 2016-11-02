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
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/home2"?>">Home     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/setting"?>">Setting  </a>  </li>
                 <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
                 </ul>
             </form>
                 </div>
                 <div>
              <div class="body3 tablist">
             
                 <ul  class="navigation navigation-tabs unstyled">
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/insert"?>">Insert     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book2"?>">Books    </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/filter"?>">Filter   </a>  </li>
                 </ul>
             
                 </div>
                 
                       <a class="btn btn-primary "href="<?php echo base_url('index.php/')."/login_controller/existing_view"?>">Existing Student</a>
                      
          
<!--          </form>-->
             <div class="body4 c7">
                 <form action="<?php echo base_url('index.php');?>/login_controller/insert_Db" method="POST" class="text-center span5">
       
      <label>Id</label>
            <input name="Id" type="text" class="span3 text-center"  placeholder="Enter Id"/>
      <label>First Name</label>
            <input name="F_Name" type="text" class="span3 text-center"  placeholder="Enter First Name"/>
      <label>Middle Name</label>
            <input name="M_Name" type="text" class="span3 text-center"  placeholder="Enter Middle Name"/>
      <label>Sex</label>
            <select name="Sex" id="sex" class="text-center">
            <option>Female</option>
            <option>Male</option>
            </select>
      <label>Cell Phone</label>
            <input name="Cell_Phone" id="Cell_Phone" type="text" class="span3 text-center"  placeholder="+XXX-X-XXXXXXXX">
      <label>Email</label>
            <input name="Email" type="email" class="span3 text-center"   placeholder="Enter Email">
      <label>Department</label>
            <select name="Department" class="text-center">
            <option select="selected">...Department...</option> 
            <?php  foreach($department as $row){?>                
            <option><?php echo $row->Name ?></option>  
            <?php }?> 
            </select>
      <label>Book Name</label>
            <select  name="Book_Name" class="text-center">
            <option select="selected">...Book...</option> 
            <?php  foreach($book as $row){?>                
            <option><?php 
//            echo '['; 
                           echo $row->Book_Name; 
//                           echo ']'; 
//                           echo $row->Book_Name?>
            </option>  
                      <?php }?> 
            </select></br>
            <label>Book Code</label>
            <select  name="Book" class="text-center">
            <option select="selected">...Code...</option> 
            <?php  foreach($book as $row){?>                
            <option><?php 
//            echo '['; 
                           echo $row->Code; 
//                           echo ']'; 
//                           echo $row->Book_Name?>
            </option>  
                      <?php }?> 
            </select></br>
      <input type="submit" name="Save" class="btn btn-primary" value="Save">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="Next" class="btn btn-primary" value="Next">
        <!--<a href="<?php echo base_url('index.php/')."/student_controller/with_1"?>">Next</a>--> 
       <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
            </form>
                 </div>
                 </div>
                 </div>
                 
      </body>
      </html>