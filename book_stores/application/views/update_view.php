<!DOCTYPE html>
<html>
    <head>
        <title>
           Books
        </title>
            <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/bootstrap.css"?>'>
             <link rel="stylesheet" type="text/css" href='<?php echo base_url()."/css/external.css"?>'>
        
    </head>
    <body>
       <div class="container">       
 <form action="<?php echo base_url('index.php');?>/home_controller/Update_Db" method="POST" class="text-center span5">
       <?php
foreach ($result as $row) {?>
  <label>Inventory No.</label>
            <?php echo $row->inventory_no?>
            <input name="Inventory_No" type="hidden" class="span3 text-center"  value="<?php echo $row->inventory_no?>"/>
       <label>Serial Number</label>
            <input name="Serial_No" type="text" class="span3 text-center"  value="<?php echo $row->serial_no?>"/>
       <label>Description</label>
            <input name="Description" type="text" class="span3 text-center"  value="<?php echo $row->description;?>"/>
       <label>Condition</label>
            <input name="Condition" type="text" class="span3 text-center"  value="<?php   echo $row->condition;?>"/>
       <label>Holder Id</label>
            <input name="Holder_Id" type="text" class="span3 text-center"  value="<?php echo $row->holder_id; ?>"/>
       <label>Location</label>
            <input name="Location" type="text" class="span3 text-center"  value="<?php  echo $row->location; ?>"/>
      </br>
      
      <input type="submit" name="Update" class="btn btn-primary" value="Update">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php } ?>

       <div class="copy">  <?php echo   "Copyright @ AAIT 2013"; ?></div>
            </form>
           </div>
        </body>
        </html>