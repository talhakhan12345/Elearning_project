<?php
include("header.php");
?>
<?php 
 if(isset($_SESSION['myemail'])){
    $stemail = $_SESSION['myemail'];
 }
 else{
    echo "<script>window.location.href='../LoginorSignup.php'</script>";
 }
?>


<div>
<h4 class="text-center mt-5-5">All Courses</h4>
</div>

<?php
$con = mysqli_connect("localhost","root","","db_student");
$query = "SELECT * FROM tbl_order where std_email = '$_SESSION[myemail]'";
$result = mysqli_query($con,$query);
foreach($result as $row){
    $email = $row['std_email'];
    $_SESSION['temail'] = $email; 
}
?>

<?php
 if(isset($_SESSION['temail'])){
    $query = "SELECT * FROM tbl_order where std_email = '$_SESSION[temail]'";
    $result = mysqli_query($con,$query);
    foreach($result as $row){
        $name = $row['course_name'];
        $cvv = $row['cvv'];
        $_SESSION['cname'] = $row['course_name'];
    
        $query1 = "SELECT * FROM tbl_course where course_name = '$_SESSION[cname]'";
    $result1 = mysqli_query($con,$query1);
    
    foreach($result1 as $row){
       $img = $row["course_img"];
    }
    
        echo '<div class="container mt-5 me-4">
        <div class="row">
            <div class="jumptron">
                <div class="bg-light mb-3">
                    <h5 class="card-header">'.$name.'</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="'.$img.'" alt="" class="card-img-top mt-4" alt="pic" >
                        </div>
                        <div class="col-sm-6 mb-3">
                         <div class="card-body">
                            <p class="card-tittle">this skill its very helpful to you</p>
                            <small class="card-text">Duration: 10 days</small>
                            <br>
                            <small class="card-text">Instructor: talha</small>
                            <br>
                            <p class="card-text d-inline">Price:<small><del>Rs 400</del></small>
                          <span class="font-weight-bolder">Rs  </span>
                        </p>
                        <a href="video.php?name='.$name.'" class="btn btn-primary mt-5 float-right">
                          Watch course
                        </a>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    } 
    
 }

 else{
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        .message-box {
            width: 600px;
            height: 250px;
            padding: 45px;
            margin: 20px auto;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
        }

        .message-box h2 {
            margin-top: 0;
            font-size: 20px;
        }

        .message-box p {
            margin: 10px 0;
            font-size: 20px;
        }

        .message-box button {
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .message-box button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Message Box Example</title>
</head>
<body>

    <div class='message-box'>
        <h2>Reminder</h2>
        <p>we noticed you haven't completed your purchase yet
       so please buy any course then see your courses </p>
        <a href='../course.php'>
        <button>Go to Shopping</button>
        </a>
    </div>

</body>
</html>
";
 }


?>






<?php
include("footer.php");
?>