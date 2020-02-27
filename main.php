<?php 
    
    include("includes/template/header.php");
?>
    <div class="container">
        <div class="card p-2 mt-2">
            <form action="utilities/upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <div class="card p-2">
                    <input type="file" name="fileToUpload" required accept=".jpg">
                </div>              
                <button class="btn btn-primary mt-2" type="submit">
                    <i class="fas fa-upload"></i></span> Upload
                </button>
            </form>
        </div>  
    </div>
<?php
    include("includes/template/footer.php");
?>