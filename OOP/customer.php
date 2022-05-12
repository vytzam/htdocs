<?php
// Public yra prieinamas visur
// Private prieinamas tik toje klaseje
// protected - tarpinis tarp private ir public . galime pasiekti klaseje ir jos praplestose klasese. naudojame kada reikia extenditi klase.
require ("trait.php");


class Customer
{
    protected $name;
    use Logger;

    public function __construct($name)
    {
        
        $this->name=$name;
        $this->log("new record");
    }
    protected function format()
    {
        return ucwords($this->name);
    }
    public function getname()
    {
        return $this->format();
    }
}
$customer = new Customer("maxima");

class VIP extends Customer
{
    public function getFormatedName(){
        return ucwords($this->name);// funkcija perdaro pirma raide didziaja.
    }
}
$vipcustomer = new VIP("rimi");
?>