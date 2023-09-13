<?php
/*Write a PHP script to generate unique random numbers within a range.
Sample Range : (11, 20)
Sample Output : 17 16 13 20 14 19 18 15 11 12 */
$n=range(11,20);
shuffle($n);
for($i=0;$i<10;$i++){
    echo $n[$i].',';
}
?>