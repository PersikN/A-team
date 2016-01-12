<head>
        <meta charset="UTF-8">
</head>
<?php
    include_once './protected/mydbms.php';
     if(array_key_exists('ujFelhasznalo', $_POST)){
        $parameterek = [
            'felhasznalo'   =>  $_POST['felhasznalo'],
            'jelszo'   => md5($_POST['jelszo']),
            'nev'       => $_POST['nev'],
            'cim'  => $_POST['cim'],
            'email'   => $_POST['email'],
            'telefon'   => $_POST['telefon'] ,
            'jogosultsag' =>"3";
        ];
        
        if(felhasznaloRogzit($parameterek)){
            echo "Sikeres regisztráció!";
        }
        else{
            echo "Sikertelen regisztráció!";
        }
    }   
?>
<form action="" method="POST" ><table border=0>
    <tr><td><label for="felhasznalo">Felhasználó név:</label></td>
    <td><input type="text" name="felhasznalo" value=""/></td></tr>
    
    <tr><td><label for="jelszo">Jelszó</label></td>
    <td><input type="password" name="jelszo" value=""/></td></tr>
	<tr><td><label for="jelszo">Jelszó újra</label></td>
    <td><input type="password" name="jelszo2" value=""/></td></tr>
    
    <tr><td><label for="nev">Név:</label></td>
    <td><input type="text" name="nev" value=""/></td></tr>
    
    <tr><td><label for="cim">Cím:</label></td>
    <td><input type="text" name="cim" value=""/></td></tr>
    
    <tr><td><label for="email">E-mail cím:</label></td>
    <td><input type="text" name="email" value=""/></td></tr>
    
    <tr><td><label for="telefon">Telefon szám:</label></td>
    <td><input type="text" name="telefon" value=""/></td></tr>
    
    <tr><td></td><td><button type="submit" name="ujFelhasznalo" value="" onsubmit="return ell()">Regisztrálok!</button></td></tr>
<script>
function ell()
{
	var felhasznalo=document.getElementByName("felhasznalo").value;
	var jelszo=document.getElementByName("jelszo").value;
	var jelszo2=document.getElementByName("jelszo2").value;
	var nev=document.getElementById("nev").value;
	var telefon=document.getElementById("telefon").value;
	var email=document.getElementById("email").value;
	var cim=document.getElementById("cim").value;
	//var vanilyen=$vanilyen.value;
	
	if(felhasznalo.length==0 ||
		jelszo.length==0 || 
		jelszo2.length==0 || 
		nev.length==0 || 
		telefon.length==0 || 
		email.length==0 || 
		cim.length==0)
	{
		alert("Üres mező!");
		return false;
	}
	if(jelszo!=jelszo2)
	{
		alert("A jelszó mezők nem egyeznek!");
		return false;
	}
	/*if(vanilyen)
	{
		alert("Már regisztráltak ezzel a felhasználó névvel!");
		return false;
	}*/

	return true;
}
</script>
</form>


