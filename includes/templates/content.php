<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <label>Login</label>
        </div>
        <div class="card-body">
            <form method="POST" action="../transactions/login.php">
                <div class="row">
                    <input type="hidden" name="token" value="<?php echo md5('123'); ?>">
                    <div class="col-md-12 mb-1">
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-1">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-1">
                        <button class="btn btn-primary form-control" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>