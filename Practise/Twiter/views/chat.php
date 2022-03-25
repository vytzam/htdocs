<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include '../layout/header.php';
require_once '../db_connection.php';

try {
    $sql = "SELECT * FROM users";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e) {
    echo "Select failed: " . $e->getMessage();
}


?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    Hello, <?php echo $_SESSION['username']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> Users</h5>

                    <?php
                    foreach ($result as $user) {
                        echo "<span>" . $user['user_name'] . ", </span ";
                    }
                    ?>
                </div>

            </div>
        </div>




    </div>
</div>
<div class="container py-4">
    <div class="card text-dark bg-light mb-3" style="max-width: 100rem;">
        <form action="..\scripts\chatas.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="text here" name="text">
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
        </form>
    </div>
</div>
<?php
require_once '../db_connection.php';



try {
    $sql = "SELECT * FROM chat";
    $query = $conn->prepare($sql);
    $query->execute();
    $resultas = $query->fetchAll();
} catch (PDOException $e) {
    echo "Select failed: " . $e->getMessage();
}
try {
    $sql = "SELECT * FROM likes ";
    $query = $conn->prepare($sql);
    $query->execute();
    $nr_of_likes = $query->fetchAll();
} catch (PDOException $e) {
    echo "Select failed: " . $e->getMessage();
}
$useronline = $_SESSION['username'];
$role = $_SESSION['role'];
?>
<div class="card-body">
    <h5 class="card-title">Chat</h5>
    <table class="table table-striped">
        <tr>
            <th>User name</th>
            <th>Message</th>
            <th>Created</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Like</th>
            <th>Total Likes</th>
        </tr>


        <?php
        foreach ($resultas as $data) {
            if ($useronline == $data['created_by']) {
                $visibility = "visible";
            } elseif ($role == 1) {
                $visibility = "visible";
            } else {
                $visibility = "invisible";
            }

            echo "<tr><td>" . $data['created_by'] . "</td><td>" . $data['message'] . "</td><td>" . $data['created'] . "</td><td> <a class='btn btn-warning ml-2 $visibility'href='../scripts/message_edit.php?userid=" . $data['created_by'] . "&id=" . $data['id'] . "'>Edit</a></td><td><a class='btn btn-dark ml-2 $visibility'href='../scripts/message_delete.php?userid=" . $data['created_by'] . "&id=" . $data['id'] . "'>Delete</a></td>
                                
                                            <td><a class=' btn btn-primary ml-2'href='../scripts/message_like.php?id=" . $data['id'] . "'>Like</a></td><td>" . $data['total_likes'] . "'</td></tr>";
        }
        ?>
    </table>
</div>



<?php include '../layout/footer.php' ?>