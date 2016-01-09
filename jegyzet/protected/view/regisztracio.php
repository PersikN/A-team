<head>
        <meta charset="UTF-8">
</head>
<?php
   include_once '../mydbms.php';
   if(array_key_exists('ujFelhasznalo', $_POST)){
        $parameterek = [
            'felhasznalo'   =>  $_POST['felhasznalo'],
            'jelszo'   => $_POST['jelszo'],
            'nev'       => $_POST['nev'],
            'cim'  => $_POST['cim'],
            'email'   => $_POST['email'],
            'telefon'   => $_POST['telefon'] ,
            'jogosultsag' =>$_POST['jogosultsag']
        ];
        
        if(felhasznaloRogzit($parameterek)){
            echo "Sikeres regisztráció!";
        }
        else{
            echo "Sikertelen regisztráció!";
        }
    } 
?>
<form action="" method="POST" ><table border=0>
    <tr><td><label for="felhasznalo">Felhasználó név:</label></td>
    <td><input type="text" name="felhasznalo" value=""/></td></tr>
    
    <tr><td><label for="jelszo">Jelszó</label></td>
    <td><input type="password" name="jelszo" value=""/></td></tr>
    
    <tr><td><label for="nev">Név:</label></td>
    <td><input type="text" name="nev" value=""/></td></tr>
    
    <tr><td><label for="cim">Cím:</label></td>
    <td><input type="text" name="cim" value=""/></td></tr>
    
    <tr><td><label for="email">E-mail cím:</label></td>
    <td><input type="text" name="email" value=""/></td></tr>
    
    <tr><td><label for="telefon">Telefon szám:</label></td>
    <td><input type="text" name="telefon" value=""/></td></tr>
    
    <tr><td><label for="jogosultsag">Jogosultság</label></td>
    <td><select name="jogosultsag">
    <option value="érték1">1</option>
    <option value="érték2">2</option>
    </select></td></tr>
    
    <tr><td></td><td><button type="submit" name="ujFelhasznalo" value="">Regisztrálok!</button></td></tr>
</form>


