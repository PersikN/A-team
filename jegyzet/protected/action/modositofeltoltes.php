<head>
        <link rel="stylesheet" type="text/css" href="./public/css/style.css">
        <meta charset="UTF-8">
</head>
<?php 
    
    include_once "../mydbms.php";
    
        $safe_filename=trim($_FILES['fajl']['name']);  
        $safe_filename=rand().$safe_filename;
        if($modositas=  fajlModosit($_POST['id'],$_POST['nev'],"./public/uploads/".$safe_filename)){
			move_uploaded_file($_FILES["fajl"]['tmp_name'],"C:/wamp/www/jegyzet/public/uploads/".$safe_filename);
                        print 'A választott fájl sikeresen módosításra került!';
        }
        else
        {
            print 'A választott fájl módosítása sikertelen!';
        }
?>
