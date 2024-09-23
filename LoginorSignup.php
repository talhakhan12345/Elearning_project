<?php
include("header.php");
?>

<div class="container-fluid">
    <div class="row ">
        <img src="image/courb.jpg.jpg" class="course-banner" alt="" style="height:500px; width:100%; object-fit:-cover; box-shadow: 10px;">
        <div class="course-child"></div>
    </div>
</div>


<div class="container bg-light my-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <h3>If already Registered !! Login</h3>
            <form action="">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="lemail" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password:</label>
                    <input type="Password" class="form-control" id="lpwd" placeholder="Enter your Password">
                </div>
                <small id="loginmsg"></small>
                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal">Cancel</button>
                <button onclick="login()" type="button" class="btn btn-danger">Login</button>
            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <form method="post" action="">
                <h3>New User!! Sign up</h3>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name:</label>
                    <small id="stdmsg1"></small>
                    <input type="text" class="form-control" id="sname" placeholder="Enter Your Name" required="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email:</label>
                    <small id="stdmsg2"></small>
                    <input type="email" class="form-control" id="semail" placeholder="Enter your email" required="">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password:</label>
                    <small id="stdmsg3"></small>
                    <input type="password" class="form-control" id="spwd" placeholder="Enter your Password" required="">
                </div>
                <small id="regmsg"></small>
            <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal">Close</button>
            <button onclick="request()" type="button" class="btn btn-danger">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>