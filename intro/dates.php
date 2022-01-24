<?php
echo date("Y-m-d");// turim nustatyti formata ir kokia data norime gauti.
echo "<br>";
echo date("1");//savaites numeris
echo "<br>";
echo date ("Y");//metai
echo "<br>";
echo date ("m");//menuo
echo "<br>";
echo date ("d");//diena
echo "<br>";


echo date("H:i:s");//H nusako laika nuo 0-24h.mazoji h nuo 0 -12.i-minutes.s-sekundes. jei naudojame h mazaja , tai reikia prideti a(am)
echo "<br>";
echo date("h:i:sa");

//String to time
echo "<br>";
$birthday="1999/01/01";
$birthdayDate= strtotime($birthday);// jei yra stringe ir nori pervesti i integer
echo "<br>";
// var_dump ($birthdayDate);
echo date("Y-m-d",$birthdayDate);// gauname data reikiamu formatu
echo "<br>";
$tomorrow = strtotime("tomorrow");//kodas supranta is parasymo "tomorrow" kad rytoj. galima daug ka rasyti
echo date("Y-m-d",$tomorrow);
echo "<br>";
$today=date("Y-m-d");
$christmass = strtotime("2022-12-25");
$dateFormat="Y-m-d";
echo date($christmass-strtotime($today))/(60*60*24);//gauname sekundes iki kaledu ir atliekame matematika kad gautume dienas. 
echo "<br>";
echo getdate();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- //dinaminis puslapio copyright -->
    <p>&copy;2021 -<?php echo date("Y")?></p>
</body>
</html>