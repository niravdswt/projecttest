<?php

include"connect.php";
if(count($_POST)>0)
{
	
$a=array();
$a= $_POST['check_all'];

for($i=0;count($a)>$i;$i++)
{
	$id=$a[$i];
 $query="delete  from user where user_id=".$id;

	$result=mysql_query($query);
    header("location:../control/list.php");
}
}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>