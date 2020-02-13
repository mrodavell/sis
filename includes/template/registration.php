<div class="container">
    <div class="row">
        <div class="card mt-2">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Student Information System</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/register.php">
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" onkeyup="validate(this);" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="repassword" class="form-control" placeholder="Retype Password" required>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Register
                        </button>
                        <a href="index.php" class="btn btn-primary form-control">
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

<script>
    function validate(e){
        let el = document.getElementById('msg');
        if(e.value.length <= 5){
            el.innerHTML = "Username is too short";
        }else{
            el.innerHTML = "";
        }
    }
</script>