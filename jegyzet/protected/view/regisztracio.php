<head>
        <meta charset="UTF-8">
</head>
<?php
   include_once "../mydbms.php";
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
<form action="" method="POST" >
    <label for="felhasznalo">Felhasználó név:</label>
    <input type="text" name="felhasznalo" value=""/><br/>
    
    <label for="jelszo">Jelszó</label>
    <input type="password" name="jelszo" value=""/><br/>
    
    <label for="nev">Név:</label>
    <input type="text" name="nev" value=""/><br/>
    
    <label for="cim">Cím:</label>
    <input type="text" name="cim" value=""/><br/>
    
    <label for="email">E-mail cím:</label>
    <input type="text" name="email" value=""/><br/>
    
    <label for="telefon">Telefon szám:</label>
    <input type="text" name="telefon" value=""/><br/>
    
    <label for="jogosultsag">Jogosultság</label>
    <select name="jogosultsag">
    <option value="érték1">1</option>
    <option value="érték2">2</option>
    </select><br/>
    
    <button type="submit" name="ujFelhasznalo" value="">Regisztrálok!</button>
</form>


