<?php
    include"../action/connect.php";
	// include"../include/header.php";
	 
	 $select_query="select*from user1";

	 $result=mysql_query($select_query);
	 $user_detail=array();
	 while($row=mysql_fetch_assoc($result))
	 {
	    $user_detail[]=$row;
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
            
            	
            </li>
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
        
            
		<div id="content">
            <div class="box">
            <table border="0" >

      <form action="../action/delete_all1.php" method="post">
      <tr>
          <th><input type="checkbox" name="checkbox" id="checkbox" /></th>
         <th>Name</th>
          <th>Hobby</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Number_type</th>
          <th>Number</th>
          <th>Birth_date</th>
          <th>Course</th>
          <th>Fees</th>
          <th colspan="2">Action</th>
          </tr>
           <?php
		      for($i=0;$i<count($user_detail);$i++)
			  {
			  if($i%2==0)
				{
				?>
               <tr bgcolor="#99CCCC">
                <?php
				}
				else
				{?>
               <tr bgcolor="#CC6699">
                <?php
				}?>
             <td><input type="checkbox" name="check_all[]" id="check_all" value="<?php echo $user_detail[$i]['user_id'];?>" /></td>
            <td><?php echo $user_detail[$i]['Name'];?></td>
            <td><?php echo $user_detail[$i]['Hobby'];?></td>
            <td><?php echo $user_detail[$i]['address'];?></td>
            <td><?php echo $user_detail[$i]['gender'];?></td>
            <td><?php echo $user_detail[$i]['contact_type'];?></td>
            <td><?php echo $user_detail[$i]['number'];?></td>
             <td><?php echo $user_detail[$i]['user_date'];?></td>
            <td><?php echo $user_detail[$i]['course'];?></td>
            <td><?php echo $user_detail[$i]['fees'];?></td>
            
            <td><a class="color" href="delete1.php?task=<?php echo $user_detail[$i]['user_id'];?>" >Delete</a><td><a class="color" href="edit1.php?task=<?php echo $user_detail[$i]['user_id'];?>" >Edit</a>
            
          </tr>
		  <?php
          }?>
           <tr>
      <td>
          <input type="submit" name="Delete_all" value="Delete" />
      </td>
      </tr>
      </form>
   </table>
                

            </div>
        </div>
         
    	<div class="clear"></div>
    </div>
   
 
       </div>  
</div>
</div>
</body>
</html>

