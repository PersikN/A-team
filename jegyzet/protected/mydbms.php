<?php

function kapcsolat()
{
     $kapcsolat = new PDO('mysql:dbname=rft;host=localhost','root','');
     $kapcsolat->exec("set names utf8");
     return $kapcsolat;    
}

function kapcsolatLezar($kapcsolat)
{
    $kapcsolat = null;
}

function ParameterekElokeszit($parameterek)
{
    $sqlParameterek = [];
    foreach($parameterek as $kulcs => $ertek)
        {
           $sqlParameterek[':'.$kulcs] = $ertek;
        }
    return $sqlParameterek;
}


function MenuLekerdez()
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT * FROM menu ORDER BY link");
    $lekerdezes->execute();
    $menu = $lekerdezes->fetchAll();
    kapcsolatLezar($kapcsolat);
    return $menu;
}
    
function feltoltes($nev,$fajl, $kategoria) {
    $kapcsolat=kapcsolat(); 
    $lekerdezes = $kapcsolat->prepare("INSERT INTO fajlok (nev, fajl, kategoria) values (:nev, :fajl, :kategoria)");
    $lekerdezes->bindParam(':nev',$nev); 
    $lekerdezes->bindParam(':fajl',$fajl); 
    $lekerdezes->bindParam(':kategoria',$kategoria); 
    $sikeres = $lekerdezes->execute(); 
    kapcsolatLezar($kapcsolat); 
    
    return $sikeres; }


function fajlLetolt($fajlId)
{
	$kapcsolat = kapcsolat();
	$lekerdezes = $kapcsolat->prepare("select fajl from fajlok where id= :id");
	$lekerdezes->bindParam(':id',$fajlId);
	$lekerdezes->execute();
	$fajlok = $lekerdezes->fetchAll();
	$file = $fajlok[0];
	kapcsolatLezar($kapcsolat);
    return $file;
}

function fajlokLekerdez()
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT id, nev, fajl, kategoria FROM fajlok");
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

function felhasznalokLekerdez()
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT * FROM felhasznalok");
    $lekerdezes->execute();
    $felhasznalok = $lekerdezes->fetchAll();
    kapcsolatLezar($kapcsolat);
    return $felhasznalok;
}
    
function felhasznaloLekerdez()
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT id, felhasznalo, jelszo, nev, cim, email, telefon
                                       FROM felhasznalok 
                                       WHERE felhasznalo = '".$_SESSION['felhasznalo']."'");
    $lekerdezes->execute();
    $felhasznalok = $lekerdezes->fetch();
    //var_dump($felhasznalok);
    kapcsolatLezar($kapcsolat);
    return $felhasznalok;
}
function felhasznaloLekerdez2($id)
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT id, felhasznalo, jelszo, nev, cim, email, telefon, jogosultsag
                                       FROM felhasznalok 
                                       WHERE id = (SELECT id FROM felhasznalok WHERE felhasznalo= :id)");
    $lekerdezes->bindParam(':id',$id);
    $lekerdezes->execute();
    $felhasznalok = $lekerdezes->fetch();
    //var_dump($felhasznalok);
    kapcsolatLezar($kapcsolat);
    return $felhasznalok;
}
function fajlLekerdez($id)
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT * FROM fajlok WHERE id= :id)");
    $lekerdezes->bindParam(':id',$id);
    $lekerdezes->execute();
    $fajl = $lekerdezes->fetch();
    //var_dump($felhasznalok);
    kapcsolatLezar($kapcsolat);
    return $fajl;
}       
function felhasznaloRogzit($parameterek)
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("INSERT INTO felhasznalok (felhasznalo, jelszo, nev, cim, email, telefon, jogosultsag)
                                          VALUES(:felhasznalo, :jelszo, :nev, :cim, :email, :telefon, :jogosultsag)");
   
    $sqlParameterek = ParameterekElokeszit($parameterek);
    $sikeres = $lekerdezes->execute($sqlParameterek);
    kapcsolatLezar($kapcsolat);
    return $sikeres;
}
function felhasznaloModosit($parameterek)
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("UPDATE felhasznalok SET jelszo=:jelszo, nev=:nev, cim=:cim, email=:email, telefon=:telefon WHERE felhasznalo='".$_SESSION['felhasznalo']."'");
    $sqlParameterek = ParameterekElokeszit($parameterek);
    $sikeres = $lekerdezes->execute($sqlParameterek);
    kapcsolatLezar($kapcsolat);
    return $sikeres;
}
function belepes($felhasznalo,$jelszo)
{
    $kapcsolat = kapcsolat();
    $lekerdezes=$kapcsolat->prepare("SELECT * FROM felhasznalok WHERE felhasznalo=:felhasznalo AND jelszo=:jelszo");
    $lekerdezes->bindParam(':felhasznalo',$felhasznalo);
    $lekerdezes->bindParam(':jelszo',$jelszo);
    $lekerdezes->execute();
    $jofelhasznalo=$lekerdezes->fetch();
    kapcsolatLezar($kapcsolat);
    return $jofelhasznalo;
}
function felhasznaloModosit2($parameterek)
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("UPDATE felhasznalok SET jelszo=:jelszo, nev=:nev, cim=:cim, email=:email, telefon=:telefon, jogosultsag=:jogosultsag WHERE felhasznalo=:felhasznalo");
    
    $sqlParameterek = ParameterekElokeszit($parameterek);
    $sikeres = $lekerdezes->execute($sqlParameterek);
    kapcsolatLezar($kapcsolat);
    return $sikeres;
}

function fajlModosit($id,$nev,$fajl,$kategoria)
{  
   
   $kapcsolat = kapcsolat();
   $lekerdezes = $kapcsolat->prepare("UPDATE fajlok SET nev=:nev, fajl=:fajl, kategoria=:kategoria WHERE id=:id");
   $lekerdezes->bindParam(':id',$id);
   $lekerdezes->bindParam(':nev',$nev);
   $lekerdezes->bindParam(':fajl',$fajl);
   $lekerdezes->bindParam(':kategoria',$kategoria);
   $sikeres = $lekerdezes->execute();
   kapcsolatLezar($kapcsolat);
   return $sikeres;
}

?>