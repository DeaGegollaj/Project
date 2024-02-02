<?php
class Produktet{
    
    private $produktet; 
    private $cmimi;
    private $brendet;
    private $image;

    public function __construct($p,$c,$b,$i){
        $this->produktet=$p;
        $this->cmimi=$c;
        $this->brendet=$b;
        $this->image=$i;
    }
    
    public function getProduktet(){
        return $this->Produktet;
    }
    public function setProduktet($p){
        $this->produktet = $p;
    }

    public function getCmimi(){
        return $this->cmimi;
    }
    public function setCmimi($c){
        $this->cmimi = $c;
    }

    public function getBrendet(){
        return $this->brendi;
    }
    public function setBrendet($b){
        $this->brender = $b;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($i){
        $this->image = $i;
    }

    public function __toString(){
        return "Produktet: ".$this->produktet.", cmimi ".$this->cmimi.", brendi ".$this->brendet;
    }
}
?>