<?php
    include_once './protected/mydbms.php';
    session_start(); 
    if(isset($_SESSION['jogosultsag']) && $_SESSION['jogosultsag'] <= 2)
        {
            echo'Üdv, '.$_SESSION['felhasznalo'].'!';
            echo'<br><a href="?act=exit">Kilépés</a><br><br>'; 
            $menupontok=MenuLekerdez();
            $menuDB=count($menupontok);
            for($i = 0; $i < $menuDB;$i++)
                {
                if($menupontok[$i]['jog']-$_SESSION['jogosultsag']>=0)
                    {    
                        echo "<a href=index.php?menu=".$menupontok[$i]['link']
                            .">".$menupontok[$i]['name']." </a><br>";
                    
                    }
                    
                }
            if(isset($_GET['act']) && $_GET['act'] == 'exit')
                {    
                    session_destroy();
					echo '<meta http-equiv="refresh" content="0; URL=index.php">';
                }
        } 
    else 
        {
            echo "Hozzáférés megtagadva!";
        }
    
?>