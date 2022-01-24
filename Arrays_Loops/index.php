<?php
//Arrays
$array =array(); // kuriame masyva per funkcija
$array2= [];// paprastas masyvas

$cars=array("bmw","audi","opel","skoda");
$trees=["berzas","liepa","azuolas"];
var_dump($cars);
var_dump($trees);

echo "<br>".$cars[1];//ismeta pirma elementa is masyvo
//masyvo ilgis (length)
echo count($trees);
//associative array .Poros=dalykas ir jo reiksme
$prices= [
    "Pienas"=>1.99,
    "Duona"=>2.99,
    "Sviestas"=>2.59,//rodiklytes tik masyve 
];
function br(){
    echo "<br>";
}
echo "pienas kainuoja".$prices['Pienas'];

$prices ['Vanduo']=0.99; //pridedam i masyva vandeni
$prices ['Pienas']=2.09;// keiciam kaina pieno
br();
var_dump($prices);
// Multidimension Arrays
// lentele 2 dimensiju
// Vardas | Amzius| Miestas
//Petras  | 25 m  | Kaunas
$studens=[
    ["Petras",25,"Kaunas"],
    ["Jonas",30, "Vilnius"],
    ["Janina",45, "Kaunas"]
];
br();
var_dump($studens);
br();
echo $studens[0][0];//istraukia petras
br();
echo $studens[0][2]. " " .$studens[0][0];//istraukia petras ir jungiam kita reikme per taska


// Multidimensiniai asocijuoti masyvai
$participants = [
    "petras"=>[
        "amzius"=>25,
        "miestas"=>"Kaunas",
        "kursas"=>"PHP",
    ],
    "Jonas"=>[
        "amzius"=>20,
        "miestas"=>"Vilnius",
        "kursas"=>"PHP",
    ],
    "Janina"=>[
        "amzius"=>23,
        "miestas"=>"Klaipeda",
        "kursas"=>"JAVA",    
    ],
];
br();
echo $participants['petras']['amzius'];// rasom ne indexus o pavadinimus 


//Ciklai - Loops
// while - ciklas vykdomas kol pasiekiam salyga
//doo...while - kodas ivykdomas viena karta ir kartojamas kol salyga teisinga
// for - tam tikra skaiciu kartu 
// foreach - praeina ,pakartoja kodo bloka kiekvienam masyvo elementui.daznai naudojamas. nereikia nurodyti elementu

// while - ciklas vykdomas kol pasiekiam salyga
$a=0;
while($a<5){
    br();
    echo $a;
    $a++;// prideda po viena prie a
}
// is pradziu kodas po to salyga iki kada
$b=10;
do {
    br();
    echo $b;
    $b++;
}while ( $b<15);

// for - tam tikra skaiciu kartu 
$numbers=[];
for ($i=0;$i<10;$i++){
    br();
    echo"skaitliukas yra ".$i;
    array_push($numbers,$i);
}
//foreach -masyvu ciklas . praeina ,pakartoja kodo bloka kiekvienam masyvo elementui.daznai naudojamas. nereikia nurodyti elementu
// ties kikevienu atspoaudinam
foreach($cars as $value){
    echo $value;
    br();
}
foreach ( $prices as $key=>$value){
    echo $key. "price is ".$value;
    br();
}
// foreach ($participants as $name=>$participants){
//     echo $name." ". $participants['amzius'];
// }

foreach ($studens as $student)
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
    <h1>Arrays</h1>
    <ol>
        <li>array-paprastas masyvas</li>
        <li>Associate array naudojami "keys", kuriems priskiriamos reiksmes-</li>
        <li>Multidimensional array - tai masyvas kuris turi savyje dar viena masyva</li>
    </ol>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Course</th>
        </tr>
        <?php
        foreach ($participants as $name => $participant){
            if($participant['kursas'] =="PHP"){
            echo "<tr><td>".$name."</td>"."<td>".$participant['amzius']."</td><td>".$participant['miestas']."</td><td>".$participant['kursas']."</td></tr>";}
            }
         ?>
    </table>

    <?php
    print("<pre>".print_r($participants, true)."</pre>");// atspausdina masyva
    ?>
    
</body>
</html>