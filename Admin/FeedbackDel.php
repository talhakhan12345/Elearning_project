<?php
$con = mysqli_connect("localhost","root","","db_student");
$tid = $_GET['id'];
$query = "DELETE FROM tbl_feedback where f_id = $tid";
$result = mysqli_query($con,$query);
if($result){
    header("location:feedback.php");
}
?>