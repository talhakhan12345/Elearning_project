<?php
include("header.php");
?>
  <div class="container">
     <div class="col-sm-9 mt-5">
        <div class="row ms-5 text-center g-4">
            <div class="col-sm-4 mt-1">
                <div class="card text-white bg-danger mb-3"
                style="max-width: 18rem;">
                <div class="card-header">Courses</div>
                <div class="card-body">
                    <div class="card-body">
                        <h4 class="card-title">
                         34
                        <?php
                         $con = mysqli_connect("localhost","root","","db_student");
                         $query = "SELECT COUNT(course_name) from tbl_course";
                         $result = mysqli_query($con,$query);
                        ?>
                        </h4>
                        <a class="btn btn-light" href="">View</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-4 mt-1">
                <div class="card text-white bg-success mb-3"
                style="max-width: 18rem;">
                <div class="card-header">Students</div>
                <div class="card-body">
                    <div class="card-body">
                        <h4 class="card-title">
                            25
                        </h4>
                        <a class="btn btn-light" href="">View</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-4 mt-1">
                <div class="card text-white bg-primary mb-3"
                style="max-width: 18rem;">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    <div class="card-body">
                        <h4 class="card-title">
                            8
                        </h4>
                        <a class="btn btn-light" href="">View</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

     </div>
  </div>
  
  <div class="container pe-5 me-5">
    <h3 class="text-center me-5 pe-5 text-light bg-dark">Course Ordered</h3>
    <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Course Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Order Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
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
    <td>
    <a href='deleteadmin.php?id=$row[order_id]'>
    <button class='btn btn-danger' >Delete</button>
    </a>
    </td>
    </tr>";
     }
    ?>

  </tbody>
  </div>

<?php
include("footer.php");
?>
