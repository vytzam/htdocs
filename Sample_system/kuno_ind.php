<!-- Sukurkite KMI (Kūno masės indekso) skaičiuoklę. Vartotojui suvedus savo svorį ir ūgį į formą, turėtų parodyti jo KMI.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame GET metodą
3. Rezultatas parodomas fone, kuris parodo ar KMI geras ar blogas. Geras - žalias, blogas - Raudonas.
4. KMI formulė - KMI=masė(kg)/(ūgis(m))^2. Optimalus svorio indeksas - nuo 18,5 iki 25. Jei indeksas mažesnis – žmogus per liesas, jei didesnis – turima antsvorio. -->
<?php
$svoris= $ugis = $ugis2= $kmi= $result="";
if ($_GET) {
    $svoris = $_GET['svoris'];
    $ugis = $_GET['ugis'];
    $ugis2=$ugis*$ugis;
    $kmi=round($svoris/$ugis2);
  
}
if($kmi>=18.5 && $kmi<=25){
  $result="svoris optimalus";
}
else if ( $kmi<18.5){
    $result= "svoris per mažas";
}
else{$result="svoris per didelis";}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
    <form action="" method="GET">
    <div class="mb-3">
        <label for="svoris" class="form-label">Svoris kg</label>
        <input type="text" class= "form-control" name="svoris">
    </div>
    <div class="mb-3">
        <label for="ugis" class="form-label">Ūgis m</label>
        <input type="text" class= "form-control" name="ugis">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="mb-2" >
      <h5><?php echo "Jūsų kūno indeksas yra $kmi ,  tai yra $result " ?></h5>
    </div>
    </form>
    </div>

    




 




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>