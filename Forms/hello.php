<?php
$usrNameErr=$emaiErr=$webErr=$noteErr=$genderErr= "";
$userName=$email=$web=$note=$gender = "";//sukuriam tuscia i kuri keliaus viskas
function testInput($data){
    $data = trim($data);//nuimam tuscias vietas
    $data = stripslashes($data);//nuima pasvirusius bruksnius
    $data= htmlspecialchars($data); // numa spec harakterisu
    return $data;
}
$formData=[];
//zemiau patikrinam ar atejo POST metodas i serveri
if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($_POST['userName'])){
        $usrNameErr="User name required";
    }else { $userName =testInput($_POST['userName']);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$userName)){
            $usrNameErr="Only letters and space are aloweed";
        }else{$formData['userName']=$userName;}
    }
    if (empty($_POST['email'])){
        $emaiErr="Email is required";
    }else { $email =testInput($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emaiErr="Email format is not walid";
        }else{$formData['email']=$email;}
    }
    if (empty($_POST['web'])){
        $webErr="web name required";
    }else { $web =testInput($_POST['web']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i",$web)){
            $webErr="URL is invalid";
        }else{$formData['web']=$web;}
    }
    if (empty($_POST['note'])){
        $note="";
    }else { $note =testInput($_POST['note']);
    }
  $formData['note']=$note;
    if (empty($_POST['gender'])){
        $genderErr="gender is required";
    }else { $gender=testInput($_POST['gender']);
            $formData ['gender']=$gender;
    }
   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>

    <!-- <h1>Hello, <?php echo $_GET['userName'] ?></h1> -->
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>"method="POST">
<label for="userName">Username*</label><br>
<input type="text"name="userName" value="<?php echo $userName?>"><br>
<span style="color:red"><?php echo $usrNameErr?></span><br>
<label for="email">Email*</label><br>
<input type="text" name="email"value="<?php echo $email?>"><br>
<span style="color:red"><?php echo $emaiErr?></span><br>
<label for="web">Website</label><br>
<input type="text" name="web" value="<?php echo $web?>"><br>
<span style="color:red"><?php echo $webErr?></span><br>
<label for="note">Note</label><br>
<textarea name="note" id="" cols="30" rows="10"><?php echo $note?></textarea><br>
<span style="color:red"><?php echo $noteErr?></span><br>
<span>Gender:</span>
<label for="gender">Male</label><br>
<input type="radio" name="gender" value="male"<?php
 if(isset($gender)&& $gender =="male"){
     echo "checked";
 }
 ?>> <br>
<input type="radio"name="gender" value="female"<?php
 if(isset($gender)&& $gender =="female"){
     echo "checked";
 }?>> <br>
<input type="radio"name="gender" value="undefined"><?php
 if(isset($gender)&& $gender =="gender"){
     echo "checked";
 }?> <br>
<input type="submit">

</form>
<?php
?>
<table>
    <tr>
        <th>Username</th>
        <th>Eamail</th>
        <th>Website</th>
        <th>Gender</th>
        <th>Note</th>
    </tr>
    <tr>
        <?php
        if(empty ($usrNameErr) && empty($emaiErr) && empty ($webErr) && empty($noteErr) && empty($genderErr)&& $_POST){
            echo "<td>".$formData['userName']."</td><td>".$formData['email']."</td><td>".$formData['web'].".</td><td>".$formData['gender']."</td><td>".$formData['note']."</td>";
        }
        ?>
    </tr>
</table>
</body>
</html