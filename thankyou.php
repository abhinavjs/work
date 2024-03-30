<?php 

  session_start();


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    body{
      background: linear-gradient(#F9F07A,#FFF7FC);
      height: 100vh;
    }
    .card{
      background: linear-gradient(#E5E483,#74E291);
      border-radius: 9px;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
  </style>
  <body>
    <?php
    require_once("admin/connection.php");

    $select="SELECT* FROM cafereservetb";

    $query=mysqli_query($conn,$select);

    $fetch=mysqli_fetch_array($query);
    
    ?>
    <div class="card mb-3 mt-5" style="max-width: 1200px; margin:auto; border:2px solid black; ; ">
    <div class="row g-0 ">
    <div class="col-md-4 text-center">
      <img src="admin/reservation/thnku2.jpg" \ class="img-fluid rounded-start"  alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="index.php" class="btn btn-warning float-end">Home</a>
        <h1 class="card-title text-uppercase"><i><b>THANKYOU FOR RESERVATION <br> <?php echo $_SESSION["customername"] ?> </b></i></h1>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
      </div>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>