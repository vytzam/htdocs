<?php
//.2.Sukurti klasęPiniginė. Sukurti dviprivačiassavybespopieriniaiPinigaiirmetaliniaiPinigai. Parašyti metodąideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda priemetaliniaiPinigai, jeigu kitaip-priepopieriniaiPinigai. Parašykite metodąskaiciuoti(), kuris suskaičiuotų ir atspausdintųpopieriniaiPinigaiirmetaliniaiPinigaisumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

class Pinigine{
    public $total;
    private $coins=0;
    private $bancnots=0;

    public function deposit($amount){
        if($amount<=2){
            $this->coins+=$amount;
        }else { $this->bancnots+=$amount;}
        return $this;}
    public function total(){
        echo"Viso banknotu ".$this->bancnots;echo " Viso monetu ".$this->coins;
    }
}


$wallet= new Pinigine;
$wallet->deposit(4)->deposit(1)->deposit(1);
echo $wallet->total();
?>