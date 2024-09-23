<?php
include("header.php");
?>

<?php 
 if(isset($_SESSION['myemail'])){
    $stemail = $_SESSION['myemail'];
 }
 else{
    echo "<script>window.location.href='../index.php'</script>";
 }
?>

<?php
$con = mysqli_connect("localhost","root","","db_student");
$query = "SELECT * FROM tbl_student where std_email = '$stemail'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)){
foreach($result as $row){
    $stdid = $row["id"];
    $stname = $row["std_name"];
    $stdemail = $row["std_email"];
    $stdpwd = $row["std_pwd"];
}
}
?>

<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['student_btn'])){
    $name = $_POST['stuname'];
    $ocp = $_POST['stuocp'];
    $imgname = $_FILES['std_image']['name'];
    $imgtmp = $_FILES['std_image']['tmp_name'];
    $folder = "images/".$imgname;
    move_uploaded_file( $imgtmp, $folder);
    $query = "UPDATE `tbl_student` SET `std_name`='$name',`std_ocp`='$ocp',`std_img`='$folder' WHERE id = $stdid";
    $result = mysqli_query($con,$query);
    if($result){
        echo $msg = "<div class='alert alert-success' role='alert'>Update Successfully</div>";
    }
    else{
        echo $msg = "<div class='alert alert-danger' role='alert'>Please Fill All Fields</div>";
    }
}
?>

<div class="container bg-light ms-auto">
<div class="col-sm-6 mx-4 jumbotron">
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="course_name">Student id</label>
        <input type="text" readonly="" class="form-control" id="course_name" name="stuid" value="<?php echo $stdid?>">
    </div>
    <div class="form-group">
        <label for="course_name">Student Email</label>
        <input type="text" readonly="" class="form-control" id="author_t" value="<?php echo $stdemail ?>" name="stuemail">
    </div>
    <div class="form-group">
        <label for="course_name">Student Name</label>
        <input type="text" class="form-control" id="course_dur" value="<?php echo $stname ?>" name="stuname">
    </div>
    <div class="form-group">
        <label for="course_name">Student ocp</label>
        <input type="text" class="form-control" id="course_org" name="stuocp">
    </div><br>
    <div class="form-group">
        <label for="course_name">Course Image</label>
        <input type="file" class="form-control-file" id="course_image" name="std_image">
    </div><br>
    <div class="text-center">
       <div><?php $msg ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="student_btn">Update</button>
      <a href="../index.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>

<?php
include("footer.php");
?>
