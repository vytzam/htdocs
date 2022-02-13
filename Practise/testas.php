<!-- 1. Palyginti du skaičius a ir b. Išvesti į konsolę, kuris didesnis arba jie lygūs.
2. Naudojant ciklą, išvesti į konsolę skaičius nuo 1 iki 10.
3. Naudojant ciklą, išvesti į konsolę skaičius nuo 0, 2, 4, 6, 8, 10.
4. Naudojant ciklą, sugeneruoti penkis atsitiktinius skaičius nuo 1 iki 10. Išvesti juos konsolėje.
5. Naudojant ciklą, spausdinti atsitiktinius skaičius nuo 1 iki 10. Paskutinis atspausdintas skaičius turi būti 5.
6. Sukurti masyvą, kurio ilgis 30, o reikšmės nuo atsitiktiniai skaičiai 5 iki 25.
7. Sukurti masyvą, kurio ilgis būtų atsitiktinis nuo 20 iki 30, o reikšmės būtų skaičiai nuo 10 iki 30. Surasti didžiausią masyvo reikšmę, nenaudojant sort funkcijos.
8. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 20. Suskaičiuokite kiek yra kiekvienos raidės.
9. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminis
skaičius yra tas, kuris dalinasi tik iš savęs ir tik iš vieneto be liekanos.)
10. Padaryti GET formą su vienu įvedimo laukeliu ir puslapio kvietimu į save. Įvedimas turi būti šešiaženklis skaičius. Gavę kintamąjį pakeiskite puslapio fono spalvą į kintamojo reikšmę.
11. Padaryti POST formą su vienu įvedimo laukeliu. Puslapis kreipiasi pats į save. Kintamieji turi patikrinti ar gauta reiškmė lygi 1 ir nukreipti į index1.php, jei lygi 2 nukreipti į index2.php, jei kitokia - grąžinti atgal ir išvesti, kad įvestas skaičius nėra nei vienetas, nei dvejetas.
12. Padaryti POST formą su vienu įvedimo laukeliu ir kreipumusi į puslapį slaptas.php. Slaptas.php turi patikrinti ar įvestas reikiamas slaptas žodis ir ar kreipimosi metodas yra POST. Jei taip, leidžia peržiūrėti slaptas.php turinį. Jei ne, gražina atgal į pradinį puslapį. -->


<?php

//<!-- 1. Palyginti du skaičius a ir b. Išvesti į konsolę, kuris didesnis arba jie lygūs.
$a=2;
$b=5;
if ($a>$b){
    echo ("$a skaičius yra didesnis už $b");
}elseif($a<$b){
    echo("$a skaičius yra mažesnis už $b");
}else{ echo("Abu skaičiai lygus ");}


?>

<?php

// 2. Naudojant ciklą, išvesti į konsolę skaičius nuo 1 iki 10.
for ($i = 1; $i<=10; $i++) {
    echo "$i<br>";}
   
?>
<?php
// 3. Naudojant ciklą, išvesti į konsolę skaičius nuo 0, 2, 4, 6, 8, 10.
for ($i = 0; $i <= 10; $i=$i+2) {
    echo "$i<br>";}


?>
<!-- 4. Naudojant ciklą, sugeneruoti penkis atsitiktinius skaičius nuo 1 iki 10. Išvesti juos konsolėje. -->
<?php
for ($i = 1; $i<=5; $i++) {
    
    echo rand(1,10);
    echo "<br>";}
?>
<!-- 5. Naudojant ciklą, spausdinti atsitiktinius skaičius nuo 1 iki 10. Paskutinis atspausdintas skaičius turi būti 5 -->
<?php
// $random=rand(1,10);
// for ($i = 1; $i<=100; $i++) {
//     $random=rand(1,10);
//     echo $random;
//     if ( $random==5){
//         exit();}
//     }
   
?>
<!-- 6. Sukurti masyvą, kurio ilgis 30, o reikšmės nuo atsitiktiniai skaičiai 5 iki 25. -->
<?php
$data=[];
for ($i = 1; $i<=30; $i++){
    array_push($data,rand(5,25));
    
} 
?>
<!-- 7. Sukurti masyvą, kurio ilgis būtų atsitiktinis nuo 20 iki 30, o reikšmės būtų skaičiai nuo 10 iki 30. Surasti didžiausią masyvo reikšmę, nenaudojant sort funkcijos. -->
<?php
$myarray=[];
$arrayLength=rand(20,30);
$myarray = ($arrayLength);
for($i=10;$i<=30; $i++){
$myarray = array_fill(0, $arrayLength, $i);}

?>
<!-- 8. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 20. Suskaičiuokite kiek yra kiekvienos raidės. -->
<?php
// $myarray=[];
// $letter=["A","B","C","D"];
// for($i=1;$i<=20; $i++){
// array_push($myarray, $letter[rand(0,3)]);}
// $a=$b=$c=$d='';
// for ($i=0;$i<count($myarray);$i++){
//     if ($myarray[$i]=="A"){
//         $a=$a+1;
//     }elseif($myarray[$i]=="B"){
//         $b=$b+1;
//     }elseif($myarray[$i]=="C"){
//         $c=$c+1;
//     }elseif($myarray[$i]=="B"){
//         $d=$d+1;}
    
// }echo ("$a,$b,$c,$d");

//9 uzduotis
?>
<?php
$number = 13;  
$count=0;  
for ( $i=1; $i<=$number; $i++)  
{  
if (($number%$i)==0)  
{  
$count++;  
}  
}  
if ($count<3)  
{  
echo "$number yra pirminis";  
}
else
{
echo "$number yra ne pirminis"; 
}
?>
<!-- 10 uzduotis -->
<?php
if($_GET){
    if(is_numeric($_GET['name'])&& strlen($_GET ['names'])==6){
        $color="#".$_GET['names'];

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $color ?>;">
    <form action=""method= "GET">
        <input type="text"name="name" placeholder="000000">
        <input type="submit" name="submit">
    </form>
  
</body>
</html>
