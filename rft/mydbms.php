<?php
function connect($username,$passwd)
{  
   $con=mysqli_connect('localhost',$username,$passwd);
   if(!isset($con))  
	{ 
        echo "Error".mysql_error();  
}  
return $con;
}
function feltoltes($nev,$fajl, $kategoria) {
    $kapcsolat=kapcsolat(); 
    $lekerdezes = $kapcsolat->prepare(
    "INSERT INTO fajlok (nev, fajl, kategoria)
     values (:nev, :fajl, :kategoria)"); 
    $lekerdezes->bindParam(':nev',$nev);
    $lekerdezes->bindParam(':fajl',$fajl); 
    $lekerdezes->bindParam(':kategoria',$kategoria); 
    $sikeres = $lekerdezes->execute(); 
    kapcsolatLezar($kapcsolat); 
    return $sikeres; }
?>
