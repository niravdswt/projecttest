<?php
	
		include"../action/connect.php";
		
		 echo $del="delete from user where user_id='".$_GET['task']."'";
	
		mysql_query($del);
		header("Location:list.php");
?>