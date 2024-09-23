<?php
// CHECKING EMAIL VERIFICATION CODE //
$con = mysqli_connect("localhost","root","","db_student");

    $remail = $_POST['temail'];

    $check = mysqli_num_rows(mysqli_query($con,"SELECT * FROM tbl_student where std_email = '$remail'"));
    if($check >0){
        echo json_encode($check);
    }
    else{
        echo json_encode($check);
    }

// CHECKING EMAIL VERIFICATION CODE END//
?>