<?php
session_start();
require_once "mydbms.php"; 
$dbname="rft"; 
$con=connect("root","");
mysqli_select_db($con,"$dbname");  
$query="select * from felhasznalok
 where felhasznalo='".$_POST['felhasznalo']."'"; 
$result=mysqli_query($con, $query) or die ("Unsuccesfull ".$query);
if(mysqli_num_rows($result)>0)
{
	$adatok=mysqli_fetch_assoc($result);
	$_SESSION["id"]=$adatok["id"];
	$_SESSION["felhasznalo"]=$adatok["felhasznalo"];
	$_SESSION["jogosultsag"]=$adatok["jogosultsag"];
	echo "Üdv ".$_SESSION["felhasznalo"]."!";
	header("Location:fomenu.php");
}
else{
	echo "Hibás felhasználó név vagy jelszó!";
}	
mysqli_close($con);
//echo '<meta http-equiv="refresh" content="0; URL=fomenu.php">';
?>
