<?php 
// connect database
include "database/database.php";


// contact
if(isset($_POST['csubmit'])){
    $contname= $_POST['cname'];
    $contemail= $_POST['cemail'];
    $contsubject= $_POST['csubject'];
    $contmessage= $_POST['cmessage'];
    $insertContactInfo="INSERT INTO contacttable( name, email, subject, cmessage) VALUES ('$contname', '$contemail', '$contsubject', '$contmessage')";
    if($database -> query($insertContactInfo)){
      
    }
    else{
      die($database -> error );
    }       
     
  }

// subscription
if(isset($_POST['esubmit'])){
  
  $email= $_POST['insertemail'];
  
  $insertEmail="INSERT INTO subscribe( email) VALUES ('$email')";
  if($database -> query($insertEmail)){
    
  }
  else{
    die($database -> error );
  }       
   
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma</title>
    <!-- fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css links -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <!-- header start -->
    <header>
        <div class="container">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid g-0">
                    <!-- logo -->
                    <a class="navbar-brand textlogo" href="index.php">
                        Sigma
                    </a>
                    <!-- logo -->
                    <!-- toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                        aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- toggler -->
                    <!-- menu -->
                    <div class="collapse navbar-collapse menu" id="navbarS">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#slider">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feature">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Log-in</a>
                            </li>
                        </ul>

                    </div>
                    <!-- menu -->
                </div>
            </nav>
            <!-- navbar -->
        </div>
    </header>
    <!-- header end -->
    <!-- slider start -->
    <section class="slider" id="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- slider -->
                    <div id="carouselEx" class="carousel slide" data-bs-ride="carousel">
                        <!-- indicators -->
                        <div class="carousel-indicators cid">
                            <button type="button" data-bs-target="#carouselEx" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselEx" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselEx" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <!-- indicators -->
                        <!-- carousel inner -->
                        <div class="carousel-inner">
                            <!-- item start -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- slider content -->
                                    <div class="col-lg-5 col-md-7">
                                        <div class="s-content">
                                            <h1>Inspire your inspiration</h1>
                                            <h2>Simple to use for your app, products showcase and your inspiration</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae
                                                eros eget tellus tristique bibendum. Donec rutrum sed sem quis
                                                venenatis. Proin viverra risus a eros volutpat tempor. In quis arcu et
                                                eros porta lobortis sit </p>
                                            <ul class="list-inline s-icon">
                                                <li class="list-inline-item"><i class="fab fa-apple"></i></li>
                                                <li class="list-inline-item"><i class="fab fa-android"></i></li>
                                                <li class="list-inline-item"><i class="fab fa-windows"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- slider img -->
                                    <div class="offset-lg-2 col-lg-5 col-md-5 d-md-block d-none">
                                        <div class="s-img text-center">
                                            <img src="images/sigmaDesign1.png" class="img-fluid" alt="tinyone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <!-- item start -->
                            <div class="carousel-item ">
                                <div class="row">
                                    <!-- slider content -->
                                    <div class="col-lg-5 col-md-7">
                                        <div class="s-content">
                                            <h1>Inspire your inspiration</h1>
                                            <h2>Simple to use for your app, products showcase and your inspiration</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae
                                                eros eget tellus tristique bibendum. Donec rutrum sed sem quis
                                                venenatis. Proin viverra risus a eros volutpat tempor. In quis arcu et
                                                eros porta lobortis sit </p>
                                            <ul class="list-inline s-icon">
                                                <li class="list-inline-item"><i class="fab fa-apple"></i></li>
                                                <li class="list-inline-item"><i class="fab fa-android"></i></li>
                                                <li class="list-inline-item"><i class="fab fa-windows"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- slider img -->
                                    <div class="offset-lg-2 col-lg-5 col-md-5 d-md-block d-none">
                                        <div class="s-img text-center">
                                            <img src="images/sigmaDesign2.png" class="img-fluid" alt="tinyone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <!-- item start -->
                            <div class="carousel-item ">
                                <div class="row">
                                    <!-- slider content -->
                                    <div class="col-lg-5 col-md-7">
                                        <div class="s-content">
                                            <h1>Inspire your inspiration</h1>
                                            <h2>Simple to use for your app, products showcase and your inspiration</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae
                                                eros eget tellus tristique bibendum. Donec rutrum sed sem quis
                                                venenatis. Proin viverra risus a eros volutpat tempor. In quis arcu et
                                                eros porta lobortis sit </p>
                                            <ul class="list-inline s-icon">
                                                <li class="list-inline-item"><i class="fab fa-apple"></i></li>
                                                <li class="list-inline-item"><i class="fab fa-android"></i></li>
                                                <li class="list-inline-item"><i class="fab fa-windows"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- slider img -->
                                    <div class="offset-lg-2 col-lg-5 col-md-5 d-md-block d-none">
                                        <div class="s-img text-center">
                                            <img src="images/sigmaDesign.png" class="img-fluid" alt="tinyone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                        </div>
                        <!-- carousel inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider end -->

    <!-- feature start -->
    <section class="feature" id="feature">
        <div class="container">
            <!-- 1st row -->
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="f-title text-center">
                        <h1 class="f-h1">Sigma Features</h1>
                        <p class="f-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis illo perspiciatis
                            ea impedit, hic fugit voluptates cupiditate asperiores esse, voluptas deleniti.</p>
                    </div>
                </div>
            </div>
            <!-- 2nd row -->
            <div class="row">
                <!-- single item start  -->
                <div class="col-lg-4 col-sm-6 f-single">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="f-icon text-center">
                                <i class="fas fa-tablet-alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="f-content">
                                <h2 class="fc-h2">App Development</h2>
                                <p class="fc-p mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    vitae eros eget tellus tristique bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-4 col-sm-6 f-single">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="f-icon text-center">
                                <i class="far fa-lemon"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="f-content">
                                <h2 class="fc-h2">Cyber Security</h2>
                                <p class="fc-p mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    vitae eros eget tellus tristique bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-4 col-sm-6 f-single">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="f-icon text-center">
                                <i class="far fa-folder"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="f-content">
                                <h2 class="fc-h2">Web Development</h2>
                                <p class="fc-p mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    vitae eros eget tellus tristique bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-4 col-sm-6 f-single">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="f-icon text-center">
                                <i class="fas fa-code"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="f-content">
                                <h2 class="fc-h2">UI/UX</h2>
                                <p class="fc-p mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    vitae eros eget tellus tristique bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-4 col-sm-6 f-single">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="f-icon text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="f-content">
                                <h2 class="fc-h2">Motion Graphics</h2>
                                <p class="fc-p mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    vitae eros eget tellus tristique bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-4 col-sm-6 f-single">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="f-icon text-center">
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="f-content">
                                <h2 class="fc-h2">Game Development</h2>
                                <p class="fc-p mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                                    vitae eros eget tellus tristique bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </section>
    <!-- feature end -->

    <!-- blog start -->
    <section class="blog" id="blog">
        <div class="container-fluid bloginner">
            <div class="boxb">
                <span><a href="blog.php" class="confetti-button">BLOG</a></span>
            </div>
        </div>

    </section>

    <!-- blog end -->

    <!-- Our team start -->
    <section class="ourteam" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-center f-h1">OUR MANAGEMENT <span>TEAM</span></h2>
                </div>
            </div>
            <div class="row owl-carousel owl-theme">

                <div class="col-md-12 col-sm-12 item">
                    <div class="team text-center item">
                        <div class="team-image item">
                            <img src="images/member1.jpg" class="img-responsive" alt="team image">
                            <div class="social-icons item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                            </div>
                        </div>
                        <h3>Alex Johnson</h3>
                        <p>PROJECT MANAGER</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 item">
                    <div class="team text-center item">
                        <div class="team-image item">
                            <img src="images/member2.jpg" class="img-responsive" alt="team image">
                            <div class="social-icons item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                            </div>
                        </div>
                        <h3>Dana Jones</h3>
                        <p>SENIOR PROGRAMMER</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 item">
                    <div class="team text-center item">
                        <div class="team-image item">
                            <img src="images/member3.jpg" class="img-responsive" alt="team image">
                            <div class="social-icons item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                            </div>
                        </div>
                        <h3>Patrick Leeson</h3>
                        <p>CEO / FOUNDER EVENTO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our team end -->



<!-- contact start -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 maincform">
                    <div class="row conp">
                        <div class="col-lg-12 text-center tokenFirstpart chead">
                            <h2 class="mt-0">Contact Sigma</h2>
                            <p>Keep in touch with us </p>
                        </div>
                        <div class="col-lg-8 mx-auto ">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <div class="row">
                                    <div class="col mb-4">
                                        <input type="text" name="cname" class="form-control cinput2" placeholder="Your Name *"
                                            aria-label="First name">
                                    </div>
                                    <div class="col mb-4">
                                        <input type="email" name="cemail" class="form-control cinput2" placeholder="Your Email *"
                                            aria-label="Last name">
                                    </div>
                                    <div class="mb-4">

                                        <input type="text" name="csubject" class="form-control cinput2" id="exampleFormControlInput1"
                                            placeholder="Subject">
                                    </div>
                                    <div class="mb-4">

                                        <textarea class="form-control ctarea" name="cmessage" id="exampleFormControlTextarea1" rows="6"
                                            placeholder="Your Message"></textarea>
                                    </div>

                                </div>
                                <button type="submit" class="salebarbtn cbtn mx-auto d-block" name="csubmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="row ">
                        <div class="col-lg-4 col-md-4 subhead">
                            <h3>SUBSCRIBE</h3>
                            <span>Never miss our any news and updates</span>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <input type="email" name="insertemail" class="form-control cinput" placeholder="Your email"
                                aria-label="First name">
                        </div>
                        <div class="col-lg-3 col-md-2">
                            <button type="submit" name="esubmit" class="btn f-submit">SUBSCRIBE</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
<!-- contact end -->

<!-- google map -->
<section id="google-map">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.682430230769!2d90.42290301536323!3d23.794320393013066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7bbbcaed367%3A0x1e4e04569ec8da78!2sSigma%20IT%20Institute!5e0!3m2!1sen!2sbd!4v1631107373201!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" frameborder="0" allowfullscreen=""></iframe>
    </section>
<!-- google map -->

    <!-- footer start -->
    <footer>
      <div class="container">
        <div class="row footer-content">
          <div class="col-md-3 col-sm-12 col-12">
            <div class="f-1">
              <address>
                SIGMA LTD <br>
                Shajadpur, Gulshan  <br>
                Dhaka, Bangaldesh
              </address>
              <p>sigma@gmail.com</p>
              <p>+844 35149182</p>
            </div>
          </div>
          <div class="offset-md-1 col-md-1 col-sm-6 col-6">
            <div class="f-1">
              <p><a href="#">Examples</a></p>
              <p><a href="#">Shop</a></p>
              <p><a href="#">License</a></p>
            </div>
          </div>
          <div class="offset-md-1 col-md-1 col-sm-6 col-6">
            <div class="f-1">
              <p><a href="#">Contact</a></p>
              <p><a href="#">About</a></p>
              <p><a href="#">Privacy</a></p>
              <p><a href="#">Terms</a></p>
            </div>
          </div>
          <div class="offset-md-1 col-md-1 col-sm-6 col-6">
            <div class="f-1">
              <p><a href="#">Download</a></p>
              <p><a href="#">Support</a></p>
              <p><a href="#">Documents</a></p>             
            </div>
          </div>
          <div class="offset-md-1 col-md-1 col-sm-6 col-6">
            <div class="f-1">
              <p><a href="#">Media</a></p>
              <p><a href="#">Blog</a></p>
              <p><a href="#">Forums</a></p>             
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- footer end -->




    <!-- js links -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>