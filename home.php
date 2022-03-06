<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visitor Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/home.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Visitor Management System</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
          <li><a class="getstarted scrollto" href="index.php">Admin Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Welcome to Abayo International</h1>
          <h2>Check In to Get a Badge!</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="checkin.php" class="btn-get-started scrollto">Check In</a>
      </div>     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About this site</h2>       
        </div>
        <div class="row content">
          <div class="col-lg-10" style="margin-left:100px;">
            <p>VMS or Visitor Management System is a utility for the receptionists/watchmen who have to maintain a bulky and a 
              very-hard-to-maintain record books for all the visitors that visit the company or apartments for their various reasons.VMS has two user levels;
              The Admin and The Visitor. The Admin can view the home page, login, check in and check out visitors, view important data and logout.
              The visitors can only view the site and check in.
              VMS has 4 sub- sections, Home Page, check in Visitor (for adding new visitors), View Data (for getting the visitor details - all fields) and a Check out. 
              visitors can check-in and print their badges. The Admin can log visitor’s
               check-in and check-out. </p>
               <a href="#features" class="btn-learn-more" style="margin-left:375px;">View Features</a>
            </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
  <section id="features" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title">
        <h2>Features</h2>      
      </div>
      <div class="row justify-content-center">
        <div class="row icon-boxes">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-login-circle-line"></i></div>
              <h4 class="title"><a href="">Login</a></h4>
              <p class="description">These operations can only be accessed by the Admin. </p>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="ri-install-line"></i></div>
              <h4 class="title"><a href="">Check In</a></h4>
              <p class="description">This operation can be done by the Admin and Visitor.</p>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="ri-uninstall-line"></i></div>
              <h4 class="title"><a href="">Check Out</a></h4>
              <p class="description">This operation can only be done by the Admin.</p>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="ri-database-2-line"></i></div>
              <h4 class="title"><a href="">Data Query</a></h4>
              <p class="description">This operation can only be done by the Admin.</p>
            </div>
          </div> 
        </div>
      </div>
      <div class="text-center">
        <a href="checkin.php" class="btn-get-started scrollto">Check In</a>
      </div>

      
    </div>
  </section>
  <!-- End Features -->

   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="2" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2" class="purecounter"></span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="2" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
 
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>                
                     Excellent VMS, Running smoothly and without any problem after installation, Suffice our requirement.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/Ann.jfif" class="testimonial-img" alt="Ann photo">
                <h3>Ann Wairimu</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>              
                    Earlier we were on paper work/ Manual work but now we are on VMS software its really very user friendly.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/israel.jfif" class="testimonial-img" alt="Israel photo">
                <h3>Israel Omondi</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I have always received good service from the VMS team. Timing and quality have always met my expectations.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/jully.jfif" class="testimonial-img" alt="Jully photo">
                <h3>Jully Moraa</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am really satisfied with my Visitor management system support & Service. I am completely blown away!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/peter.jfif" class="testimonial-img" alt="Peter Photo">
                <h3>Peter Wekesa</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  We have been using VMS since 2017. VMS product is good, well-functioning & on time back-end support.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/Lisa.jfif" class="testimonial-img" alt="">
                <h3>Lisa Sakina</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/Mark.jfif" class="img-fluid" alt="Mark Photo">
                <div class="social">
                  <a href="https://twitter.com"><i class="bi bi-twitter"></i></a>
                  <a href=https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mark Mathenge</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/sara.jfif" class="img-fluid" alt="Sara Photo">
                <div class="social">
                  <a href="https://twitter.com"><i class="bi bi-twitter"></i></a>
                  <a href=https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sara Chacha</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/Osoro.jfif" class="img-fluid" alt="William Photo">
                <div class="social">
                <div class="social">
                  <a href="https://twitter.com"><i class="bi bi-twitter"></i></a>
                  <a href=https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
              </div>
              <div class="member-info">
                <h4>William Osoro</h4>
                <span>Software Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/Abayo.jfif" class="img-fluid" alt="Abayo Photo">
                <div class="social">
                  <a href="https://twitter.com"><i class="bi bi-twitter"></i></a>
                  <a href=https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abayo Akinyi</h4>
                <span>Senior Web Developer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row mt-5"style="padding-top: 0;">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Langata Road, Nairobi, Kenya</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>lalabayo5@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+254 769 622 996</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">There is an error in sending the message</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Abayo's Team</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.skype.com" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>