<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
require_once("../db_connection.php");

if($_GET){
    try{
    
        $message=$_GET['id'];
        $sql ="DELETE FROM chat WHERE  id='$message' ";
        $query =$conn->prepare($sql);
        $result = $query-> execute();
        header("Location:../views/chat.php");
        

    } catch(PDOException $e){
        echo"Update failed: ".$e->getMessage();

    }
}else {
        header("Location: ../");
    }
