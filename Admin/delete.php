<?php
$con = mysqli_connect("localhost","root","","db_student");
$cid = $_GET['id'];
$query = "DELETE FROM tbl_course where course_id = $cid";
$result = mysqli_query($con,$query);
if($result){
    header("location:courses.php");
}

?>