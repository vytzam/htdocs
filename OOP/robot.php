<?php
class Robot 
{
    public function greet(){// jei prideti final tai negalesi jo pakesiti
        return "Hello";}
    
    }
    class Android extends Robot{
        public function greet(){
            // return "laba diena";// overridinam greet funkcija
            $greeting =parent::greet();//pasiekiame originaluju greet
            return $greeting;
        }

    }
    $android =new Android;
    echo $android->greet();

?>