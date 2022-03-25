<?php

include '../layout/header.php' ?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Sign Up</div>
                <div class="card-body">
                    <form action="..\scripts\signUp2.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nick name " name="uname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="your@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword">
                        </div>
                        <!-- <div class="form-group">
                            <label for="avatar" >Upload your avatar</label>
                            <input type="file" class="form-control-file" name="avatar">
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include '../layout/footer.php' ?>