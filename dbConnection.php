<?php


$databaseHost = 'lin-23376-13302-mysql-primary.servers.linodedb.net';
$databaseName = 'test';
$databaseUsername = 'linroot';
$databasePassword = '50FRjHfGlOOa!T4r';
$databasePort = 3306;

// SSL configuration
$sslOptions = array(
    "ssl" => array(
        "enabled" => true,
        "ca" => "chhay-mysql-ca-certificate.crt", // Replace with the path to your SSL certificate file
    )
);

// Open a new secure connection to the MySQL server
$mysqli = mysqli_init();
mysqli_ssl_set($mysqli, NULL, NULL, $sslOptions["ssl"]["ca"], NULL, NULL);
mysqli_real_connect($mysqli, $databaseHost, $databaseUsername, $databasePassword, $databaseName, $databasePort);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // Handle the connection error appropriately
    // You can customize the error handling based on your needs
    die();
}

// Connection successful, continue with your code...

