<?php
$con = mysqli_connect("localhost","root","","db_student");
$tid = $_GET['stdid'];
$query = "DELETE FROM tbl_lesson where course_id = $tid";
$result = mysqli_query($con,$query);
if($result){
    header("location:lessons.php");
}
?>