<?php
    class CreditCard{
        protected $number;
        protected $expiration;
        protected $cvv;

        function __construct($_number,$_expiration,$_cvv)
        {
            $this->number=$_number;
            $this->expiration=$_expiration;
            $this->cvv=$_cvv;
        }
        public function setNumber($_number){
            $this->number=$_number;
        }
        public function getNumber(){
            return $this->number;
        }
        public function setExpiration($_expiration){
            $this->expiration=$_expiration;
        }
        public function getExpiration(){
            return $this->expiration;
        }
        public function setCvv($_cvv){
            $this->cvv=$_cvv;
        }
        public function getCvv(){
            return $this->cvv;
        }
    } 
    
?>