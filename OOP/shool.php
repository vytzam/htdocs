<?php
//Sukurti klase moksleiviu duomenims, kurie yra vardas, ugis ir svoris. Naudoti construct, typed properti
class Student
{  private $name;
   private int $height;
   private  int $weight;

    
    public function __construct($vardas, $ugis, $svoris)
    {
        $this->name=$vardas;
        $this->height = $ugis;
        $this->wight=$svoris;
    }
    public function getName(){
        return $this->name;
    }
    public function getheight(){
        return $this->ugis;}
    public function getweight(){
            return $this->svoris;}
}
$firstStudent = new Student("Jonas",188,86);

echo var_dump ($firstStudent);
?>
