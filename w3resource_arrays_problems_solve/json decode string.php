<?php
/*6. Write a PHP script which decodes the following JSON string.
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown */
function code_function($value, $key){
 echo "$key : $value".'<br>';
}
$json_code='{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }}';
$j=json_decode($json_code,true);
array_walk_recursive($j, 'code_function')
?>