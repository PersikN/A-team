<form action="" method="post">
<table>
 <tr>
 <td>Felhasználónév:</td>
  <td>
<input name="nickname" type="text">
  </td>
 </tr>
 <tr>
  <td>Jelszó:</td>
  <td>
<input name="password" type="password">
  </td>
 </tr>
</table> 
<input  value="Belépés" name="login" type="submit">
<a href="register.php">Regisztrálni szeretnék</a>
</form>

<?php



//include('mydbms.php');
//include '../mydbms.php';
//include('login_form.php');

   if(isset($_POST["login"])){
 //Bejelentkezés
   $nickname = $_POST["nickname"]; //Név
   $password = md5($_POST["password"]); //Jelszó
   $lekerdezes = mysql_query("SELECT * FROM users WHERE nickname = '".mysql_real_escape_string(trim($nickname))."' AND password = '$password'"); //Megnézi jók-e az adatok
   $vanelekerdezes = mysql_num_rows($lekerdezes);
   if ($vanelekerdezes>0)  //Ha van ilyen felhasználónév/jelszó páros
   {
      $adatok=mysql_fetch_assoc($lekerdezes); //SESSION-ba rendezi az adatokat
      $_SESSION["id"]=$adatok["id"];
      $_SESSION['bann'] = 0;
      $_SESSION["nickname"]=$adatok["nickname"];
      $_SESSION["rank"]=$adatok["rank"]; 
	  header('location: index.php');
	  
  }
   else
  {
   print 'Hibás felhasználónév vagy jelszó!'; //Ha nem jók a beírt adatok hiba
   print mysql_error(); //ha esetleg adatbázis hiba van akkor kiírja
  }
  

  
   } else if(isset($_SESSION["nickname"])){ //Ha sikerűlt belépni a belső tartalom 
   header('location: index.php');
   }

     
      
?>