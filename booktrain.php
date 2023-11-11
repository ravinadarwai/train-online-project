<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "train";


      // create a connection

      $conn = mysqli_connect($servername, $username, $password, $database);


      if (!$conn) {
        die("<br> sorry we failed to connect : " . mysqli_connect_error());
      } 
      


      ?> 






<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsiive Admin Dashboard | CodingLab</title>

  <link href="admin2.css" rel="stylesheet">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>

  </style>

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
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>



    <div class="home-content">

      <h2>Book train</h2>
      <hr>
    </div>

    <!---------insert query---------->


    <?php
     
    if (isset($_POST['done'])) {
      $name = $_POST['name'];
      $contact = $_POST['contact'];
      $email = $_POST['email']; 
      $address = $_POST['address'];
      $train = $_POST['train'];
      $train_name = $_POST['train_name'];
      $arrival= $_POST['arrival'];
      $dep_time= $_POST['dep_time'];
    
     
      $sql = " INSERT INTO `user` ( `name`,`contact` ,`email`, `address`, `train`, `train_name`, `arrival`,`dep_time`) VALUES ('$name','$contact', '$email',  '$address', '$train','$train_name',  '$arrival','$dep_time')";

         


      $result2 =  mysqli_query($conn, $sql);

      if ($result2) {
       header('location:ticket.php');
        

      } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
      }
    }




    ?>



    <div class="container">
      <form action="" method="post">
        <div class="row">
          <div class="col-lg-6">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
          <div class="col-lg-6">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="name" placeholder="contact no" name="contact">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="col-lg-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <label for="	train" class="form-label">Train-no</label>
            <input type="text" class="form-control" id="	train" placeholder="Enter email" name="train">
          </div>
          <div class="col-lg-6">
            <label for="train_name" class="form-label">Train-name</label>
            <input type="text" class="form-control" id="train_name" placeholder="Enter train-name" name="train_name">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <label for="arrival" class="form-label">arrival</label>
            <input type="text" class="form-control" id="arrival" placeholder="Enter arrival" name="arrival">
          </div>
          <div class="col-lg-6">
            <label for="dep_time" class="form-label">dep-time</label>
            <input type="time" class="form-control" id="dep_time" placeholder="Enter dep-time" name="dep_time">
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-6">
          <label for="fare" class="form-label">fare</label>
        <input type="text" class="form-control" id="fare" placeholder="Enter fare"   name="fare">
          </div>
        </div> -->

        <!-- Button trigger modal -->
        <!-- Button trigger modal -->
        <button  type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Make payment
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Make payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label for="upi" class="form-label">Enter upi</label>
                <input type="text" class="form-control" id="upi" placeholder="Enter upi" name="upi">
                <label for="upi" class="form-label">Enter amount</label>
                <input type="text" class="form-control" id="upi" placeholder="Enter amount" name="upi">
              </div>  
              <div class="modal-footer">

                <button type="submit" class="btn btn-success"  name="done"><a  href="ticket.php" style="text-decoration:none; color:white; ">Done</a>

                </button>
              </div>

            </div>
          </div>
        </div> 
       

      </form>
    </div>


  </section>



  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>