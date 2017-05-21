<?php
    // Check login
    if (isset($_REQUEST["fusername"]) &&
        isset($_REQUEST["fpassword"]) &&
        isset($_REQUEST["fusertype"]) &&
        isset($_REQUEST["fname"]) &&
        isset($_REQUEST["femail"]) &&
        isset($_REQUEST["fcpf"]) &&
        isset($_REQUEST["fphone"]) &&
        isset($_REQUEST["fday"]) &&
        isset($_REQUEST["fmonth"]) &&
        isset($_REQUEST["fyear"]) &&
        isset($_REQUEST["fcep"]) &&
        isset($_REQUEST["faddress"]) &&
        isset($_REQUEST["fcomplement"]) &&
        isset($_REQUEST["fnumber"]) &&
        isset($_REQUEST["fneighborhood"]) &&
        isset($_REQUEST["fcity"]) &&
        isset($_REQUEST["fstate"]) &&
        isset($_REQUEST["fcountry"])) {
        // Create a new user
        $user = array("username" => $_REQUEST["fusername"],
            "password" => $_REQUEST["fpassword"],
            "usertype" => $_REQUEST["fusertype"],
            "name" => $_REQUEST["fname"],
            "email" => $_REQUEST["femail"],
            "cpf" => $_REQUEST["fcpf"],
            "phone" => $_REQUEST["fphone"],
            "b_day" => $_REQUEST["fday"],
            "b_month" => $_REQUEST["fmonth"],
            "b_year" => $_REQUEST["fyear"],
            "cep" => $_REQUEST["fcep"],
            "address" => $_REQUEST["faddress"],
            "complement" => $_REQUEST["fcomplement"],
            "number" => $_REQUEST["fnumber"],
            "neighborhood" => $_REQUEST["fneighborhood"],
            "city" => $_REQUEST["fcity"],
            "state" => $_REQUEST["fstate"],
            "country" => $_REQUEST["fcountry"]);
        // Open file
        $users = json_decode(file_get_contents("database/users.json"), true);
        // Add new user
        array_push($users['users'], $user);
        // Update content
        if (file_put_contents('database/users.json', json_encode($users)) !== false) {
            // Update page
            echo("/index.php");
        } else {
            echo("error:Houve um erro durante o cadastro. Por favor, tente novamente.");
        }
    }
?>