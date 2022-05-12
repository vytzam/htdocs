<?php include '../layout/header.php';
session_start();
$locked = false;

if(isset($_SESSION['login_count'])){
    if($_SESSION['login_count']===3){
        $locked=true;
    }
} else {
    $_SESSION['login_count'] = 0;
}




?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Log In</div>
                <div class="card-body">
                <div class="container py-4">
                    <ul>
                    <?php
                    
                    if(isset($_SESSION['auth_errors'])){
                        $errors = $_SESSION['auth_errors'];
                        $_SESSION['auth_errors'] = [];
                        foreach($errors as $error){
                            echo "<li class ='text-danger'>$error</li>";
                        }
                    }
                    
                    ?>
                    </ul>
                </div>
                   <form action="..\scripts\login.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="your@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" <?php if($locked){echo "disabled";} ?>>Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include '../layout/footer.php' ?>