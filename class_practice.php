<?php
class bankAccount{
    private $balance;

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
    public function setInterestRate($interestRate){
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
$n=new SavingAccount();
echo $n->deposit(200);
echo $n->setInterestRate(0.05). '<br>';
echo $n->addInterest().'<br>';
echo $n->getBalance();
?>