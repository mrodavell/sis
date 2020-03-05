<?php 
    include_once('utilities/dbconnect.php');

    $userid = $_GET['userid'];

    $sql = "SELECT username, usertype FROM users WHERE userid = '$userid'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>
<div class="container">
    <div class="row">
        <div class="card mt-2 w-100">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Update Useraccount</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/update.php">
                    <input type="hidden" name="userid" value="<?= $userid; ?>">
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['username']; ?>" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="oldpassword" class="form-control" placeholder="Old Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="password" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="repassword" class="form-control" placeholder="Retype New Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <select class="form-control" name="usertype">
                            <option selected disabled>Choose a Usertype</option>
                            <?php
                                $sql = "SELECT * FROM roles";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                                    <option value="<?= $row['type']; ?>" <?= ($data['usertype'] == $row['type']) ? "selected" : "" ?>><?= ucfirst($row['type']); ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Save
                        </button>
                        <a href="records.php" class="btn btn-primary form-control">
                            Go Back
                        </a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                Copyright &copy; 2020
            </div>

        </div>
    </div>
</div>