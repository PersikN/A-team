<form action="b.php" method="post" onsubmit="return ell()">
<table border="0">
<tr><td>Felhaszn�l� n�v:</td><td align="left"> <input type="text" id="felhasznalo" name="felhasznalo" size="20"></td></tr>
<tr><td></td><td><input type="submit" name="belepes" value="Bel�p�s"><br>
<a href="regisztracio.php">Regisztr�lni szeretn�k</a></td></tr>
</table>


<script>
function ell()
{
	var felhasznalo=document.getElementById("felhasznalo").value;

	if(felhasznalo.length==0 )
	{
		alert("�res mez�!");
		return false;
	}
	return true;
}
</script>
</form>
</body>
</html>