<?php
    // Check login
    if (isset($_POST["f_username"]) &&
        isset($_POST["f_password"]) &&
        isset($_POST["f_usertype"]) &&
        isset($_POST["f_name"]) &&
        isset($_POST["f_email"]) &&
        isset($_POST["f_cpf"]) &&
        isset($_POST["f_phone"]) &&
        isset($_POST["f_day"]) &&
        isset($_POST["f_month"]) &&
        isset($_POST["f_year"]) &&
        isset($_POST["f_cep"]) &&
        isset($_POST["f_address"]) &&
        isset($_POST["f_complement"]) &&
        isset($_POST["f_number"]) &&
        isset($_POST["f_neighborhood"]) &&
        isset($_POST["f_city"]) &&
        isset($_POST["f_state"]) &&
        isset($_POST["f_country"])) {
        // Create a new user
        $user = array("username" => $_POST["f_username"],
            "password" => $_POST["f_password"],
            "usertype" => $_POST["f_usertype"],
            "name" => $_POST["f_name"],
            "email" => $_POST["f_email"],
            "cpf" => $_POST["f_cpf"],
            "phone" => $_POST["f_phone"],
            "b_day" => $_POST["f_day"],
            "b_month" => $_POST["f_month"],
            "b_year" => $_POST["f_year"],
            "cep" => $_POST["f_cep"],
            "address" => $_POST["f_address"],
            "complement" => $_POST["f_complement"],
            "number" => $_POST["f_number"],
            "neighborhood" => $_POST["f_neighborhood"],
            "city" => $_POST["f_city"],
            "state" => $_POST["f_state"],
            "country" => $_POST["f_country"]);
        echo("alert($users)");
        // Open file
        $users = json_decode(file_get_contents("database/users.json"), true);
        // Add new user
        array_push($users['users'], $user);
        // Update content
        file_put_contents('database/users.json', json_encode($users));
        // Update page
        header("Location: /admin-user-registration.php");
    }
?>