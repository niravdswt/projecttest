<?php
     include"../action/connect.php";
if(count($_POST)>0)
  {
	 $insert_query="insert into course(`course_name`,`course_fees`,`course_duration`)values('".$_POST['course_name']."','".$_POST['fees']."','".$_POST['duration']."')";
	 $inset_result=mysql_query($insert_query);
	} 
	 
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
<div id="container">
	<div id="header">
    	<h1><a href="/">Business</a></h1>
        <h2>Your website slogan here</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><a href="index.php">Home</a></li>
            
            <li><a class="has_submenu" href="course.php">Course</a>
            	
            </li>
            <li><a href="list1.php">Admission</a></li>
            <li></li>
          <li></li>
          <li><a href="list.php">Inquiery</a></li>	
        </ul>
    </div>
    
    <div class="middle-bg">
    	<div class="middle-top"></div>
  </div>
        
    <div id="body">
        
            
		<div id="content" align="">
            <div class="box">
            <table border="1" align="center">
      <h1> Course_Details</h1>
     <form action="course.php" method="post">
          <tr>
             <th>Course_Name</th>
             <td>
                 <input type="text" name="course_name" value=""  size="60"/>
                </td>
          </tr>
          <tr>
              <th>Course_duration</th>
              <td>
                  <input type="text" name="duration" value="" size="60"/>
               </td>
          </tr>
          <tr>
              <th>Course_fees</th>
              <td>
                 <input type="text" name="fees" value="" size="60"/>
                 </td> 
          </tr>
          <tr>
              <td>
                  <input type="submit" value="submit" name="submit" /> 
              </td>
          </tr>
     </form>
</table>
<p>&nbsp;</p>	
                
          </div>
        </div>
        
        <div class="clear"></div>
    </div>
    
</div>
</div>
</body>
</html>
