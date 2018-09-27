<?php
  include"../action/connect.php";
	include"../include/header.php";
	$sel="select * from user where user_id='".$_GET['task']."'";
	$result=mysql_query($sel);
	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fanfaro - Free CSS Template by spyka Webmaster</title>
<link rel="stylesheet" href="../css/styles.css" type="text/css" />
			
            
<script type="text/javascript" src="../action/js/jquery.js"></script>
<script type="text/javascript" src="../action/js/slider.js"></script>
<script type="text/javascript" src="../action/js/superfish.js"></script>

<script type="text/javascript" src="../action/js/custom.js"></script>

<!--
fanfaro, a free CSS web template by spyka Webmaster (www.spyka.net)

Download: http://www.spyka.net/web-templates/fanfaro/

License: Creative Commons Attribution
//-->
</head>

<body>

    <div class="middle-bg">
   	  <div class="middle-top"></div>
    </div>
        
    <div id="body">
        <div id="breadcrumbs">
            <span>You are here:</span>
            <a href="../action/index.html">Home</a> &raquo;
            <strong>Examples</strong>
        </div>
            
		<div id="content">
            <div class="box">
            <table border="1" width="40%"  cellpadding="5" cellspacing="2" align="center"><br/>

<form action="edit_action.php" method="post">
<?php

	while($i=mysql_fetch_array($result)){
?>
<input type="hidden" name="id" value="<?php echo $i['user_id'];?>" />
<tr>
	<th>Name</th>
    <td><input type="text" name="name" value="<?php echo $i['Name'];?>"  size="100"/></td>
</tr>
<tr>
	<th>Hobby</th>
    <?php $hobby=explode(",",$i['Hobby']);
	       //print_r($hobby);
		   //exit;
	?>
    <td>
    	<input type="checkbox" name="chk[]" value="reading"<?php if(in_array("reading",$hobby)){echo "checked=checked";}?> />Reading 
    	<input type="checkbox" name="chk[]" value="teaching"<?php if(in_array("teaching",$hobby)){echo "checked=checked";}?> />Teaching
        <input type="checkbox" name="chk[]" value="dancing"<?php if(in_array("dancing",$hobby)){echo "checked=checked";}?> />Dancing
        </td>
</tr>

<tr>
    <th>
        Address:
    </th>
    <td>
        <textarea name="address" cols="60" rows="9" ><?php echo $i['address'];?></textarea>
       
    </td>
</tr> 

<tr>
    <th>Gender:</th>
    <td>
       <input type="radio" name="gender" value="male"<?php if($i['gender']=="male"){echo "checked=checked";} ?>>Male
       <input type="radio" name="gender" value="female"<?php if($i['gender']=="female"){echo "checked=checked";} ?> />Female
  </td> 
</tr>
<tr>
    <th>Number:</th>
    <td>
              <input type="radio" name="radio_num" value="Mobile_no" <?php if($i['contact_type']=="Mobile_no"){echo "checked=checked";} ?> />Mobile_no
              <input type="radio" name="radio_num" value="Laneline_no"<?php if($i['contact_type']=="Laneline_no"){echo "checked=checked";} ?>/>Laneline_no              
               <input type="text" name="number" size="40" value="<?php echo $i['number'];?>" />
       </td>
    
    
    
</tr> 
<tr>
   <?php
    $date_array=explode('-', $i['user_date']);
	$date=$date_array[0];
	$month=$date_array[1];
	$year=$date_array[2];
   
   ?>
<th>Date:</th>
   <td>
      <select name="day">
      <option>Day</option>
      <?php
      for($i=1;$i<=31;$i++){?>
             
              
              <option  value="<?php echo $i;?>" <?php if($date==$i){ echo "selected=selected";}?>><?php echo $i;?> </option>
              <?php
	  }?>
              
      </select>
      <select name="month">
      <option>Month</option>
      <?php
	   for($i=1;$i<=12;$i++){?>
              <option value="<?php echo $i;?>" <?php if($month==$i){ echo "selected=selected";}?>><?php echo $i;?></option>
              <?php
              }?>
      </select>
      <select name="year">
      <option>Year</option>
      <?php
	      for($i=1960;$i<=2080;$i++){?>
              <option value="<?php echo $i; ?>" <?php if($year==$i){ echo "selected=selected";}?>><?php echo $i;?><option>
              <?php
		  }?>
            </select>
   </td>
</tr>

<tr>
	<td colspan="2" align="center">
    <input type="submit" name="submit" value="Submit" style="background-color:#339933"/></td>
</tr>
</form>
</table>
<?php
}
?>
                

            </div>
        </div>
         <div class="sidebar">
            
        </div>
    	<div class="clear"></div>
    </div>
    <?php
  	 	 
  	 	     include"../include/footer.php";
			 ?>
 
       </div>  
</div>
</div>
</body>
</html>
