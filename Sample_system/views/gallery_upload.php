<?php 
include '../layout/header.php';
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-success text-white mb-8">
                <div class="card-header">Please Upload 4 Images to Gallery</div>
                <div class="card-body">
                    <form action="http://localhost/sample_system/views/gallery.php" method="POST" enctype="multipart/form-data">
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle1" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image2">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle2" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image3">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle3" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image4">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle4" placeholder="Image Title">
                            </div>
                        </div>
                        <p>Please select background color:</p>
                        <div>
                            <select name="colors">
                                <option value="danger">Red</option>
                                <option value="success">Green</option>
                                <option value="primary">Blue</option>
                            </select>
                        </div>
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="color" id="danger" value="danger">
                            <label class="form-check-label" for="danger">
                                Red
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color" id="light" value="light" checked>
                            <label class="form-check-label" for="light">
                                White
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color" id="info" value="info">
                            <label class="form-check-label" for="info">
                                Blue
                            </label> -->
                      
                        <button class="btn btn-dark" type="submit">Upload</button>
                    </form>
                    <p class="card-text">Accepted image types: jpg.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../layout/footer.php';
?>