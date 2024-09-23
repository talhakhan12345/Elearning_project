<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font awesome css link -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Animation link  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script&family=Edu+TAS+Beginner&family=Lemon&family=Pacifico&family=Roboto+Condensed&family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">


    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    

    <title>Ischool</title>
</head>
<body>
      
<!-- NAVBAR START -->
<nav class="navbar navbar-expand-sm navbar-dark ps-4 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ischool</a>
    <span class="navbar-text">Learn and implement</span>
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ps-5">
        <li class="nav-item custom-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-item">
          <a class="nav-link" href="course.php">Courses</a>
        </li>
        <li class="nav-item custom-item">
          <a class="nav-link" href="paymentstatus.php">Payment status</a>
        </li>
        <?php
          session_start();
          if(isset($_SESSION['myemail'])){
           echo ' <li class="nav-item custom-item">
           <a class="nav-link" href="student/studentprofile.php">My profile</a>
         </li>
         <li class="nav-item custom-item">
           <a class="nav-link" href="logout.php">Logout</a>
         </li>';
          }
          else{
            echo '<li class="nav-item custom-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
          </li>
          <li class="nav-item custom-item">
            <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up</a>';
          }
        ?>
        <li class="nav-item custom-item">
          <a class="nav-link" href="feedback1.php">Feedback</a>
        </li>
        <li class="nav-item custom-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item custom-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- NAVBAR END -->