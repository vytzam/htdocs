<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- sugeneruoti stringa i html su dviems kintamaisias -->
    <!-- Rezultas paragrafe"Mano vardas Vytautas ir aš iš Trakų"  -->
    <?php
    $name ="Vytautas";
    $city = "Trakai";
    echo "<p> Mano vardas yra ".$name. " ir aš esu iš miesto  ".$city." </p";
    $h1Name = "PHP.Practise ";
    ?>
    <p>mano vardas <?php echo $name;?>ir aš esu iš <?php echo $city;?></p>
    <!--panaudoti pavadinima PHP.Practise kaip kintamaji ir ideti ji i h1  -->
    <h1><?php echo $h1Name?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aliquam distinctio dolorem possimus facere recusandae atque animi provident laborum assumenda! Recusandae possimus facilis harum saepe perferendis nostrum corrupti quasi dolorem? <a href="#"><?php echo $h1Name?></a></p>

    <?php
    // gauname kliento ip adresa
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty ($_SERVER['HTTP_X_FORWARDER_FOR'])){
        $ipaddress = $_SERVER['HTTP_X_FORWARDER_FOR'];
    }else {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    }
    $browser = $_SERVER['HTTP_USER_AGENT'];
    
    


    ?>
 <h3><?php echo $ipaddress?></h3>
 <h3><?php echo $browser?></h3>
 <?php
 print_r(error_get_last());//paskutini erora meta
 ?>
 <h1>Elektros sąskaita</h1>
 <ul>
     <li>For first 50 units - 3,5 eur/unit</li>
     <li>For next 100 units - 4 eur/unit</li>
     <li>For next 100 units - 5,20 eur/unit</li>
     <li>Forunits above 250 units - 6,50 eur/unit</li>
     <?php
     $units = 430;
     $result=calculateBill($units);
     $resultStr = "Total amount of ".$units." - ".$result."EUR";
     function calculateBill($units){
         $firstCost = 3.5;
         $secondCost= 4;
         $thirdCost= 5.2;
         $fourthCost= 6.5;
         if($units<=50){
             $bill = $units*$firstCost;

         }else if ($units>50 && $units<=150){
             $temp=$units*$firstCost;
             $remaining =$units -50;
             $bill=$temp + ($remaining*$secondCost);
         }elseif ($units>150 && $units<=250){
             $temp=(50*$firstCost)+(100*$secondCost);
             $remaining =$units -150;
             $bill = $temp + ($remaining*$thirdCost);
        }else {$temp=(50*$firstCost)+(100*$secondCost)+(100*$thirdCost);
            $remaining =$units -250;
            $bill = $temp + ($remaining*$fourthCost);

        }
        return number_format((float)$bill, 2, "," , " ");
     }
     ?>

     <p> <?php  echo $resultStr;?></p>

     <!-- Salyga. Reikia parasyti i paragrafa, ar asmuo gali balsuoti ar ne. Asmuo turi tureti varda ir amziu. Balsuoti gali turi 18 metu -->

     <?php
        $name= "Vytautas";
        $metai= 17;
        if($metai >=18){
            $asmMetai= " gali balsuoti";
        }elseif ($metai<18){
            $asmMetai= " negali balsuoti";
                    
        }

    $codeName= "ara";
    $polindromas = strrev($codeName);
    if ($codeName === $polindromas){
        $resultN= " Žodis yra polindromas";
    }else  $resultN= "žodis nėra polindromas";

    echo ( $resultN);
?>
<p><?php echo $name?> kuriam yra <?php echo $metai ?> metų<?php echo $asmMetai ?></p>
     

 </ul>


<!-- 1.Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metuspaskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->
<?php
//pirma uzduotis
$name="Vytautas";
$surName="Zamalaitis";
$birthDate=1979;
$thisYear=2022;
$year=$thisYear-$birthDate;
//antra uzduotis
//2.Naudokite funkcijarand(). Sukurkite du kintamuosius ir naudodamiesi funkcijarand()jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinęiki 2 skaičių po kablelio
$atsitiktinis=rand(0,4);
$atsitiktinis2=rand(0,4);

if ($atsitiktinis2===0 || $atsitiktinis===0 ){
    echo "dalyba iš 0 negalima";}

else if($atsitiktinis>$atsitiktinis2){
    $result = $atsitiktinis/$atsitiktinis2;
    echo "Padalinus  $atsitiktinis iš $atsitiktinis2 gauname".round(($result),2);
}
else if ( $atsitiktinis2>$atsitiktinis){
    $result = $atsitiktinis2/$atsitiktinis;
    echo "Padalinus  $atsitiktinis2 iš $atsitiktinis gauname" .round(($result),2);
}
//3.Naudokite funkcijarand(). Sukurkite tris kintamuosius ir naudodamiesi funkcijarand()jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
echo "<br>";
echo "<br>";
$num1=rand(0,25);
$num2=rand(0,25);
$num3=rand(0,25);
echo "pirmas skaicius $num1 antras skaičius $num2 trečias skaičius $num3";
echo "<br>";
echo "<br>";
$maz=min($num1,$num2,$num3);
$did=max($num1,$num2,$num3);
echo "<br>";
echo "<br>";
if ($num1>=$maz && $num1<=$did){
    echo "vidurinis skaičius $num1";
}
elseif ($num2>=$maz && $num2<=$did){
    echo "vidurinis skaičius $num2";
}
elseif ($num3>=$maz && $num3<=$did){
    echo "vidurinis skaičius $num3";
}
else{
    echo "2 skaičiai vienodi, negalime rasti vidurinio ";
}

echo "<br>";
echo "<br>";


//4.Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand()funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.
$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);

if($a+$b<$c || $b+$c<$a || $a+$c<$b){
    echo "trikampio sudaryti iš kraštinių $a , $b ir $c negalime";
}
else { echo "trikampi sudaryti iš kraštinių $a , $b ir $c galime";

}
echo "<br>";
//5.Sukurkite keturis kintamuosius ir rand()funkcija sugeneruokite jiemsreikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
echo "<br>";
echo "<br>";
$no1=rand(0,2);
$no2=rand(0,2);
$no3=rand(0,2);
$no4=rand(0,2);
echo ( $no1. $no2 .$no3 .$no4);
echo "<br>";
echo "<br>";
$n0=0;
$n1=0;
$n2=0;
    if  ( $no1===0){
        $n0=$n0+1;}
    else if  ( $no1===1){
        $n1=$n1+1;}
    else {$n2=$n2+1;}

    if ( $no2===0){
        $n0=$n0+1;}
    else if  ( $no2===1){
        $n1=$n1+1;}
    else {$n2=$n2+1;}
    if  ( $no3===0){
        $n0=$n0+1;}
    else if  ( $no3===1){
        $n1=$n1+1;}
    else {$n2=$n2+1;}
     if  ( $no4===0){
            $n0=$n0+1;}
        else if  ($no4===1){
            $n1=$n1+1;}
        else{
            $n2=$n2+1;}

            
echo ( "Suskaičiavome, kad 0 yra $n0  1 yra $n1 o 2 yra $n2");

//6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$atsit=rand(1,6);
echo "<h$atsit><$atsit></h$atsit>";
//7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.
$xa=rand(-10,10);
$xb=rand(-10,10);       
$xc=rand(-10,10);
echo "<br>";
echo "<br>";
echo ("$xa,$xb,$xc");
echo "<br>";
echo "<br>";
if ($xa<0){
    echo "<span style='color:green'>$xa</span>";
}
else if($xa==0) {
    echo "<span style='color:red'>$xa</span>";
}
else {echo "<span style='color:blue'>$xa</span>";
}
if ($xb<0){
    echo "<span style='color:green'>$xb</span>";
}
else if($xb==0) {
    echo "<span style='color:red'>$xb</span>";
}
else {echo "<span style='color:blue'>$xb</span>";
}
if ($xc<0){
    echo "<span style='color:green'>$xc</span>";
}
else if($xc==0) {
    echo "<span style='color:red'>$xc</span>";
}
else {echo "<span style='color:blue'>$xc</span>";
}
//Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite rand() funkcija nuo 5 iki 3000.
$kiekis=rand(5,3000);
if ( $kiekis>2000){
    $kaina=$kiekis*0.96;
    echo "perkant kiekis yra: $kiekis,bendra kaina:$kaina";
}else if ( $kiekis>1000){
    $kaina=$kiekis*0.97;
        echo "perkant kiekis yra: $kiekis,bendra kaina:$kiekis";}
else {
        $kaina=$kiekis*1;
        echo "perkant kiekis yra: $kiekis,bendra kaina:$kaina";
    }
//9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
$random1=rand(0,100);
$random2=rand(0,100);
$random3=rand(0,100);


$vidurkis=($random1+$random2+$random3)/3;
echo "skaicia yra : $random1 $random2 $random3";
echo "<br>";
echo "Ju vidurkis yra $vidurkis";

$suma =0;
$kintamujuKiekis=0;
if ($random1>=10 && $random1 <=90){
    $suma+=$random1;
    $kintamujuKiekis++;
}
if ($random2>=10 && $random2 <=90){
    $suma+=$random2;
    $kintamujuKiekis++;
}
if ($random3>=10 && $random3 <=90){
    $suma+=$random3;
    $kintamujuKiekis++;
}

if ( $kintamujuKiekis!==0){
    $vidurkis2 = round ( $suma / $kintamujuKiekis);
    echo "skaiciu vidurkis atmetus reiksmes mazesnes uz 10 ir didesnes uz 90 yra $vidurkis2 ";
}else {
    echo "Visi trys skaiciai yra mazesni uz 10 arba didesni uz  90";
}



?>



<p><?php echo " Aš esu $name $surName. Man yra $year metai" ?></p>;
<h3><?php echo"$atsit" ?></h3>;
</body>
</html>