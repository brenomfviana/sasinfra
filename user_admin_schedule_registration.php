<?php

    if (isset($_REQUEST["title"]) &&
        isset($_REQUEST["start"]) &&
        isset($_REQUEST["end"]) &&
        isset($_REQUEST["className"])) {
        // Create a new schedule
        $defaultEvent = array("title" => $_REQUEST["title"],
            "start" => $_REQUEST["start"],
            "end" => $_REQUEST["end"],
            "className" => $_REQUEST["className"]);
            
        // Open file
        $defaultEvents = json_decode(file_get_contents("database/user_admin_schedules.json"), true);
        // Add new schedule
        array_push($defaultEvents['defaultEvents'], $defaultEvent);
        // Update content
        if (file_put_contents('database/user_admin_schedules.json', json_encode($defaultEvents)) !== false) {
            // Update page
          //  echo("/admin-scheduling.php");
        } else {
            echo("error:Houve um erro durante o cadastro. Por favor, tente novamente.");
        }
    }
?>