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
                      <li class="scroll-to-section"><a href="index.php">Home</a></li>
                      <li class="scroll-to-section"><a href="index.php#aboutus">About Us</a></li>
                      <li class="scroll-to-section"><a href="index.php#courses">How it Works</a></li>
                      <li class="scroll-to-section"><a href="index.php#team">Team</a></li>
                      <li class="scroll-to-section"><a href="index.php#schools">Schools</a></li>
                      <li class="scroll-to-section"><a href="index.php#contact">Contact Us</a></li>
                      <li class="scroll-to-section"><a href="demo.php" class="active">Demo</a></li>
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
  <div class="row">
    <div class="main-button" align="center">
      <a href=""> Request SchoolTech Demo</a> 
    </div>
</div><br><br>
  <div class="col-lg-8" align="center">
          <div class="contact-us-content" align="center">
            <form id="contact-form" action="" method="post">
              <div class="row" >
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
                    <input type="name" name="school" id="school" placeholder="Your Company/Organization..." autocomplete="on" required>
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