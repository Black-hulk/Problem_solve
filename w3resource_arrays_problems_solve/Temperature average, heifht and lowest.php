<?php
/*9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85, */
$temperature=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

sort($temperature);
$a=count($temperature);
$u=0;

for($i=0;$i<$a;$i++){
    $u+=$temperature[$i];
}
$avg=$u/$a;
echo 'Average Temperature is : '.$avg.'<br>';
echo 'List of five lowest temperatures : ';
for($i=0;$i<5;$i++){
    echo $temperature[$i].', ';
};
echo '<br> List of five lowest temperatures : ';
$arr=null;
for($i=$a-5;$i<$a;$i++){
    echo $temperature[$i].', ';
};
?>