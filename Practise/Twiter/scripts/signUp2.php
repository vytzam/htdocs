
<?php
session_start();
//prijungiame duomenu baze
require_once("../db_connection.php");

$_SESSION['reg_errors'] = [];

if (!$_POST) {
    header("Location: ../views/register.php");
}

if(!(isset($_POST['uname']) && isset($_POST['fname']) && isset($_POST['lname'])&& isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['confirmPassword']))){
    echo "Something went wrong, please contact system admin";
}
$_SESSION['first_name'] = $firstName = $_POST['fname'];
$_SESSION['last_name'] = $lastName = $_POST['lname'];
$_SESSION['email'] = $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    if (($username=="" || $firstName==""|| $lastName==""|| $email=="" || $password=="" || $confirmPassword=="")) {
        array_push($_SESSION['reg_errors'], "Please fill all fields!");
        
    } 
    if(strlen($username)>50){
        array_push($_SESSION['reg_errors'], "First Name is too long. MAX 50 symbols");
    }
    
    if(strlen($firstName)>50){
        array_push($_SESSION['reg_errors'], "First Name is too long. MAX 50 symbols");
    }
    
    if(strlen($lastName)>50){
        array_push($_SESSION['reg_errors'], "Last Name is too long. MAX 50 symbols");
    }
    
    if(strlen($email)>50){
        array_push($_SESSION['reg_errors'], "Email is too long. MAX 50 symbols");
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($_SESSION['reg_errors'], "Email format is invalid");
    }

//sukeliame duomenis i duomenu baze
if ($password == $confirmPassword) {
    $password = password_hash($password, PASSWORD_BCRYPT);
} else {
    array_push($_SESSION['reg_errors'], "Passwords do not match!");
   
}

if(!empty($_SESSION['reg_errors'])){
    header("Location: ../views/register.php");
    die;
}
try {
    $sql = "INSERT INTO users (user_name,first_name, last_name, email, password) VALUES ('$username','$firstName', '$lastName', '$email', '$password')";
    $query = $conn->prepare($sql);
    $query->execute();
    header("Location: ../views/login.php");
} catch (PDOException $e){
    echo "Insert failed: ".$e->getMessage();
}


?>