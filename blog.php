<?php 
// connect database
include "database/database.php";

  // data select
  $select_sql = "SELECT * FROM blogtable";
  $selectALL = $database -> query($select_sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma</title>
    <!-- fonts -->
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
                                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#feature">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#contact">Contact</a>
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

    <!-- BLOG start -->

    <section class="blog p-5 m-4 ">
        <div class="container">

            <?php if($selectALL -> num_rows>0){ ?>
            <?php while($grabData=$selectALL -> fetch_assoc()) {?>
            <div class="row border border-3 rounded-2 p-2 mb-2">
                <div class="col-lg-5">
                    <img src="<?php echo $grabData['imageB'];?>" class="w-100" alt="sigma">
                </div>
                <div class="col-lg-7 p-2 text-center">
                    <h4 class="mb-2"><?php echo $grabData['heading'];?></h4>
                    <p><?php echo $grabData['details'];?></p>
                </div>
            </div>
            <?php }?>
            <?php }else{?>
            <div class="row">
                <div class="col-lg-12 p-5 m-5">
                    <h1>No Blogs to show</h1>
                </div>
            </div>
            <?php }?>

        </div>
    </section>
    <!-- BLOG end -->

   
    <!-- footer start -->
    <footer>
        <div class="container">
            <div class="row footer-content">
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="f-1">
                        <address>
                            SIGMA LTD <br>
                            Shajadpur, Gulshan <br>
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