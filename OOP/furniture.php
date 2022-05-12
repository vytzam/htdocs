<?php

//Marius Šimkūnas
//Sukurti klase baldams, kuri turi tureti pavadinima ir kaina. Savybes neturi buti pasiekiamos uz klases ribu, bet si klase tures susijusia klase ofiso baldai, kur bus papildoma savybe spalva, ir metodas, kuris suveikia, kai sukuriamas naujas ofiso baldo objektas.

//turi buti statinis metodas
class Furniture 
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price = $price;
    }

    }
$furniture= new Furniture("sofa",500);

class OficeFurniture extends Furniture
{ 
    protected  $color;
    public function __construct ($name,$price,$color){
   
        parent::__construct($name,$price);
        $this->color=$color;
        self::log();

    }
     protected static function log(){
         echo "sukurtas naujas baldas ofisui";
     }

    
}
$office=  new OficeFurniture("kede",200,"raudona");

?>