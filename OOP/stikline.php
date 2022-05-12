<?php
//3.Sukurti klasęStikline. Sukurtiprivačiąsavybęturisirkiekis. Parašyti metodąipilti($kiekis), kuris keistų savybękiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis-kiekis netelpa ir būna lygus tūriui.
// Parašyti metodąispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

class Stikline{
    public $stiklinesturis;
    private $turis=0;
    private $kiekis=0;
    public function ipilti($kiek){
        if($this->turis<=$kiek){
            $kiek=$kiek-$this->turis+$this->turis;
            $this->kiekis+=$kiek;
        }
        else {$this->kiekis+=$kiek;}
        return $this;
    }
}
$stikline1= new Stikline;
$stikline->turis=200;
// $stikline->ipilti(140);

echo $stikline->ipilti(140);
?>