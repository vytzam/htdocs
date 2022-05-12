<?php

//Reikia suprogramuoti klase produktams. Produktai turi pavadinima, aprasyma ir kaina. kaina galima nustatyti tik metodu.Produktas turi galimybe tureti sumazinta kaina 30 procentu, tai yra nuolaida. Ja galima pritaikyti. Produkto kana keiciasi, pardavimo metu, jei pirkejas yra privatus asmuo arba imone (naudokite "P" privaciam, "I" imonei. Jei perka privatus, kaina padideja 21 procentu.

class products{
    public $name;
    public $description;
    private $price;
    public function setPrice($price){
        $this->price=$price;
        return $this;
    }
  public function getPrice(){
      return $this->price;
  }
  public function discount(){
      $this->price= $this->price*0.7;
      return $this;
  }
  public function sellPrice($customer){
      if ($customer=="P"){
          return $this->price*1.21;
  }else {return $this->price;}

  }
}
$phone=new products;
$phone->name="Iphone12";
$phone->description-"mobile phone";
$phone->setPrice(150);
echo $phone->discount()->sellPrice("P");
?>