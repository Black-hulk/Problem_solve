<?php
/*8. Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key */

    $value_of_sort=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    echo '<h3>Ascending order sort by value </h3>';
    asort($value_of_sort, SORT_REGULAR); //ascending order sort by value
    foreach($value_of_sort as $k=>$v){
        echo " Age of $k is $v"."<br>";
    }

    echo '<h3>Ascending order sort by key </h3>';
    ksort($value_of_sort, SORT_STRING); //ascending order sort by key
    foreach($value_of_sort as $k=>$v){
        echo " Age of $k is $v"."<br>";
    }

    echo '<h3>Descending order sort by value </h3>';
    arsort($value_of_sort, SORT_REGULAR); //descending order sort by value
    foreach($value_of_sort as $k=>$v){
        echo " Age of $k is $v"."<br>";
    }

    echo '<h3>Dscending order sort by value</h3>';
    krsort($value_of_sort, SORT_STRING); //descending order sort by key
    foreach($value_of_sort as $k=>$v){
        echo " Age of $k is $v"."<br>";
    }
?>