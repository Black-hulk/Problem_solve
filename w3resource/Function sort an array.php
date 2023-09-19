<?php
function sortArray($a){
    for($i=0;$i<count($a);++$i){
        $min=$i;
        for($j=$i+1;$j<count($a);++$j){
            if($a[$min]>$a[$j]){
                $temp=$a[$min];
                $a[$min]=$a[$j];
                $a[$j]=$temp;
            }
        }
    }
    return $a;
}
$a=[9,45,8,2,5,'hj'];
print_r(sortArray($a));
?>