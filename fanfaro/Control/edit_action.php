<?php

	include"../action/connect.php";
	$a=implode(",",$_POST['chk']);
	$date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
	
	$ins="update user set Name='".$_POST['name']."',
						   Hobby='".$a."',
						   address='".$_POST['address']."',
						   gender='".$_POST['gender']."',
						   contact_type='".$_POST['radio_num']."',
						   number='".$_POST['number']."', user_date='".$date."' where user_id='".$_POST['id']."'";
							mysql_query($ins);
							
							header("location:list.php");
?>