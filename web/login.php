<?php
    session_start();
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is required";
        }
        else {
            // Define $username and $password
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db = pg_connect("host=ec2-54-163-234-99.compute-1.amazonaws.com port=5432 dbname=ddq8lql4jjo099 user=hiewrduczohyvi password=5351c4f69d1cd32ea6c8271edf60cee446173a8857462f425fa86ba37b8b652c");
            $result = pg_query($db,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
            $rows = pg_num_rows($result);
            if ($rows == 1) {
                $_SESSION["user"] = $username;
                while($row=pg_fetch_assoc($result)) {
                    $_SESSION["userId"] = $row['id'];
                }
                header("location: profile.php");
            }
            else {
                $error = "Username or Password is incorrect";
            }
        }
    }
?>