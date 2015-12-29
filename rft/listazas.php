<?php
require_once "mydbms.php";
$dbname="rft";
$con=connect("root","");
mysqli_select_db($con,"$dbname");
echo "<table width=100% border=1><tr>";

$query="select * from fajlok";
/* if(!isset($_GET["order"]))  
   $_GET["order"]=0;   
switch($_GET["order"])   
 {      
     case 1: $query.=" order by nev";
              break; 
     case 2: $query.=" order by hossz";
                break;
	 case 3: $query.=" order by kiterjedes";
                break;
	 case 4: $query.=" order by melyseg";
                break;
	 case 5: $query.=" order by magassag";
				break;	
	 case 6: $query.=" order by telepules";
				break;				
     default: break;    } */
$result=mysqli_query($con, $query) or die ("Unsuccesful".$query);	 
	 while (list($id,$nev,$fajl)=mysqli_fetch_row($result))
	 {     
		echo "<form action=letolt.php method=post><input type=hidden name=id value=$id>
		<tr><td>$id</td><td>$nev</td><td>$fajl</td><td><input type=submit value=Ment></tr>";
	 }
mysqli_close($con);
?>