<?php
$servername ="localhost";
$username = "root";
$password = "";
$database ="train";


// create a connection

$conn = mysqli_connect($servername , $username , $password , $database);


if(!$conn){
    die("<br> sorry we failed to connect : " . mysqli_connect_error());
}
else{
    echo "Successfuly conected";
}

?>