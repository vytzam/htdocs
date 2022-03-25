<?php
session_start();
if(!isset($_SESSION['userID'])){
    header("location:login.php");
}
require_once("../db_connection.php");
$user = $_SESSION['username'];




if($_POST){
    try{
        $userid = $_GET['userid'];
        $username=$_POST['uname'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];

        $sql ="UPDATE users SET user_name='$username', first_name = '$firstName',last_name='$lastName',email = '$email' WHERE id = '$userid'";
        $query =$conn->prepare($sql);
        $result = $query-> execute();
        if($result){
            header("Location:../views/users.php");
        }

    } catch(PDOException $e){
        echo"Update failed: ".$e->getMessage();

    }
}else {
        header("Location: ../");
    }


?>