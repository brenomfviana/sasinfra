<?php
    // Check login
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Read database
        $users = json_decode(file_get_contents("database/users.json"), true);
        // Found
        $found = false;
        $user = "";
        // Search by user
        foreach($users->users as $u) {
            // Check if is user
            if ($_POST["username"] == $u->username) {
                $found = true;
                $user = $u;
                break;
            }
        }
        // Check if the user was found
        if ($found) {
            // Redirect
            if ($user->usertype == "admin") {
                header("Location: /dashboard.php");
            } else {
                header("Location: /user-scheduling.php");
            }
        } else {
            //
        }
    }
?>