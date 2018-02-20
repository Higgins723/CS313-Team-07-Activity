<?php 
    include("includes/header.php");
    include("login.php");

    if(isset($_SESSION["userId"])) {
        header('Location: profile.php');
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Login</h1>
            <form class="form-inline my-2 my-lg-0" action="" method="post">
                <input class="form-control mr-sm-2" id="username" name="username" type="text" placeholder="Username">
                <input class="form-control mr-sm-2" id="password" name="password" type="password" placeholder="Password">
                <button class="btn btn-outline-success my-2 my-sm-0" id="submit" name="submit" type="submit">Login</button>      
            </form>
            <span style="color:red;"><?php echo $error; ?></span>
            <hr>
            <a href="createAccount.php" class="btn btn-outline-primary my-2 my-sm-0">Create Account</a>
            <br>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>