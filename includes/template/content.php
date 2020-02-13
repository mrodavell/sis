<div class="container">
    <div class="row">
        <div class="card mt-2">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Student Information System</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/login.php">
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="checkbox" name="remember" > Remember me?
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Login
                        </button>
                        <a href="registration.php" class="btn btn-primary form-control">
                            Sign up
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