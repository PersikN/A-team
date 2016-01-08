<?php
include_once "../mydbms.php";
$safe_filename=trim($_FILES['fajl']['name']);  
$safe_filename=rand().$safe_filename;
if($feltoltes=feltoltes($_POST['nev'],"./public/uploads/".$safe_filename)){
			move_uploaded_file($_FILES['fajl']['tmp_name'],"C:/wamp/www/jegyzet/public/uploads/".$safe_filename);
			echo "A választott fájl sikeresen feltöltésre került!";
        }
        else{
            echo "A választott fájl feltöltése sikertelen!";
        }
echo '<meta http-equiv="refresh" content="0; URL=../../index.php?menu=0">';
?>

