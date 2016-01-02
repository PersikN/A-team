<form action="b.php" method="post" onsubmit="return ell()">
<table border="0">
<tr><td>Felhasználó név:</td><td align="left"> <input type="text" id="felhasznalo" name="felhasznalo" size="20"></td></tr>
<tr><td></td><td><input type="submit" name="belepes" value="Belépés"><br>
<a href="regisztracio.php">Regisztrálni szeretnék</a></td></tr>
</table>


<script>
function ell()
{
	var felhasznalo=document.getElementById("felhasznalo").value;

	if(felhasznalo.length==0 )
	{
		alert("Üres mezõ!");
		return false;
	}
	return true;
}
</script>
</form>
</body>
</html>