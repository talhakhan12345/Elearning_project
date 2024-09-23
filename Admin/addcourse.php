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
if(isset($_POST['course_btn'])){
    $name = $_POST['course_name'];
    $desc = $_POST['desc'];
    $author = $_POST['author_t'];
    $duration = $_POST['course_dur'];
    $price = $_POST['course_sell'];
    $orgprice = $_POST['course_org'];
    $imgname = $_FILES['course_image']['name'];
    $imgtmp = $_FILES['course_image']['tmp_name'];
    $folder = "../image/".$imgname;
    move_uploaded_file( $imgtmp, $folder);
    $query = "INSERT INTO `tbl_course`( `course_name`, `course_desc`, `course_author`, `course_duration`, `course_price`, `course_org_price`, `course_img`) VALUES ('$name','$desc','$author','$duration',$price,$orgprice,'$folder')";
    $result = mysqli_query($con,$query);
    if($result){
        echo $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>Add Course Successfully</div>";
    }
    else{
        echo $msg = "<div class='alert alert-danger' role='alert'>Please Fill All Fields</div>";
    }
}
?>

<div class="container bg-light ms-auto">
<div class="col-sm-6  mx-auto jumbotron">
  <h3 class="text-center">Add New Course</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="course_name">Course Name</label>
        <input type="text" class="form-control" id="course_name" name="course_name">
    </div>
    <div class="form-group">
        <label for="course_name">Course Description</label>
        <textarea type="text" class="form-control" id="desc" name="desc" row=2></textarea>
    </div>
    <div class="form-group">
        <label for="course_name">Course Author</label>
        <input type="text" class="form-control" id="author_t" name="author_t">
    </div>
    <div class="form-group">
        <label for="course_name">Course duration</label>
        <input type="text" class="form-control" id="course_dur" name="course_dur">
    </div>
    <div class="form-group">
        <label for="course_name">Course price</label>
        <input type="number" class="form-control" id="course_sell" name="course_sell">
    </div><br>
    <div class="form-group">
        <label for="course_name">Course original price</label>
        <input type="number" class="form-control" id="course_org" name="course_org">
    </div><br>
    <div class="form-group">
        <label for="course_name">Course Image</label>
        <input type="file" class="form-control-file" id="course_image" name="course_image">
    </div><br>
    <div class="text-center">
       <div><?php $msg ?></div>
      <button type="submit" class="btn btn-danger mx-2" id="course_btn" name="course_btn">Submit</button>
      <a href="courses.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>

<?php
include("footer.php");
?>