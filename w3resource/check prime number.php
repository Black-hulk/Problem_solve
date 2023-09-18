<?php
    function CheckPrimeNumber($number){
        for($i=2;$i<$number;$i++){
            if($number%$i==0){
                return 0;
            }
        }
        return 1;
    }
   $n=CheckPrimeNumber(9);
   if($n==0){
    echo "This number is not Prime Number!";
   }
   else{
    echo "This number is a Prime Number.";
   }
?>