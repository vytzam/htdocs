<!-- 1. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Atspausdinti juos į ekraną. -->

<?php
for ($i=0;$i<=4;$i++){
    echo "<br>";
    echo(rand(0,100));
    
}
echo "<br>";
echo "<br>";
?>
<!-- 2. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Išvesti juos į ekraną. Visus nelyginius skaičius padidinti dvigubai. Išvesti visus skaičius į ekraną. -->
<?php
$array=[];
for ($i=1;$i<=4;$i++){
    $number=rand(0,100);
    array_push($array,$number);

    }
   var_dump($array);

   for ($i=1;$i<=4;$i++){
   if ($array[$i]%2!=0){
       $number=$array[$i]*2;
       unset($array[$i]);
       array_push($array,$number);
   }
}
   var_dump($array);

    echo "<br>";
    
    

echo "<br>"
?>

<?php
echo '  Sugeneruoti atsitiktinį skaičių nuo 1 iki 7. Atitinkamai pagal skaičių parašyti kokia tai savaitės diena. -->'."<br>";
$r=rand(1,7);
if($r==1){
    echo "Pirmadienis";
}
else if($r==2){
    echo "Antradienis";
}
else if($r==3){
    echo "Trečiadienis";
}
else if($r==4){
    echo "Ketvirtadienis";
}
else if($r==5){
    echo "Penktadienis";
}
else if($r==6){
    echo "Šeštadienis";
}
else if($r==7){
    echo "sekmadienis";
}echo "<br>"
?>
<?php
echo '4. Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 – darbo diena, 6-7 – savaitgalis).'. "<br>";
$r=rand(1,7);
if($r<=5){
  $diena="darbadienis";
}else {$diena="savaitgalis";}

echo "Šiandien  yra $r saviatės diena ir tai yra $diena";
echo "<br>";
?>

<?php

echo " 5. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Skaičiai dalūs iš 3 turi būti atvaizduoti žaliai, turintys dalybos iš trijų liekaną vienetą – geltonai, turintys dalybos iš trijų liekaną dvejetą – raudonai.";
echo "<br>";
for ($i=1;$i<=4;$i++){
    $num=rand(0,100);
    if ($num%3==0){
        echo "<span style=\"color:green;\">$num</span>";
    }else if ($num%3==1 ){
        echo "<span style=\"color:yellow;\">$num</span>";
    } else if ($num%3==2 ){
        echo "<span style=\"color:red;\">$num</span>";
    }

}

?>
<?php
echo " 6 Išvesti į ekraną skaičius nuo 0 iki 100.";
for ($i=0;$i<=100;$i++)
    echo "$i" ;
echo "<br>";

?>
<?php
echo " 7. Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.";
echo "<br>";
for ($i=0;$i<=200;$i=$i+2)

    echo "$i".";" ;
echo "<br>";

?>
<?php
echo " 8. Septinto uždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų atvaizduoti mėlynai.";
echo "<br>";
for ($i=0;$i<=200;$i=$i+2){
    if($i%6==0){
        echo "<span style=\"color:blue;\">$i</span>".";";
    }else {echo "<span style=\"color:black;\">$i</span>".";";}
}

echo "<br>";

?>
<?php
echo "9. Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.+";
echo "<br>";
// for ($i=0;$i<=1000;$i++){
//     $random=rand(0,50);
//     if($random%5==0){
//     echo "$random";
//     return;

//     }else {echo "<span style=\"color:black;\">$random</span>".";";}
// }

// echo "<br>";

?>
<?php
echo "<br>";
echo "10. Generuoti atsitiktinius skaičius nuo 1 iki 100 tol, kol sugeneruotas skaičius bus dalus iš 5 arba iš 11.";
echo "<br>";
$random=-1;
while ($random%5!==0 && $random%11!==0){
    {$random=rand(1,100); echo " $random ;";}
}


echo "<br>";

?>

<?php
echo "11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150.";
echo "<br>";
$i=0;
while( $i<=150)
{$x=rand(1,10);
$i=$i+$x;
echo $x. ";";
}
echo "<br>";
echo "$i";
echo "<br>";
?>
<?php
echo " 13. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 175. Surasti didžiausią ir mažiausią skaičių.";
echo "<br>";
$array=[];
$min=0;
$max=15;
$sum=0;
while($sum<=175){
    $random= rand(1,15);
    array_push($array,$random);
    echo $random . ";";
    $sum=$sum+$random;
   
}
echo "<br>";
echo "$sum";
echo "<br>";
echo max($array)." Maksimalus sugeneruotas skaičius"."<br>" ;
echo min($array)." Minimalus sugeneruotas skaičius"."<br>" ;

?>
<?php
echo "<br>";
echo "14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200. Surasti skaičių vidurkį.";
echo "<br>";
$sum=0;
$count=0;
while ($sum<=200){
    $random=rand(1,15);
    $sum=$sum+$random;
    $count=$count+1;
    echo "$random". ";";

}
echo "<br>";
echo"$sum";
echo "<br>";
echo (round($sum/$count))." Skaičiu vidurkis" ;


echo "<br>";
echo "15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – skaičiai nuo 1 iki 100.";

$array=[];
for($i=0;$i<=100;$i++){
    array_push($array,$i);
}
var_dump($array);
echo "<br>";
echo "<br>";

echo"16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – atsitiktiniai skaičiai nuo 10 iki 25.";
$array1=[];
for($i2=0;$i2<=100;$i2++){
    $ran=rand(10,25);
    array_push($array1,$ran);
}
var_dump($array1);
echo "<br>";
echo"17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, kurio reikšmės būtų skaičiai nuo 1 iki masyvo ilgio.";
$masyvas=[];
$long=rand(40,60);
for($l=0;$l<=$long;$l++){
    array_push($masyvas,$l+1);
}
var_dump($masyvas);
?>

<?php
echo "<br>";
echo"18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 47.";
$masyvas=[];
$long=rand(80,120);
for($l=1;$l<=$long;$l++){
    $a=rand(5,47);
    array_push($masyvas,$a);
}
var_dump($masyvas);
echo "<br>";
?>
<?php
echo "<br>";
echo"19. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės D, E, F, G, H.";
$masyvas=[];
$characters='DEFGH';
for($l=1;$l<=100;$l++){
    $a=$characters[rand(0,strlen($characters))];
    array_push($masyvas,$a);
}
var_dump($masyvas);
echo "<br>";
?>
<?php
echo "20. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės M,N,O,P. Suskaičiuoti, kurios raidės buvo daugiausia.";
$masyvas=[];
$characters=["M","N","O","P"];
for($l=0;$l<=100;$l++){
    $a=$characters[rand(0,3)];
    array_push($masyvas,$a);
}

var_dump($masyvas);
$m=0;
$n=0;
$o=0;
$p=0;
for($i=0;$i<=100;$i++){
    if ( $masyvas[$i]=='M'){
        $m=$m+1;}
    elseif( $masyvas[$i]=="N"){
            $n=$n+1;}
    elseif( $masyvas[$i]=="O"){
                $o=$o+1;}
    elseif( $masyvas[$i]=="P"){
         $p=$p+1;}

}
 

echo "M raidžių yra $m; N raidziu yra $n; O raidžių yra $o; P raidziu yra $p";
echo "<br>";
?>

<?php
echo "21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]).";
echo "<br>";
 $array=[];
 for ($i=0;$i<100;$i++){
     $array2=[];
     for ($x=0;$x<=10;$x++){
         array_push($array2,$x);}
         array_push($array,$array2);
     }
     

echo '<pre>';
print_r($array);


?>
<?php
echo "<br>";
echo"22. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17.";
echo "<br>";
$array=[];
 for ($i=0;$i<100;$i++){
     $array2=[];
     for ($x=0;$x<=10;$x++){
         array_push($array2,rand(1,17));}
         array_push($array,$array2);
     }
     

echo '<pre>';
print_r($array);

?>
<?php
echo "23. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – skaičiai nuo 1 iki masyvo ilgio.";

$array=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     $m=0;
     for ($x=0;$x<=(rand(5,18));$x++){
         $m=$m+1;
         array_push($array2,$m);}
         array_push($array,$array2);
     }
     

echo '<pre>';
print_r($array);
?>

<?php
echo "<br>";
echo "24. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 30.)";
echo "<br>";
$array=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     for ($x=0;$x<=(rand(5,18));$x++){
         $m=rand(5,30);
         array_push($array2,$m);}
         array_push($array,$array2);
     }
     

echo '<pre>';
print_r($array);
?>
<?php
echo "<br>";
echo "25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti didžiausią skaičių visame didžiajame masyve.";
echo "<br>";
$array=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     for ($x=0;$x<=(rand(5,18));$x++){
         $m=rand(5,75);
         array_push($array2,$m);}
         array_push($array,$array2);
     }
     

echo '<pre>';
print_r($array);
echo max($array2)." Didziausias  skaičius"."<br>" ;

?>

<?php
echo"26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti mažiausią skaičių visame didžiajame masyve ir kiek kartų jis pasikartojo.";
$array=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     for ($x=0;$x<=(rand(5,18));$x++){
         $m=rand(5,75);

         array_push($array2,$m);}


         array_push($array,$array2);}
$mintime='';
$min=75;
foreach ($array as $value){
    foreach($value as $number){
        if($number<$min){
            $min=$number;
            $mintime=0;
        }
        elseif ($number==$min){
            $mintime++;
        }
    }
}

echo '<pre>';
print_r($array);


echo " maziausias skaicius yra $min ir jis pasikartojo $mintime kartus "."<br>" ;


 ?>
 <?php
 echo "<br>";
 echo "27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17. Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.";
 echo "<br>";
 $array=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     for ($x=0;$x<=10;$x++){
         $m=rand(1,17);

         array_push($array2,$m);
         }
         sort($array2);


         array_push($array,$array2);}


echo '<pre>';
print_r($array);

 ?>
 <?php
  echo "<br>";
 echo"28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17. Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių sumas didėjančia tvarka.";
 echo "<br>";
 $array=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     for ($x=0;$x<=10;$x++){
         $m=rand(1,17);

         array_push($array2,$m);
         }
         sort($array2);


         array_push($array,$array2);}

    //   foreach ($array as $value){
    //     foreach($value as $number){

    //     }
           
    // }

echo '<pre>';
print_r($array);

 ?>
 <?php
 echo "29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17. Iš dvimačio masyvo sukurti vieną vienmatį masyvą – visas dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.";
 $array=[];
 $array3=[];
 for ($i=0;$i<=100;$i++){
     $array2=[];
     for ($x=0;$x<=10;$x++){
         $m=rand(1,17);

         array_push($array2,$m);
         }


         array_push($array,$array2);}

         foreach ($array as $value){
            foreach($value as $number){
              array_push($array3,$number);
                
          
            }
        }
        
        echo '<pre>';
        print_r($array);
        print_r($array3);
 ?>
 <?php
 echo "<br>";
echo "30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme, kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės aritmetinis vidurkis";
echo "<br>";
$array=[];
$array3=[];
for ($i=0;$i<=100;$i++){
    $array2=[];
    for ($x=0;$x<=10;$x++){
        $m=rand(1,17);

        array_push($array2,$m);
        }


        array_push($array,$array2);}

        foreach ($array as $value){
           foreach($value as $number){
             array_push($array3,$number);
               
         
           }
       }
       
       echo '<pre>';
       print_r($array);
       print_r($array3);




 ?>

 <?php
echo "<br>";
 echo"31. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą";
 echo "<br>";
 function tekstas($text){
    echo "$text yr toks ir toks";
}


tekstas("<h1> Ramunas</h1>");
echo "<br>";
 ?>
 <?php
 echo"32. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Grąžina tų skaičių sumą";
 function check($number1,$number2){
     if ((is_numeric($number1)) || (is_numeric($number2))) {
         echo ($number1+$number2);
     }else {echo "Kntamieji ne skaičiai";}
 }
 $number1=20;
 $number2=10;


 ?>



