<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Include de config.php
require_once 'config.php';




// Gebruik de $connection-variabele voor databasebewerkingen
$query = "SELECT * FROM villas";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);

// Include de detail_view.php
require_once 'detail_view.php';


// Sluit de databaseverbinding
mysqli_close($connection);
?>