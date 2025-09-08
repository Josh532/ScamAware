 <?php

$host = "sql104.infinityfree.com";
$dbname ="if0_39889468_logindb";
$username = "if0_39889468";
$password = "MaMZJ3nmfRlbgUS";

$mysqli = new mysqli(hostname: $host,
                    username:$username,
                    password:$password,
                    database:$dbname);

                   if ($mysqli ->connect_errno) {
                        die("Connection error: " . $mysqli ->connect_error);
                    }

return $mysqli