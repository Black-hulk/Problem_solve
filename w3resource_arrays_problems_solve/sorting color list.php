<?php
/*2. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red, */
$color = array('white', 'green', 'red');
foreach($color as $c)
{
    echo "$c, ";
}
sort($color);
foreach($color as $c){
    echo '<ul>';
    echo '<li>';
    echo $c;
    echo '</li>';
    echo'</ul>';
}
?>