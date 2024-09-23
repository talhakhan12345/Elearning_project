<!-- footer section start -->
<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 logo-img">
						<a href="index.php"><img src="image/logo.jpg.jpeg" alt="" class="img-fluid logo-footer"></a>
                      <div class="footer-about my-3">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p>
                      </div>

					</div>
					<div class="col-md-3">
						<div class="useful-link">
							<h2>Useful Links</h2>
							<img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
							<div class="use-links">
								<li><a href="index.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
								<li><a href="course.php"><i class="fa-solid fa-angles-right"></i> Courses</a></li>
								<li><a href="Payment.php"><i class="fa-solid fa-angles-right"></i> Payment</a></li>
								<li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
							</div>
						</div>

					</div>
                    <div class="col-md-3">
                        <div class="social-links">
							<h2>Follow Us</h2>
							<img src="./assets/images/about/home_line.png" alt="">
							<div class="social-icons">
								<li><a href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
								<li><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
								<li><a href=""><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
							</div>
						</div>
                    

                    </div>
					<div class="col-md-3">
						<div class="address">
							<h2>Address</h2>
							<img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
							<div class="address-links">
								<li class="address1"><i class="fa-solid fa-location-dot"></i> Ischool-
									Near police camp Saudabad Malir karachi 
								   +d3-50</li>
								   <li><a href=""><i class="fa-solid fa-phone"></i> +91 90904500112</a></li>
								   <li><a href=""><i class="fa-solid fa-envelope"></i> mail@1234567.com</a></li>
							</div>
						</div>
					</div>
                  
				</div>
			</div>

		</footer>
		<!-- footer section end -->
		<!-- footer copy right section start -->
		<section id="copy-right">
			<div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>  
				Designed by Talha's coder 2024 <a href="#login" data-bs-toggle="modal" data-bs-target="#adminModal">Admin login</a> 
			</div>

		</section>
		<!-- footer copy right section end -->

    
    <!-- Registeration form modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registration
            <v</var> Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body r-form-body">
            <!-- start registeration form -->
            <?php  include("registerstudent.php");  ?>
            <!-- End registeration form -->
          </div>
          <div class="modal-footer">
            <small id="regmsg"></small>
            <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal">Close</button>
            <button onclick="request()" id="signup" type="button" class="btn btn-danger">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Registeration form modal end -->


    
    <!-- Login form modal -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body r-form-body">
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Email:</label>
    <input type="text" class="form-control" id="lemail" placeholder="Enter your email">
    </div>

    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Password:</label>
    <input type="Password" class="form-control" id="lpwd" placeholder="Enter your Password">
    </div>
          </div>
          <div class="modal-footer">
            <small id="loginmsg"></small>
            <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal">Cancel</button>
            <button onclick="login()" type="button" class="btn btn-danger">Login</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Login form modal end -->

   
    <!-- Admin form modal --> 
    <!-- Modal -->
    <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminModalLabel">Admin Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body r-form-body">
      <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Email:</label>
      <small id="amsg"></small>
      <input type="text" class="form-control" id="adminemail" placeholder="Enter your email">
      </div>
      <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Password:</label>
      <small id="apwd"></small>
      <input type="password" class="form-control" id="adminpwd" placeholder="Enter your Password">
       </div>
          </div>
          <div class="modal-footer">
            <small id = "adminmsg"></small>
            <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal">Cancel</button>
            <button type="button" onclick="admin()" class="btn btn-danger">Login</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Admin form modal end -->

</body>
</html>

<!-- Jquery and bootstrap javascript link -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>


<!-- Font awesome javascript link -->
<script src="js/all.min.js"></script>

<!-- AJAX REQUEST LINK -->
<script src="js/ajaxrequest.js"></script>
<script src="js/ajaxadmin.js"></script>


<!-- Animation javascript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
