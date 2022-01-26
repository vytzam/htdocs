
<?php
include 'layout/header.php'; 

$input=$converted=$meter= $kilometer= $centimeter= $milimeter= $convertTo= $convertFrom="";
if (isset($_POST['unit1'])){
    $convertFrom=$_POST['unitsFrom'];
    $convertTo=$_POST['unitsTo'];
    $input=$_POST['unit1'];
    var_dump($input);


    if ($convertFrom==$convertTo){
        $converted==$input;
      

    }else if ($convertFrom=="meter"& $convertTo=="centimeter"){
        $converted=($input*100);

    }else if ($convertFrom=="meter"& $convertTo=="milimeter"){
        $converted=($input*1000);

    }else if ($convertFrom=="meter"& $convertTo=="kilometer"){
        $converted=($input/1000);

    }else if ($convertFrom=="centimeter"& $convertTo=="meter"){
        $converted=($input/100);

    }else if ($convertFrom=="centimeter"& $convertTo=="milimeter"){
        $converted=($input*10);

    }else if ($convertFrom=="centimeter"& $convertTo=="kilometer"){
        $converted=($input/10000);}
    else if ($convertFrom=="milimeter"& $convertTo=="centimeter"){
        $converted=($input/10);

    }else if ($convertFrom=="milimeter"& $convertTo=="kilometer"){
        $converted=($input*1000000);

    }else if ($convertFrom=="milimeter"& $convertTo=="meters"){
        $converted=($input/100);}
      else if ($convertFrom=="kilometer"& $convertTo=="centimeter"){
        $converted=($input*100000);

    }else if ($convertFrom=="kilometer"& $convertTo=="meters"){
        $converted=($input*1000);

    }else if ($convertFrom=="kilometer"& $convertTo=="milimeter"){
        $converted=($input*1000000);}
        
    
}
?>


<!-- Sukurkite matavimo vienetų konverterį. Įvedus bet kurį matavimo vienetą, turi perskaičiuoti kitus.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame POST metodą
3. Matavimo vienetus pasirinkti patiems. Temperatūra, atstumas, greitis ir pan.
4. Turi būti bent keturi matavimo vienetai -->

    <div class="container-sm">
        <form action="" method="POST">
        <div class="mb-3">
            <label for="select" class="mb-3"> Units convert from</label>
            <select name="unitsFrom">
                <option value="meter">Meter</option>
                <option value="kilometer">Kilometer</option>
                <option value="centimeter">Centimeter</option>
                <option value="milimeter">Milimeter</option>
            </select>
            <div class="mb-3">
            <label for="unit1">Enter</label>
            <input type="text"class="form-control" name="unit1";>
            </div>
        </div>
        <div class="mb-3">
            <label for="select" class="mb-3"> Units convert to</label>
            <select  name="unitsTo" >
                <option value="meter">Meter</option>
                <option value="kilometer">Kilometer</option>
                <option value="centimeter">Centimeter</option>
                <option value="milimeter">Milimeter</option>
                </select>
                <div class="mb-3"> 
                <button type="submit" class="btn btn-primary">Submit</button> 
                </div>
                </form>
    </div>

    <div class="container">
        <h5>Jūsų rezultatas <?php echo $converted ?></h5>
    </div>



    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>