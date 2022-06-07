<?php
require_once __DIR__.'/User.php';
class PremiumUser extends User{
    protected $sale;

    public function setSale($_sale){
        $this->sale = $_sale;
    }
    public function getSale(){
        return $this->sale;
    }
} 
?>