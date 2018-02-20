<?php
    include("includes/header.php");
    include("login.php");
    include("manageItems.php");

    // if not logged in redirect to index
    if(!isset($_SESSION["userId"])) {
        header('Location: index.php');
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2>Hello <span style="font-style: italic;"><?php echo $_SESSION["user"]; ?></span></h2>
            <span><?php echo $login_session; ?></span>
            <a href="logout.php">Log Out</a>
            <hr/>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
