<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include de config.php
require_once 'config.php';

$stmt = $connection->prepare('SELECT * FROM villas');
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);

$numRows = count($rows);

// Geef de resultaten door aan de weergave
include_once 'villas_view.php';

?>