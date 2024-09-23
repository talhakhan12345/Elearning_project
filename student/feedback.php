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
if(isset($_POST['feedback_btn'])){
    if(($_POST['fd_content'])==""){
        $fcg = "<div class='alert alert-warning' role='alert'>Please fill Field</div>";
    }
    else{
    $f_content = $_POST['fd_content'];
    $f_id = $_POST['stuid'];
    $query = "INSERT INTO `tbl_feedback`( `f_content`, `std_id`) VALUES ('$f_content','$f_id')";
    $result = mysqli_query($con,$query);
    if($result){
        $fcg = "<div class='alert alert-success' role='alert'>Submitted Successfully</div>";
    }
    else{
        $fcg = "<div class='alert alert-success' role='alert'>Unable to Submitted</div>";
    }
}
}
?>


<div class="container bg-light ms-auto ">
<div class="col-sm-6 mx-4 jumbotron my-5">
  <form action="" method="POST">
    <h2 class="text-primary">Feedback</h2><br>
    <div class="form-group">
        <label for="course_name">Student id</label>
        <input type="text" readonly="" class="form-control" id="course_name" name="stuid" value="<?php echo $stdid?>">
    </div>
    <div class="form-group">
        <label for="course_name">Feedback:</label>
        <textarea type="text" class="form-control" required id="desc" name="fd_content" row=2></textarea>
    </div><br>
    <div class="text-center">
       <div><?php $msg ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="feedback_btn">Submit</button><br><br>
      <?php if(isset($fcg)) {echo $fcg;} ?>
    </div>
  </form>
</div>
</div>


<?php 
include("footer.php");
?>