<?php 
class User{
    protected $nome;
    protected $surName;
    protected $creditCard;
    protected $totale;
    function __construct($_nome,$_surName)
    {
        $this->nome = $_nome;
        $this->surName = $_surName;
    }
    public function setNome($_nome){
        $this->nome = $_nome;
     }
     public function getNome(){
         return $this->nome;
     }
     public function setSurName($_surName){
         $this->surName = $_surName;
     }
     public function getSurName(){
         return $this->surName;
     }
     public function setCreditCard($_creditsCard){
         $this->creditCard = $_creditsCard;
     }
     public function getCreditCard(){
         return $this->creditCard;
     }
     public function setTotal($_price){
        if ((date('m-Y')) > strtotime($this->creditCard->getExpiration())){
            throw new Exception('carta scaduta');
        }
        $this->totale = $_price;
    }
    public function getTotal(){
        return $this->totale;
    }
    
}

?>