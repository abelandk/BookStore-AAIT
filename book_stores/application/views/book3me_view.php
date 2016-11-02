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
                    <li> <a href="<?php echo base_url('index.php/')."/me_controller/home2"?>">Home     </a>  </li>
                    <li class="active"> <a href="<?php echo base_url('index.php/')."/me_controller/book"?>">Books    </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/me_controller/me"?>">Me </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/me_controller/setting_me"?>">Setting  </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
                 </ul>
             </form>
 
       <form  action='<?php echo base_url('index.php/')."/me_controller/books"?>' method="post">
                 <div class="c10">
                     
                  <div class="c8 span4 ">
                 
                    <ul style="width:200px" class="unstyled">
                     <li>   <label class="text-center">Book Code</label>
                      <select class="text-center" name="Code">
                <option select="selected">...Code...</option> 
             <?php  foreach($book as $row){?>                
               <option><?php echo $row->Code?></option>  
                <?php }?> 
                </select></li>
        <li>  <label class="text-center">Book Name</label>
           <select class="text-center" name="Name"> 
               <option select="selected">...Name...</option>  
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Book_Name?></option> 
                <?php }?> 
                </select></li>
          <li>  <label class="text-center">Author</label>
           <select class="text-center"name="Author">
                <option select="selected">...Author...</option> 
               <?php  foreach($book as $row){?>
               <option><?php echo $row->Author?></option>   
               <?php }?> 
                </select></li>
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