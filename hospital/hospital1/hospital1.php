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
        $sql = "INSERT INTO `hospital1` (`name`, `email`, `phone`, `date`, `message`) VALUES ('$name', '$email', '$phone', '$date', '$message')";
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

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">

    </head>
    
    <body id="top">
    
        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        Fatima Jinnah Hospital
                        <strong class="d-block">hospital</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#timeline">Timeline</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                            Fatima Jinnah Hospital
                                <strong class="d-block">Health Specialist</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Testimonials</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#booking">Booking</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    Better
                                    <div class="animated-info">
                                        <span class="animated-item">health</span>
                                        <span class="animated-item">days</span>
                                        <span class="animated-item">lives</span>
                                    </div>
                                </h1>

                                <p class="mb-4">The hospital plays a significant role in medical education and training. It serves as a teaching hospital for various medical colleges in Lahore, providing clinical training and practical experience to medical students and interns.</p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="Learn More">Learn More</a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> 010-020-0340</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Meet Dr. Sakina Khan</h2>

                            <p>Protect yourself and others by wearing masks and washing hands frequently. Outdoor is safer than indoor for gatherings or holding events. People who get sick with Coronavirus disease (COVID-19) will experience mild to moderate symptoms and recover without special treatments.</p>

                            <p>Maintaining good health requires a balanced approach that encompasses multiple aspects of your well-being.emember to stay hydrated, manage stress levels, and avoid harmful habits like smoking or excessive alcohol consumption.</p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">12</span> Years<br> of Experiences</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="gallery">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-6 ps-0">
                <img src="images/gallery/img1.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself" style="height: 100%; width: 100%;">
            </div>

            <div class="col-lg-6 col-6 ps-0">
                <img src="images/gallery/img2.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself" style="height: 100%; width: 100%;">
            </div>

        </div>
    </div>
</section>
 
            </section>

            <section class="section-padding pb-0" id="timeline">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-lg-5 mb-4">Our Timeline</h2>
            
            <div class="timeline">
                <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                    <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                        <h3 class="text-light">Establishment of Fatima Jinnah Hospital</h3>
                        <p>The Fatima Jinnah Hospital was founded, providing dedicated healthcare services to the community.</p>
                    </div>

                    <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                        <i class="bi-patch-check-fill timeline-icon"></i>
                    </div>

                    <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                        <time>Year 19XX</time>
                    </div>
                </div>

                <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                    <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                        <h3 class="text-light">Expansion of Specialized Services</h3>
                        <p>Introduction of advanced medical facilities and specialized departments to cater to a wider range of healthcare needs.</p>
                    </div>

                    <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                        <i class="bi-book timeline-icon"></i>
                    </div>

                    <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                        <time>Year 20XX</time>
                    </div>
                </div>

                <!-- Add more timeline events as needed -->

            </div>

        </div>
    </div>
</section>

            <section class="section-padding pb-0" id="reviews">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Our Patients</h2>

                            <div class="owl-carousel reviews-carousel">

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Health Care</strong></p>

                                    <p class="reviews-text w-100"> am extremely grateful for the excellent care I received at Fatima Jinnah Hospital. The doctors and nurses were compassionate, knowledgeable, and attentive.</p>

                                    <img src="images/reviews/imm.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Sara</strong>

                                        <span class="text-muted">Patient</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Doctor cares everyone!</strong></p>

                                    <p class="reviews-text w-100">From the moment I entered Fatima Jinnah Hospital, I felt welcomed and well taken care of. The staff members were friendly and professional. The doctors patiently listened to my concerns and provided clear explanations about my treatment options.</p>

                                    <img src="images/reviews/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Adnan</strong>

                                        <span class="text-muted">Recovered</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Great services!</strong></p>

                                    <p class="reviews-text w-100">I recently had surgery at Fatima Jinnah Hospital, and I couldn't be happier with the results. The surgical team was skilled and made me feel at ease throughout the process.</p>

                                    <img src="images/reviews/img4.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Omaima</strong>

                                        <span class="text-muted">New Patient</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Advices</strong></p>

                                    <p class="reviews-text w-100">My child received outstanding care from the doctors and nurses who were not only knowledgeable but also kind and patient. They took the time to explain the treatment plan and ensured my child's comfort.</p>

                                    <img src="images/reviews/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Tasmiya</strong>

                                        <span class="text-muted">Almost Recovered</span>
                                    </figcaption>
                                </figure>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <form action="hospital1.php" method="post" role="form" class="php-appointment-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="date" id="date" value="" class="form-control">
                                            
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>
        <footer class="site-footer section-padding" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 me-auto col-12">
                <h5 class="mb-lg-4 mb-3">Opening Hours</h5>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex">
                        Sunday : Closed
                    </li>

                    <li class="list-group-item d-flex">
                        Monday - Friday
                        <span>8:00 AM - 5:00 PM</span>
                    </li>

                    <li class="list-group-item d-flex">
                        Saturday
                        <span>10:00 AM - 2:00 PM</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 my-4 my-lg-0">
                <h5 class="mb-lg-4 mb-3">Contact Information</h5>

                <p><a href="mailto:info@fatimajinnahhospital.com">info@fatimajinnahhospital.com</a></p>

                <p>123 Hospital Road, Lahore, Pakistan</p>
            </div>

            <div class="col-lg-3 col-md-6 col-12 ms-auto">
                <h5 class="mb-lg-4 mb-3">Connect with Us</h5>

                <ul class="social-icon">
                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                    <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-12 ms-auto mt-4 mt-lg-0">
                <p class="copyright-text">
                    &copy; Fatima Jinnah Hospital 2023
                
                </p>
            </div>

        </div>
    </div>
</footer>

        

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
