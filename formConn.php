<?php
function connForm()
{
    // PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:tompkinsofalltrades-server.database.windows.net,1433; Database = tompkinsdb", "tompkinsofalltrades-server-admin", "Capstone1!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
    $connectionInfo = array("UID" => "tompkinsofalltrades-server-admin", "pwd" => "Capstone1!", "Database" => "tompkinsdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:tompkinsofalltrades-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
}
    ?>

