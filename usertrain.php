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
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsiive Admin Dashboard | CodingLab </title>

  <link href="admin2.css" rel="stylesheet">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    .dataTables_wrapper .dataTables_filter input {
      margin-bottom: 34px;
    }
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
          <i class='bx bx-box'></i>
          <span class="links_name"> Add Trains
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Book Train</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Cancel Train</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Tickets</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Total Passengers
          </span>
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

      <!-- <div class="profile-details">
        <img src="download.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <!-- <i class='bx bx-chevron-down' ></i> 
      </div> -->
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box bg-danger">
          <div class="right-side">
            <div class="box-topic">Book train</div>

            <div class="indicator" style="margin-top: 33px;">
              <i class='bx bx-up-arrow-alt'></i>
              <!-- <span class="text">View all</span> -->
            </div>
          </div>
          <!-- <i class='bx bx-cart-alt cart'></i> -->
          <i class="fa-solid fa-bookmark cart"></i>
        </div>
        <div class="box bg-warning">
          <div class="right-side">
            <div class="box-topic">Cancel ticket</div>

            <div class="indicator" style="margin-top: 33px;">
              <i class='bx bx-up-arrow-alt'></i>
              <!-- <span class="text" >View all</span> -->
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' ></i> -->
          <i class="fa-regular fa-rectangle-xmark cart"></i>
        </div>
        <div class="box bg-success">
          <div class="right-side">
            <div class="box-topic"> view Ticket</div>

            <div class="indicator" style="margin-top: 33px;">
              <i class='bx bx-up-arrow-alt'></i>
              <!-- <span class="text">view all</span> -->
            </div>
          </div>
          <!-- <i class='bx bx-cart cart three' ></i> -->
          <i class="fa-solid fa-ticket cart"></i>
        
        </div>
      </div>
    </div>

        



        <div class="container my-5">
         
          <table class="table " id="myTable">

            
      

            <thead class="bg-dark my-4" style="color:white">
              <tr>
                <th scope="col">SNO</th>
                <th scope="col">Train_no</th>
                <th scope="col">Train</th>
                <th scope="col">Route</th>
                <th scope="col">Arrival</th>
                <th scope="col">dep_time</th>
                <th scope="col">Total_seat</th>
                <th scope="col">fare</th>
                <th scope="col"> Action</th>
              </tr>
            </thead>
            <tbody>




              <?php
        $sql = " SELECT * FROM `train`";
         $result =  mysqli_query($conn , $sql);
           //$sno =0;
         while($row = mysqli_fetch_assoc($result)){
           //  $sno = $sno+1;

            $sno = $row['sno'];
            $Train_no = $row['Train_no'];
            $Train = $row['Train'];
          
            $Route = $row['Route'];
            $Arrival = $row['Arrival'];

            $Dep_time = $row['Dep_time'];

            $Total_seat= $row['Total_seat'];
            $fare = $row['fare'];


            echo '<tr>
              <td scope = "row">'.$sno.'</td>
            
              <td scope = "row">'.$Train_no.'</td>
            
              <td scope = "row">'.$Train.'</td>
            
              <td scope = "row">'.$Route.'</td>
              <td scope = "row">'.$Arrival.'</td>
              <td scope = "row">'.$Dep_time.'</td>
              <td scope = "row">'.$Total_seat.'</td>
              <td scope = "row">'.$fare.'</td>
              <td> 
                 <button class="btn btn-success"><a href="booktrain.php"
               class="text-light" style="text-decoration:none">Book</a></button>
      
      
               
<!-- Modal -->
     
              </td>
            
            
            </tr>';
            
            
         }
            ?>


              <!-- <button class="btn btn-danger"><a href="delete2.php?deleteid='.$sno.'"
               class="text-light" style="text-decoration:none">Delete</a></button> -->







              <!-- // echo $row['sno'] . ". hello  "  .$row['name'] .  " your email is    " . $row['email']. " and your password is   ".$row['password'];
            // echo "<br>"; -->







              <?php
    
?>
             </section>

              <script>
                let sidebar = document.querySelector(".sidebar");
                let sidebarBtn = document.querySelector(".sidebarBtn");
                sidebarBtn.onclick = function () {
                  sidebar.classList.toggle("active");
                  if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                  } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                }
              </script>

              <script src="https://code.jquery.com/jquery-3.7.0.js"
                integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

              <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
              <script>
                $(document).ready(function () {
                  $('#myTable').dataTable();
                }
                ); 
              </script>



              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

              <!-- <script>
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mytable2 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
  </script> -->


</body>

</html>