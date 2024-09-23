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
    <div class="col-sm-9">
      <form method="get" class="d-flex align-items-center mt-3 d-print-none">
            <div class="form-group">
                <label for="checkid" class="form-label">Enter Course Id: </label>
                <input type="number" required class="form-control" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>"  id="checkid" name="search">
            </div>
            <button type="submit" class="btn btn-danger mt-4 mx-4">Search</button>
        </form>
    </div>
    <table class="table table-success table-striped">
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
      </thead>
      <tbody>
         <?php
          $con = mysqli_connect("localhost","root","","db_student");
          if(isset($_GET['search'])){
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM tbl_course where CONCAT(course_id,course_name) LIKE '%$filtervalues%' ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)> 0){
               
              foreach($result as $row){
                 echo "<tr>";
                 echo "<td>$row[course_id]</td>";
                 echo "<td>$row[course_name]</td>";
                 echo "<td>$row[course_price]</td>";
                 echo "</tr>";
                 $_SESSION['id'] = $row['course_id'];
                 $_SESSION['name'] = $row['course_name'];
                 $_SESSION['price'] = $row['course_price'];
              }
          }
          else {
            echo "<tr>";
            echo "<td>Not Found</td>";
            echo "</tr>";
          }
        }
         ?>
      </tbody>
</table>


<table class="table table-bordered border-primary">
     <thead>
      <tr>
        <th>Lesson Name</th>
        <th>Lesson desc</th>
        <th>Lesson link</th>
        <th>Course id</th>
        <th>Course Name</th>
        <th colspan="2">Actions</th>
      </tr>
     </thead>
     <tbody>
        <?php
        if(isset( $_GET["search"])){
        $con = mysqli_connect("localhost","root","","db_student");
        $sql = "SELECT * FROM tbl_lesson where course_id = $_GET[search]";
        $result = mysqli_query($con,$sql);
        foreach($result as $row){
          echo "<tr>";
          echo "<td>$row[lesson_name]</td>";
          echo "<td>$row[lesson_desc]</td>";
          echo "<td>$row[lesson_link]</td>";
          echo "<td>$row[course_id]</td>";
          echo "<td>$row[course_name]</td>";
          echo "<td>
           <a href = 'Ldel.php?stdid=$row[course_id]'><i class='fa-solid fa-trash fa-bounce fs-5 text-dark'></i></a>
           </td>";
           echo "<td>
            <a href = 'Lupdate.php?name=$row[lesson_name]&des=$row[lesson_desc]&link=$row[lesson_link]&course=$row[course_id]'><i class='fa-solid fa-pen-to-square fa-shake fs-5 text-dark'></i></a>
            </td>";
          echo "</tr>";
        }
      }
        ?>
     </tbody>
</table>

</div>

<?php
if(isset($_GET['search'])){
  echo '<div class="text-end" style="margin-top: 150px;">
  <a class="btn btn-outline-danger fs-3 add" href="addlessons.php" role="button"><i class="fa-solid fa-plus"></i></a>
  </div>';
}
?>



<?php
include("footer.php");
?>


