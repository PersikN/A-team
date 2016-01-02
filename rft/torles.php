<?php
require_once "mydbms.php"; 
$dbname="rft"; 
$con=connect("root","");  
mysqli_select_db($con,"$dbname");  
$query="select * from fajlok"; 
if(!isset($_GET["order"]))  
   $_GET["order"]=0;   
switch($_GET["order"])   
 {      
     case 1: $query.=" order by nev";
              break;
	 default: break;    } 
$result=mysqli_query($con,$query) or die ("Failed".$query); 
echo "<table width=50% border=1>";
echo "<tr><th><a href=fomenu.php?d=2&order=0>ID</a></th><th><a href=fomenu.php?d=2&order=1>Név</a></th><th width=20>Törlés</th></tr>";
while (list($id,$nev,$fajl)=mysqli_fetch_row($result))
	 {     
		echo "<form action=erase.php method=post><input type=hidden name=id value=$id>
		<tr><td>$id</td><td>$nev</td><td><input type=submit value=X></tr>";
	 }
echo "</table>";
mysqli_close($con);
?>
