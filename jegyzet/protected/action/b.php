<?php
    session_start();    
    include_once '../mydbms.php';
    if(md5($_POST['jelszo']))
	{
		$belepett=felhasznaloLekerdez2($_POST['felhasznalo']);	
	}
    if(count($belepett)>0)
        {
            $_SESSION["id"]=$belepett["id"];
            $_SESSION["felhasznalo"]=$belepett["felhasznalo"];
            $_SESSION['jogosultsag']=$belepett["jogosultsag"];
			echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
        }
    else
        {
            echo "Hibás felhasználó név vagy jelszó!";
        }
?>