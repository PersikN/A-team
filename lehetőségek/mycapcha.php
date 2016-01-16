<?php
  session_start();  //create an image
  header("Content-type: image/jpeg"); //sign that this program returns an image
  $im=imagecreatetruecolor(150,40);  //the size of the image
 $white=imagecolorallocate($im,60,60,60);
 $black=imagecolorallocate($im,0,0,0);
 $grey=imagecolorallocate($im,125,125,125);
 $chars="abcdefhjkmnpqrstuxy345789";
 $str="";
 for ($i=0;$i<6;$i++){
   $rand=rand(0,strlen($chars)-1); //generate letters and digits
     $str.=$chars[$rand];
   }
  $_SESSION["captcha"]=$str; //put this into the Session array
  imagefill($im,0,0,$white);  //fill the image with white color
  imagettftext($im,20,0,12,32,$grey,"arial.ttf",$str);  //write text to the image
  imagettftext($im,20,0,10,30,$black,"arial.ttf",$str); //the same, but shadow….
  imagejpeg($im);  //creates the jpeg and this will be sent to my form
  imagedestroy($im);  //we do not need this anymore
?>
