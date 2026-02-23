<?php

$servername = "localhost";
$username = "root";
$password = "";
$server = "Log_In";

$connection = mysqli_connect($servername, $username, $password, $server);

if(!$connection){
    echo "failed";
}
else{
    echo "success";
}

?>