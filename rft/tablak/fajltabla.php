<?php
  $USERNAME = "root";
  $PASSWD = "";
  $DBNAME = "rft";
  $conID = mysqli_connect('localhost',
                          $USERNAME, $PASSWD);
  if (!isset($conID))
  {
    echo "Error in connection:".mysqli_error();
  }
  mysqli_select_db($conID, $DBNAME);
  $querySTR = "CREATE TABLE fajlok
				(id int primary key auto_increment,
				nev varchar(255),
				fajl varchar(255))
				DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci";
  mysqli_query($conID, $querySTR) or 
                die ("Erron in creating ..<BR>".$querySTR);
  mysqli_close($conID);
  echo "Done....<br>";
  echo $querySTR;
?>