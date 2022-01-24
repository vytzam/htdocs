<?php
if (isset($_GET['link']) && $_GET['link']=='2'){
 header("Location:http://localhost/Practise/Praktika/red.php");
 exit();
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
<body>
    <a href="red.php/?link=2">Linkas 1</a>
</body>
</html>