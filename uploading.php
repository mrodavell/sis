<?php 
    include("includes/template/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="jumbotron mt-2">
                <form action="utilities/upload.php" method="post" enctype="multipart/form-data">
                    <label for="title"><h3>Select Image to Upload</h3></label>
                    <div class="card p-2">
                        <input type="file" name="myFile">
                    </div>                    
                    <button class="btn btn-primary mt-1" type="submit">
                        <i class="fas fa-file-upload"></i>
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    include("includes/template/footer.php");
?>