<?php
include("header.php");
$con = mysqli_connect("localhost","root","","db_student");
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

$cid = $_GET["id"];
$cname = $_GET["name"];
$cdesc = $_GET["desc"];
$cauthor = $_GET["author"];
$cdur = $_GET["duration"];
$cprice = $_GET["price"];
$corg = $_GET["org"];
$cimg = $_GET["image"];
?>




<div class="container bg-light ms-auto">
<div class="col-sm-6  mx-auto jumbotron">
  <h3 class="text-center">Update Course</h3>
  <form  method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="course_name">Course Name</label>
        <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo $cname ?>">
    </div>
    <div class="form-group">
        <label for="course_name">Course Description</label>
        <textarea type="text" class="form-control" id="desc" name="desc" row=2><?php echo $cdesc ?>"</textarea>
    </div>
    <div class="form-group">
        <label for="course_name">Course Author</label>
        <input type="text" class="form-control" id="author_t" name="author_t" value="<?php echo $cauthor ?>">
    </div>
    <div class="form-group">
        <label for="course_name">Course duration</label>
        <input type="text" class="form-control" id="course_dur" name="course_dur" value="<?php echo $cdur ?>">
    </div>
    <div class="form-group">
        <label for="course_name">Course price</label>
        <input type="number" class="form-control" id="course_sell" name="course_sell" value="<?php echo $cprice ?>">
    </div><br>
    <div class="form-group">
        <label for="course_name">Course original price</label>
        <input type="number" class="form-control" id="course_org" name="course_org" value="<?php echo $corg ?>">
    </div><br>
    <div class="form-group">
        <label for="course_name">Course Image</label>
        <img src="<?php echo $cimg ?>" style="height: 200px;" alt="" class="img-thumbnail">
        <input type="file" class="form-control-file" id="course_image" name="course_image">
    </div><br>
    <div class="text-center">
      <input type="submit" class="btn btn-danger mx-2" id="course_update" name="course_update" value="update">
      <a href="courses.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>

<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['course_update'])){
    $name = $_POST['course_name'];
    $tdesc = $_POST['desc'];
    $tauthor = $_POST['author_t'];
    $duration = $_POST['course_dur'];
    $price = $_POST['course_sell'];
    $orgprice = $_POST['course_org'];
    $imgname = $_FILES['course_image']['name'];
    $imgtmp = $_FILES['course_image']['tmp_name'];
    $folder = "../image/".$imgname;
    move_uploaded_file( $imgtmp, $folder);
    $query = "UPDATE `tbl_course` SET `course_name`='$name',`course_desc`='$tdesc',`course_author`='$tauthor',`course_duration`='$duration',`course_price`='$price',`course_org_price`='$orgprice',`course_img`='$folder' WHERE course_id = $cid";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('Update Course Successfully')
        </script>";
        // header("Location:courses.php");
    }
}
?>


<?php
include("footer.php");
?>