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
    <h3 class="text-white bg-dark">List Of Feedback</h3>
    <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">Feedback id</th>
      <th scope="col">Content</th>
      <th scope="col">Student id</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php
     $con = mysqli_connect("localhost","root","","db_student");
     $query = "SELECT * FROM tbl_feedback";
     $result = mysqli_query($con,$query);
     foreach($result as $row){
      echo "<tr>";
      echo "<td>$row[f_id]</td>";
      echo "<td>$row[f_content]</td>";
      echo "<td>$row[std_id]</td>";
      echo "<td>
      <a href = 'FeedbackDel.php?id=$row[f_id]'><i class='fa-solid fa-trash fa-bounce fs-5 text-dark'></i></a>
      </td>";
      echo "</tr>";
     }
     ?>
  </tbody>
</table>
 </div>
 
<?php 
include("footer.php");
?>