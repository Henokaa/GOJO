<?php
define("host","localhost");
define("username","root");
define("password","");
define("database","gojo");
$connection = mysqli_connect(host,username,password,database);
if(!$connection){
    die("Establishing a connection with the server failed");
}
?>