<?php
    session_start();
    if(array_key_exists('modosit', $_POST)){
        if(Modosit()){
            echo "Sikeres módosítás!";
        }
        else{
            echo "Sikertelen módosítás!";
        }
    }
?>

<form action="" method="POST">
    
</form>

<form action="" method="POST">
    <button type="submit" name="modosit">Módosítás</button>
</form>

