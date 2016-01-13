<?php
    
    if(array_key_exists('modosit', $_POST)){
        if(Modosit()){
            echo "Sikeres módosítás!";
        }
        else{
            echo "Sikertelen módosítás!";
        }
    }
?>


<table border="2">
    
    <body>
        <?php	
			$username="root";
			$password="";
			$dbname="rft";
			$con=mysqli_connect('localhost', $username, $password, $dbname);
			if(!isset($con))  
			{ 
				echo "Nem sikerült: ".mysql_error();  
			}
			$sql= ('SELECT * FROM felhasznalok
					WHERE id=2');
            $result= mysqli_query($con,$sql) or die ("NEM SIKERÜLT A MÛVELET:".$sql);
			
			while(($sor = mysqli_fetch_array($result))){
				?>			 
				 
				 <tr> <td>Felhasználónév: </td> 
				 <td><?= $sor['felhasznalo']; ?></td>				 
				 </tr>
				 
				 
				 <tr> <td>Jelszó: </td> 
				 <td><?= $sor['jelszo']; ?></td>
					 <form action="modositasDB.php" name="jelszo" method="POST">
					 <td><input type="textbox" name="jelszo" placeholder="Új jelszó"></td> 
					 <td><input type="submit" value="Módosítás"></td> 
					 </form>
				 </tr>		 
				 
				 
				 <tr> <td>Név: </td> 
				 <td><?= $sor['nev']; ?></td> 
				 <form action="modositasDB.php" name="nev" method="POST">
					 <td><input type="textbox" name="nev" placeholder="Új név"></td> 
					 <td><input type="submit" value="Módosítás"></td> 
				 </form>
				 
				 <tr> <td>Cím:</td> 
				 <td><?= $sor['cim']; ?></td> 
				 <form action="modositasDB.php" name="cim" method="POST">
					 <td><input type="textbox" name="cim" placeholder="Új cím"></td> 
					 <td><input type="submit" value="Módosítás"></td> 
				 </form>
				 
				 <tr> <td>E-mail: </td> 
				 <td><?= $sor['email']; ?></td>
				<form action="modositasDB.php" name="email" method="POST">
					 <td><input type="textbox" name="email" placeholder="Új E-mail"></td> 
					 <td><input type="submit" value="Módosítás"></td> 
				 </form>
				 
				 <tr> <td>Telefonszám: </td> <td><?= $sor['telefon']; ?></td> 
				 <form action="modositasDB.php" name="telefon" method="POST">
					 <td><input type="textbox" name="telefon" placeholder="Új telefonszám"></td> 
					 <td><input type="submit" value="Módosítás"></td> 
				 </form>
		<?php
				
			}
           
        
        ?>
    </body>
</table>
</form>


