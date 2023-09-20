<?php
class bankAccount{
    private $balance;
    public function __construct($balance){
        $this->balance=$balance;
    }
    public function getBalance(){
       return $this->balance;
    }
    public function deposit($amount){
        if($amount>0){
            $this-> balance+=$amount;
        }
        return $this->balance;
    }
    
}

class SavingAccount extends bankAccount{
    private $interestRate;
    public function __construct($balance,$interestRate){
        Parent::__construct($balance);
        $this-> interestRate=$interestRate;
    }
    public function addInterest(){
        //calculate interest rate
        $interest=$this->interestRate*$this->getBalance();
        // add interest in doposit
        $this->deposit($interest);
        return $interest;
    }
}
$b=new SavingAccount(500,0.05);
$b->addInterest();
echo $b->getBalance();
?>