<?php
session_start();
?>



<?php

//  LOGIN WORK // 
$con = mysqli_connect("localhost","root","","db_student");

$lemail = $_POST['email'];
$lpwd = $_POST['pwd'];

$query = "SELECT * FROM tbl_student where std_email = '$lemail' and std_pwd = '$lpwd'";
$result = mysqli_query($con , $query);
$row = mysqli_num_rows($result);
if($row == true){
    echo json_encode($row);
    $_SESSION['true'] = $row;
    $_SESSION['myemail'] = $lemail;
}
else{
    echo json_encode($row);
}
?>