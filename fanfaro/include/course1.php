
<?php
    include"../action/connect.php";
	include"header.php";
	
	
	 
	 
	 $select_query="select * from course";
	 $select_result=mysql_query($select_query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/styles.css" type="text/css" />
</head>

<body>
<div class="middle-bg">
   	  <div class="middle-top"></div>
    </div>
        
    <div id="body">
        
<div id="content" align="">
            <div class="box">
<table>
       <h1>Course_Information </h1>
      <form action="course1.php" method="post">
            <tr>
          <th>Course_name </th>
          <td>          
             <select name="type">
             
          <?php
	      while($i=mysql_fetch_assoc($select_result))
		  {?>
			       
                    <option><?php echo $i['course_name'];?></option>
                     
          <?php
		  }?>
             </select>
          </td>
          </tr>
          <tr>
             <td>
                 <input type="submit" name="submit" value="submit" />
              </td>
          </tr>
          <?php
		     if(count($_POST)>0 && $_POST['type']!="")
			 {
				  $select_query="select * from course where course_name='".$_POST['type']."'";
				 
				 $result_query=mysql_query($select_query);
				 while($row=mysql_fetch_assoc($result_query))
				 {?>
                     <tr>
                    <th>Fees</th>
                       <td>
                           <input type="text" name="course_name" value="<?php echo $row['course_fees'];?>" />
                       </td>
                    </tr>
                    <tr>
                    <th>Duration</th>
                    <td>
                        <input type="text" name="course_duration" value="<?php echo $row['course_duration'];?>" />
                    </td>
                    </tr>
                    
					<?php }
				 }?>
      </form>
      
</table>
 </div>
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

