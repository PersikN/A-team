<?php
require_once "mydbms.php";
$dbname="rft";
$con=connect("root","");
mysqli_select_db($con,"$dbname");
$query="select fajl from fajlok where id=".$_POST['id'];
$result=mysqli_query($con, $query) or die ("Unsuccesful ".$query);
//echo mysqli_fetch_array($result)[0];
$file = mysqli_fetch_array($result)[0];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>