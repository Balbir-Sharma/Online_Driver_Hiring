<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KBS-Drive4U</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h3 class="m-0 text-primary"><span class="text-dark">KBS</span>Drive4U</h3>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="destination.php" class="dropdown-item">Destination</a>
                                <a href="facilities.php" class="dropdown-item">Facilities</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Within City</option>
                                        <option value="2">Within State</option>
                                        <option value="3">Within Country</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php
require('Admin/incl/important.php');
require('Admin/incl/dbconn.php');
?>







   
    
<?php

if(isset($_POST['send']))
 {
    $frm_data = filteration($_POST);
    $q = " INSERT INTO `user_queries`( `name`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'], $frm_data['message']];
   // $res = insert($q, $values, 'ssss');
    if($res == 1){
        alert('success', 'mail sent');

    }
   else{
        alert('error', 'server down try again.');
        
    }
}
    ?>
 




 <h2 class ="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reach Us</h2>
<div class ="container">
  <div class ="row">
<div class ="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
  <iframe class="w-100 rounded" height="450px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.4577896905682!2d74.80942884041998!3d32.75872909918825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391e878bfd4c63ab%3A0x8cf5b736088e3f23!2sKaran%20Palace!5e1!3m2!1sen!2sin!4v1678205517067!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class ="col-lg-4 col-md-4">
  <div class="bg-white p-4 rounded mb-4">
   <h5> Contact Us </h5>
   <a href="tel: +919996988172" class ="d-inline-block mb-2 text-decoration-none text-dark" > 
  <i class="bi bi-telephone-inbound-fill"></i> &nbsp; 9596982541 </a>

  <br>

  <a href="tel: +919996988172" class ="d-inline-block mb-2  text-decoration-none text-dark" > 
    <i class="bi bi-telephone-inbound-fill"></i> &nbsp;  6006599165 </a>
     <br>
     <a href="tel:+919596988173" class ="d-inline-block  text-decoration-none text-dark" > 
      <i class="bi bi-whatsapp"></i>&nbsp;&nbsp; 6006588172 </a>

  </div>

  <div class="bg-white p-4 rounded mb-4">
    <h5> Follow Us </h5>
    <a href="https://twitter.com/balbirsharma077" class ="d-inline-block mb-1 ">
      <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-twitter me-1"></i>Twitter
       </span> 
     </a>
     <br>
     <a href="https://www.facebook.com/profile.php?id=100065400375345" class ="d-inline-block mb-1 ">
      <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-facebook"></i>&nbsp;Facebook
       </span> 
     </a>
     <br>
     <a href="https://www.instagram.com/_balbir_sharma/" class ="d-inline-block mb-1 ">
      <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram"></i>&nbsp;Instagram
       </span> 
     </a>
       <br>
      <a href="https://www.linkedin.com/in/balbir-sharma-464a50265/" class ="d-inline-block mb-1 ">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-linkedin"></i>&nbsp; linkedin
         </span> 
       </a>
      </div>
    </div>
  </div>
</div>





    <!-- Footer Start -->
  
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">KBS</span>Drive4U</h1>
                </a>
                <p>KbsDrive4u provide drivers based on your choice.You can find the best driver on your reqiurement like permanent, temporary, hourly or on a contract basis. Driver on Hire is working on the recruitment principles and is a unique approach that reduces the client risks. 
                </p>
                <br>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6><br>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://twitter.com/balbirsharma077"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=100065400375345"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/in/balbir-sharma-464a50265/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/_balbir_sharma/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
          
            <div class="col-lg-3 col-md-6 ml-5 mt-3  mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" type = "button" onclick = "fun()"  href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50 mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    <a class="text-white-50" href="facilities.php"><i class="fa fa-angle-right mr-2"></i>Facilities</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-5 mt-3 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>143 Koul Sharma office opposite Sita Ram Mandir,  Parade Chowk,  jammu, 181206  JAMMU AND KASHMIR (JK) INDIA (IN)</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+6006588172</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+9596599196</p><br>
                <p><i class="fa fa-envelope mr-2"></i>koulsharma@gmail.com</p>
                <p><i class="fa fa-envelope mr-2"></i>balbirsharma@gmail.com</p>
                <p><i class="fa fa-envelope mr-2"></i>komalkoul@gmail.com</p>
               
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
           
<h5 class="text-center bg-dark text-white p-3 m-0"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspDesigned and Developed by Balbir Sharma and Komal Koul<br><p> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &copy;2023 Copyright : - <a href="#"><strong><em>Team Koul Sharma Private Limited</em> </strong> </a> All Rights Reserved</p></h5>


        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>