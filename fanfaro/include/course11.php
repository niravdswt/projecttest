<?php
    include"../action/connect.php";
	include"header.php";
	
	
	  if(count($_POST)>0)
	  {
	  $insert_query="insert into course(`course_name`,`course_fees`,`course_duration`)values('".$_POST['name']."','".$_POST['fees']."','".$_POST['duration']."')";
	 $inset_result=mysql_query($insert_query);
	} 
	 
	 
	 $select_query="select * from course where course_name='".$_POST['name']."'";
	 $select_result=mysql_query($select_query);
	 
	 
	 
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fanfaro - Free CSS Template by spyka Webmaster</title>
<link rel="stylesheet" href="../css/styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

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
            <table>
       <h1>Course_Information </h1>
      <form>
        <?php
		   while($i=mysql_fetch_assoc($select_result))
		   { 
		?>
           <tr>
             <th>Fees:</th>
            
             <td>
             
               <input type="text" name="fees" value="<?php echo $i['course_fees'];?>" />
           </td>
           </tr>
           <tr>
           <th>Duration:</th>
              <td>
              <input type="text" name="duration" value="<?php echo $i['course_duration'] ?>" />
              </td>
           </tr>
           
      </form>
      <?php
	  }
	  ?>
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

