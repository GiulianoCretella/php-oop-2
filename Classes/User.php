<?php 
class User{
    protected $nome;
    protected $surName;
    protected $creditCard;
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
     
    
}

?>