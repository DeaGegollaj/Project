<?php

class user{
    
    private $name;
    private $lastname;
    private $Email;
    private $password;
    private $confirmPassword;
    

    public function __construct($n, $l, $em, $p, $cp){
        $this->name=$n;
        $this->lasname=$l;
        $this->Email=$em;
        $this->password=$p;
        $this->confirmPassword=$cp;
        
    }
    
    public function getName($n){
        return $this->$name;
    }
    public function setName($n){
        $this->Name = $n;
    }

    public function getLastname($l){
        return $this->$lastname;
    }
    public function setLastname($l){
        $this->Lastname = $l;
    }

    public function getEmail($em){
        return $this->Email;
    }
    public function setEmail($em){
        $this->Email = $em;
    }

    public function getPassword($p){
        return $this->password;
    }
    public function setPassword($p){
        $this->Password = $p;
    }

    public function getConfrimPassword($cp){
        return $this->Confrimpassword;
    }
    public function setConfirmPassword($cp){
        $this->Confrimpassword = $cp;
    }

    public function __toString(){
        return "Emri: ".$this->Name." dhe mbiemri ".$this->Lastname;
    }
}
?>