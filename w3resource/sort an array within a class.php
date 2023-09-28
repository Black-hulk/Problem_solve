<?php
  class arraySort{
    public $a;
    public function aSort(array $ar){
      $sorted=$this->a=$ar;
      sort($sorted);
      return $sorted;
    }
  }
  $s=new arraySort();
  print_r($s->aSort([5,8,1,9]));
?>