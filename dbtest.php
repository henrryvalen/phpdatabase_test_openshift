<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

echo "MYSQL_SERVICE_HOST"."$dbhost";
echo "MYSQL_SERVICE_PORT"."$dbport";
echo "databaseuser"."$dbuser";
echo "databasepassword"."$dbpwd";
echo "databasename"."$dbname";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
