<?php 
class User{
    protected $nome;
    protected $surName;
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
}

?>