<?php
//1.Sukurti klasęKibiras1. SukurtiprotectedsavybęakmenuKiekis. Parašyti šiai savybei metodusprideti1Akmeni()pridetiDaugAkmenu($kiekis)ir metodąkiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą
class Kibiras1{
   
    private $akmenu_kiekis=0;

    public function pridet1akmeni(){
        $this->akmenu_kiekis=$this-> akmenu_kiekis+1;
        return $this;
    }
    public function pridetdaugakmenu($kiekis){
        $this->akmenu_kiekis=$this-> akmenu_kiekis+$kiekis;
        return $this->akmenu_kiekis;
    }
    public function viso(){
        return $this->akmenu_kiekis;
    }
}
$kibiras= new Kibiras1;

 $kibiras->pridet1akmeni()->pridetdaugakmenu(30);
 echo $kibiras->viso();
?>