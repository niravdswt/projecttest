<?php

	include"../action/connect.php";
	if(count($_POST)>0)
	{
	$a=implode(",",$_POST['chk']);
	$date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
	  $ins="insert user1 set  Name='".$_POST['name']."',
						   Hobby='".$a."',
						   address='".$_POST['address']."',
						   gender='".$_POST['gender']."',
						   contact_type='".$_POST['radio_num']."',
						   number='".$_POST['number']."',
						    user_date='".$date."',
						   course='".$_POST['course']."',
						   fees='".$_POST['fees']."'";
							mysql_query($ins);
							
							$id=mysql_insert_id();
						
						
						
							//header("location:list1.php");
							header("location:../index.php");
							
							
	}
	
	
	
?>

