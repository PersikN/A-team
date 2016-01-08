<?php
    include_once './protected/mydbms.php';
    
    if(array_key_exists('torol', $_POST)){
        $fajlId = $_POST['torol'];
		$fileok=fajlLetolt($fajlId);
		$file=$fileok[0];
        if(FajlTorol($fajlId)){
			if(is_file($file))
			{ unlink($file);}
            echo "A választott fájl sikeresen törlésre került!";
        }
        else{
            echo "A választott fájl törlése sikertelen!";
        }
    }
?>
<form action="" method="POST">
<table border="2">
    <thead>
        <tr>
            <td>Név</td>
            <td>Fájl</td>
            <td>Törlés</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $fajlok = fajlokLekerdez();
            $fajlokDb = count($fajlok);
            for($i = 0; $i < $fajlokDb;$i++){
                echo '<tr>
                     
                        <td>'.$fajlok[$i]['nev'].'</td>
                        <td>'.$fajlok[$i]['fajl'].'</td>
                        <td><button type="submit" name="torol" value="'.$fajlok[$i]['id'].'">Törlés</button></td>    
                     </tr>';
            }
        
        ?>
    </tbody>
</table>
</form>
<note>
<form action="" method="POST">
    <button type="submit" name="ossztorol">Összes rekord törlése</button>
</form>
<?php
    if(array_key_exists('ossztorol', $_POST)){
        if(OsszFajlTorol()){
            echo "Sikeres törlés";
        }
        else{
            echo "Sikertelen törlés";
        }
    }
?>
</note>