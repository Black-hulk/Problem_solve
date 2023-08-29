<?php
/*7. Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5 */
$a=[1,2,3,4,5];

echo 'Original Array: <br>';
foreach($a as $v){
    echo $v;
    
};

array_splice($a,3,0,'$');

echo " <br> After inserting '$' the array is : <br>";
foreach($a as $v){
    echo $v;
};
?>