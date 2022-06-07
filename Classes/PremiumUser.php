<?php
require_once __DIR__.'/User.php';
class PremiumUser extends User{
    protected $sale;
    public $totale;


    public function setSale($_sale){
        $this->sale = $_sale;
    }
    public function getSale(){
        return $this->sale;
    }
    public function setTotal($_price){
        if($this->sale){
           $this->totale =$_price - $_price * $this->sale / 100;
        }
        $_price;
    }
    public function getTotal(){
        return $this->total;
    }
} 
?>