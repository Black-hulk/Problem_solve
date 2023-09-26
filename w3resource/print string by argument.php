<?php
	class string1{
	   public $message="Hello All, I am ";
	   public function printMessage($name){
	     return $this->message.$name;
	     //return $this. $name;
	   }
	}
	$m=new string1;
	echo $m->printMessage("Scott");
?>