<?php
$color='';
if (isset($_GET['color1'])){
    $color='green';
}

if (isset($_POST['color2'])){
    $color='yellow';
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
<body style="background-color: <?php echo $color; ?>;">
<form action="" method="get">
    <input type="button" name="color1">
    <input type="submit" name="color1">
</form>
<form action="" method="post">
    <input type="button" name="?/color2=yellow">
    <!-- <input type="submit" name="color2"> -->
</form> 
</body>
</html>