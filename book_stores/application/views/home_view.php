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
             <form class="well">
         <div class="body3 tablist ">
            
                 <ul  class="navigation navigation-tabs inline">
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/home2"?>">Home     </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/book"?>">Books    </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/students"?>">Students </a>  </li>
                    <li> <a href="<?php echo base_url('index.php/')."/login_controller/setting"?>">Setting   </a>  </li>
                    <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url('index.php/')."/login_controller/sinout"?>">Signout   </a>  </li>
                 </ul>
             
            
                 
                 </div>
<!--                 
             <div class="fill">
                 </div>-->
             <div class=" container"style="padding-left:-5px" >
             <div class="c6 span12 " style="padding-left:-5px">
                 <div  style="padding-left:300px">
                      <img src='<?php echo base_url()."img/k.jpg"?>' hight="225" width="225">
                     </div>
                     <a class="btn btn-primary"href="<?php echo base_url('index.php/')."/login_controller/view_all_message"?>">View_all_message</a> </br>
              <div class="c8 span4 well">
                
                 <!--<form class="well">-->
                  <table class="table-stripped table-bordered table-hover">   
    <tr class="success" style="color:blue">
        <td>Id</td>
         <td>Message</td> 
         <td>From</td>
<!--         <td>Date</td> -->
         </tr>
         
 <?php
echo '<tr>';
           foreach($message as $row){?>
                <td>
                <?php 
                 echo $row->Id;
                 ?>   
                   
                </td>
         <td>
           <?php 
            echo $row->Message;
            ?>      
         </td> 
         <td name='from'>
                  <?php 
                   echo $row->From ;
                           ?>  
         </td>
           
<!--         <td><?php
 echo $row->Date;
            ?>      
         </td> -->
         <td>
          <a href="http://localhost/book_stores/index.php/login_controller/more_Message/<?php echo $row->Id;?>">More...</a>
                
                                 </br>
        </td>
         <?php 
         echo '</tr>';
         
         }?>
          
          </table>
                

                 </form>
                 </div>
             <div class="c9 span5 well" >
                  <label class="text-center" style="color: blue">Type Your Message</label>
                 <form class="well" action='<?php echo base_url('index.php/')."/login_controller/Message"?>' method="post">
  <textarea  name="textbox1" placeholder="Write Your Message Here!" cols="0" rows="0"/></textarea>
 <label class="text-center">To</label>
 <select class="text-center" name="To"> 
 <option select="selected">Admin</option>  
 <option >Students</option> 
 </select>
  <input type="submit" id="submit" class="btn btn-primary"Value="Send"/>
  
                     </form>
               </div>  
                
             </div>
                  <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
              </div>
 
                 </form>
             </div>
      
            
       
        </body>
        </html>