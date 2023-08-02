<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vaccination</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 6643 66772 44
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">VaccineNet</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#departments">Branches</a></li>
          <li class="dropdown"><a href="#"><span>Hospitals</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>view hospital details</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="hospital\hospital1\hospital1.php">Hospital 1</a></li>
                  <li><a href="hospital\hospital2\Nova\hospital2.php">Hospital 2</a></li>
                  <!-- <li><a href="hospital\hospital3\hospital3.php">Hospital 3</a></li>
                  <li><a href="hospital\hospital4\hospital4.php">Hospital 4</a></li>
                  <li><a href="hospital\hospital5\hospital5.php">Hospital 5</a></li> -->
                </ul>
              </li>
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="signupp.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Sign</span> Up</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
        <style>
      .btn-admin,
      .btn-patient {
        display: inline-block;
        padding: 10px 20px;
        background-color: #1977cc;
        color: #fff;
        border-radius: 25px;
        text-decoration: none;
        margin-right: 10px;
      }

      .btn-admin:hover,
      .btn-patient:hover {
        background-color: #002D5A;
      
      }
      .container {
    text-align: center;
  }

  .header {
    text-align: left;
    margin-bottom: 20px;
  }

  .button-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .button-wrapper {
    margin-right: 20px;
  }

  .btn-admin,
  .btn-patient{
    display: inline-block;
  }
      </style>
  <section id="hero" class="d-flex align-items-center">
 
  <div class="container">
  <div class="header">
    <h1>Welcome to VaccineNet</h1>
    <h2>A platform where users can check the availability of vaccines in their local area.</h2>
    <a href="#about" class="btn-get-started scrollto">Get Started</a>
  </div>
  <div class="button-container">
    <div class="button-wrapper">
      <a href="index-2.php" class="btn-admin">Admin</a>
      <p>Click here for Admin</p>
    </div>
    <div class="button-wrapper">
      <a href="patient.php" class="btn-patient">Patient</a>
      <p>Click here for Patient</p>
    </div>
    <!-- <div class="button-container"> -->
    <div class="button-wrapper">
      <a href="" class="btn-admin">Hospital</a>
      <p>Click here for hospital</p>
    </div>
  </div>
</div>
  </section><!-- End Hero -->


  <main id="main">


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose VaccineNet?</h3>
              <p>
              VaccineNet could offer extensive and reliable information about vaccines, including details about different types of vaccines, their efficacy, safety profiles, and common side effects. Users seeking accurate information would find it helpful to have a trustworthy resource that presents information in a clear and accessible manner.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <i style="font-size:35px" class="fa">&#xf1ae;</i>
                    <h4>Vaccine For Children</h4>
                    <p>Vaccines for children are an essential component of public health efforts to prevent and control infectious diseases. </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <i style='font-size:35px' class='fas'>&#xf182;</i>
                    <h4>Vaccine For Adult</h4>
                    <p>Vaccinations for adults are also important for maintaining individual health and preventing the spread of diseases.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <i style='font-size:35px' class='fas'>&#xf5b0;</i>
                    <h4>Vaccine For Travelers</h4>
                    <p>Vaccines for travelers, it's crucial to consider the specific destination and the potential health risks associated with travel. </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>VaccineNet: Empowering Health through Vaccination</h3>
          <p>VaccineNet is a comprehensive platform dedicated to providing reliable information and resources about vaccines. Our mission is to empower individuals to make informed decisions regarding their health and well-being.</p>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-check"></i></div>
            <h4 class="title">Accurate and Trusted Information</h4>
            <p class="description">At VaccineNet, we curate the latest scientific research and updates from reputable sources. Our content is reviewed by experts to ensure accuracy, giving you the confidence to make informed choices about vaccines.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-calendar"></i></div>
            <h4 class="title">Vaccine Scheduling and Reminders</h4>
            <p class="description">With VaccineNet, you can easily schedule your vaccination appointments and set reminders for upcoming doses. Stay on top of your immunization schedule and ensure you receive the necessary vaccines at the right time.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-group"></i></div>
            <h4 class="title">Join the VaccineNet Community</h4>
            <p class="description">Connect with a diverse community of individuals who share a common interest in vaccines. Engage in discussions, ask questions, and access valuable resources to enhance your understanding of vaccinations. <a href="https://example.com/community">Explore Now</a></p>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="fas fa-user-friends"></i>
          <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
          <p>Community Members</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="fas fa-hospital-alt"></i>
          <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
          <p>Partner Clinics</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="fas fa-book"></i>
          <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
          <p>Research Publications</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="fas fa-globe"></i>
          <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
          <p>Global Reach</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Our Services</h2>
      <p>At VaccineNet, we offer a range of services to support your vaccination journey and promote public health.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-info-circle"></i></div>
          <h4><a href="">Vaccine Information</a></h4>
          <p>Access accurate and reliable information about vaccines, their benefits, recommended schedules, and potential side effects.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-calendar-alt"></i></div>
          <h4><a href="">Vaccine Scheduling</a></h4>
          <p>Easily schedule your vaccination appointments, track your immunization schedule, and receive reminders for upcoming doses.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-user-friends"></i></div>
          <h4><a href="">Community Support</a></h4>
          <p>Join our vibrant community of individuals passionate about vaccination, share experiences, and seek support and guidance from fellow members.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-medkit"></i></div>
          <h4><a href="">Vaccine Safety Monitoring</a></h4>
          <p>Report any adverse reactions or side effects experienced after vaccination to contribute to vaccine safety monitoring efforts.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-globe"></i></div>
          <h4><a href="">Global Vaccine Updates</a></h4>
          <p>Stay informed about the latest developments in vaccine research, breakthroughs, and initiatives worldwide.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-hands-helping"></i></div>
          <h4><a href="">Vaccine Advocacy</a></h4>
          <p>Participate in advocacy campaigns and initiatives to promote vaccine acceptance, awareness, and public health.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->
<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
  <div class="container">

    <div class="section-title">
      <h2>Departments</h2>
      <p>Explore our various departments and their specialties which include COVID-19, travel, and many other vaccine-related services. Easily find the department for a specific vaccine and discover which type of vaccine is suitable for you to ensure your good health and protection from various diseases.</p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">COVID-19</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Flu Vaccination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Travel Vaccines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Childhood Immunization</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pregnancy</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>COVID-19</h3>
                <p class="fst-italic">Protect yourself and others by getting vaccinated against COVID-19.</p>
                <p>Our COVID-19 vaccination department offers authorized vaccines to help prevent COVID-19 infections. We prioritize eligible individuals based on national guidelines and ensure a smooth vaccination process. Stay updated with the latest information and schedule your appointment to receive the vaccine.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/omgg.jpg" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Flu Vaccination</h3>
                <p class="fst-italic">Stay protected during flu season with our flu vaccines.</p>
                <p>Our flu vaccination department provides annual flu vaccines to help prevent the spread of influenza viruses. We offer different vaccine options and prioritize high-risk individuals for vaccination. Stay healthy during flu season and book your flu shot appointment with us.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/imgg.jpg" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Travel Vaccines</h3>
                <p class="fst-italic">Stay protected during your travels with our recommended vaccines.</p>
                <p>Our travel vaccine department specializes in providing vaccinations for international travel. We offer a comprehensive range of vaccines to protect against diseases prevalent in various destinations. Our experts provide personalized recommendations based on your travel plans and medical history. Schedule a travel vaccine consultation before your trip.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/imgg2.jpg" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Childhood Immunization</h3>
                <p class="fst-italic">Ensure the health and well-being of your child with our vaccination programs.</p>
                <p>Our childhood immunization department offers a complete range of vaccines to protect your child from preventable diseases. We follow the recommended immunization schedule to provide timely and age-appropriate vaccines. Keep your child healthy and up-to-date with their vaccinations by visiting our department.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/imgg3.jpg" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Pregnancy Vaccination</h3>
                <p class="fst-italic">Safeguard the health of both mother and baby with our pregnancy vaccinations.</p>
                <p>Our pregnancy vaccination department focuses on providing vaccines that are safe and recommended during pregnancy. We offer vaccines to protect against diseases such as influenza and pertussis, which can pose risks to pregnant individuals and their babies. Our experts will provide guidance and administer vaccines tailored to your specific needs during pregnancy.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/imgg4.jpg" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Departments Section -->


    <!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
  <div class="container">

    <div class="section-title">
      <h2>Doctors</h2>
      <p>Meet our team of expert doctors who specialize in vaccine-related healthcare services. They are dedicated to providing high-quality care and ensuring the well-being of our patients.</p>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Dr. Najam Setty</h4>
            <span>Chief Medical Officer</span>
            <p>Expertise in vaccine research and administration</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""><i class="ri-linkedin-box-fill"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Dr. Tasmiya Ansari</h4>
            <span>Vaccine Specialist</span>
            <p>Specializes in vaccine administration and patient education</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""><i class="ri-linkedin-box-fill"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Dr. Adnan Nasir</h4>
            <span>Infectious Disease Specialist</span>
            <p>Expertise in infectious diseases and vaccination strategies</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""><i class="ri-linkedin-box-fill"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Dr. Mahira Khan</h4>
            <span>Immunologist</span>
            <p>Specializes in immunology and vaccine development</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""><i class="ri-linkedin-box-fill"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Doctors Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
      <p>Here are some commonly asked questions about vaccines and vaccination.</p>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Are vaccines safe? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Yes, vaccines are safe. They undergo rigorous testing and monitoring to ensure their safety and effectiveness before being approved for use. Vaccines are carefully evaluated for their benefits and risks, and their administration follows strict guidelines.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Do vaccines cause autism? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              No, vaccines do not cause autism. Numerous scientific studies have been conducted and have consistently shown no link between vaccines and autism. The myth linking vaccines to autism has been debunked, and vaccines have been proven to be safe and essential for protecting public health.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Are there side effects of vaccines? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Like any medication, vaccines can have side effects, but they are generally mild and temporary. Common side effects include soreness at the injection site, mild fever, and fatigue. Serious side effects are rare. Vaccines undergo thorough testing to ensure their safety, and the benefits of vaccination far outweigh the risks of potential side effects.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How do vaccines work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Vaccines work by stimulating the immune system to recognize and fight against specific pathogens or diseases. They contain weakened or inactivated forms of the disease-causing agents or pieces of the pathogens that trigger an immune response. This response prepares the immune system to recognize and defend against the actual disease if exposed to it in the future.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Why are vaccines important? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Vaccines are important because they protect individuals and communities from infectious diseases. They help prevent the spread of diseases, reduce the severity of illnesses, and save lives. Vaccines have been instrumental in controlling and eradicating many dangerous diseases, contributing to overall public health and well-being.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section>
<!-- End Frequently Asked Questions Section -->


    <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Emily Johnson</h3>
              <h4>Vaccination Recipient</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I recently received the COVID-19 vaccine from Vaccinenet, and I'm incredibly grateful for their efficient and professional service. The staff made me feel comfortable and provided me with all the necessary information. I highly recommend Vaccinenet for your vaccination needs.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Michael Thompson</h3>
              <h4>Parent</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I brought my child to Vaccinenet for their childhood immunizations, and I'm extremely satisfied with the experience. The medical professionals were friendly, knowledgeable, and made the process stress-free for my child. I trust Vaccinenet for keeping my family protected.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Sarah Rodriguez</h3>
              <h4>Traveler</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Before embarking on my international trip, I visited Vaccinenet for travel vaccines. The team provided personalized recommendations based on my destination and itinerary. I felt confident and protected during my travels, thanks to Vaccinenet's expertise. I highly recommend their travel vaccine department.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>David Smith</h3>
              <h4>Healthcare Professional</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                As a healthcare professional, I highly recommend Vaccinenet for their commitment to public health. Their vaccination department offers a wide range of vaccines and follows the highest standards of safety and efficacy. Vaccinenet plays a vital role in protecting the community against preventable diseases.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Olivia Wilson</h3>
              <h4>Senior Citizen</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I've been visiting Vaccinenet for my annual flu shots, and their flu vaccination department is exceptional. The staff is compassionate, and they ensure a seamless experience. I appreciate their dedication to keeping me and others protected during flu season. Vaccinenet is a trusted partner in my healthcare journey.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>
<!-- End Testimonials Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Explore our gallery showcasing our vaccine departments, facilities, and events.</p>
    </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

   <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Get in touch with us for any inquiries or to schedule an appointment.</p>
    </div>
  </div>

  <div>
  <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1260&amp;height=493&amp;hl=en&amp;q=pakistan karachi street 123&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://thepasswordgame.com/">Password Game</a></div><style>.mapouter{position:relative;text-align:right;width:1260px;height:493px;}.gmap_canvas {overflow:hidden;background:none!important;width:1260px;height:493px;}.gmap_iframe {width:1260px!important;height:493px!important;}</style></div>
  </div>

  <div class="container">
    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>123 Street, Karachi, Pakistan</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+92 123 4567890</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
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
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section>
<!-- End Contact Section -->


  </main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>VaccineNet</h3>
          <p>
            123 Street, Karachi<br>
            Pakistan<br><br>
            <strong>Phone:</strong> +92 123 4567890<br>
            <strong>Email:</strong> info@vaccinenet.com<br>
          </p>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of Service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Dermatalogist</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Gynacologist</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Pharmacy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Emergency</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>Stay updated with the latest news and announcements.</p>
          <form action="" method="post">
            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required><br><br>
            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="credits">
        &copy; <span>VaccineNet</span>. All Rights Reserved
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer>
<!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/css/style.css"></script>

</body>

</html>
