<!-- Include header -->
<?php
 include("header.php");
?>
<!-- include header end  -->

<div class="container-fluid">
    <div class="row ">
        <img src="image/courb.jpg.jpg" class="course-banner" alt="" style="height:500px; width:100%; object-fit:-cover; box-shadow: 10px;">
        <div class="course-child"></div>
    </div>
</div>


<!-- START MAIN CONTENT -->
  <div class="container my-5">
    <?php
    $con = mysqli_connect("localhost","root","","db_student");
    if(isset($_GET['id'])){
      $cid = $_GET['id'];
     $query = "SELECT * FROM tbl_course where course_id = '$cid'";
     $result = mysqli_query($con,$query);
     foreach($result as $row){
        echo '<div class="row">
        <div class="col-md-4">
            <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="guitar">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-tittle">Course Name: '.$row['course_name'].' </h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatibus error aliquam corporis cum hic odio, maiores possimus cumque praesentium repellendus consequatur ut.</p>
                <p class="card-text">Duration: '.$row['course_duration'].'</p>
                <form action="checkout.php?cid='.$cid.'" method="post">
                   <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_org_price'].'</del></small> <span></span class="fw-bolder">&#8377 '.$row['course_price'].'</p>
                   <button type="submit" class="btn btn-danger text-white fw-bolder float-end" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>';
    }
  }
    ?>
    <!-- <div class="row">
        <div class="col-md-4">
            <img src="image/pyhthon.jpg.jpg" class="card-img-top" alt="guitar">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-tittle">Course Name: Python</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatibus error aliquam corporis cum hic odio, maiores possimus cumque praesentium repellendus consequatur ut.</p>
                <p class="card-text">Duration: 10 days</p>
                <form action="" method="post">
                   <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span></span class="fw-bolder">&#8377 200</p>

                   <button type="submit" class="btn btn-danger text-white fw-bolder float-end" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div> -->
  </div>

  <div class="container">
    <div class="row">
        <table class="table table-bordered table-hover mb-5">
      <thead>
          <tr>
            <th scope="col">Lesson No.</th>
            <th scope="col">Lesson Name.</th>
          </tr>
      </thead>
      <tbody>
        <?php
         $con = mysqli_connect("localhost","root","","db_student");
         if(isset($_GET['id'])){
          $tid = $_GET['id'];
         $query = "SELECT * FROM tbl_lesson where course_id = '$tid'";
         $result = mysqli_query($con,$query);
         foreach($result as $row){
          echo '<tr>
          <th scope="row">'.$row['lesson_id'].'</th>
          <td>'.$row['lesson_name'].'</td>
            </tr>';
         }
         }
        ?>
        
      </tbody>
        </table>
    </div>
  </div>

<!-- MAIN CONTENT END -->

<!-- Include footer -->
<?php  
  
  include("footer.php");
  
  ?>
<!-- include header end -->