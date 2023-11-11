

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




<?php 

if(isset($_POST['done'])){
    $train_no = $_POST['train_no'];
    $train = $_POST['train'];
    $Route = $_POST['Route'];
    $arrival = $_POST['arrival'];
    $dep_time = $_POST['dep_time'];
    $totalseat = $_POST['total_seat'];
    $fare = $_POST['fare'];

   $sql = " INSERT INTO `train` ( `Train_no`, `Train`, `Route`, `Arrival`, `Dep_time`, `Total_seat`, `fare`) VALUES ('$train_no', ' $train', '$Route', ' $arrival ', '$dep_time',' $totalseat',  '$fare ')";


   $result2 =  mysqli_query($conn , $sql);

   if($result2){
    header('location:admin.php');
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
  }
  



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <style>
        .form-control{
            width:15rem;
        }
        
        body{
          
          
        background:url('https://images.travelandleisureasia.com/wp-content/uploads/sites/2/2023/02/14124006/Vande-Bharat-Express-1600x900.jpg');              
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;


        }
        .uh{
        margin-top:8rem;



        }
        .ug{
            width:34rem;
            background : linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.50));
        }
        .form-label{
            color : white;
        }
        
       
       </style>
</head>
<body>
    

<div class="container">
    <div class="uh">
<h2 style="color : white">ADD TRAIN</h2>
<form action="" method="post" class="ug">

                <div class="row">
                    <div class="col-lg-6">
                    
        <label for="train_no" class="form-label">Train_no</label>
        <input type="text" class="form-control" id="train_no" placeholder="Enter train number" name="train_no">
    </div>
    <div class="col-lg-6 ">
        <!-- </div>
        <div class="mb-3"> -->
        <label for="train" class="form-email">Train</label>
        <input type="text" name="train" class="form-control" id="train" aria-describedby="emailHelp" placeholder="Enter train name">
    </div>

    </div>
    
    <div class="row">
                    <div class="col-lg-6">
        <label for="Route" class="form-label">Route</label>
        <input type="text" class="form-control" id="Route" name="Route" placeholder="Enter Route">
    </div>
    <div class="col-lg-6">
        <label for="arrival" class="form-label">Arrival</label>
        <input type="text" class="form-control" id="arrival" name="arrival" placeholder="Enter arrival">
    </div>
    </div>

    <div class="row">
                    <div class="col-lg-6">
        <label for="dep_time" class="form-label">deptime</label>
        <input type="time" class="form-control" id="dep_time" name="dep_time" >
    </div>
    <div class="col-lg-6 ">
        <label for="total_seat" class="form-label">total-seat</label>
        <input type="text" class="form-control" id="total_seat" name="total_seat" placeholder="Enter Seat">
    </div>
    <div class="col-lg-6">
        <label for="fare" class="form-label">fare</label>
        <input type="text" class="form-control" id="fare" name="fare" placeholder="Enter fare">
    </div>
    </div>
    

    <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
    <button type="submit" class="btn btn-primary my-3"name="done">Save</button> <button type="submit" class="btn btn-danger" name="done">Cancel</button>
    
    
    </div>
    </div>

</form>
</div>
</body>
</html>



