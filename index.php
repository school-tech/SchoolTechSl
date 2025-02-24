<?php

include("include/dbcon.php");

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailaddress = $_POST['emailaddress'];
  $phonenumber = $_POST['phonenumber'];
  $school = $_POST['school'];
  $message = $_POST['message'];
  $date = $_POST['date'];
  $month = $_POST['month'];
  $year = $_POST['year'];



  $data = mysqli_query($sql_con, "INSERT INTO contactus(name, emailaddress, phonenumber, school, message, date, month, year) VALUES ('$name','$emailaddress','$phonenumber','$school','$message','$date','$month','$year')");

  if ($data) {
      echo "<script>alert('Message Sent  Successfully!!')</script>";
      echo "<script>window.location='index.php';</script>";
  } else {
      echo "Failed:" . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SchoolTech</title>
    <meta name="description" content="SkulTech is a School Management Information Systems that collects, stores and processes school data.">
    <meta name="keywords" content="SkulTech, SkulTechSl, SkulTech Sierra Leone">
    <meta name="author" content="Skultech">
    <link rel="canonical" href="https://www.skultechsl.com/">
    <link rel="shortcut icon" href="assets/images/st_logo.jpg">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->


                    <!-- <a href="index.php" class="logo">
                      <img src="assets/images/st_logo.jpg" alt="" width="20" height="30">
                    </a> -->
                    <a href="index.php" class="logo">
                      <!-- <img src="assets/images/st_logo.jpg" alt="" width="30" height="120"> -->
                      <h1>SchoolTech</h1>                      
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <!-- <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div> -->
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#aboutus">About Us</a></li>
                      <li class="scroll-to-section"><a href="#howitworks">How it Works</a></li>
                      <li class="scroll-to-section"><a href="#team">Team</a></li>
                      <li class="scroll-to-section"><a href="#schools">Schools</a></li>
                      <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner" data-interval="5000">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">SchoolTech</span>
                <h2> Easy School Management</h2>
                <p>SchoolTech is a School Management Information System that collects, stores and processes school information. </p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="demo.php">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="https://youtu.be/JsD9uyRwBio?si=tF6l3JD-qai62w1m"><i class="fa fa-play"></i> What's SchoolTech?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Solution Provider</span>
                <h2>Help Solve SDGs</h2>
                <p>This system aims meet the requirements of a number of SDGs like: <br> ​SDG 4: Quality Education; <br> SDG 8: Decent Work and Economic Growth; <br> SDG 9: Industry, Innovation, and Infrastructure; <br> SDG 16: Peace, Justice, and Strong Institutions;​</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="demo.php">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="https://youtu.be/JsD9uyRwBio?si=tF6l3JD-qai62w1m"><i class="fa fa-play"></i> What are SDGs?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">SMIS</span>
                <h2>Paper-Based System is not the way.</h2>
                <p>SchoolTech is designed to help solve problems faced by the Educational Sector which inherently uses a Paper-based system to store and manage school data.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="demo.php">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="https://youtu.be/JsD9uyRwBio?si=tF6l3JD-qai62w1m"><i class="fa fa-play"></i> What's SMIS?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>School Admin</h4>
              <p>Manage students, teachers, and school finances efficiently</p>
              <div class="main-button">
                <!-- <a href="#">Read More</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>School Staff</h4>
              <p>Track attendance, performance, and share learning materials</p>
              <div class="main-button">
                <!-- <a href="#">Read More</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Parents</h4>
              <p>Monitor attendance, grades, and assignments in real-time</p>
              <div class="main-button">
                <!-- <a href="#">Read More</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is SchoolTech?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                SchoolTech is a <strong>School Management Information System</strong> that collects, stores and processes school information.
                  
                </div>
              </div>
            </div>
            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What Do We Do?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                SchoolTech is designed to help solve some of the problems faced by the Educational Sector by creating a centralized database that records school related information
                across schools in the country, process these piece of information and establish a way for schools to share student or staff information to related parties
                </div>
              </div>
            </div> -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How Do I Register My School?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  To register your school, contact us by filling the form below. You can also contact us through our Email: <a href="mailto:schooltech24@gmail.com">schooltech24@gmail.com</a> 
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  How can a Parent get the App?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Parents can go to AppStore or PlayStore, search for <Strong>SchoolTech Sierra Leone</Strong>, and download the app. <br>If you don't have your login credentials, you can contact your <code>School Head</code>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How can we support you?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  You can also search on Google with specific keywords such as <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>What do we do?</h2>
            <p>SchoolTech is designed to help solve some of the problems faced by the Educational Sector
               by creating a centralized database that records school related information across schools in the country,
               process these pieces of information and establish a way for schools to share student or staff information to related parties.</p>
            <div class="main-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section howitworks" id="howitworks" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>SchoolTech System</h6>
            <h2>How it Works</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Primary</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">JSS</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">SSS</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-01.jpg" alt=""></a>
              <span class="category">Webdesign</span>
              <span class="price"><h6><em>$</em>160</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Learn Web Design</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-02.jpg" alt=""></a>
              <span class="category">Development</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Cindy Walker</span>
              <h4>Web Development Tips</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-03.jpg" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price"><h6><em>$</em>640</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Latest Web Trends</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-04.jpg" alt=""></a>
              <span class="category">Development</span>
              <span class="price"><h6><em>$</em>450</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Online Learning Steps</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-05.jpg" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price"><h6><em>$</em>320</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Sophia Rose</span>
              <h4>Be a WordPress Master</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
              <span class="category">Webdesign</span>
              <span class="price"><h6><em>$</em>240</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Full Stack Developer</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2500" data-speed="1000"></h2>
                   <p class="count-text ">Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="200" data-speed="1000"></h2>
                  <p class="count-text ">School Staff</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1000" data-speed="1000"></h2>
                  <p class="count-text ">Parents</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="4" data-speed="1000"></h2>
                  <p class="count-text ">Schools</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/me.jpg" alt="">
              <span class="category">CEO & Co-Founder</span>
              <h4>Emmanuel Sahr Dauda</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://x.com/Sahr_E_Dauda"><i class="fab fa-x"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/bella.jpg" alt="" width="100%" style="height: 100;">
              <span class="category">Product Manager & Co-Founder</span>
              <h4>JAMES BELLA TURAY</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-03.jpg" alt="">
              <span class="category">PRO & Co-Founder</span>
              <h4>Alimamy ND Macfoy</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-04.jpg" alt="">
              <span class="category">Tech Lead</span>
              <h4>Ibrahim Sorie Kamara</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Full Stack Master</span>
                <h4>Claude David</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">UI Expert</span>
                <h4>Thomas Jefferson</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Digital Animator</span>
                <h4>Stella Blair</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>SchoolTech, if utilized well, can be the change and improvement the Ministry of Basic and Senior Senior School, Schools and also Parents have been looking for. <br></p>
          </div> 
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="schools">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schools We will be Working With this Academic year</h6>
            <h2>Schools</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/event-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">JSS</span>
                    <h5>Holy Family Junior Senior School</h5>
                  </li>
                  <li>
                    <span>Starting From:</span>
                    <h6>5<sup>th</sup> Sept 2024</h6>
                  </li>
                  <li>
                    <span>Classes:</span>
                    <h6>15</h6>
                  </li>
                  <li>
                    <span>Staff:</span>
                    <h6>30+</h6>
                  </li>
                </ul>
                <a href="#schools"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/event-02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">SSS</span>
                    <h5>Methodist Boys High School</h5>
                  </li>
                  <li>
                    <span>Starting From:</span>
                    <h6>5<sup>th</sup> Sept 2024</h6>
                  </li>
                  <li>
                    <span>Classes:</span>
                    <h6>20</h6>
                  </li>
                  <li>
                    <span>Staff:</span>
                    <h6>100+</h6>
                  </li>
                </ul>
                <a href="#schools"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/event-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Nursery and Primary</span>
                    <h4>Comforti Primary School</h4>
                  </li><li>
                    <span>Starting From:</span>
                    <h6>5<sup>th</sup> Feb 2024</h6>
                  </li>
                  <li>
                    <span>Classes:</span>
                    <h6>20</h6>
                  </li>
                  <li>
                    <span>Staff:</span>
                    <h6>30+</h6>
                  </li>
                </ul>
                <a href="#schools"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>If you want SchoolTech to be deployed in your school, contact us. <br> You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">Cost<br><em>Free</em></span>
              <h6>Hurry! <em>Do not miss this opportunity!!!</em></h6>
              <h4>You Pay <em>No</em> Fee Whatsoever</h4>
              <a href="#contact"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="row">
                <div class="col-lg-6">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="text" name="emailaddress" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div></div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="phonenumber" id="phonenumber" placeholder="Your Contact Number..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="school" id="school" placeholder="Your School..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" name="submit" class="orange-button">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
              <input type="hidden" class="form-control" id="val-name" name="date" value="<?php echo date("F j, Y"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="month" value="<?php echo date("F"); ?>">
                                <input type="hidden" class="form-control" id="val-name" name="year" value="<?php echo date("Y"); ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 SchoolTech. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <style>
    [context-launcher="true"] {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: bold;
    background-color: #7b6ad8;
}
  </style>
  <div context-launcher="true" context-bot-id="LxJ4wvSNO">Chat with us</div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- <script>
  $(document).ready(function(){
      var owl = $('.owl-carousel');

      owl.owlCarousel({
          items: 1, // Number of items to display
          loop: true,
          autoplay: true, // Enable autoplay
          autoplayTimeout: 15000, // Set timeout to 5 seconds
          autoplayHoverPause: true // Pause on hover
      });
  });
  </script> -->

  </body>
</html>