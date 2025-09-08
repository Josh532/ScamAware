 <?php
$host = "sql104.infinityfree.com";
$dbname = "if0_39889468_reportascammer"; // must include prefix
$username = "if0_39889468";
$password = "MaMZJ3nmfRlbgUS";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}
?>