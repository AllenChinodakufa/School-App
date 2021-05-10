<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "4.1");
define("DB_PORT", "3306");



$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if (!$conn) {
    die("Could not connect to database:" .mysqli_connect_error());
}

mysqli_select_db($conn, DB_NAME) or die ("Could not select datbase:". mysqli_connect_error());


?>
