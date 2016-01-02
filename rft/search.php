<?php
//session_start();
require_once "mydbms.php";
$dbname="rft";
$con=connect("root","");
mysqli_select_db($con,"$dbname");
//$_SESSION["keres"]=$_POST[search_value];

$query="select * from fajlok where nev like '%$_POST[search_value]%'";
$result=mysqli_query($con, $query) or die ("Failed".$query);
echo "<table width=50% border=1>";
echo "<tr><th><a href=fomenu.php?d=2&order=0>ID</a></th><th><a href=fomenu.php?d=2&order=1>Név</a></th><th width=20>Letöltés</th></tr>";
while (list($id,$nev,$fajl)=mysqli_fetch_row($result))
	 {     
		echo "<form action=letolt.php method=post><input type=hidden name=id value=$id>
		<tr><td>$id</td><td>$nev</td><td><input type=submit value=Ment></tr>";
	 }
echo "</table>"; 
mysqli_close($con);
?>