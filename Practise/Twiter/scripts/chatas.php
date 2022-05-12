<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
require_once("../db_connection.php");

$user = $_SESSION['username'];

if($_POST){
    try{

        $message = $_POST['text'];
        $sql = "INSERT INTO chat (message,created_by)  VALUES ('$message','$user')";
        $query = $conn->prepare($sql);
        $query->execute();
        
    } catch(PDOException $e){
        echo "Insert failed: ". $e->getMessage();
    }
}else {
        header("Location: ../");
    }

header("Location:../views/chat.php");
