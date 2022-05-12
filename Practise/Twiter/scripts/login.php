<?php
session_start();
$_SESSION['auth_errors'] = [];
require_once("../db_connection.php");

//susirenkame login info is formos
if(!$_POST){
    header("Location: ../views/login.php");
}

if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
}
if($email==""){
    array_push($_SESSION['auth_errors'], "Please enter your email");
}
if($password==""){
    array_push($_SESSION['auth_errors'], "Please enter your password");
}
//isstraukiame userius is duomenu bazes
try {
    $sql ="SELECT * FROM users ";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e){
    echo "Select failed: ". $e->getMessage();
}
$email_exists = 0;
foreach ($result as $user){
   if(array_search($email, $user)){
       $email_exists +=1;
   }
}
if($email_exists===0){
    array_push($_SESSION['auth_errors'], "Email does not exist");
}
//pasitikriname ar yra toks email
foreach ($result as $user){
  if ($user['email']==$email){

  if(password_verify($password,$user['password'])){
        $_SESSION['username'] = $user['first_name'];
        $_SESSION['userID'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['user_id'] = $user['id'];
        
        header("Location: ../views/users.php");
    } else {
        $_SESSION['login_count'] += 1;
        if($_SESSION['login_count'] === 3) {
            array_push($_SESSION['auth_errors'], "Login locked");
        }else {
    array_push($_SESSION['auth_errors'], "Please check your password");
}
}
}
}
if(!empty($_SESSION['auth_errors'])){
    header("Location: ../views/login.php");
}
?>