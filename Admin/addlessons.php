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
if(isset($_POST['lesson_btn'])){
    $name = $_POST['lesson_name'];
    $desc = $_POST['desc'];
    $vidname = $_FILES['link_video']['name'];
    $vidimp = $_FILES['link_video']['tmp_name'];
    $folder = "video/".$vidname;
    move_uploaded_file( $vidimp, $folder);
    $id = $_POST['course_id'];
    $cname = $_POST['course_name'];
    $query = "INSERT INTO `tbl_lesson`( `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES ('$name','$desc', '$folder' ,$id,'$cname')";
    $result = mysqli_query($con,$query);
    if($result){
        echo $msg = "<div class='alert alert-success' role='alert'>Add Lesson Successfully</div>";
    }
    else{
        echo $msg = "<div class='alert alert-danger' role='alert'>Please Fill All Fields</div>";
    }
}
?>

<div class="container bg-light ms-auto">
<div class="col-sm-6  mx-auto jumbotron">
  <h3 class="text-center">Add Lessons</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="course_name">Lesson Name</label>
        <input type="text" class="form-control" id="course_name" name="lesson_name"  >
    </div>
    <div class="form-group">
        <label for="course_name">Lesson Description</label>
        <textarea type="text" class="form-control" id="desc" name="desc"  row=2></textarea>
    </div>
    <div class="form-group">
        <label for="course_name">Course id</label>
        <input type="text" readonly="" class="form-control" id="course_dur" name="course_id" value="<?php echo $_SESSION['id']; ?>">
    </div>
    <div class="form-group">
        <label for="course_name">Course name</label>
        <input type="text" readonly="" class="form-control" id="course_sell" name="course_name" value="<?php echo $_SESSION['name']; ?>">
    </div><br>
    <div class="form-group">
        <label for="course_name">Lesson link</label>
        <input type="file" class="form-control" id="author_t" name="link_video">
    </div><br>
    <div class="text-center">
       <div><?php $msg ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="lesson_btn">Submit</button>
      <a href="lessons.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>

<?php
include("footer.php");
?>



