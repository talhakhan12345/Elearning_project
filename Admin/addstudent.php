<?php
include("header.php");
?>

<?php
 if(isset($_SESSION['admin_login_true'])){
  $adminemail = $_SESSION['email'];
 }
 else{
    echo "<script>window.location.href='../index.php'</script>";
 }
?>


<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['newsubmit'])){
 $tname = $_POST['sname'];
 $temail = $_POST['semail'];
 $tpwd = $_POST['spwd'];
 $tocp = $_POST['socp'];
 $query = "INSERT INTO `tbl_student`( `std_name`, `std_email`, `std_pwd`, `std_ocp`) VALUES ('$tname','$temail','$tpwd','$tocp')";
 $result = mysqli_query($con,$query);
 if($result){
    echo $std = "<div class='alert alert-success' role='alert'>Add Student Successfully</div>";
 }
 else{
    echo $std = "<div class='alert alert-success' role='alert'>Please Fill All Fields</div>";
 }
}
?>

<div class="container bg-light">
    <div class="col-sm-6 mx-auto">
        <h3 class="text-center">Add Students</h3>
    <form method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name:</label>
            <input type="text" class="form-control" name="sname" placeholder="Enter your Name">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email:</label>
            <input type="email" class="form-control" id="formGroupExampleInput2" name="semail" placeholder="Enter your Email">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Password:</label>
            <input type="password" class="form-control" name="spwd" placeholder="Enter your Password">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">occupation:</label>
            <input type="text" class="form-control" name="socp" placeholder="Enter your occupation">
        </div>
        <div class="text-center">
       <div><?php $std ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="newsubmit">Submit</button>
      <a href="students.php" class="btn btn-secondary">Close</a>
    </div>
    </form>
</div>
</div>


<?php
include("footer.php");
?>