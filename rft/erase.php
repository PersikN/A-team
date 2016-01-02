<?php
require_once "mydbms.php"; 
$dbname="rft"; 
$con=connect("root","");  
mysqli_select_db($con,"$dbname");  
$query="select * from fajlok where id=".$_POST['id'];  
$result=mysqli_query($con,$query) or die ("Failed".$query);
list($file)=mysqli_fetch_row($result);
$query="delete from fajlok where id=".$_POST['id'];
mysqli_query($con,$query);
mysqli_close($con);
echo '<meta http-equiv="refresh" content="0; URL=fomenu.php?d=3">';
?>
