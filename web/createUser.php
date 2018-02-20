<?php
    $is_unique = false;
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['passwordConfirm'])) {
            $error = "All fields are required!";
        }
        else {
            // Define $username and $password
            $username = $_POST['username'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['passwordConfirm'];

            if ($password !== $passwordConfirm) {
                $error = "Passwords do not match!";
            }
            else {
                $db = pg_connect("host=ec2-54-163-234-99.compute-1.amazonaws.com port=5432 dbname=ddq8lql4jjo099 user=hiewrduczohyvi password=5351c4f69d1cd32ea6c8271edf60cee446173a8857462f425fa86ba37b8b652c");
                $result = pg_query($db, "SELECT * FROM users");
                
                while ($row=pg_fetch_assoc($result)) {
                    if ($username == $row['username']) {
                        $error = "Sorry " . $username . " already exists. Choose a different username.";
                        $is_unique = false;
                        break;
                    }
                    else {
                        $is_unique = true;
                    }
                }

                if ($is_unique == true) {
                    $result = pg_query($db,"INSERT INTO users VALUES (default, '$username', '$password')");
                    header("location: index.php");
                }
            }
        }
    }
?>