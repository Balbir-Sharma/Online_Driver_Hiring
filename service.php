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
    <!-- Topbar Start -->
  
    <!-- Topbar End -->


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
                <h3 class="display-4 text-white text-uppercase">Services</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Services</p>
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


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>KBSDrive4u Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Hourly based</h5>
                        <p class="m-0">Our hourly packages are great when you are looking for a ride to and fro from the airport or also from  the railway stations.
            </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Monthly based</h5>
                        <p class="m-0">A ‘Monthly driver ’ is one who will report to you on monthly basis movements.
                             For which he will draw a monthly salary from you.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Personal Driver</h5>
                        <p class="m-0">A ‘personal driver ’  is one who will report to you on a daily basis.
                            Hire  a driver for your office, or for some other works on  your daily basis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
 
<h1 style="text-align: center;"> Facilities</h1>
    <div class="my-5 px-4">
   
   <p class="text-centre-mt-3 col-lg-4 col-md-6 py-6 mb-6 px-6 pr-5 ml-4" >
    <br><br> <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; KbsDrive4u provide the best Facilities based  on your reqiurement.<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you want to enjoy yourself or with your family in a tour within city, <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out of city then KbsDrive4u is best for you in cheap price and you feel <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comfort with us.KbsDrive4u provide many other Facilities for you like<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hourly based services, Monthly based services, and many other services.</h4> </p>
</div>
<hr>
<br>
<div class="container">
   <div class="row">

   <div class="col-lg-4 col-md-6 mb-6 px-4">
      <div class="bg-white rounded shadow p-3 border-top border-4 border-dark ">
       <div class="d-flex align-items-center mb-2">
      <img src="photos/balbirkomal1.png" width="100">
       <h5 class="m-0 ms-3">Hourly basis</h5>
       </div>
       <p>
       Our hourly packages are great when you are looking for a ride to and fro from the airport.
       
       we make sure you reach your destination in time.
           
       </p>
      </div>
       </div>
       
       <div class="col-lg-4 col-md-6 mb-6 px-4 ">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark  ">
       <div class="d-flex align-items-center mb-2">
      <img src="photos/balbirkomal2.png"  width="100">
       <h5 class="m-0 ms-3 ">Daily basis</h5>
       </div>
       <p>
       A  ‘personal driver ’ or a 'chauffeur' is a driver who will report to you on a daily basis.
       </p>
      </div>
       </div>
      
       <div class="col-lg-4 col-md-6 mb-6 px-4">
      <div class="bg-white rounded shadow p-1 border-top border-4 border-dark ">
       <div class="d-flex align-items-center mb-2">
      <img src="photos/balbirkomal3.jpg" width="120">
       <h5 class="m-0 ms-3">Monthly  basis</h5>
       </div>
       <p>
       A ‘Monthly driver ’ is one who will report to you on monthly basis movements.
                            For which he will draw a monthly salary from you.
       </p>
      </div>
       </div>

       <div class="col-lg-4 col-md-6 mb-6 px-4 mt-5">
      <div class="bg-white rounded shadow p-3 border-top border-4 border-dark ">
       <div class="d-flex align-items-center mb-4">
      <img src="photos/balbirkomal4.jpg" width="100">
       <h5 class="m-0 ms-3">Drink And Drive</h5>
       </div>
       <p>
       If you want to party hard without violating road safety rules or endangering your 
       live drinking and driving, here you can hire a driver for yourself. 
       </p>
      </div>
       </div>

       <div class="col-lg-4 col-md-6 mb-6 px-4 mt-5">
      <div class="bg-white rounded shadow p-3 border-top border-4 border-dark ">
       <div class="d-flex align-items-center mb-1">
      <img src="photos/balbirkomal5.jpg" width="100">
       <h5 class="m-0 ms-3 ml-5">Airport</h5>
       </div>
       <p>
       We can also provide the services to drop or recieve you and your relatives from  Airport,
        this is the best website for you so you can hire a driver for yourself.
       </p>
      </div>
       </div>

       <div class="col-lg-4 col-md-6 mb-6 px-4 mt-5">
      <div class="bg-white rounded shadow p-3 border-top border-4 border-dark ">
       <div class="d-flex align-items-center mb-1">
      <img src="photos/balbirkomal6.jpg" width="100">
       <h5 class="m-0 ms-3 ml-5">Night time</h5>
       </div>
       <p>
       Somepeople want to enjoy their travelling in night time with his/her Family
       without self driving. In that case you can also hire a driver so you can enjoy with your family.

       </p>
      </div>
       </div>
       


       
   </div>
</div>




    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">I'm very thankful to you for providing this wonderful type of services.
                        </p>
                        <h5 class="text-truncate">Rakesh Sharma</h5>
                        <span>Profession (Business Men)</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">You are providing the best services, We were enjoyed too much with your services.
                        </p>
                        <h5 class="text-truncate">khushboo </h5>
                        <span>Profession (Software Developer)</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">This is the best website for me. I'm very happy with your services.
                        </p>
                        <h5 class="text-truncate">Rahul Sharma</h5>
                        <span>Profession (Lawyer)</span>
                    </div>
                </div>
                  <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/team-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Services of this website is very good in a very cheap price.
                        </p>
                        <h5 class="text-truncate">Ashma  Sharma</h5>
                        <span>Profession (Assistant Professor)</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">I was enjoyed your services with my familly. Thanks for providing such type of services with normal price.
                        </p>
                        <h5 class="text-truncate">Satish Sharma</h5>
                        <span>Profession (Commercial Pilot) </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   
    <!-- Testimonial End -->


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
                    <a class="text-white-50 mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="destination.php"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="package.php"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="testimonial.php"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
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