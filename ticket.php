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
    // echo "Successfuly conected";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="admin2.css" rel="stylesheet">
    <title>Ticket</title>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-train'></i>
      <span class="logo_name">freight</span>
    </div>
    <ul class="nav-links" style="padding-left:0px">
      <li>
        <a href="#" class="active">
          <!-- <i class="bx bx-fa-sharp fa-solid fa-grid-horizontal"></i> -->
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
     
      <li>
        <a href="#">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Book Ticket</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Cancel Ticket</span>
        </a>
      </li>
      <li>
        <a href="ticket.php">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">View Tickets</span>
        </a>
      </li>
      

      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
      </li>
      <li class="log_out">
        <a href="#">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>

  <section class="home-section">
    

    <div class="container">
       

       
        <div class="row" >
            <table class="table table-bordered">
                <thead>
                  <h1 class="mt-5 mb-4">Your Ticket Details</h1>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone no</th>
                    
                    <th scope="col">Adress</th>
                    <th scope="col">Train No</th>
                    <th scope="col">Train Name</th>
                    <th scope="col">Arival</th>
                    <th scope="col">Time</th>
                 
                  </tr>
                </thead>
                
              <?php
        $sql = " SELECT * FROM `user` ORDER BY sno DESC LIMIT 1";
         $result =  mysqli_query($conn , $sql);
           //$sno =0;
       if ($row = mysqli_fetch_assoc($result)){
           //  $sno = $sno+1;

            $name = $row['name'];
            $email= $row['email'];
            $contact = $row['contact'];
            $address = $row['address'];
            $train = $row['train'];
          
            $train_name = $row['train_name'];
            $arrival = $row['arrival'];

            $dep_time = $row['dep_time'];

           

            echo '<tr>
              <td scope = "row">'.$name.'</td>
            
              <td scope = "row">'.$email.'</td>
              
              <td scope = "row">'.$contact.'</td>

              <td scope = "row">'.$address.'</td>
      
              <td scope = "row">'.$train.'</td>

              <td scope = "row">'.$train_name.'</td>
            
              <td scope = "row">'.$arrival.'</td>
              <td scope = "row">'.$dep_time.'</td>
              
            
            </tr>';
            
       }
         
            ?>
                 
                </tbody>
              </table>
        </div>
    </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>