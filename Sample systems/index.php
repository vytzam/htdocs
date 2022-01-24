<?php
include 'layout/header.php';
$usernameValue = $emailvalue = $passError="";
if($_GET){
    $usernameValue=$_GET['userName'];
    $emailvalue=$_GET['email'];
    $passError=$_GET['error'];
}
?>

<body >
<h2>Fill registration form</h2>
<form action="scripts/register.php" method="POST">
<div class="form-floating">
    <input type="text" name="userName" class="form-control" required value="<?php echo $usernameValue?>">
    <label for="userName">Username</label>
</div>
<div class="form-floating">
    <input type="email"class="form-control"name="email"required value="<?php echo $emailvalue?>">
    <label for="email">Email</label>
</div>
<div class="form-floating">
    <input type="password" name="password" class="form-control"required>
    <label for="password">Password</label>
</div>
<div class="form-floating">
    <input type="password" name="confirmPassword" class="form-control"required>
    <span class="badge bg-danger"><?php echo $passError ?></span>
    <label for="confirmPassword"> Confirm Password</label>
</div>
<button type="submit" class = "btn btn-lg btn-primary">Register
</button>

</form>
    


<?php
include 'layout/footer.php';
?>
</body>
</html>