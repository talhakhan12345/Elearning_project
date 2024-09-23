<?php

// Contact student///
$con = mysqli_connect("localhost","root","","db_student");

$Sname = $_POST['name'];
$Ssubject = $_POST['subject'];
$Semail = $_POST['email'];
$Show = $_POST['how'];

$query = "INSERT INTO `tbl_contact`( `c_name`, `c_subject`, `c_email`, `c_how`) VALUES ('$Sname','$Ssubject','$Semail','$Show')";
$result = mysqli_query($con , $query);
if($result == true){
    echo json_encode($result);
}
else{
    echo json_encode($result);
}


?>