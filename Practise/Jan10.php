<?php
//Task 1 list of colors
$colors=[
    "red",
    "green",
    "blue",
];

//Task2 Facts about countries

$countries =[
    "Lithuania"=>"Vilnius",
    "Italy"=>"Roma",
    "Sweden"=>"Stokholm",
    "Latvia"=>"Riga",
    "Poland"=>"Warsawa",
];

//Task 3 average temperature and five lowest, five highest tempersaturea.
$monthTemp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$tempArray =explode(", ", $monthTemp );
$tempArrayLength = count($tempArray);
// var_dump($tempArrayLength);
$totalTemp =0;
foreach($tempArray as $temp){
    $totalTemp+=$temp;
    //$totalTemp+=(int)$temp;
}
$avgTemp = $totalTemp/$tempArrayLength;// daliname ir ganuanme vidutine temperatura
sort($tempArray);// masyva issortina nuo maziausio iki didziausio

//Sukurkite asocijuota masyva su 5 asmenimis ir ju amziumi. Ispausdinkite kiekvieno asmens varda ir jo amziu i html.
//Suraskite jauniausia ir seniausia asmeni
//Suraskite amziaus vidurki
//Padarykite lentele, kur butu Vardas, Amzius ir Gimimo metai. Metai turi buti suskaiciuoti!!!
$nariai=[
    "Mantas"=>"15",
    "Tadas"=>"26",
    "Rokas"=>"46",
    "Lukas"=>"32",
    "Marija"=>"40",

];

reset($nariai);   // optional.
arsort($nariai);
$max = key($nariai);
reset($nariai);
asort($nariai);//galima naudoti ksort ( key sort)
$min = key($nariai)

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
    <h3>Task 1 Color list</h3>
    <ul>
        <?php
        foreach($colors as $color){
            echo "<li>$color</li>";
        }
        ?>
    </ul>
    <h3>Task 2 Capitals of countries</h3>
    <?php
    foreach($countries as $country => $capital){
        echo "<p>The capital of $country is $capital";
    }
    ?>
    <h3>Task 3 Avarage  temperatures</h3>
    <?php
    echo "<P>avarage temperature is $avgTemp </p>";
    echo "<p>Five lowest temperatures are :";
    for( $i=0; $i<5;$i++){
        echo $tempArray[$i];
        if($i==4){
            echo " .</p>";
        }else { echo ", ";
        }
    }

    echo "<p>five highest temperatures are: ";
    for ($i=($tempArrayLength -5);$i<$tempArrayLength;$i++){
        echo $tempArray[$i];
        if($i==4){
            echo " .</p>";
        }else { echo ", ";
        }
    };
    ?>

<?php

   foreach ($nariai as $narys => $metai){
        echo "<p>Asmuo yra $narys ir jam yra  $metai metai</p>";
    }
        echo " Vyriausias yra $max ";
        echo " Jauniausias yra $min ";

    //$avgSum= array_sum ($nariai)/coount($people); toks trumpesnis per funkcija
    $skaitl =0;
    $bendraiM=0;
    foreach ($nariai as $narys =>$metai){
             $skaitl++;
             $bendraiM=$bendraiM+$metai;}
             echo "<p> Vidutinis amzius yra " .$bendraiM/$skaitl." metai</p";

        ?>
<br>
<table>
    <tr>
        <th>Vardas</th>
        <th>Amzius</th>
        <th>Gimimo metai</th>
    </tr>
    <?php foreach ($nariai as $narys=>$metai){
        $birthYear = date("Y")-$metai;
    echo "<tr><td>$narys</td><td>$metai</td><td>$birthYear</td></tr>"; }
    
    ?>

</table>


</body>
</html>