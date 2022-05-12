<?php
// static methods and properties- kai galie pasiekti be objekto
//Instance methods and properties- kai pasiekiame is objekto

class Fruit
{
    public static function definition()
    {
        echo "Fruits are great";
    }
    //self::definition();kai rasome klase viduje
}
echo Fruit::definition();// kreipiames i klase ir paiimam funkcija


class HttpRequest 
{
    public static function uri(): string
    {
        return strtolower($_SERVER['REQUEST_URI']);
    }
}
echo HttpRequest::uri()// parodo adreso puslapi.
?>