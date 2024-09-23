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
$query = "SELECT * FROM tbl_admin where admin_email = '$adminemail'";
$result = mysqli_query( $con, $query );
if($result){
     foreach($result as $row){
        $id = $row["admin_id"];
     }
}
?>


<?php
$con = mysqli_connect("localhost","root","","db_student");
if(isset($_POST['u_update'])){
    $uemail = $_POST['uemail'];
    $upwd = $_POST['upwd'];
    $query = "UPDATE `tbl_admin` SET `admin_email`='$uemail',`admin_pwd`='$upwd' where admin_id = '$id'";
    $result = mysqli_query($con,$query);
    if($result){
        $upd = "<div class='alert alert-success' role='alert'>Update Successfully</div>";
    }
}
?>

<div class="container bg-light my-5">
    <div class="row py-5">
        <div class="col-sm-6">
            <h3>Change Password</h3>
            <form method="POST">
            <div class="mb-3 my-3">
            <label for="formGroupExampleInput" class="form-label">Email:</label>
            <input type="email" class="form-control" name="uemail" value="<?php echo $_SESSION['email']; ?>">
        </div>
        <div class="mb-3 my-3">
            <label for="formGroupExampleInput" class="form-label">Password:</label>
            <input type="password" class="form-control" id="upwd" name="upwd">
        </div>
        <div class="text-center">
      <button type="submit" class="btn btn-danger mx-2" id="u_update" name="u_update">Update</button>
      <a href="ad.php" class="btn btn-secondary">Close</a>
    </div>
            </form>
            <?php if(isset($upd)) {echo $upd;} ?><br>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>