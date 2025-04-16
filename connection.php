<?php
    $database = new mysqli("localhost", "root", "shrilli@040904", "edoc");
    if ($database->connect_error) {
        die("Connection failed: " . $database->connect_error);
    }
?>
