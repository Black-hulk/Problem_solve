<?php
function reverse_string($string1){
    $n=strlen($string1);
    if($n==1){
        return $string1;
    }
    else{
        for($i=$n;$i>=1;$i--){
            $n--;
            echo $string1[$n];
        }
    }
}
echo reverse_string("susmita");
?>