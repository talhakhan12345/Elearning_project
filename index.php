<!-- Include header -->
<?php
 include("header.php");
?>
<!-- include header end  -->


<!-- START VIDEO BACKGROUND -->
   <div class="container-fluid remove-m-p">
    <div class="vid-parent">
        <video playsline autoplay muted loop>
            <source src="video/video.mp4.mp4" type="">
        </video>
        <div class="vid-overplay"></div>
    </div>
    <?php
      // session_start();
      if(isset($_SESSION['myemail'])){
        echo '<div class="vid-content">
        <h1 class="my-content">Welcome to ischool</h1>
        <small class="my-content">Learn and Implement</small><br>
        <a class="btn btn-primary my-2" href="student/studentprofile.php" role="button">My profile</a>
    </div>';
      }
      else{
        echo '<div class="vid-content">
        <h1 class="my-content">Welcome to ischool</h1>
        <small class="my-content">Learn and Implement</small><br>
        <a class="btn btn-danger my-2 btn-c" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Get Started</span></a>
    </div>';
      }
    ?>
    <!-- <div class="vid-content">
        <h1 class="my-content">Welcome to ischool</h1>
        <small class="my-content">Learn and Implement</small><br>
        <a class="btn btn-primary my-2" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">My profile</a>
    </div> -->
   </div>
<!-- END VIDEO BACKGROUND -->


<!-- START TEXT BANNER -->
   <div class="container-fluid bg-danger txt-banner">
     <div class="row bottom-banner">
        <div class="col-sm">
          <h5><i class="fas fa-book-open mr-3"></i> 100+ online courses</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-user mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-keyboard mr-3"></i> Lifetime access</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarante*</h5>
        </div>
     </div>
   </div>
<!-- TEXT BANNER END -->


<!-- POPULAR COURSES HEADING -->
<div class="container">
    <div class="text-center mt-5">
      <h2 data-aos="zoom-in-up">Popular<span data-aos="fade-right" data-aos-offset="200" class="text-danger">Courses</span></h2>
    </div>
  </div>
<!-- POPULAR COURSE END -->



<!-- COURSES CARDS START -->
<section class="articles mt-5">
<?php
$con = mysqli_connect("localhost","root","","db_student");
$query = "SELECT * FROM tbl_course limit 6";
$result = mysqli_query($con,$query);
foreach($result as $row){
  $cid = $row['course_id'];
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

      <h5>Price <span class="text-decoration-line-through ">'.$row['course_org_price'].'</span> <i class="fa-solid fa-rupee-sign "></i>'.$row['course_price'].'</h5>

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
  </article>
  <article data-aos="flip-right" data-aos-offset="300">

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

<div class="container mt-3">
  <div class="text-center">
    <a class="btn btn-danger" href="course.php" role="button">View All Courses</a>
    </div>
  </div>
<!-- COURSES CARDS END -->




<!-- CONTACT FORM -->
 <div class="container" id="contact">
  <div class="my-4">
    <h2>Contact <span class="text-danger">us</span></h2>
  </div>
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
    <form method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <small id="stname"></small>
      <input type="text" class="form-control" id="txtname">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-10">
    <small id="stsub"></small>
      <input type="text" class="form-control" id="txtsubject" >
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <small id="stemail"></small>
      <input type="email" class="form-control" id="txtemail" >
    </div>
  </div>
  <div class="input-group">
  <textarea class="form-control" aria-label="With textarea" id="txthow" placeholder ="How can we help you"></textarea>
</div><br>
<div>
  <small id="txtsend"></small>&nbsp;
  <button type="button" onclick="cy()" class="btn btn-danger">send</button>
</div>
</form>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-12 border-contact text-light text-center">
        <h4>ischool</h4>
        <p>ischool,
          Near police camp II saudabad,
          Malir karachi <br />
          phone: +03327573643 <br />
          www.ischool.com </p>
    </div>
   </div>
 </div>
<!-- CONTACT FORM END -->


<!-- FEEDBACK CAROUSEL START -->
<div class="outerdiv my-4">i
    <div class="innerdiv">
      <!-- div1 -->
      <div class="div1 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-daniel.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name">Daniel Clifford</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>I received a job offer mid-course, and the subjects I learned were current, if not more so, in the company I joined. I honestly feel I got every penny’s worth.</h4>
        <p>“ I was an EMT for many years before I joined the bootcamp. I’ve been looking to make a transition and have heard some people who had an amazing experience here. I signed up for the free intro course and found it incredibly fun! I enrolled shortly thereafter. The next 12 weeks was the best - and most grueling - time of my life. Since completing the course, I’ve successfully switched careers, working as a Software Engineer at a VR startup. ”</p>
        </div>
      </div>
      <!-- div2 -->
      <div class="div2 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jonathan.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name">Jonathan Walters</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>The team was very supportive and kept me motivated</h4>
        <p>“ I started as a total newbie with virtually no coding skills. I now work as a mobile engineer for a big company. This was one of the best investments I’ve made in myself. ”</p>
        </div>
      </div>
      <!-- div3 -->
      <div class="div3 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-kira.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Kira Whittle</p>
            <p class="designation dark">Verified Graduate</p>
          </div>
        </div>
        <div class="review dark">
          <h4>Such a life-changing experience. Highly recommended!</h4>
          <p>“ Before joining the bootcamp, I’ve never written a line of code. I needed some structure from professionals who can help me learn programming step by step. I was encouraged to enroll by a former student of theirs who can only say wonderful things about the program. The entire curriculum and staff did not disappoint. They were very hands-on and I never had to wait long for assistance. The agile team project, in particular, was outstanding. It took my learning to the next level in a way that no tutorial could ever have. In fact, I’ve often referred to it during interviews as an example of experience. It certainly helped me land a job as a full-stack 100% recommend! ”</p>
        </div>
      </div>
      <!-- div4 -->
      <div class="div4 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Jeanette Harmon</p>
            <p class="designation dark">Verified Graduate</p>
          </div>
        </div>
        <div class="review dark">
          <h4>An overall wonderful and rewarding experience</h4>
        <p>“ Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living while doing something I love. ”</p>
        </div>
      </div>
      <!-- div5 -->
      <div class="div5 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name">Patrick Abrams</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>Awesome teaching support from TAs who did the bootcamp themselves. Getting guidance from them and learning from their experiences was easy.</h4>
        <p>“ The staff seem genuinely concerned about my progress which I find really refreshing. The program gave me the confidence necessary to be able to go out in the world and present myself as a capable junior developer. The standard is above the rest. You will get the personal attention you need from an incredible community of smart and amazing people. ”</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-danger txt-banner">
     <div class="row bottom-banner mb-5">
        <div class="col-sm link-facebook">
          <a href="https://www.facebook.com/" class="text-white text-decoration-none "><h5><i class="fa-brands fa-facebook text-white"></i> Facebook</h5></a>
        </div>
        <div class="col-sm link-inst">
          <a href="https://www.instagram.com/talhakhan1900/" class="text-white text-decoration-none"><h5><i class="fa-brands fa-instagram text-white"></i> Instagram</h5></a>
        </div>
        <div class="col-sm link-twitter">
          <a href="https://twitter.com/?lang=en" class="text-white text-decoration-none"><h5><i class="fa-brands fa-twitter text-white"></i> Twitter</h5></a>
        </div>
        <div class="col-sm link-whatsapp">
          <a href="https://web.whatsapp.com/" class="text-white text-decoration-none"><h5><i class="fa-brands fa-whatsapp text-white"></i> Whatsapp</h5></a>
        </div>
     </div>
   </div>

<!-- FEEDBACK CAROUSEL END -->




<!-- Include footer -->
	<?php  
  
  include("footer.php");
  
  ?>
<!-- include footer end -->

<script src="js/ajaxrequest.js"></script>


