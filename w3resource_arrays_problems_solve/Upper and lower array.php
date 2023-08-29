<?php
/*12. Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output :
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED ) */
    $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    $ucase=array();
    foreach ($Color as $key=>$value){
        $v=strtolower($value);
        $ucase[$key]=$v;
        
    };
    echo "Values are in lower case. "."<br>";
    print_r($ucase);
    echo "<br>";

    foreach ($Color as $key=>$value){
        $v=strtoupper($value);
        $ucase[$key]=$v;
        
    };
    echo "Values are in upper case. <br>";
    print_r($ucase);
    
?>  