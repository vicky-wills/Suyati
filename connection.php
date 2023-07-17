<?php

$DB_HOST="localhost";
$DB_NAME="suycadmi_livesuyati";
$DB_USER="suycadmi_livesuyati";
$DB_PASSWORD="aUBcl3~aTrf)";

$conn = new mysqli($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
if($conn-> connect_error)
{
    die("Connection Failed:".$conn-> connect_error);
}

?>