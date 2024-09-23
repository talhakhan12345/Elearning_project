<?php
// insert student///
$con = mysqli_connect("localhost","root","","db_student");

$Sname = $_POST['name'];
$Semail = $_POST['email'];
$Spwd = $_POST['pwd'];

// $check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_student where email='$Semail'"));
// if($check>0){
//     echo json_encode($check);
// }
$query = "INSERT INTO `tbl_student`(`std_name`, `std_email`, `std_pwd`) VALUES ('$Sname','$Semail','$Spwd')";
$result = mysqli_query($con , $query);
if($result == true){
    $_SESSION['sname']= $Sname;
    echo json_encode($result);
}
else{
    echo json_encode($result);
}


?>