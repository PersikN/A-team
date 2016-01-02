<?php
session_start();
require_once "mydbms.php";
if(isset($_SESSION['jogosultsag']) && $_SESSION['jogosultsag'] <= 2)
{
echo'Üdv, '.$_SESSION['felhasznalo'].'!';
header("Location: fomenu.php");
echo '<br><a href="?act=exit">Kilépés</a>';

if(isset($_GET['act']) && $_GET['act'] == 'exit')
{
	//session_destroy();
    header('location: belepes.php');
    exit();
    }
    } else 
	{
		include "belepes.php";
		//print('Hozzáférés megtagadva!');
	}
 ?>