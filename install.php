<?php

require_once("./backend/database/connection.php");

$connection = new connection();
$connection->connectToDB();
$connection->makeTables();
header("Location: http://localhost/Social%20Media/");