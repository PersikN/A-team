<?php
  session_start();
  //Has this form sent?
       if (isset($_POST["send"])){
           if (strtolower($_POST["captcha_code"]) !== $_SESSION["captcha"]){
                 echo "Invalid  code";
            }else
           {
                echo "Correct we can move on";
            }
           echo "<br><a href=\"form.php\">Back to the form</a>";
         exit;
      }
?>
