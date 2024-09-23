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
foreach($result as $row){
    $stdid = $row["id"]; 
}
?>


<?php 
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['change_pwd'])){
    if(($_POST['chnge_pwd'])==""){
        $fcg = "<div class='alert alert-warning' role='alert'>Please fill Field</div>";
    }
    else{
    $t_pwd = $_POST['chnge_pwd'];
    $query = "UPDATE `tbl_student` SET `std_pwd`='$t_pwd' WHERE id = $stdid";
    $result = mysqli_query($con,$query);
    if($result){
        $fcg = "<div class='alert alert-success' role='alert'>Changed Password Successfully</div>";
    }
    else{
        $fcg = "<div class='alert alert-success' role='alert'>Unable to Change Password</div>";
    }
}
}
?>


<div class="container bg-light ms-auto ">
<div class="col-sm-6 mx-4 jumbotron my-5">
  <form action="" method="POST">
    <h2 class="text-primary">Change Password</h2><br>
    <div class="form-group">
        <label for="course_name">Student Email:</label>
        <input type="text" readonly="" class="form-control" id="course_name" name="stuid" value="<?php echo $stemail?>">
    </div>
    <div class="form-group">
        <label for="course_name">Change Password:</label>
        <input type="password" required class="form-control" id="course_name" name="chnge_pwd">
    </div><br>
    <div class="text-center">
       <div><?php $msg ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="change_pwd">Submit</button><br><br>
      <?php if(isset($fcg)) {echo $fcg;} ?>
    </div>
  </form>
</div>
</div>