<?php
$userName=$email =$password=$confirmPassword= "";

if($_POST){
    $userName=$_POST['userName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
}else{
    header("Location:../.. index.php");
    exit;
}
if($password==$confirmPassword){
    $password=password_hash($password,PASSWORD_DEFAULT);
}else{
    header("Location: index.php/?userName=".$userName."&email=".$email."&error=Passwords+do+not+match");
}
header("Location: ../Sample systems/welcome.php?username=".$username)

?>