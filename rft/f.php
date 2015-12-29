<?php
require_once "mydbms.php"; 
$dbname="rft"; 
$con=connect("root","");
mysqli_select_db($con,"$dbname");  
$safe_filename=trim($_FILES['fajl']['name']);  
$safe_filename=rand().$safe_filename;//avoid same names  
move_uploaded_file($_FILES['fajl']['tmp_name'],"fajlok/".$safe_filename); //add new line from slide 10     
$query="insert into fajlok (nev, fajl) 
	values ('".$_POST['nev']."','"."fajlok/".$safe_filename."')"; 
mysqli_query($con,$query) or die ("Unsuccesfull".$query);  
mysqli_close($con);
?>