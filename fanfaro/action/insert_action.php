<?php

	include"connect.php";
	if(count($_POST)>0)
	{
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_temp = $_FILES['image']['tmp_name'];
	$file_error =$_FILES['image']['error'];
	$file_type= $_FILES['image']['type']; 
	if($file_error > 0)
	{
		echo " file not uploaded";
	}
	else
	{
		move_uploaded_file($file_temp,"../uploade/".$file_name);	
		echo" upload completed";
	}	
	$a=implode(",",$_POST['chk']);
	$date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
     
	
	  $ins="insert user set Name='".$_POST['name']."',
						   Hobby='".$a."',
						   address='".$_POST['address']."',
						   gender='".$_POST['gender']."',
						   contact_type='".$_POST['radio_num']."',
						   number='".$_POST['number']."',
						    user_date='".$date."',
							image='".$file_name."'";
							mysql_query($ins);
						
							$id=mysql_insert_id();
							header("location:../index.php");
							//header("location:../control/list.php");
							
							
	}
	
	
	
?>

