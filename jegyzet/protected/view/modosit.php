<?php
	include_once './protected/mydbms.php';   

?>
<form name="módosítás" action="protected/action/mod.php" method="post" enctype="multipart/form-data">
<table border="0">
<tr><td>Feltöltés neve:</td><td align="left"><input size="20" type="text" name="nev" id="nev"></td></tr>
<tr><td>Feltöltendő fájl:</td><td align="left"><input type="file" name="fajl"></td></tr>
<tr><td></td><td><input type="submit" value="Módosítás"></td></tr></table>
</form>
<form action="" method="POST">
<table border="2">
    <thead>
        <tr>
            <td>Név</td>
            <td>Fájl</td>
			<td>Kategória</td>
            <td>Módosítás</td>
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
						
                        <td><button type="submit" name="modosit" value="'.$fajlok[$i]['id'].'">Módosítás</button></td>    
                     </tr>';
            }
        
        ?>
    </tbody>
</table>
</form>


