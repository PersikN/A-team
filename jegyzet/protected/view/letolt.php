<?php
    include_once './protected/mydbms.php';
    
    if(array_key_exists('letolt', $_POST)){
        $fajlId = $_POST['letolt'];
		$fileok=fajlLetolt($fajlId);
		$file=$fileok[0];
        if(file_exists($file)){
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename($file).'"');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			exit; 
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
			<td>Kategória</td>
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
						<td>'.$fajlok[$i]['kategoria'].'</td>
						
                        <td><button type="submit" name="letolt" value="'.$fajlok[$i]['id'].'">Letölt</button></td>    
                     </tr>';
            }
        
        ?>
    </tbody>
</table>
</form>

