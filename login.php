<?php
    // Check login 
    if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
        // Read database
        $users = json_decode(file_get_contents("database/users.json"));
        // Found
        $found = false;
        $password = false;
        $user = null;
        // Search by user
        foreach($users->users as $u) {
            // Check if is user
            if ($_REQUEST["username"] === $u->username) {
                $found = true;
                // Check password
                if ($_REQUEST["password"] == $u->password) {
                    $password = true;
                    setcookie("username", $_REQUEST["username"], time() + (86400 * 30), "/"); // 86400 = 1 day
                    $user = $u->username;
                }
                break;
            }
        }
        // Check if the user was found
        if ($found) {
            // Check if the password is correct
            if ($password) {
                session_start();
                $_SESSION['user'] = $_REQUEST["username"];
                // Redirect
                if ($user->usertype == "admin") {
                    echo("/dashboard.php");
                } else {
                    echo("/user-scheduling.php");
                }
            } else {
                // ERROR
                echo("error:Senha inválida.<br>Solicite um adminstrador da SINFRA para se cadastrar.");
            }
        } else {
            // ERROR
            echo("error:Usuário não registrado.<br>Solicite um adminstrador da SINFRA para se cadastrar.");
        }
    }
?>