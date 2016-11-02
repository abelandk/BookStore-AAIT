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
             <!--<form class="well">-->
             <form class="well text-center text-warrning" action='<?php echo base_url('index.php/')."/login_controller/delete_book2_1"?>' method="post">
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
<!--             </form>
            
     <form class="well text-center text-warrning" action='<?php echo base_url('index.php/')."/login_controller/delete_book2"?>' method="post">-->
<Label>Code</Label>        
<select class="text-center" name="book_code">
         <?php foreach($book as $row){?>
        <option><?php echo $row->Code?></option>
         <?php }?>
        </select></br>
<Label>Name</Label> 
<select class="text-center" name="book_name">
         <?php foreach($book as $row){?>
        <option><?php echo $row->Book_Name?></option>
         <?php }?>
        </select>
</br>
<Label>Author</Label> 
<select class="text-center" name="author">
         <?php foreach($book as $row){?>
        <option><?php echo $row->Author?></option>
         <?php }?>
        </select></br>
         <input onClick="javascript:return confirm('Are you sure you want to delete this Book ?');" type="submit" class="btn btn-danger"value="Delete"/>
<!--<a onClick="javascript:return confirm('Are you sure you want to delete this Book ?');" class="btn btn-danger"
   href="<?php echo base_url('index.php/')."/login_controller/delete_book2_1"?>">Delete</a></br>-->
 </br> </br><a class="body3 btn" href="<?php echo base_url('index.php/')."/login_controller/delete_book"?>">Delete All Book By Book Name</a></br></br>           
<div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
     </form>
                 </div>
                 </div>
                 </div>
      
            
       
        </body>
        </html>
  