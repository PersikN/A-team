<html>
<head>
<style>
<?php
include "style.css";
?>
</style>
<body>
<?php
session_start();
require_once "mydbms.php";
$dbname="rft";
$con=connect("root","");
mysqli_select_db($con, "$dbname");
if(isset($_SESSION['jogosultsag']) && $_SESSION['jogosultsag'] <= 2)
{
echo'Üdv, '.$_SESSION['felhasznalo'].'!';
echo '<br><a href="?act=exit">Kilépés</a><br>';
$query="select name, link, jog from menu";
$result=mysqli_query($con, $query) or die ("Unsuccesful".$query); 
echo "<table width=100% border=0><td class=\"oszlop\">";
while (list($title,$link,$jog) = mysqli_fetch_row($result))   
{     
   if($jog-$_SESSION['jogosultsag']>=0)
    {
	echo "<a href=fomenu.php?d=".$link.">".$title." </a><br>";
	}   
}
include "search.html";
//session_destroy();
mysqli_close($con);
echo "</td><td>";
if(!isset($_GET["d"]))  
   $_GET["d"]=0; 
switch($_GET["d"])   
{      
	 case 1: include "feltolt.php";
                break; 
     case 2: include "listazas.php";
                break;
	 case 3: include "torles.php";
                break;
	 case 4: include "modosit.php";
                break;
	 case 6: include "felhasznalok.php";
				break;
	 case 5: include "adatok.php";
				break;
	 case 7: include "search.php";
				break;				
	 default: break;
}	 
echo "</td>";

	if(isset($_GET['act']) && $_GET['act'] == 'exit')
	{
	//session_destroy();
    header('location: belepes.php');
    exit();
    }
} else 
	{
		print('Hozzáférés megtagadva!');
	}
?>
</body>
</html>