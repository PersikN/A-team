<form name="feltoltes" action="protected/action/feltoltes.php" method="post" enctype="multipart/form-data">
<table border="0">
<tr><td>Feltöltés neve:</td><td align="left"><input size="20" type="text" name="nev" id="nev"></td></tr>
<tr><td>Feltöltendő fájl:</td><td align="left"><input type="file" name="fajl"></td></tr>
<tr><td></td><td><input type="submit" value="Feltöltés"></td></tr></table>
<tr> <td>Feltöltendő fájl tipusa:</td> <td align="left"> <select name="kategoria">
<option value="1">Szöveg</option> <option value="2">Kép</option> </select> </td> </tr>
</form>
