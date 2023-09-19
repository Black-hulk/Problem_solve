<?php
function isLowercase($str1){
    for($i=0;$i<strlen($str1);$i++){
        if(ord($str1[$i])>=ord('A') && ord($str1[$i])<=ord('Z')){
            return false;
        }
    }
    return true;
}
var_dump(isLowercase('Nothing'));
var_dump(isLowercase('i am hero'));
var_dump(isLowercase('jony Jony yes PAPA'));
?>