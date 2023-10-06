<?php

$host = "localhost";

$username = "root";

$password = "";

$database = "avapartmentss_db";

$config = mysqli_connect($host, $username, $password, $database);

if(!$config){
    die("Database connection failed".mqsqli_error($config));
}
else{
    // echo "Database Connection Success!";
}

?>