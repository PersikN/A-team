<form action="" method="POST">
<table border="2">
    <thead>
        <tr>
            <th>Név</th>
            <th>Fájl</th>
			<th>Kategória</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once './protected/mydbms.php';
            $fajlok = fajlokLekerdez();
            $fajlokDb = count($fajlok);
            for($i = 0; $i < $fajlokDb;$i++){
                echo '<tr>
                     
                        <td>'.$fajlok[$i]['nev'].'</td>
                        <td>'.$fajlok[$i]['fajl'].'</td>
						<td>'.$kategoria[$i]['kategoria'].'</td>
						
                     </tr>';
            }
        
        ?>
    </tbody>
</table>
</form>
