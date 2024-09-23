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
$uid = $_GET['stdid'];
$uname = $_GET['name'];
$uemail = $_GET['email'];
$upwd = $_GET['pwd'];
$uocp = $_GET['ocp'];
?>

<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['update_std'])){
 $tname = $_POST['sname'];
 $temail = $_POST['semail'];
 $tpwd = $_POST['spwd'];
 $tocp = $_POST['socp'];
 $query = "UPDATE `tbl_student` SET `std_name`='$tname',`std_email`='$temail',`std_pwd`='$tpwd',`std_ocp`='$tocp' WHERE id = $uid";
 $result = mysqli_query($con,$query);
 if($result){
     $std = "<div class='alert alert-success' role='alert'>Update Successfully</div>";
 }
 else{
     $std = "<div class='alert alert-success' role='alert'>Error Not Updated</div>";
 }
}
?>

<div class="container bg-light">
    <div class="col-sm-6 mx-auto">
        <h3 class="text-center">Update Students</h3>
    <form method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name:</label>
            <input type="text" class="form-control" name="sname" value="<?php echo $uname ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email:</label>
            <input type="email" class="form-control" id="formGroupExampleInput2" name="semail" value="<?php echo $uemail ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Password:</label>
            <input type="password" class="form-control" name="spwd" value="<?php echo $upwd ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">occupation:</label>
            <input type="text" class="form-control" name="socp" value="<?php echo $upwd ?>">
        </div>
        <div class="text-center">
       <div><?php $std ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="update_std">Update</button>
      <a href="students.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($std)) {echo $std; } ?>
    </form>
</div>
</div>


<?php
include("footer.php");
?>
