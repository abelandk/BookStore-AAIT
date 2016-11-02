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
       
       <form class="well">
          <div class="body3 tablist">
             <ul  class="navigation navigation-tabs inline">
                <li> <a href="<?php echo base_url('index.php/')."/me_controller/home2"?>">Home     </a>  </li>
                <li> <a href="<?php echo base_url('index.php/')."/me_controller/book"?>">Books    </a>  </li>
                <li class="active"> <a href="<?php echo base_url('index.php/')."/me_controller/me"?>"><?php echo $this->session->userdata('User_Name');?></a>  </li>
                <li> <a href="<?php echo base_url('index.php/')."/me_controller/setting_me"?>">Setting   </a>  </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "Hello  ".$this->session->userdata('User_Name');?> </br>  </li>
             </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>
             
           </div>
                
               <div class=" container" >
             <div class="c6 span12 " >
                 <div  style="padding-left:300px">

<table class=" table-bordered table-hover table-condensed table-striped">   
    <tr class="error">
        <td>Id</td>
         <td>First Name</td> 
           <td>Middle Name</td>
             <td>Department</td> 
         <td>Book Code</td>
           <td>Book Name</td> 
           <td>Borrowed Date</td>
         <td>Return Date</td> 
         </tr>
         
 <?php
echo '<tr>';
           foreach($me as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                </td>
         <td>
           <?php 
            echo $row->Code;
            ?>      
         </td> 
           <td>
           <?php 
            echo $row->Book_Name;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->Borrowed_Date;
            ?>      
         </td> 
          <td>
           <?php 
           
            echo $row->Return_Date;
            
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->With_1;
            ?>      
         </td> 
         <td>
           <?php 
            echo $row->With_2;
            ?>      
         </td> 
        
         <?php 
         echo '</tr>';
         
         }?>
          
          </table>
<!--           </form>-->
                     </div>
<!--              <div class="c8 span4 well"  >
                 
                 <img src='<?php echo base_url()."img/as.jpg"?>' hight="225" width="225">
                 </div>-->
<!--             <div class="c9 span5 well" >
.....................................
               </div>  -->
                
             </div>
              </div>
            <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
        </form>
        </div>
                 
   </body>

</html>