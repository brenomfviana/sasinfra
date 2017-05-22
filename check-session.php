<?php
    session_start();
    echo("<h1 style=\"color=#111;\">AAAAAAAAAAAAAAAAAAA</hq>");
    echo("<h1 style=\"color=#111;\">AAAAAAAAAAAAAAAAAAA</hq>");
    echo("<h1 style=\"color=#111;\">AAAAAAAAAAAAAAAAAAA</hq>");
    // Check if the user are logged
	if(!empty($_COOKIE["username"]) && !empty($_COOKIE["password"])) {
		$username = $_COOKIE["username"];
    	$password = $_COOKIE["password"];
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
                    $user = $u;
                }
                break;
            }
        }// Check if the user was found
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
            }
        }
	}
?>