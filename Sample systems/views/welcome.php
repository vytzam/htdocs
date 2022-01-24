<?php
include 'layout/header.php';
if($_GET){
    echo "Welcome".$_GET['userName']."!";
}

?>

<?php include 'layout/footer.php';?>