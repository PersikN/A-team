<?php

function kapcsolat(){
     $kapcsolat = new PDO('mysql:dbname=rft;host=localhost','root','');
     $kapcsolat->exec("set names utf8");
     return $kapcsolat;    
}

function kapcsolatLezar($kapcsolat){
    $kapcsolat = null;
}

function ParameterekElokeszit($parameterek){
    $sqlParameterek = [];
    foreach($parameterek as $kulcs => $ertek){
        $sqlParameterek[':'.$kulcs] = $ertek;
    }
    return $sqlParameterek;
}

function feltoltes(){
    $kapcsolat=kapcsolat();
    $safe_filename=trim($_FILES['fajl']['name']);  
    $safe_filename=rand().$safe_filename;  
    move_uploaded_file($_FILES['fajl']['tmp_name'],"fajlok/".$safe_filename);    
    $query="insert into fajlok (nev, fajl) 
	values ('".$_POST['nev']."','"."fajlok/".$safe_filename."')"; 
    mysqli_query($con,$query) or die ("Unsuccesfull".$query);  
    kapcsolatLezar($kapcsolat);
    return $query;
}

function fajlokLekerdez(){
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT id, nev, fajl FROM fajlok");
    $lekerdezes->execute();
    $fajlok = $lekerdezes->fetchAll();
    kapcsolatLezar($kapcsolat);
    return $fajlok;
}

function fajlTorol($fajlId){
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("DELETE FROM fajlok WHERE id = :id");
    $lekerdezes->bindParam(':id',$fajlId);
    $sikeres = $lekerdezes->execute();
    kapcsolatLezar($kapcsolat);
    return $sikeres;
}

function fajlLetolt(){
   
}

?>