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
                        <a href=""  type = "button" onclick = "fun()" class="nav-item nav-link active">Home</a>
                        
                        <script type = "text/javascript">  
            function fun() {  
  
  
               alert ("Please Sign-Up before.....");  
            }  
      </script>    
                      
                        <a href=""  type = "button" onclick = "fun()" class="nav-item nav-link">Services</a>
                      
                        <div class="nav-item dropdown">
                            <a href=""  type = "button" onclick = "fun()" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                               
                                <a href=""   class="dropdown-item">Destination</a>
                                <a href=""   class="dropdown-item">Facilities</a>
                                <a href=""   class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="" type = "button" onclick = "fun()" class="nav-item nav-link">Contact</a>
                        <a href="Balbir/login.php" class="nav-item nav-link">Login </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white  mb-md-3">Let's Hire a Driver</h4>
                            <h1 class="display-3 text-white mb-md-4">And  Discover The World Together</h1>
                            <a href="" type = "button" onclick = "fun()" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white  mb-md-3">Let's Hire a Driver</h4>
                            <h1 class="display-3 text-white mb-md-4">And Discover Amazing Places With Us</h1>
                            <a href="" type = "button" onclick = "fun()" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


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
                                        <option value="3">Out-of State</option>
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
                        <button type = "button" onclick = "fun()" class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-80" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-2 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><u>About Us</u></h6>
                        <h1 class="mb-3">We Provide Best Drivers In Your Budget</h1>
                        <p>KBSDrive4u provide the best drivers based on your requirement. We are providing the various type of Services like hourly based, Monthly based and also many other type of services.  </p>
                        <div class="row m
                            <div class="col-6">
                                <img class="img-fluid mb-4" src="img/about-1.jpg" alt="">
                            </div>
                        </div>
                        <a href=""type = "button" onclick = "fun()" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Our website gives you the best services in cheap price that  make us different from other competitors. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">We will provide you the best services. &nbsp; Our drivers are well experienced and educated.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Worldwide Coverage</h5>
                            <p class="m-0">We will provide our services to various parts of India. You can hire a driver easily from anywhere and at any time. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2 pl-3 pt-2">
                    <div class="destination-item position-relative overflow-hidden  ">
                        <img class="img-fluid mt-5 mb-5 ml-4" src="img/soldier1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white"></h5>
                            <span>200 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden  ">
                        <img class="img-fluid pl-2 mb-5 ml-3 mt-5" src="img/balbir3.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">PUNJAB</h5>
                            <span>90 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2 pr-2">
                        <img class="img-fluid pr-5 mb-5 ml-5 mt-5 mr-2" src="img/balbir4.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">HARYANA</h5>
                            <span>130 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2 ">
                        <img class="img-fluid py-3 px-4 " src="img/balbir5.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">DELHI</h5>
                            <span>430 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2 pb-2 ">
                        <img class="img-fluid py-3 pl-3 mx-4" src="img/balbir6.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">HIMACHAL PRADESH</h5>
                            <span>329 Cities</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden pb-1">
                        <img class="img-fluid py-3 px-5 " src="img/balbir7.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">UTTAR-PRADESH</h5>
                            <span>284 Cities</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->


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


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="package-item bg-white mb-4">
                        <img class="img-fluid ml-3 pl-5 mt-1" src="img/packag.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Jammu </small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Explore the beauty of Jammu </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid mb-1 pt-4 ml-4  " src="img/vrinda.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Vrindavan</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>6 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beautiful place of India</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(4829)</small></h6>
                                    <h5 class="m-0">$950</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid mt-4 ml-4 mb-2" src="img/balbir11.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Taj Mahal</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>8 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>14 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">One of the Wonder of world</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>3.9 <small>(648)</small></h6>
                                    <h5 class="m-0">$520</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid ml-5 mb-2 pt-2" src="img/soldier.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Srinagar</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>4 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Heaven of India</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small>(874)</small></h6>
                                    <h5 class="m-0">$550</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid ml-4 mb-3 pt-2" src="img/balbir13.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Delhi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>5 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">&nbsp;&nbsp;&nbsp;&nbsp; Enjoy the beauty of Delhi</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>3.7 <small>(64)</small></h6>
                                    <h5 class="m-0">$150</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid mt-2 mb-3 ml-3 pl-3" src="img/balbir14.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Golden Temple</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>2 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>5 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Golden Temple</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small>(2580)</small></h6>
                                    <h5 class="m-0">$400</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Packages End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Discount Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For handicapped person</h1>
                    </div>
                    <p class="text-white">We will provide discount  offer for handicapped person<br> and many special mega offer to other's. <br>
                        HURRY UP!&nbsp;&nbsp;&nbsp;&nbsp; --&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and book now.</p>
                    
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0" >Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">Vrindavan</option>
                                        <option value="2">Golden Temple</option>
                                        
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3 " type = "button" onclick = "fun()">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->



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
                    <a class="text-white-50 mb-2" type = "button" onclick = "fun()"  href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
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