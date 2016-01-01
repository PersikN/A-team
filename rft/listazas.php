<?php
require_once "mydbms.php";
$dbname="rft";
$con=connect("root","");
mysqli_select_db($con,"$dbname");
echo "<table width=50% border=1>";
echo "<tr><th><a href=fomenu.php?d=2&order=0>ID</a></th><th><a href=fomenu.php?d=2&order=1>Név</a></th><th width=20>Letöltés</th></tr>";
$query="select * from fajlok";
/* header('location:search.php');
echo strlen($_SESSION["keres"]);
echo $_SESSION["keres"];
if(strlen($_SESSION["keres"])>0)
{$query.=" where nev like '%".$_SESSION["keres"]."%'";
$_SESSION["keres"]="";} */
if(!isset($_GET["order"]))  
   $_GET["order"]=0;   
switch($_GET["order"])   
 {      
     case 1: $query.=" order by nev";
              break; 
     /* case 2: $query.=" order by hossz";
                break;
	 case 3: $query.=" order by kiterjedes";
                break;
	 case 4: $query.=" order by melyseg";
                break;
	 case 5: $query.=" order by magassag";
				break;	
	 case 6: $query.=" order by telepules";
				break; */				
     default: break;    } 
$result=mysqli_query($con, $query) or die ("Unsuccesful".$query);	 
	 while (list($id,$nev,$fajl)=mysqli_fetch_row($result))
	 {     
		echo "<form action=letolt.php method=post><input type=hidden name=id value=$id>
		<tr><td>$id</td><td>$nev</td><td><input type=submit value=Ment></tr>";
	 }
mysqli_close($con);
?>