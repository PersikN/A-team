function code($chars) 
 {   $chars0="0123456789abcdefghijklmnopqrttwxy";   
    $result='';   
   for($i=0;$i<$chars;$i++)   {     
       $result.=substr($chars0,mt_rand(0,strlen($chars0)-1),1);      
   }   
return $result; 
}  //it returns a capcha

