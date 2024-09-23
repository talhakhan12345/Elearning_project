<?php
include("header.php");
?>

<div class="container pe-5 me-5">
    <h3 class="text-center me-5 pe-5 text-light bg-dark">Sells Report</h3>
    <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Course Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Order Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Card number</th>
      <th scope="col">Cvv</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $con = mysqli_connect("localhost","root","","db_student");
     $query = "SELECT * FROM tbl_order";
     $result = mysqli_query($con,$query);

     foreach($result as $row){
    echo "<tr>
    <td>$row[order_id]</td>
    <td>$row[course_name]</td>
    <td>$row[std_email]</td>
    <td>$row[order_date]</td>
    <td>$row[order_amount]</td>
    <td>$row[card_number]</td>
    <td>$row[cvv]</td>
    </tr>";
     }
    ?>

  </tbody>
  </div>

<?php
include("footer.php");
?>