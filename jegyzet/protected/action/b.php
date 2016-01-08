<?php
    session_start();    
    include_once "../mydbms.php";
    $belepett=FelhasznalokLekerdez($_POST['felhasznalo']);
    if(count($belepett)>0)
        {
            $_SESSION["id"]=$belepett[0]["id"];
            $_SESSION["felhasznalo"]=$belepett[0]["felhasznalo"];
            $_SESSION['jogosultsag']=$belepett[0]["jogosultsag"];
			echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
        }
    else
        {
            echo "Hibás felhasználó név vagy jelszó!";
        }
?>