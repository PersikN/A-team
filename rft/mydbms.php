<?php
function connect($username,$passwd)
{  
   $con=mysqli_connect('localhost',$username,$passwd);
   if(!isset($con))  
	{ 
        echo "Error".mysql_error();  
}  
return $con;
}
?>
