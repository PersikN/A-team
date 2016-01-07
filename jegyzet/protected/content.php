<?php

if(!array_key_exists('menu', $_GET)){
    $tartalomId =1;
}
else{
    $tartalomId = $_GET['menu'];
}

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
    default: include './protected/view/feltolt.php';
        break;
}