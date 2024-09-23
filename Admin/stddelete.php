<?php
$con = mysqli_connect("localhost","root","","db_student");
$stid = $_GET['stdid'];
$query = "DELETE FROM tbl_student where id = $stid";
$result = mysqli_query($con,$query);
if($result){
    header("location:students.php");
}
?>