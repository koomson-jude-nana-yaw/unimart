<?php

require_once 'database_connection.php';

    # instantiating database
    $database = new Database();
    $connection = $database->connection();