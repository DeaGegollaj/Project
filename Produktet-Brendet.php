<?php
class ProduktetBrendet{
    
    private $produktet; 
    private $cmimi;
    private $brendet;
    private $image;
    private $kategoris;

    public function __construct($p,$c,$b,$i,$k){
        $this->produktet=$p;
        $this->cmimi=$c;
        $this->brendet=$b;
        $this->image=$i;
        $this->kategoria=$k;
    }
    
    public function getProduktet(){
        return $this->produktet;
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
        return $this->brendet;
    }
    public function setBrendet($b){
        $this->brendet = $b;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($i){
        $this->image = $i;
    }

    public function getKategoria(){
        return $this->kategoris;
    }
    public function setKategoria($k){
        $this->kategoria = $k;
    }

    public function __toString(){
        return "Libri: ".$this->libri.", cmimi ".$this->cmimi.", autori ".$this->autori;
    }
}
?>