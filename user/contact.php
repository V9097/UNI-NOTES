
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>contact</title>
    <!-- header Bootstrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- header Stylesheet -->
    <link rel="stylesheet" href="header/css/style.css">
   

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">    

     <!-- Footer -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="../foot.css">
</head>

<body>
<?php include_once('header.php');?>

<main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Contact Us</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="../notes.php">Notes</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>  
    </main>
    <div id="space" class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><UNI-NOTES</h3>
                            </a>
                            <!-- <h3>Contact Us</h3> -->
                        </div>
                        <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="d4093a98-9864-4177-aaf7-37949a2666c3">
                        <div class="form-floating mb-3">
                            <input type="text" value="" name="fname" required="true" class="form-control">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="mobno" class="form-control" required="true" maxlength="10" pattern="[0-9]+">
                            <label for="floatingPassword">Mobile Number</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" value="" name="email" required="true">
                            <label for="floatingPassword">Email address</label>
                        </div>
                      
                        <div class="form-floating mb-4">
                        <textarea name="Message" class="form-control"></textarea>
                            <label for="floatingPassword">Messege</label>
                        </div>
                        

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Send</button>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <footer class="footer-distributed">

  <div class="footer-left">
    <h3><span>UNI-NOTES</span></h3>
     <div>
        <br>
        <div style="color: #fff;">
            GROUP NO : 35
        </div>
     </div>

    <p class="footer-links" style="color: #fff;">
    <div style="color: #fff;">
        <div>
            <a>VIJAY KUMAR</a>
        </div>
        <div>
            <a>SHALU KUMARI</a>
        </div>
        <div>
            <a>WASIM AKRAM</a>
        </div>
    </div>
    </p>

    <!-- <p class="footer-company-name">Copyright © 2021 <strong>SagarDeveloper</strong> All rights reserved</p> -->
 </div>

 <div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <a href="https://maps.app.goo.gl/C5bpr9UJJgL1i6uBA" target="_blank">
            <p><span style="color: #fff;">Garia, Kolkata, West Bengal PIN 700152, India</span></p>
            </a>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+91 9097198208</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a style="color: #fff;" href="vijaynsec90@gmail.com">uninotes@gmail.com</a></p>
    </div>
 </div>
 <div style="float: right;" class="footer-right">
    <p class="footer-company-about">
        <span>About the UNI-NOTES</span>
        <strong>UNI-NOTES</strong> is a notes sharing website
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
  </div>
</footer>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
        <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>