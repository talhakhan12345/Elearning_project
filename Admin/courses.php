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
 <div class="container">
    <h3 class="text-white bg-dark">List Of Courses</h3>
    <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">Course id</th>
      <th scope="col">Course Name</th>
      <th scope="col">Author</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php
     $con = mysqli_connect("localhost","root","","db_student");
     $query = "SELECT * FROM tbl_course";
     $result = mysqli_query($con,$query);
     foreach($result as $row){
      echo "<tr>";
      echo "<td>$row[course_id]</td>";
      echo "<td>$row[course_name]</td>";
      echo "<td>$row[course_author]</td>";
      echo "<td>
      <a href = 'delete.php?id=$row[course_id]'><i class='fa-solid fa-trash fa-bounce fs-5 text-dark'></i></a>
      </td>";
      echo "<td>
      <a href = 'update.php?id=$row[course_id]&name=$row[course_name]&desc=$row[course_desc]&author=$row[course_author]&duration=$row[course_duration]&price=$row[course_price]&org=$row[course_org_price]&image=$row[course_img]'><i class='fa-solid fa-pen-to-square fa-shake fs-5 text-dark'></i></a>
      </td>";
      echo "</tr>";
     }
     ?>
  </tbody>
</table>
 </div>
 
 <div class="text-end" style="margin-top: 150px;">
 <a class="btn btn-outline-danger fs-3 add" href="addcourse.php" role="button"><i class="fa-solid fa-plus"></i></a>
 </div>
<?php 
include("footer.php");
?>