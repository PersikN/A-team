<?php
    include './protected/mydbms.php';
    
    if(array_key_exists('letolt', $_POST)){
        $fajlId = $_POST['letolt'];
        if(fajlLetolt($fajlId)){
            echo "A választott fájl sikeresen letöltésre került!";
        }
        else{
            echo "A választott fájl letöltése sikertelen!";
        }
    }
?>
<form action="" method="POST">
<table border="2">
    <thead>
        <tr>
            <td>Név</td>
            <td>Fájl</td>
            <td>Letöltés</td>
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
                        <td><button type="submit" name="letolt" value="'.$fajlok[$i]['id'].'">Letölt</button></td>    
                     </tr>';
            }
        
        ?>
    </tbody>
</table>
</form>

