<?php
	class factorial{
	  public $num;
	  public function getFactorial($num1){
	    $this->num=$num1;
	    if($this->num==0){
	      return 1;
	    }
	    else{
	      return $this->num*$this->getFactorial($num1-1);
	    }
	  }
	}	  
	$f=new factorial;
	echo $f->getFactorial(6);
?>
