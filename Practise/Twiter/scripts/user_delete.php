<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
require_once("../db_connection.php");

if($_GET){
    try{
        $userid = $_GET['userid'];
       


        $sql ="DELETE FROM users WHERE id='$userid'";
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
