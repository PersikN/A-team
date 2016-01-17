<?php

if(!array_key_exists('menu', $_GET)){
    $tartalomId =0;
}
else{
    $tartalomId = $_GET['menu'];
}
if($_SESSION['id'] > 0) {
switch($tartalomId){
    case 1: include './protected/view/feltolt.php';
        break;
    case 2: include './protected/view/letolt.php';
        break;
    case 3: include './protected/view/listaz.php';
        break;
    case 4: include './protected/view/modosit.php';
        break;
    case 5: include './protected/view/torol.php';
        break;
    case 6: include './protected/view/adatmodosit.php';
        break;
    case 7: include './protected/view/felhasznalokezeles.php';
        break;
	case 8: include './protected/view/regisztracio.php';
        break;
    default:
        break;
        }
}