<?php
    session_start();
    // Check login
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Read database
        $users = json_decode(file_get_contents("database/users.json"));
        // Found
        $found = false;
        $password = false;
        $user = null;
        // Search by user
        foreach($users->users as $u) {
            // Check if is user
            if ($_POST["username"] == $u->username) {
                $found = true;
                // Check password
                if ($_POST["password"] == $u->password) {
                    $password = true;
                    setcookie("username", $_POST["username"], time()+100000);
				    setcookie("password", $_POST["password"], time()+100000);
                    $user = $u;
                }
                break;
            }
        }
        // Check if the user was found
        if ($found) {
            // Check if the password is correct
            if ($password) {
                $_SESSION['user'] = $user;
                // Redirect
                if ($user->usertype == "admin") {
                    header("Location: /dashboard.php");
                } else {
                    header("Location: /user-scheduling.php");
                }
            } else {
                // ERROR
                $_SESSION["ERROR"] = "Invalid password!";
                header("Location: /index.php");
            }
        } else {
            // ERROR
            $_SESSION["ERROR"] = "User not registered!";
            header("Location: /index.php");
        }
    }
?>