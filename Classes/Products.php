<?php
class Products{
    protected $name;
    protected $type;
    protected $price;
    protected $species;
    function __construct($_name, $_type, $_price, $_species)
    {
        $this->name=$_name;
        $this->type=$_type;
        $this->price=$_price;
        $this->species=$_species;
    }
    public function setName($_name){
        $this->name=$_name;
    }
    public function getName(){
        return $this->name;
    }
    public function setType($_type){
        $this->type=$_type;
    }
    public function getType(){
        return $this->type;
    }
    public function setPrice($_price){
        $this->price=$_price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setSpecies($_species){
        $this->species=$_species;
    }
    public function getSpecies(){
        return $this->species;
    }



} 
?>