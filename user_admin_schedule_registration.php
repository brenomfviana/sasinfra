<?php

    if (isset($_REQUEST["name"]) &&
        isset($_REQUEST["start"]) &&
        isset($_REQUEST["end"]) &&
        isset($_REQUEST["scheduleType"])) {
        // Create a new schedule
        $schedule = array("name" => $_REQUEST["name"],
            "start" => $_REQUEST["start"],
            "end" => $_REQUEST["end"],
            "scheduleType" => $_REQUEST["scheduleType"]);
            
        // Open file
        $schedules = json_decode(file_get_contents("database/user_admin_schedules.json"), true);
        // Add new schedule
        array_push($schedules['schedules'], $schedule);
        // Update content
        if (file_put_contents('database/user_admin_schedules.json', json_encode($schedules)) !== false) {
            // Update page
          //  echo("/admin-scheduling.php");
        } else {
            echo("error:Houve um erro durante o cadastro. Por favor, tente novamente.");
        }
    }
?>