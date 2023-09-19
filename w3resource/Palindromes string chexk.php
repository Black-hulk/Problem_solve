<?php
function isPalindromes($str1)
{
   /* if($str1==strrev($str1))
   {
        return true;
   } 
   else {
    return false;
   } */
   $result=($str1==strrev($str1)) ?  true : false ;
   return $result;
}
var_dump(isPalindromes('madam'));
?>