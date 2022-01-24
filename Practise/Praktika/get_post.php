<?php
$color='';
if ($_GET){
    $color=($_GET['color']);
}else { $color = 'white';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body { 
        background-color: <?php echo $color ?>;;
    }
</style>
</head>
<body>
<!-- 3. Perdarykite 2 uţdavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
     <form action=""method="GET">
    <input type="text" name="color" placeholder="color" method=GET>
    <input type="submit">
    </form>
</body>
</html>