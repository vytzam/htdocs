
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

require_once("../db_connection.php");

//isstraukiame likus is duomenu bazes

$id = $_GET['id'];
try {
    $sql = "SELECT users.id, chat.user_id, chat.total_likes, likes.liked_by   
    FROM chat 
    JOIN users ON users.id = chat.user_id
    JOIN likes ON likes.liked_by = chat.user_id";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetch();
} catch (PDOException $e) {
    echo "Select failed: " . $e->getMessage();
}
var_dump($result);
$nr_likes = $result['total_likes'];
if ($_GET) {


    if ($result['id'] != $data['id']) {
        try {
            $nr_likes = $nr_likes + 1;
            $sql = "UPDATE chat  SET total_likes ='$nr_likes'WHERE id='$id'";
            $query = $conn->prepare($sql);
            $result = $query->execute();
            if ($result) {
                header("Location:../views/chat.php");
            }
        } catch (PDOException $e) {
            echo "Update failed: " . $e->getMessage();
        }
    }
} else {
    header("Location: ../");
}





?>
