<?php
//connection string
$connectionInfo = array("UID" => "jayshinee", "pwd" => "queenjay123@", "Database" => "ddacdbtp046742", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddactp046742.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn)
{
die("Error connection: ".sqlsv_errors());
}
echo " Connection Success: connected!";

?>
