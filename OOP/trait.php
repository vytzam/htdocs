<?php
trait Logger 
{
    public function log($msg){
        echo "<pre>";
        echo date('y-m-d h:i?:s'). ":"."(".__CLASS__ .")".$msg;
        echo "</pre";
    }


}
trait Edit 
{
    public function log(){
        echo "delete";

    }
}
trait Destroy
{
    public function log(){
        echo "delete";

    }
}
?>
<?php
class Book 
{
    use Logger, Edit, Destroy{// naudojam trait  loger, kad paimtu funkcija is trait failo
        Logger::log insteadOf Destroy;}
    private $name;
    private $price;

    // nuo php 8.0 - costructor promotion


    public function __construct($knygosPavadinimas, $knygosKaina)
    {
        $this->name=$knygosPavadinimas;
        $this->price = $knygosKaina;
        $this->log("New book was created");
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function __destruct(){
        // galima nieko nerasyti.laikiniems objektasm susinaikina kai kodais baigiasi.
    }
}
$firstBook = new Book("Harry Potter",24);


class Book3 
{
    public $name;
    public float $price;//  int float pasiekiamas data kai nurodyta reiksme arba priskiariame =0
    public function __construct($name,$price){
        $this->price=$price;
        $this->name=$name;
    }
}
$thirdBook = new Book3(444, 333);
$thirdBook->price= 8.99;



///INHERITANCE/////
class ChildrensBook extends Book// extendina Book klase , visi metodai persikelia i childclase
{
    private $recomendage;
public function __construct ($name,$price,$age){
    parent::__construct($name,$price);
    $this->recomendage=$age;
}
}
$childrensBook= new ChildrensBook("pepe ilgakojine", 23.69,8);
$childrensBook->getName();
?>