<?php 
    include_once './protected/mydbms.php';
    if(array_key_exists('modosit', $_POST)){
        $parameterek = [
            'jelszo'   => $_POST['jelszo'],
            'nev'       => $_POST['nev'],
            'cim'  => $_POST['cim'],
            'email'   => $_POST['email'],
            'telefon'   => $_POST['telefon']          
        ];
        
        if(felhasznaloModosit($parameterek)){
            echo "Sikeres adatmódosítás!";
        }
        else{
            echo "Sikertelen adatmódosítás!";
        }
    } 
?>
<form action="" method="POST">
    <?php
        include_once './protected/mydbms.php';
        $lekerdez = array_key_exists('lekerdez', $_POST);
        if($lekerdez){
            $felhasznalo = felhasznaloLekerdez($_POST['lekerdez']);
        }
     ?>
    <table border=0>
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
    <tr><td></td>
    <td><button type="submit" name="modosit">Módosítás</button></td></tr>
</form>
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
            <td>Módosítás</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once './protected/mydbms.php';
            $felhasznalo=  felhasznaloLekerdez();
            if(isset($_SESSION['felhasznalo']))
            {
                
                echo '<tr>
                        <td>'.$_SESSION['felhasznalo'].'</td>
                        <td>'.$felhasznalo['jelszo'].'</td>
                        <td>'.$felhasznalo['nev'].'</td>
                        <td>'.$felhasznalo['cim'].'</td>
                        <td>'.$felhasznalo['email'].'</td>
                        <td>'.$felhasznalo['telefon'].'</td>
                        <td><button type="submit" name="lekerdez" value="'.$felhasznalo['id'].'">Módosítás</button></td>
                     </tr>';
            }
        ?>
    </tbody>
</table>
</form>

