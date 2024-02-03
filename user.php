<?php

class user{
    
    private $name;
    private $lastname;
    private $Email;
    private $password;
    private $confirmPassword;
    private $roli;
    

    public function __construct($n, $l, $em, $p, $cp,$r){
        $this->name=$n;
        $this->lasname=$l;
        $this->Email=$em;
        $this->password=$p;
        $this->confirmPassword=$cp;
        $this->$roli=$r;
        
    }
    
    public function getName(){
        return $this->name;
    }
    public function setName($n){
        $this->name = $n;
    }

    public function getLastname(){
        return $this->lastname;
    }
    public function setLastname($l){
        $this->lastname = $l;
    }

    public function getEmail(){
        return $this->Email;
    }
    public function setEmail($em){
        $this->Email = $em;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($p){
        $this->password = $p;
    }

    public function getConfrimPassword(){
        return $this->confirmpassword;
    }
    public function setConfirmPassword($cp){
        $this->confirmpassword = $cp;
    }

    public function getRoli(){
        return $this->$roli;
    }
    public function setRoli($r){
        $this->roli = $r;
    }

    public function __toString(){
        return "Emri: ".$this->Name." dhe mbiemri ".$this->Lastname;
    }
}
?>