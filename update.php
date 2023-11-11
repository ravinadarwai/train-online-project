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
    
}






if(isset($_POST['done'])){
    $sno = $_GET['updateid'];
    $Train_no1 = $_POST['Train_no2'];
    $Train1 = $_POST['Train2'];
    $Route1 = $_POST['Route2'];
    $Arrival1 = $_POST['Arrival2'];
    $Dep_time1 = $_POST['Dep_time2'];
    $Total_seat1 = $_POST['Total_seat2'];
    $fare1 = $_POST['fare2'];
 $sql = "UPDATE train SET  Train_no ='$Train_no1', Train='$Train1' , Route ='$Route1' , Arrival='$Arrival1' , Dep_time = '$Dep_time1' ,Total_seat = '$Total_seat1'  , fare = '$fare1' WHERE sno= '$sno'";
 $result =  mysqli_query($conn , $sql);
 if($result){
    
    header('location:admin.php');
 }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
<div class="container my-4">
        <h2>ADD CLIENT</h2>

        <?php
        $updateid = $_GET['updateid'];
        $sql = " SELECT * FROM  train where sno='$updateid'";
         $result =  mysqli_query($conn , $sql);
           //$sno =0;
         while($row = mysqli_fetch_assoc($result)){
           //  $sno = $sno+1;

           ?>


        <form action="" method="post">
            <div class="mb-3">
                <label for="Train_no2" class="form-label">Train-no</label>
                <input type="text" class="form-control" value="<?= $row['Train_no']; ?>" id="Train_no2" name="Train_no2">
            </div>
            <div class="mb-3">
                <label for="Train2" class="form-email">Train</label>
                <input type="text" name="Train2" value="<?= $row['Train']; ?>" class="form-control" id="Train2" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="Route2" class="form-label">Route</label>
                <input type="text" value="<?= $row['Route']; ?>" class="form-control" id="Route2" name="Route2">
            </div>
            <div class="mb-3">
                <label for="Arrival2" class="form-label">Arrival</label>
                <input type="text" value="<?= $row['Arrival']; ?>" class="form-control" id="Arrival2" name="Arrival2">
            </div>
            <div class="mb-3">
                <label for="Dep_time2" class="form-label">dep-time</label>
                <input type="time" value="<?= $row['Dep_time']; ?>" class="form-control" id="Dep_time2" name="Dep_time2">
            </div>
            <div class="mb-3">
                <label for="Total_seat2" class="form-label">Total-seat</label>
                <input type="text" value="<?= $row['Total_seat']; ?>" class="form-control" id="Total_seat2" name="Total_seat2">
            </div>
            <div class="mb-3">
                <label for="fare2" class="form-label">fare</label>
                <input type="text" value="<?= $row['fare']; ?>" class="form-control" id="fare2" name="fare2">
            </div>

            <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
            <button type="submit" class="btn btn-primary" name="done">Submit</button>
        </form>

        <?php } ?>
    </div>
</body>
</html>