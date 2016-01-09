<form action="./protected/action/b.php" method="post" onsubmit="return ell()">
</table><table border="0">
<tr><td>Felhasználó név:</td><td align="left"> <input type="text" id="felhasznalo" name="felhasznalo" size="20"></td></tr>
<tr><td>Jelszó:</td><td align="left"> <input type="password" id="jelszo" name="jelszo" size="20"></td></tr>
<tr><td></td><td><input type="submit" name="belepes" value="Belépés"><br>
<a href="index.php?menu=8" >Regisztrálni szeretnék</a></td></tr>
</table>


<script>
function ell()
{
	var felhasznalo=document.getElementById("felhasznalo").value;
        var jelszo=document.getElementById("jelszo").value;
	if(felhasznalo.length==0 || jelszo.length==0)
	{
		alert("Üres mező!");
		return false;
	}
	return true;
}
</script>
</form>


