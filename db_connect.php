<?php
$servername= "localhost";
$username="root";
$password= "";
$database="portfolio";

$conn = mysqli_connect($servername,$username,$password,$database);    //database connection

if (!$conn) {
    
    die("sorry we failed to connect:". mysqli_connect_error());
}

?>