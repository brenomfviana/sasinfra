<?php
    session_start();
    // Check login
    if (isset($_POST["f_parameter"]) &&
        isset($_POST["f_searchuser"])) {
        // Open file
        $users = json_decode(file_get_contents("database/users.json"), true);
        // Add array in a session variable
        $_SESSION['users'] = $users;
        // Check if content is empty
        if ($_POST["f_searchuser"] == "") {
            // Show all users
            foreach($users->users as $u) {
                echo("tr>"
                        . "<th class=\"text-nowrap\" scope=\"row\">$u->name</th>"
                        . "<td> $u->username </td>"
                        . "<td> $u->cpf </td>"
                        . "<td> <a href=\"remove-user.php\">Remover</a> </td>"
                        . "<td> <a href=\"admin-update-user-data.php\">Atualizar dados</a> </td>"
                    ."</tr>");
            }
        } else {
            // Show users by parameter
            foreach($users->users as $u) {
                // Check parameter type
                if (isset($_POST["f_parameter"] == "name" 
                    && strpos($u->name, $_POST["f_searchuser"]) == false) {
                    continue;
                }
                // Check parameter type
                if (isset($_POST["f_parameter"] == "username"
                    && strpos($u->username, $_POST["f_searchuser"]) == false) {
                    continue;
                }
                // Check parameter type
                if (isset($_POST["f_parameter"] == "cpf"
                    && strpos($u->cpf, $_POST["f_searchuser"]) == false) {
                    continue;
                }
                echo("tr>"
                        . "<th class=\"text-nowrap\" scope=\"row\">$u->name</th>"
                        . "<td> $u->username </td>"
                        . "<td> $u->cpf </td>"
                        . "<td> <a href=\"remove-user.php\">Remover</a> </td>"
                        . "<td> <a href=\"admin-update-user-data.php\">Atualizar dados</a> </td>"
                    ."</tr>");
            }
        }
        // Update page
        header("Location: /admin-search-user.php");
    }
?>