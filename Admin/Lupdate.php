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
$course_id = $_GET['course'];
$tname = $_GET['name'];
$tdesc = $_GET['des'];
$tlink = $_GET['link'];
?>

<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['lupdate'])){
    $name = $_POST['lesson_name'];
    $desc = $_POST['desc'];
    $vidname = $_FILES['link_video']['name'];
    $vidimp = $_FILES['link_video']['tmp_name'];
    $folder = "../student/video/".$vidname;
    move_uploaded_file( $vidimp, $folder);
    $id = $_POST['course_id'];
    $cname = $_POST['course_name'];
    $query = "UPDATE `tbl_lesson` SET `lesson_name`='$name',`lesson_desc`='$desc',`lesson_link`='$folder' where course_id = '$course_id'";
    $result = mysqli_query($con,$query);
    if($result){
        echo $msg = "<div class='alert alert-success' role='alert'>Update Lesson Successfully</div>";
    }
    else{
        echo $msg = "<div class='alert alert-danger' role='alert'>Unable to Update</div>";
    }
}
?>

<div class="container bg-light ms-auto">
<div class="col-sm-6  mx-auto jumbotron">
  <h3 class="text-center">Update Lessons</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="course_name">Lesson Name</label>
        <input type="text" class="form-control" id="course_name" name="lesson_name" value="<?php echo $tname ?>">
    </div>
    <div class="form-group">
        <label for="course_name">Lesson Description</label>
        <textarea type="text" class="form-control" id="desc" name="desc" row=2><?php echo $tdesc ?></textarea>
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
        <video  controls loop src="<?php echo $tlink ?>" class="img-thumbnail"></video>
        <input type="file" class="form-control" id="author_t" name="link_video">
    </div><br>
    <div class="text-center">
       <div><?php $msg ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="lupdate">Update</button>
      <a href="lessons.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>

<?php
include("footer.php");
?>



