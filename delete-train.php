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
    echo "sucessfully connect";
}
if(isset($_GET['deleteid'])){
    $sno = $_GET['deleteid'];
    $sql = "DELETE FROM `train` WHERE `sno` = $sno ";
    $result =  mysqli_query($conn , $sql);
    if($result){
         header('location:admin.php');
        
     }
     else{
         echo "delete is not successfully" .mysqli_error($conn);
     }

}


?>