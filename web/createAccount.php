<?php
    include("includes/header.php");
    include("createUser.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Create Account</h2>
            <form class="form my-2 my-lg-0" action="" method="post">
                <input class="form-control mr-sm-2" id="username" name="username" type="text" placeholder="Username">
                <br>
                <input class="form-control mr-sm-2" id="password" name="password" type="password" placeholder="Password">
                <br>
                <input class="form-control mr-sm-2" id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Confirm Password">
                <br>
                <button class="btn btn-outline-success my-2 my-sm-0" id="submit" name="submit" type="submit">Create Account</button>      
            </form>
            <span style="color:red;"><?php echo $error; ?></span>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
