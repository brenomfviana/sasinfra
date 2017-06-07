<?php
    // Check login
    if (isset($_REQUEST["type"]) &&
        isset($_REQUEST["role"]) &&
        isset($_REQUEST["quantity"])) {
        // Create a new schedule
        $schedule = array("type" => $_REQUEST["type"],
            "role" => $_REQUEST["role"],
            "quantity" => $_REQUEST["quantity"]);
        // Open file
        $schedules = json_decode(file_get_contents("database/schedules.json"), true);
        // Add new schedule
        array_push($schedules['schedules'], $schedule);
        // Update content
        if (file_put_contents('database/schedules.json', json_encode($schedules)) !== false) {
            // Update page
            echo("/admin-scheduling.php");
        } else {
            echo("error:Houve um erro durante o cadastro. Por favor, tente novamente.");
        }
    }
?>