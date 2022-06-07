<?php
require_once __DIR__.'/User.php';
class PremiumUser extends User{
    protected $sale = 20;
    
    public function getSale(){
        return $this->sale;
    }
    public function setTotal($_price){
        $this->totale = $_price - $_price * $this->sale / 100;
    }
    public function getTotal(){
        return $this->totale;
    }
} 
?>