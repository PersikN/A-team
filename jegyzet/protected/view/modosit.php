<form action="protected/action/modositofeltoltes.php" method="POST" enctype="multipart/form-data">
    <?php
        include_once './protected/mydbms.php';
        $lekerdez = array_key_exists('lekerdez', $_POST);
        if($lekerdez){
            $fajlok = fajlLekerdez($_POST['lekerdez']);
        }
     ?>
    <table border=0>
    <tr><td><label for="id">Sorszám:</label></td>
    <td><input type="text" name="id" value="<?=$lekerdez?$fajlok['id']:''?>"/></td>
    <td><label>Ez az adat nem módosítható!</label></td></tr>
    <tr><td><label for="nev">Feltöltés neve:</label></td>
    <td><input type="text" name="nev" value="<?=$lekerdez?$fajlok['nev']:''?>"/></td></tr>
    <tr><td><label for="fajl">Feltöltendő fájl:</label></td>
    <td><input type="file" name="fajl" value="<?=$lekerdez?$fajlok['fajl']:''?>"/></td></tr>
    <tr><td></td> 
    <tr><td></td><td><input type="submit" value="Módosítás"></td></tr></table>
</form>

<form action="" method="POST">
<table border="2">
    <thead>
        <tr>
            <td>Név</td>
            <td>Fájl</td>
            <td>Módosítás</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $fajlok = fajlokLekerdez();
            $fajlokDb = count($fajlok);
            for($i = 0; $i < $fajlokDb;$i++){
                echo '<tr>
                        <td>'.$fajlok[$i]['id'].'</td>
                        <td>'.$fajlok[$i]['nev'].'</td>
                        <td>'.$fajlok[$i]['fajl'].'</td>
                        <td><button type="submit" name="lekerdez" value="'.$fajlok[$i]['id'].'">Módosítás</button></td>    
                     </tr>';
            }
        
        ?>
    </tbody>
</table>
</form>


