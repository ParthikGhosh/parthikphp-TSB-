<?php
$dbhost = localhost;
$dbuser = getenv("username");
$dbpwd = getenv("password");
$dbname = getenv("database_name");
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("<br><h2>Mysql backing service secrets missing...</h2><br>");
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<br><h2>Mysql backing services provisioned via service broker is available...</h2><br>";
$connection->close();
?>
