<?php 
    include("includes/template/header.php");
    include_once('utilities/dbconnect.php');
?>
<div class="container-fluid">
    <div class="card">
        <form action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" name="searchkey" placeholder="Enter Keyword">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Usertype</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM users";
            
            if(isset($_GET['searchkey'])){
                $searchkey = $_GET['searchkey'];
                $sql = "SELECT * FROM users WHERE username LIKE '%$searchkey%'";
            }
        

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
?>
            <tr>
                <td><?= $row['userid']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><?= ucfirst($row['usertype']); ?></td>
                <td><?= ($row['status']) ? 'Active' : 'Inactive'; ?></td>
                <td>
                    <a href="update.php?userid=<?= $row['userid']; ?>">
                        <span class="fas fa-edit text-warning"></span>
                        Update
                    </a> |
                    <a href="transactions/delete.php?userid=<?= $row['userid']; ?>">
                        <span class="fas fa-trash text-danger"></span>
                        Delete
                    </a>
                </td>
            </tr>
            <?php 
            }
?>

        </tbody>
    </table>
</div>
<script type="text/javascript">
    function onDelete(e){
        let ans = confirm("Are you sure?");
        if(ans){
            return true;
        }else{
            e.preventDefault();
        }
    }
</script>
<?php
    }
    include("includes/template/footer.php");
?>