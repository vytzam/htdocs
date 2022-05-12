<?php

class Kibiras2{
   
    protected $akmenu_kiekis=0;
    // static private $visoakmenu = "ddd";

    public function pridet1akmeni(){
        $this->akmenu_kiekis=$this-> akmenu_kiekis+1;
        return $this;
    }
    public function pridetdaugakmenu($kiekis){
        $this->akmenu_kiekis=$this-> akmenu_kiekis+$kiekis;
        self::viso();
        return $this->akmenu_kiekis;
    }
   
    public function get(){
    self::viso();}
  

}

$kibiras1= new Kibiras2;
$kibiras2= new Kibiras2;
$kibiras3= new Kibiras2;

 $kibiras1->pridet1akmeni()->pridetdaugakmenu(30);
 $kibiras2->pridet1akmeni()->pridetdaugakmenu(10);
 $kibiras3->pridet1akmeni()->pridetdaugakmenu(5);
 echo $kibiras1->viso()+$kibiras2->viso()+$kibiras3->viso();
?>