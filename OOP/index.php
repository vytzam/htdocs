<?php
//Objektai


//Objektas pvz banko saskaita
//Parametrai -Saskaitos nr, saskaitos likutis,valiuta -PARAMETERS
//Veiksmai - ideti pinigus, isimti pinigus - METHODS

//Klase -Class.Object is an instance of a class. klases visada atskirame faile

//klases rasomos is didziosios raides vienaskaita. jei 2 zodziai ,tai antras zodis jungimasis didziosios raides.Kiekviena klase aprasoma atskirame faile

//Access Modifers
//public , private ,(protected)

//public - metodus ir savybes galime pasiekti visur ne tik klases viduje

//private - metodus ir savybes galime pasiekti tik klases viduje

class BankAccount
{
public $accountNumber;
public $balance;
private $user;
public function setUser($user){
    $this->user=$user;
}
public function getUser(){
    return $this->user;
}
public function deposit($amount){
    if($amount>0){
        $this->balance+=$amount;
    }
    return $this;
}
public function withdraw($amount){
    if($amount<=$this->balance){
        $this->balance-=$amount;
        return true;
    }
    return false;
}
}
$myAccount= new BankAccount;

$myAccount->accountNumber=12345;
$myAccount->balance=100;

$myAccount->deposit(50);

$yourAccount=new BankAccount;
$yourAccount->accountNumber=32145;
$yourAccount->balance = 1000;

$yourAccount->deposit(100);//pridejau 100
$yourAccount->deposit(100);//pridejau 100
$yourAccount->deposit(100)->deposit(100)->withdraw(500);// pridejau 2 kartus po 100 ir isemiau 500


//Uzduotis - Aprasyti klase, kurioje butu vardas ir pavarde ir funkcija pasisveikinanti su vardu, pvz "Labas. Jonai"

class VardasPavarde
{
    public $vardas;
    public $pavarde;
    public function getName(){

        return $this->vardas;}
    public function Sveikas(){

     echo "Hello, " .$this->vardas."".$this->pavarde;}
}

$user= new VardasPavarde;
$user->vardas="Jonas";
$user->pavarde="Bandera";
$user->Sveikas();



?>
