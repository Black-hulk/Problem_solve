<?php
class DisplayString{
    private $string1;
    public function getString($str1){
        return $this->string1=$str1;
    }
}
$s=new DisplayString();
echo $s->getString('MyClass class has initialized !');
?>