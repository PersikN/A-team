<?php
session_start();
require_once "mydbms.php";
if(isset($_SESSION['jogosultsag']) && $_SESSION['jogosultsag'] <= 2)
{
echo'�dv, '.$_SESSION['felhasznalo'].'!';
header("Location: fomenu.php");
echo '<br><a href="?act=exit">Kil�p�s</a>';

if(isset($_GET['act']) && $_GET['act'] == 'exit')
{
	//session_destroy();
    header('location: belepes.php');
    exit();
    }
    } else 
	{
		include "belepes.php";
		//print('Hozz�f�r�s megtagadva!');
	}
 ?>