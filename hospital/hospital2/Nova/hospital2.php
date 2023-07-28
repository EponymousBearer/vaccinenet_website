<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_appointment";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // Submit these to a database
        // Sql query to be executed
        $sql = "INSERT INTO `hospital2` (`name`, `email`, `phone`, `date`, `message`) VALUES ('$name', '$email', '$phone', '$date', '$message')";   
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your booking has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your booking was not submitted successfully! We regret the inconvenience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospital_2</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Agha Khan Hospital</h1>
      </a>

      

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Dr.Sarah Qasim</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Consume a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats. Limit processed foods, sugary snacks, and excessive salt intake. </p>
          </blockquote>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/img1.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            
    <div class="slides-1 swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="item">
            <h3 class="mb-3">Quality Healthcare Services</h3>
            <h4 class="mb-3">Providing exceptional medical care to our patients</h4>
            <p>We are committed to delivering high-quality healthcare services to our patients. Our team of experienced doctors, nurses, and medical staff work diligently to ensure the best possible care and treatment for each individual. We employ advanced medical technologies and adhere to international standards to provide the highest level of healthcare services.</p>
          </div>
        </div><!-- End slide item -->

        <div class="swiper-slide">
          <div class="item">
            <h3 class="mb-3">Compassionate and Caring Staff</h3>
            <h4 class="mb-3">Our team is dedicated to your well-being</h4>
            <p>At Aga Khan Hospital, we understand the importance of compassion and empathy in healthcare. Our staff is trained to provide a caring and supportive environment for our patients. We treat each individual with respect, dignity, and understanding, ensuring their comfort and well-being throughout their healthcare journey.</p>
          </div>
        </div><!-- End slide item -->

        <div class="swiper-slide">
          <div class="item">
            <h3 class="mb-3">State-of-the-Art Facilities</h3>
            <h4 class="mb-3">Equipped with advanced medical technologies</h4>
            <p>We have invested in state-of-the-art facilities and cutting-edge medical technologies to deliver precise diagnoses and effective treatments. Our hospital is equipped with modern equipment, advanced surgical theaters, and specialized departments to provide comprehensive healthcare services in various medical disciplines.</p>
          </div>
        </div><!-- End slide item -->

        <div class="swiper-slide">
          <div class="item">
            <h3 class="mb-3">Collaborative Approach</h3>
            <h4 class="mb-3">Working together for your health</h4>
            <p>We believe in a collaborative approach to healthcare, where our medical professionals work together to develop personalized treatment plans for our patients. Our multidisciplinary team consists of doctors, surgeons, specialists, and support staff who collaborate to ensure holistic and comprehensive care, considering all aspects of a patient's well-being.</p>
          </div>
        </div><!-- End slide item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

</div>
    </section><!-- End Why Choose Us Section -->

   <!-- ======= Our Services Section ======= -->
<section id="services-list" class="services-list">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Services</h2>
    </div>

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="icon flex-shrink-0"><i class="bi bi-heart" style="color: #f57813;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Cardiology</a></h4>
          <p class="description">We provide comprehensive cardiology services for the diagnosis, treatment, and prevention of heart-related conditions. Our experienced cardiologists use advanced techniques and technologies to deliver high-quality cardiac care.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="bi bi-lab" style="color: #15a04a;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Pathology</a></h4>
          <p class="description">Our pathology department offers a wide range of laboratory services for accurate diagnosis and monitoring of diseases. We have state-of-the-art equipment and highly skilled pathologists who provide reliable and timely results.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="bi bi-building" style="color: #d90769;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Surgery</a></h4>
          <p class="description">Our surgical department offers a wide range of surgical procedures using advanced techniques. Our skilled surgeons perform both minor and major surgeries with precision and care, ensuring optimal outcomes for our patients.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="icon flex-shrink-0"><i class="bi bi-people" style="color: #15bfbc;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Pediatrics</a></h4>
          <p class="description">Our pediatric department specializes in the healthcare needs of infants, children, and adolescents. We provide comprehensive care, including routine check-ups, vaccinations, and treatment for various pediatric conditions.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-medical" style="color: #f5cf13;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Radiology</a></h4>
          <p class="description">Our radiology department offers a wide range of diagnostic imaging services, including X-rays, MRI, CT scans, and ultrasound. Our skilled radiologists interpret the results to aid in accurate diagnoses and treatment planning.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="icon flex-shrink-0"><i class="bi bi-people-fill" style="color: #1335f5;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Obstetrics & Gynecology</a></h4>
          <p class="description">Our obstetrics and gynecology department provides comprehensive care for women's reproductive health, including prenatal care, gynecological exams, family planning, and treatment for gynecological conditions.</p>
        </div>
      </div><!-- End Service Item -->

    </div>


    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h3>Book an Appointment Today</h3>
        <p>Take a step towards better health. Schedule an appointment with our experienced doctors and healthcare professionals.</p>
        <a class="cta-btn" href="#">Book Now</a>
      </div>
    </div>
  </div>
</section><!-- End Call To Action Section -->

<style>
  #booking {
    background-color: #e9f4fd;
    padding: 60px 0;
  }
</style>

<section class="section-padding" id="booking">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-12 mx-auto">
        <div class="booking-form">
          <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
          <form action="hospital2.php" method="post" role="form" class="php-appointment-form">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                </div>
              </div><br><br>
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                </div>
              </div><br><br>
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <input type="date" name="date" id="date" value="" class="form-control">
                </div>
              </div><br><br>
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                </div>
              </div><br><br>
              <div class="col-lg-3 col-md-4 col-6 mx-auto">
                <div class="form-group"><br>
                  <button type="submit" class="form-control btn-primary" id="submit-button">Book Now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>




    <!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
        <h3>Advanced Features for <br>Your Healthcare Needs</h3>

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-stethoscope-line" style="color: #ffbb2c;"></i>
              <span>Specialized Medical Expertise</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-calendar-check-line" style="color: #5578ff;"></i>
              <span>Convenient Appointment Scheduling</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-laboratory-line" style="color: #e80368;"></i>
              <span>State-of-the-Art Diagnostic Services</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-hospital-fill" style="color: #e361ff;"></i>
              <span>Comprehensive Inpatient Care</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-eye-fill" style="color: #47aeff;"></i>
              <span>Advanced Vision Care</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-pharmacy-fill" style="color: #ffa76e;"></i>
              <span>Pharmacy Services</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-heart-fill" style="color: #11dbcf;"></i>
              <span>Cardiovascular Health</span>
            </div>
          </div><!-- End Icon List Item-->

          <div class="col-md-6">
            <div class="icon-list d-flex">
              <i class="ri-dental-fill" style="color: #ff5828;"></i>
              <span>Dental Care</span>
            </div>
          </div><!-- End Icon List Item-->
        </div>
      </div>
      <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="phone-wrap">
          <img src="assets/img/img2.jpg" alt="Image" class="img-fluid" >
        </div>
      </div>
    </div>
  </div>

  <div class="details">
    <div class="container" data-aos="fade-up" data-aos-delay="300">
      <div class="row">
        <div class="col-md-6">
          <h4>Exceptional Healthcare Services<br>at Agha Khan Hospital</h4>
          <p>Experience top-quality medical care delivered by our dedicated healthcare professionals. We are committed to providing comprehensive healthcare services with the utmost care and compassion.</p>
          <a href="#about" class="btn-get-started">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Features Section -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Agha Khan Hospital</span>
          </a>
          <p>Replace this text with relevant information about Agha Khan Hospital.</p>
          <div class="social-links d-flex mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">About Us</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Contact</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-dash"></i> <a href="#">Medical Specialties</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Inpatient Services</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Outpatient Services</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Emergency Care</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Diagnostic Services</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-legal">
    <div class="container">
      <div class="copyright">
        &copy; <script>document.write(new Date().getFullYear());</script> Agha Khan Hospital. All Rights Reserved
      </div>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
