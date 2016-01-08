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
    
function feltoltes($nev,$fajl)
{
    $kapcsolat=kapcsolat();   
    $lekerdezes = $kapcsolat->prepare("INSERT INTO fajlok (nev, fajl) values (:nev, :fajl)");
	$lekerdezes->bindParam(':nev',$nev);
	$lekerdezes->bindParam(':fajl',$fajl);
	$sikeres = $lekerdezes->execute();
    kapcsolatLezar($kapcsolat);
    return $sikeres;
}

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

function felhasznalokLekerdez()
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT * FROM felhasznalok");
    $lekerdezes->execute();
    $felhasznalok = $lekerdezes->fetchAll();
    kapcsolatLezar($kapcsolat);
    return $felhasznalok;
}
    
function felhasznaloLekerdez($id)
{
    $kapcsolat = kapcsolat();
    $lekerdezes = $kapcsolat->prepare("SELECT id, felhasznalo, jelszo, nev, cim, email, telefon, jogosultsag
                                       FROM felhasznalok 
                                       WHERE id = :id");
    $lekerdezes->bindParam(':id',$id);
    $lekerdezes->execute();
    $felhasznalok = $lekerdezes->fetch();
    var_dump($felhasznalok);
    kapcsolatLezar($kapcsolat);
    return $felhasznalok;
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

?>