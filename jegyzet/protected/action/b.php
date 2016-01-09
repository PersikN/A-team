<?php
    session_start();    
    include_once '../mydbms.php';
    if(md5($_POST['jelszo']))
	{
		$belepett=felhasznaloLekerdez2($_POST['felhasznalo']);	
	}
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