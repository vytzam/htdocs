<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> Duomenu tipai 
    </h1>
    <ol>
        <li>String <?php $string = "tekstas";?></li>
        <li>Integer <?php $integer = 10; //sveikasis skačius?></li>
        <li>Float <?php $float = 3.141567 // dazniausiai naudojamas skaiciams?></li>
        <li>Booleann <?php $booolean = true;//  arba false tikrinimas labai svarbus,daznai naudojamas?></li>
        <li>NULL <?php $null = NULL; //kinatmasi kuriam dar nepriskirta reiksme.laikina reiksme?></li>
        <li>Masyvas - <?php $array?> </li>
        <li>Objektas- pasimokysime veliau  </li>
    </ol>

    <?php
    //string funkcijos

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed perspiciatis possimus voluptatem, id exercitationem totam repellat nihil dolorum numquam, asperiores aliquam magnam reiciendis excepturi, error omnis fugit quisquam! Incidunt, eveniet. ";
    //string length
    echo "sakinio ilgis yra ".strlen($text);

    //suksiaciuoti kiek ten zodziu
    echo " žodžių yra ".str_word_count($text);

    //reverse string
    echo strrev($text)." ";
    
    //surasti pozicija zodzio stringe  -word search
    echo strpos($text,"magnam");// nurodo zodzio magnam pozicija ( pirmos raides)
    var_dump(strpos($text,"langas"));//kai narando to zodzio "langas", tai meta-  bool false.
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Replacing word
    echo str_replace("Lorem", "Labas", $text)."<br>";//pakeitem zodu lorem i labas. veliau stringas lieka senas. nepasikeicia i nauja 
    echo $text;
    //string to integer,float to Integer
    $price =1.99;
    $priceInt = (int)$price;
    echo $priceint;// paima tiesiog integer -1
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $height = "178.23";
    $heightint = (int)$height;
    echo $heightint;// is ineger padaro skaiciu

    //Matematika////
    echo "<br>";
    echo "<br>";
    echo pi();//grazina pi reiksme
    echo "<br>";
    echo "<br>";
    echo "maziausias skaicius yra ".min(12,89,45,67,34,8);
    echo "maziausias skaicius yra ".min(12,89,45,67,34,8);
    echo " didziausias skaicius yra ".max(12,89,45,67,34,8);
    echo "<br>";
    echo "<br>";
    echo sqrt($price); //kvadratine saknis 
    echo "<br>";
    echo "<br>";
    echo abs(-99);// parodo skaicius be minuso
    echo "<br>";
    echo "<br>";
    echo(round($price));//suapvalina matematiskai
    echo "<br>";
    echo "<br>";
    echo rand(0,10) ;//generuoja atsitiktini skaiciu nuo 0 iki 10

    //constantos yra kintamieji kuriu reiksmes nepakeisi. kelio dalis
    // define("ROOT_FOLDER" , "/scripts");
    // $path - ROOT_FOLDER."/create";
    //Operators
    //Aritmetiniai operatoriai
    //+ sudetis/ Additions
    //-atimtis / substraction
    //* daugyba /Multiplication
    // / dalyba / division
    // % liekana / Modulus
    // ** kelimas laipsniu/Exponentation 3**2 ( 3 pakelta antruoju)

    //Priskyrimo operatoriai
    // = priskiriame reikšme
    // += Prisiiriame reiskme su sudetimi a+=b ty a=a+b
    //-= a-=b ty a=a-b
    //*= a*=b ty  a=a*b
    // /= / a/=b ty a =a/b
    //%= / a%=b ty a =a%B

    //Palyginimo operatoriai
    //==lygus(equal)
    //===identiški (idetical) atitinka ir reiksme ir tipas
    //!=nelygu
    //<> nelygu
    //!== nera identiski
    //> daugiau
    //< maziau
    //>= daugiau arba lygu. ne tas pats kaip =>(tai rodykle)
    //<=maziau arba lygu
    //<=> Spaceship
    $a=5;
    $b=65;
    echo($a<=>$b); //grazins -1
    $c=15;
    $d=15;
    echo($c<=>$d);//grazins 0
    $e=3;
    $f=1;
    echo ($e <=> $f); //grazins 1

    //padidinimo - sumazinimo operatoriai
    echo "<br>";
    echo "<br>";
    echo$a++;// post increment paimam kintamaji atspausdina ir padidiname vienetu
    echo "<br>";
    echo "<br>";
    echo ++$a;// pre increment dar padidino vienetu ir tada ispausdino

    //Loginiai operatoriai
    // and - && abu tie patys kintamieji. abu true
    // or arba || viena is salygu yra true
    // xor - ar viena is salygu yra true, bet ne abi
    //! - not(nera)duoda priesinga reiksme !true==false

    //  String operatoriai
    // . sudeda du stringus
    // .=sujungia
    //pvz $tekstas1.=$tekstas2; sujungia ir tampa vienas ilgas tekstas1

    ?>
    <h3><a href="conditionalStatment.php">Salygos</a></h3>
    
</body>
</html>