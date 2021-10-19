<?php
    session_start();
    require_once 'includes/dbh.inc.php';
    require_once 'includes/emptySession.php';
    
    emptyUserSignupSession();
    emptyAdminLoginSession();
?>



    <!-- For Checking the reservation is submitted -->
    <?php
        if(isset($_SESSION["doneBooking"])){?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    width: '300',
                    icon: 'success',
                    title: 'Successfully booked',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
    <?php } 
        unset($_SESSION["doneBooking"]);
    ?>

    <!-- For Checking if profile is updated -->
    <?php
        if(isset($_SESSION['profileUpdated'])){?>
            <script>
                Swal.fire({
                    position: 'top-center',
                    width: '300',
                    icon: 'success',
                    title: 'Profile successfully updated',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
    <?php } 
        unset($_SESSION['profileUpdated']);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MCY Dental Clinic</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">Intro</a></li>
          <li class="drop-down"><a href="#priorities">About Us</a>
            <ul>
              <li><a href="#priorities">Our Priorities</a></li>
              <li><a href="#steps">How to appoint?</a></li>
            </ul> </li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Gallery</a></li>
        
          <li><a href="#contact">Contact Us</a></li>
          <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo "<li class='drop-down'><a href=''> My Account | ". $_SESSION["useruid"] . "</a>";
            echo "<ul>";
            echo "<li><a href='user/profile.php'>My Profile</a></li>";
            echo "<li><a href='forms/Medicio/index.php'>Set an Appointment</a></li>";
            echo "<li><a href='user/history.php'>History</a></li>";
            echo "<li><a href='forms/includes/logout.inc.php'>Log Out</a></li>";
            echo "</ul></li>";
        }
        else {
            # code...
            echo "<li><a href='forms/signup.php'>REGISTER</a></li>";
            echo "<li><a href='forms/login.php'>LOG IN</a></li>";
        }
       
    ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    
    <div class="container text-center text-md-left" data-aos="fade-up">
    <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo " <h1>Hi " .$_SESSION["useruid"] . "!<br>Welcome to MCY Dental Clinic</h1>";
            
        }
        else {
            # code...
            echo "<h1>Welcome to MCY Dental Clinic</h1>";

        }
        ?>

      <h2>Make an appointment. NOW! <br>
      <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo "Click <a href='forms/Medicio/index.php'>Here</a> to Set an Appointment!</h2>";
            
        }
        else {
            # code...
            echo "Click <a href='forms/login.php?error=loginerror'>Here</a> to Set an Appointment!</h2>";

        }
        ?>

      <a href="#about" class="btn-get-started scrollto">Get Started!</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">We Offer Dental Clinic Services</h3>
            <p data-aos="fade-up">
            We appreciate, communicate and empathize with our patients and our fellow team members so that we may enhance the lives of every person involved in achieving our mission.
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>We Care for you</h4>
              <p>We provide the most excellent level of care, skill, judgment, and comfort for our patients' dental requirements.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>Our Mission</h4>
              <p>To strive for excellence in all of our services to our patients to assist them in achieving the highest degree of dental health possible while maintaining a trusting and compassionate environment.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>
              <h4>Our Vision</h4>
              <p>We at Messiah Christ Yahweh Dental Clinic will keep up to date on the latest and most up-to-date materials and technology in dentistry and infection control.
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Steps Section ======= -->
    <section id="priorities" class="steps section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Our Priorities</h2>
        </div>
        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
            <span>01</span>
            <h4>High Quality</h4>
            <p>is on top of our list when it comes to the way we treat patients
            </p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
            <span>02</span>
            <h4>Maximum Impact</h4>
            <p> and influence is what we look for in our actions and services</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">
            <span>03</span>
            <h4> We're always looking</h4>
            <p>for the best treatment we can offer to you</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="300">
            <span>04</span>
            <h4>Quality Standards </h4>
            <p> are important but meant to be exceeded</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="400">
            <span>05</span>
            <h4>We ensure </h4>
            <p>the oral state of every individual creates a healthier community 
            of beautiful smiles in places we served</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="500">
            <span>06</span>
            <h4>Ethic </h4>
            <p>procedures are always at the base of everything we do</p>
          </div>

        </div>

      </div>
    </section><!-- End Steps Section -->

    <!-- ======= Features Section ======= -->
    <section id="steps" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>How to make an appointment?</h4>
                  <p>Here are the steps of how you can communicate us in every different ways.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Online: (Facebook Page)</h4>
                  <p>- patient inquiries answered by a representative <br>
                    - reservation fee done thru bank transfer <br>
                    - screening form (covid 19) <br>
                    - appointment confirmation <br></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Over-the-counter reservation</h4>
                  <p>- Cash reservation</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Walk-in (if No Patient on the dot)</h4>
                  <p>- screening form <br>
                    - dental record filled out <br>
                    - treatment</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Search the Dental Service  <br> That Suits Your Needs</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-edit"></i></div>
              <h4 class="title"><a href="">Consultation</a></h4>
              <p class="description">Basically, it's a check-up on your teeth's current state. If you haven't seen a dentist in a while, you may be worried or embarrassed about the current state of your teeth.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-command"></i></div>
              <h4 class="title"><a href="">Oral Prophylaxis</a></h4>
              <p class="description">To get rid of dental plaque and other irritants in the mouth. These deposits produce dental tartar buildup on your teeth, contributing to most dental disorders.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tooth Restoration</a></h4>
              <p class="description">To replace missing tooth structure supported by dental implants and restore the function, integrity, and morphology of lost tooth structure caused by caries or external trauma.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-horizontal-center"></i></div>
              <h4 class="title"><a href="">Tooth Extraction</a></h4>
              <p class="description">To remove teeth that have become irreparable due to tooth decay, periodontal disease, or dental trauma, especially when a toothache is present.  </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!--Start of 2nd Services Section -->
    <section id="services" class="services section-bg">
      <div class="container">


        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-yellow">
              <div class="icon"><i class="bx bx-dna"></i></div>
              <h4 class="title"><a href="">Fluoride Application</a></h4>
              <p class="description">It is a natural mineral that builds strong teeth and prevents cavities. Fluoride varnish is a highly concentrated form of fluoride applied to the tooth's surface, by a dentist, dental hygienist or other health care professional, as a type of topical fluoride therapy.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-red">
              <div class="icon"><i class="bx bx-dish"></i></div>
              <h4 class="title"><a href="">Prosthodontic Treatment</a></h4>
              <p class="description">Techniques for tooth whitening and bonding, colour matching, veneers to modify teeth, improve the look, precise manufacturing, and placement of fixed prostheses like crowns; moreover, bridges are all available.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-dgreen">
              <div class="icon"><i class="bx bx-disc"></i></div>
              <h4 class="title"><a href="">Orthodontic Treatment</a></h4>
              <p class="description">To improve the appearance and function of teeth by straightening or relocating them. It can also help to look after your teeth, gums, and jaw joints' long-term health by spreading the biting pressure over all your teeth.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-gray">
              <div class="icon"><i class="bx bx-doughnut-chart"></i></div>
              <h4 class="title"><a href="">Periodontic Rehab</a></h4>
              <p class="description">It is the procedure for restoring your teeth to their optimum state. It is a cleaning process that is used to clean the teeth thoroughly. Periodontal maintenance is an essential dental therapy to prevent periodontal disease from worsening.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Here are the given quotes by our Dental Doctors, they've managed on how the patients will be served better assistance.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              A Dentist at work in his vocation always looks down in the mouth. A man loses his illusions first, his teeth second, and his follies last. Happiness is your dentist telling you it won’t hurt and then having him catch his hand in the drill.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Dr. Elysee Angeli Sy Yao</h3>
            <h4>Dentist</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              If a patient cannot clean his teeth, no dentist can clean them for him. Some tortures are physical and some are mental, but the one that is both is dental. The man with a toothache thinks everyone happy whose teeth are sound.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Dr. Emily De Guzman</h3>
            <h4>Dentist</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              You don’t have to brush your teeth – just the ones you want to keep. Every tooth in a man’s head is more valuable than a diamond. A man begins cutting his wisdom teeth the first time he bites off more than he can chew.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Dr. Gerlie Jose</h3>
            <h4>Dentist</h4>
          </div>

          <!-- <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div> -->

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>We're only as strong and as knowledgeable as our team. So here are the photo gallery which help customers meet goals and expectations.</p>
        </div>

        <!-- <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->
<br><br>
        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 1</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 2</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 3</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 4</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 4"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 5</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 5"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 6</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 6"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 7</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 7"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 8</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 8"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MCY 9</h4>
                <p>Click to View</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="MCY 9"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
          <p>Please Contact us if you need something beyond our service.</p>
        </div>

     


        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>9M Conception St. San Joaquin 1601 Pasig, Philippines.</p>
              </div>

              <div class="email mt-4">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>elyseeangeliyao@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+(02) 640 5536</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 283px;" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Conception St. San Joaquin 1601 Pasig, Philippines&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
          </div>
          </div>

    



          
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>


                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="form-check form-group ps-0">
              <label class="form-check-label ps-1" for="privacy-policy" style=
              " display: block;">
                <input id="privacy-policy" type="checkbox" name="privacy" value="accept" required style=
                "   vertical-align: middle;
            position: relative;
            bottom: 1px;">
               
               I accept the <a href="terms.html">terms of service</a> and <a href="privacy.html">privacy policy</a>.
                </label>
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
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MCY Dental Clinic</h3>
              <p>
               Buting<br>
                Pasig City, PH.<br><br>
                <strong>Phone:</strong> 8643-4413<br>
                <strong>Email:</strong> mcydentalclinic@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#steps">How to appoint?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#priorities">Priorities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Oral Prophylaxis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tooth Restoration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tooth Extraction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Flouride Application</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Prosthodontic Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Orthodontic Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Periodontic Rehab</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Have us subscribe on our newsletter!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CRMS on MCY Dental Clinic</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>