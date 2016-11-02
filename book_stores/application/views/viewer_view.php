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
                
               <div class=" container"style="padding-left:-5px" >
             <div class="c6 span12 " style="padding-left:-5px">
                 <div  style="padding-left:300px">
                      <img src='<?php echo base_url()."img/k.jpg"?>' hight="225" width="225">
                     </div>
                     <a class="btn btn-primary"href="<?php echo base_url('index.php/')."/me_controller/view_all_message_student"?>">View_all_message</a> </br>
              <div class="c8 span4 well"  >
                 
                <form class="well">
                       <table class="table-stripped table-bordered table-hover">   
    <tr class="success" style="color:blue">
         <td>Message</td> 
         <td>From</td>
        <td>Date</td>
         </tr>
         
 <?php
echo '<tr>';
           foreach($message as $row){?>
              
         <td>
           <?php 
            echo $row->Message;
            ?>      
         </td> 
         <td name='from'>
                  <?php 
                 echo "Adminstrator";
                           ?>  
         </td>
           
         <td><?php
 echo $row->Date;
            ?>      
         </td> 
          <td>
          <a href="http://localhost/book_stores/index.php/login_controller/more_Message_student/<?php echo $row->Id;?>">More...</a>
                
                                 </br>
        </td>
         <?php 
         echo '</tr>';
         
         }?>
          
          </table>
               
                 
                 
                 </form>
                 </div>
             <div class="c9 span5 well" >
                 <ul class="unstyled">
                 <li>Dear visitor,</li>
<li>On these pages we offer you as much information as possible</li>
<li>on Addis Ababa Institute of Technology but the work is still under progress.</li>
<li>The web presence is continuously enlarged and up-dated therefore</li>
<li>it is worth to visit it from time to time to find news and new functions.</li>
<li>Especially if you are a member of AAiT (staff or student)</li> 
<li>please feel free to send your suggestions and comments to the webmaster</li> 
<li>(webmaster@aait.edu.et ).</li>
           <li>Thank you! </li>   
           </ul>
                 
               </div>  
                
             </div>
                    <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
              </div>   
          
        </form>
        </div>
                 
   </body>

</html>