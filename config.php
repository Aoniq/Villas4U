<?php

// Define environment variables
$_ENV = parse_ini_file('.env');

// MySQL connection configuration
$config['db_host'] = $_ENV['DB_HOST'];
$config['db_name'] = $_ENV['DB_DATA'];
$config['db_user'] = $_ENV['DB_USER'];
$config['db_pass'] = $_ENV['DB_PASSWORD'];

// Create a connection to MySQL
$connection = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);

// Check the connection
if (mysqli_connect_errno()) {
    die("MySQL connection failed: " . mysqli_connect_error());
}
