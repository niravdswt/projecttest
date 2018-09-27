<?php
   include"header.php";
  
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fanfaro - Free CSS Template by spyka Webmaster</title>
<link rel="stylesheet" href="../css/styles.css" type="text/css" />
			
            
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript" src="../js/superfish.js"></script>

<script type="text/javascript" src="../js/custom.js"></script>

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
            <a href="index.html">Home</a> &raquo;
            <strong>Examples</strong>
        </div>
            
		<div id="content">
            <div class="box">
            <table border="1" width="40%"  cellpadding="5" cellspacing="2" align="center">

<form action="../control/insert_action1.php" method="post" >
<tr>
	<th>Name:</th>
    <td><input type="text" name="name" value="" size="60" ></td>
</tr>
<tr>
	<th>Hobby</th>
    <td><input type="checkbox" name="chk[]" value="reading" />Reading 
    	<input type="checkbox" name="chk[]" value="teaching" />Teaching
        <input type="checkbox" name="chk[]" value="dancing" />Dancing
</tr>

<tr>
    <th>
        Address:
    </th>
    <td>
        <textarea name="address" cols="60" rows="9"></textarea>
       
    </td>
</tr> 

<tr>
    <th>Gender:</th>  
    <td>
       <input type="radio" name="gender" value="male"  >Male
       <input type="radio" name="gender" value="female" />Female
  </td> 
</tr>
<tr>
    <th>Number:</th>
    <td>
              <input type="radio" name="radio_num" value="Mobile_no" />Mobile_no
              <input type="radio" name="radio_num" value="Laneline_no" />Laneline_no               <input type="text" name="number" size="40" />
       </td>
    
    
    
</tr> 
<tr>
<th>Date:</th>
   <td>
      <select name="day">
      <option>Day</option>
      <?php
      for($i=1;$i<=31;$i++){?>
             
              <option ><?php echo $i;?> </option>
              <?php
	  }?>
              
      </select>
      <select name="month">
      <option>Month</option>
      <?php
	   for($i=1;$i<=12;$i++){?>
              <option><?php echo $i;?></option>
              <?php
              }?>
      </select>
      <select name="year">
      <option>Year</option>
      <?php
	      for($i=1960;$i<=2080;$i++){?>
              <option><?php echo $i;?><option>
              <?php
		  }?>
            </select>
   </td>
</tr>

<tr>
<th>
       Course:
   </th>
 <td>
      <select name="course">
          <option>PHP </option>
          <option>.net</option>
          <option>java</option>
   </select>
   </td>
   </tr>
   

<tr>
<th>Fees:</th>
   <td>
      <input type="text" name="fees" value="" size="60" />
      </td>
   
   
</tr>
<tr>
<td colspan="2" align="center">
   <input type="submit" name="submit" value="Insert"  style="background-color:#339933"/></td>
	
</tr>
</form>
</table>

                

            </div>
        </div>
         <div class="sidebar">
            
        </div>
    	<div class="clear"></div>
    </div>
    <?php
  	 	 
  	 	     include"footer.php";
			 ?>
 
       </div>  
</div>
</div>
</body>
</html>

