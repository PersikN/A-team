<head>
        <link rel="stylesheet" type="text/css" href="./public/css/style.css">
        <meta charset="UTF-8">
</head>
<?php
    session_start();    
    include_once '../mydbms.php';
    $felhasznalo=$_POST['felhasznalo'];
    $jelszo=(md5($_POST['jelszo']));
    $belepes=belepes($felhasznalo,$jelszo);
    if(count($belepes)>0)
	{
            $_SESSION["id"]=$belepes["id"];
            $_SESSION["felhasznalo"]=$belepes["felhasznalo"];
            $_SESSION["jelszo"]=$belepes["jelszo"];
            $_SESSION['jogosultsag']=$belepes["jogosultsag"];
            echo '<meta http-equiv="refresh" content="0; URL=../../index.php">';
            
	}
    else
        {
            echo "Hibás felhasználó név vagy jelszó!";
        }
?>