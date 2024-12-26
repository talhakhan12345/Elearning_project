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

<!-- POPULAR COURSES HEADING -->
<div class="container">
    <div class="text-center mt-5">
      <h2>All <span class="text-danger">Courses</span></h2>
    </div>
  </div>
<!-- POPULAR COURSE END -->

<!-- COURSES CARDS START -->
<section class="articles my-5">
  <?php
  $con = mysqli_connect("localhost","root","","db_student");
  $query = "SELECT * FROM tbl_course";
  $result = mysqli_query($con,$query);
  foreach($result as $row){
    $cid = $row["course_id"];
    echo '<article data-aos="flip-left" data-aos-offset="300" >
    <div class="article-wrapper">
      <figure>
        <img src="'.str_replace('..','.',$row['course_img']).'" alt="" />
      </figure>
      <div class="article-body">
        <h2>'.$row['course_name'].'</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>

        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> '.$row['course_org_price'].'</h5>

        <a href="coursedetails.php?id='.$cid.'" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>';
  }


  ?>
  <!-- <article data-aos="flip-left" data-aos-offset="300" >
    <div class="article-wrapper">
      <figure>
        <img src="image/pyhthon.jpg.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Learn Python</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>

        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> 300</h5>

        <a href="coursedetails.php" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
  <!-- <article data-aos="flip-up" data-aos-offset="300">

    <div class="article-wrapper">
      <figure>
        <img src="image/js.jpg.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Learn Javascript</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> 300</h5>

        <a href="#" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
  <!-- <article data-aos="flip-right" data-aos-offset="300">

    <div class="article-wrapper">
      <figure>
        <img src="image/html.jpg.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Learn Html</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>

        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> 300</h5>

        <a href="#" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
  <!-- <article data-aos="flip-left" data-aos-offset="300">

  
    <div class="article-wrapper mt-3">
      <figure>
        <img src="image/php.jpg.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Learn php</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>

        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> 300</h5>

        <a href="#" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
  <!-- <article data-aos="flip-up" data-aos-offset="300">

    <div class="article-wrapper mt-3">
      <figure>
        <img src="image/jquery.jpg.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Learn Jquery</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> 300</h5>

        <a href="#" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
  <!-- <article data-aos="flip-right" data-aos-offset="300">

    <div class="article-wrapper mt-3">
      <figure>
        <img src="image/react.jpg.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Learn React js</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>

        <h5>Price <span class="text-decoration-line-through ">3000</span> <i class="fa-solid fa-rupee-sign "></i> 300</h5>

        <a href="#" class="read-more">
          Enroll Now <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article> -->
</section>

<?php
include("contact.php");
?>

<!-- Include footer -->
<?php  
  
  include("footer.php");
  
  ?>
<!-- include header end -->