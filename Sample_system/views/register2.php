<?php
include '../layout/header.php';

?>
<div class=" container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-success text-white mb-8">
                <div class="card-header text-center">Register Form</div>
                <form action="/Sample_system/scripts/signUP.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <input type="text" class="form-control" name="fname" placeholder="First name">
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" name="lname" placeholder="Last name">
                </div>
                <div class="card-body">
                    <input type="email" class="form-control" name="email" placeholder="your@email.com">
                </div>
                <div class="card-body">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" >
                </div>
                <div class="card-body">
                    <label for="confirmPassword"> Confirm Password</label>
                    <input type="Password" class="form-control" name="confirmPassword" >
                </div>
                <div class="card-body">
                <label for="file"> File upload</label>
                <input type="file" class="form-control-file" name="image2">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-lg btn-secondary" placeholder="Submit">
                </div>
                </form>

            </div>
        </div>
    </div>
               
            
</div>






<?php
include '../layout/footer.php';

?>