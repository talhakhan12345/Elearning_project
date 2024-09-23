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

<h3 class="text-white bg-black">List of Students</h3>
<div class="container">
    <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">STUDENT ID</th>
      <th scope="col">STUDENT NAME</th>
      <th scope="col">STUDENT EMAIL</th>
      <th colspan="2">STUDENT PASSSWORD</th>
    </tr>
  </thead>
  <tbody>
     <?php
     $con = mysqli_connect("localhost","root","","db_student");
     $query = "SELECT * FROM tbl_student";
     $result = mysqli_query($con,$query);
     foreach($result as $row){
      echo "<tr>";
      echo "<td>$row[id]</td>";
      echo "<td>$row[std_name]</td>";
      echo "<td>$row[std_email]</td>";
      echo "<td>$row[std_pwd]</td>";
      echo "<td>
      <a href = 'stddelete.php?stdid=$row[id]'><i class='fa-solid fa-trash fa-bounce fs-5 text-dark'></i></a>
      </td>";
      echo "<td>
      <a href = 'stdupdate.php?stdid=$row[id]&name=$row[std_name]&email=$row[std_email]&pwd=$row[std_pwd]&ocp=$row[std_ocp]&'><i class='fa-solid fa-pen-to-square fa-shake fs-5 text-dark'></i></a>
      </td>";
      echo "</tr>";
     }
     ?>
  </tbody>
</table>
 </div>

 <div class="text-end" style="margin-top: 50px;">
 <a class="btn btn-outline-danger fs-3 add" href="addstudent.php" role="button"><i class="fa-solid fa-plus"></i></a>
 </div>
<?php
include("footer.php");
?>