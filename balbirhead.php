<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
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
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        
                    </div>
          


<nav class ="navbar navbar-expand-lg navbar-light bg-light px-lg-2 py-lg-2 sticky-top">
        <div class ="container-fluid">
    
    <div class ="collapse navbar-collapse" id = "navbarSupportedContent">
 
 <div class ="d-flex">
   
    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginmodel">
        Login
      </button>
      <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#Registermodel">
        Registration
      </button>
    </div>
   </div> 
  </div>
 </nav> 
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
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white  mb-md-3">Let's Hire a Driver</h4>
                            <h1 class="display-3 text-white mb-md-4">And Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
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

 <!-- user login -->
                
         
  <!-- user Registration -->

              
                <div class="container">
                    <div class="title">

                   <h1> Registeration form</h1>
                    </div>
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control shadow-none" required > 
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input name="phonenum"  type="number" class="form-control shadow-none"required > 
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input name="email" type="email" class="form-control shadow-none"required > 
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of birth</label>
                            <input name="dob"  type="date" class="form-control shadow-none"required > 
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Pincode</label>
                            <input name="pincode"  type="number" class="form-control shadow-none" required > 
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Address</label>
                            <input name="address"  type="text" class="form-control shadow-none" required> 
                        </div> 
                       
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input name="pass"  type="number" class="form-control shadow-none" required> 
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Confirm Password</label>
                            <input type="cpass" class="form-control shadow-none" required> 
                        </div>
                        
                    </div>
                




                    

        </form>
        
      </div>
    </div>
  </div>


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
           
<h5 class=" bg-dark text-white p-3 m-0"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>









<?php
 require('balbirconnect.php');
 ?>

<?php
 include('balbirconnect.php');
 ?>
<?php  
if($_POST['register']){
   $name = $_POST['name'];
   $phone =   $_POST['phonenum'];
   $mail =  $_POST['email'];
   $birth =  $_POST['dob'];
   $code = $_POST['pincode'];
   $adrs = $_POST['address'];
   $ps =  $_POST['pass'];
   $cps =  $_POST['cpass'];

   "INSERT INTO sharma VALUES( '$name', '$phone', '$mail', '$birth', '$code', '$adrs', '$ps',    '$cps' )";

   $data = mysqli_query($connn, $query);
   if($data){
    echo "Data inserted";
   }
   else{
    echo "failed";
   }
}
?>