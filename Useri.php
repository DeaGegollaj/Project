<?php

class Useri{
    
    private $name;
    private $lastname;
    private $emaili;
    private $password;
    private $roli;
    

    public function __construct($e, $m, $em, $p, $r){
        $this->name=$e;
        $this->lastname=$m;
        $this->emaili=$em;
        $this->paswordi=$p;
        $this->$roli=$r;
    }
    
    public function getEmri(){
        return $this->name;
    }
    public function setEmri($e){
        $this->name = $e;
    }

    public function getMbiemri(){
        return $this->lastname;
    }
    public function setMbiemri($m){
        $this->lastname = $m;
    }

    public function getEmaili(){
        return $this->emaili;
    }
    public function setEmaili($em){
        $this->emaili = $em;
    }

    public function getPaswordi(){
        return $this->paswordi;
    }
    public function setPaswordi($p){
        $this->paswordi = $p;
    }

    public function getRoli(){
        return $this->$roli;
    }
    public function setRoli($r){
        $this->roli = $r;
    }

    public function __toString(){
        return "Emri: ".$this->name.", mbiemri ".$this->lastname.", email ".$this->emaili.", password ".$this->paswordi.", roli ".$this->roli;
    }
}
?>