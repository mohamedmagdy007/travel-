<?php
ob_start();

?>


<footer>
  <!-- footer -->
  <section class="w3l-footer">
    <div class="w3l-footer-16-main py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 column">
            <div class="row">
              <div class="col-md-4 column">
                <h3>Company</h3>
                <ul class="footer-gd-16">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-4 column mt-md-0 mt-4">
                <h3>Useful Links</h3>
                <ul class="footer-gd-16">
                  <li><a href="#url">Destinations</a></li>
                  <li><a href="#url">Our Branches</a></li>
                  <li><a href="#url">Latest Media</a></li>
                  <li><a href="about.html">About Company</a></li>
                  <li><a href="#url">Our Packages</a></li>
                </ul>
              </div>
              <div class="col-md-4 column mt-md-0 mt-4">
                <h3>Our Services</h3>
                <ul class="footer-gd-16">
                  <li><a href="#url">Privacy Policy</a></li>
                  <li><a href="#url">Our Terms</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="landing-single.html">Landing Page</a></li>
                  <li><a href="#url">Our Guides</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
            <h3>Newsletter </h3>
            <div class="end-column">
              <h4>Get latest updates and offers.</h4>
              <form action="#" class="subscribe" method="post">
                <input type="email" name="email" placeholder="Email Address" required="">
                <button type="submit">Go</button>
              </form>
              <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
            </div>
          </div>
        </div>
        <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
          <div class="columns text-lg-left text-center">
            <p>&copy; 2020 Traversal. All rights reserved.Design by <a href="#" >
                Mohamed Magdy </a>
            </p>
          </div>
          <div class="columns-2 mt-lg-0 mt-3">
            <ul class="social">
              <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
              </li>
              <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              </li>
              <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </li>
              <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
              </li>
              <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- //move top -->
    <script>
      $(function() {
        $('.navbar-toggler').click(function() {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
  </section>
  <!-- //footer -->
</footer>
<!-- login  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" data-blast="bgColor">
        <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white " aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" class="p-2">

        <?php
        if(isset($_COOKIE["usercookie"])){
          $_SESSION["id"]=$_COOKIE['usercookie'];
         echo ("<script> window.open('index.php','_self')</script>");
        }
        if(isset($_POST["btnLogin"])){
          include_once "classes/Users.php";
          $use = new Users();
          $use->setEmail($_POST["Email"]);
          $use->setPhone($_POST["Email"]);
          $use->setPassword($_POST["Password"]);
          $rs= $use->login();
          if($row=mysqli_fetch_assoc($rs)){
            $_SESSION["id"]=$row["UserID"];
            $_SESSION["name"]=$row["name"];
              if(isset($_POST["Remember"]))
              {
                setcookie("usercookie",$_SESSION['id'],time()+60*60*24*365);
                echo ("<script> window.open('index.php','_self')</script>");
              }
              echo ("<script> window.open('index.php','_self')</script>");
          }else{
            echo "<div class='alert alert-danger'> Invaild user / password, try again </div>";
          }
        }
        ?>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email or Phone</label>
            <input type="text" class="form-control" placeholder="" name=" Email" id="recipient-name" required="">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" class="form-control" placeholder="" name="Password" id="password" required="">
          </div>
          <div class="right-w3l">
            <input type="submit" class="form-control text-white" name="btnLogin" value="Login">
          </div>
          <div class="row sub-w3l my-3">
            <div class="col ">
              <input type="checkbox" id="brand1" name="Remember">
              <label for="brand1">
                <span></span>Remember me?</label>
            </div>
            <div class="col forgot-w3l text-right">
              <a href="forgetpassword.php" class="text-secondary">Forgot Password?</a>
            </div>
          </div>
          <p class="text-center dont-do">Don't have an account?
            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-secondary">
              Register Now</a>

          </p>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- //login -->
<!-- register -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header" data-blast="bgColor">
        <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white " aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" class="p-2" name="form2">
        <?php 
        if(isset($_POST['btnReg'])){

          include_once "classes/Users.php";
          $use = new Users();
          $use->setName($_POST["name"]);
          $use->setEmail($_POST["Email"]);
          $use->setPhone($_POST["Phone"]);
          $use->setPassword($_POST["Password"]);
          $use->setBirthDate($_POST["txtBdate"]);
          $use->setCountry($_POST["scountry"]);
          $reg = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
          if(preg_match($reg,$_POST["Password"])){
            $msg=$use->Add();
            if($msg=="ok"){
              echo "<div class='alert alert-success'>User has been created succeed </div>";
            }else if(strpos($msg,"users.email")){
              echo "<div class='alert alert-danger'>Email has been used before , Try another one </div>";
  
            }else if(strpos($msg,"users.phone")){
              echo "<div class='alert alert-danger'>Phone has been used before , Try another one </div>";
  
            }  
            else{
              echo $msg;
            }
          }
          else{
            echo "<div class='alert alert-danger'>password is weak </div>";
          }
          
        }
          

        
        ?>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control" name=" name" id="recipient-rname" required="">
          </div>
          <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email</label>
            <input type="email" class="form-control"  name="Email" id="recipient-email" required="">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" class="form-control"  name="Password" id="password" required="">
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Phone</label>
            <input type="text" class="form-control"  name="Phone" id="phone" required="">
          </div>
          <div class="form-group">
            <label for="txtBdate" class="col-form-label">Birth Date</label>
            <input type="date" class="form-control"  name="txtBdate" id="txtBdate" required="">
          </div>
          <div class="form-group">
            <label for="inputGroupSelect01" class="col-form-label">Country </label>
              <select name="scountry" class="custom-select" id="inputGroupSelect01" >
                <option value="Egypt">Egypt</option>
                <option value="SAU">SAU	</option>
                <option value="ARE">ARE</option>
                <option value="RUS">RUS</option>
                <option value="USA">USA	</option>
              </select>
          </div>
          <div class="sub-w3l">
            <div class="sub-w3_pvt">
              <input type="checkbox" id="brand2"  value="" required="">
              <label for="brand2" class="mb-3">
                <span></span>I Accept to the Terms & Conditions</label>
            </div>
          </div>
          <div class="right-w3l">
            <input type="submit" class="form-control text-white"  name="btnReg" value="Register">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<!--/slider-js-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/modernizr-2.6.2.min.js"></script>
<script src="assets/js/jquery.zoomslider.min.js"></script>
<!--//slider-js-->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function() {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: true
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function() {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function() {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>