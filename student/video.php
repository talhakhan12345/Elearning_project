<?php
session_start();
?>

<?php 
 if(isset($_SESSION['myemail'])){
    $stemail = $_SESSION['myemail'];
 }
 else{
    echo "<script>window.location.href='../LoginorSignup.php'</script>";
 }
?>

<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_GET['name'])){
  $cname = $_GET['name'];

  $query = "SELECT * FROM tbl_lesson where course_name = '$cname'";

  $result = mysqli_query($con,$query);
   
  foreach($result as $row){
    $img = $row['lesson_link'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .video-section {
  position: relative;
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #000;
}

.video-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.video-container video {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
    </style>
</head>
<body>
    
    <section class="video-section">
        <div class="video-container">
          <video width="100%" height="100%" controls accesskey="" loop muted>
            <source src="<?php echo $img ?>" type="video/mp4">
          </video>
        </div>
      </section>
    
</body>
</html>