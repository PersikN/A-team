<?php 
    include_once './protected/mydbms.php';
    if(array_key_exists('modosit', $_POST)){
        $parameterek = [
            'felhasznalo' =>$_POST['felhasznalo'],
            'jelszo'   => $_POST['jelszo'],
            'nev'       => $_POST['nev'],
            'cim'  => $_POST['cim'],
            'email'   => $_POST['email'],
            'telefon'   => $_POST['telefon'],
            'jogosultsag' =>$_POST['jogosultsag']
        ];
        if(felhasznaloModosit2($parameterek)){
            echo "Sikeres adatmódosítás!";
        }
        else{
            echo "Sikertelen adatmódosítás!";
        }
    } 
?>
<form action="" method="POST">
<table border="2">
    <thead>
        <tr>
            <td>Felhasználó név</td>
            <td>Jelszó</td>
            <td>Név</td>
            <td>Cím</td>
            <td>E-mail cím</td>
            <td>Telefon szám</td>
            <td>Jogosultság</td>
            <td>Módosítás</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once './protected/mydbms.php';
            $felhasznalok=  felhasznalokLekerdez();
            $felhasznaloDb=count($felhasznalok);
            for($i=0; $i <$felhasznaloDb ; $i++) 
            {
                echo '<tr>
                        <td>'.$felhasznalok[$i]['felhasznalo'].'</td>
                        <td>'.$felhasznalok[$i]['jelszo'].'</td>
                        <td>'.$felhasznalok[$i]['nev'].'</td>
                        <td>'.$felhasznalok[$i]['cim'].'</td>
                        <td>'.$felhasznalok[$i]['email'].'</td>
                        <td>'.$felhasznalok[$i]['telefon'].'</td>
                        <td>'.$felhasznalok[$i]['jogosultsag'].'</td>
                        <td><button type="submit" name="lekerdez" value="'.$felhasznalok[$i]['id'].'">Módosítás</button></td>
                     </tr>';
            }
        ?>
    </tbody>
</table>
</form>
<form action="" method="POST">
    <?php
        include_once './protected/mydbms.php';
        $lekerdez = array_key_exists('lekerdez', $_POST);
        if($lekerdez){
            $felhasznalo = felhasznaloLekerdez2($_POST['lekerdez']);
        }
     ?>
    <table border=0>
    <tr><td><label for="felhasznalo">Felhasználó név:</label></td>
    <td><input type="text" name="felhasznalo" value="<?=$lekerdez?$felhasznalo['felhasznalo']:''?>"/></td>
    <td><label>Ez az adat nem módosítható!</label></td></tr>
    <tr><td><label for="jelszo">Jelszó:</label></td>
    <td><input type="password" name="jelszo" value="<?=$lekerdez?$felhasznalo['jelszo']:''?>"/></td></tr>
    <tr><td><label for="nev">Név:</label></td>
    <td><input type="text" name="nev" value="<?=$lekerdez?$felhasznalo['nev']:''?>"/></td></tr>
    <tr><td><label for="jelszo">Cím:</label></td>
    <td><input type="text" name="cim" value="<?=$lekerdez?$felhasznalo['cim']:''?>"/></td></tr>
    <tr><td><label for="jelszo">E-mail cím:</label></td>
    <td><input type="text" name="email" value="<?=$lekerdez?$felhasznalo['email']:''?>"/></td></tr>
    <tr><td><label for="jelszo">Telefon szám:</label></td>
    <td><input type="text" name="telefon" value="<?=$lekerdez?$felhasznalo['telefon']:''?>"/></td></tr>
    <tr><td><label for="jogosultsag">Jogosultság:</label></td>
    <td><input type="text" name="jogosultsag" value="<?=$lekerdez?$felhasznalo['jogosultsag']:''?>"/></td></tr>
    <tr><td></td>
    <td><button type="submit" name="modosit">Módosítás</button></td></tr>
</form>
