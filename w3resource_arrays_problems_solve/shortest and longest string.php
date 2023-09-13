
<?php
/*Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4. */
$array1 =["abcd","abc","de","hjjj","g","wer"];
$array_s_length=null;
$array_l_length=0;
$array1_length=count($array1);
//echo $array1_length;
for($i=0;$i<$array1_length;$i++){
    $length=strlen($array1[$i]);
    if($length>$array_l_length){
        $array_l_length=$length;
        $array_s_length=$array_l_length;
    }
    if($length<$array_s_length){
        $array_s_length=$length;
    }
}
echo "The shortest array length is ".$array_s_length . "</br>";
echo "The longest array length is " . $array_l_length. "</br>";

?>