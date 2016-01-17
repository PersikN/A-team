<head>
        <link rel="stylesheet" type="text/css" href="./public/css/style.css">
        <meta charset="UTF-8">
</head>
<?php
include_once "../mydbms.php";
$safe_filename=trim($_FILES['fajl']['name']);  
$safe_filename=rand().$safe_filename;
if($feltoltes=feltoltes($_POST['nev'],"/public/uploads/".$safe_filename,
 $_POST['kategoria'])) { move_uploaded_file($_FILES['fajl']['tmp_name'],
 '../../public/uploads/'.$safe_filename);
            echo "A választott fájl sikeresen feltöltésre került!"; }
        
        else{
            echo "A választott fájl feltöltése sikertelen!";
        }
echo '<meta http-equiv="refresh" content="0; URL=../../index.php?menu=0">';
?>

