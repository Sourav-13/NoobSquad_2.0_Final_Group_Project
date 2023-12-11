<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .item-container {
            margin-top: 150px;
            margin-right: 15%;
            margin-left: 15%;
            display: flex;
            flex-wrap: wrap;
            justify-content:baseline;

        }

        .box {
            width: 300px;
            text-align: center;
            box-shadow: 5px 5px 5px 5px gray;
            border-radius: 5%;
            overflow: hidden;
            padding: 10px;
            margin: 10px 25Px;
            
        }

        .box img {
            width: 100%;
            height: 280px;
            border-radius: 5%;

        }
    </style>
    <title>LawnCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">



    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-circle"></div>
			<div class="preloader-img">
					<img src="images/Loading_logo.png" alt="">
			</div>
	</div> -->

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area admin-panel" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="images/Nurani.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li><a href="#">Home</a>

                                </li>
                                <li><a href="manage-user.html">Manage User</a></li>
                                </li>
                                <li><a href="add-items.php">Add Items</a>

                                </li>
                                <li class="current-list-item"><a href="view-items.html">View Items</a></li>
                                <li><a href="view-appointments.html">View Appointment</a>
                                <li><a href="admin-panel.html">Admin Panel</a>

                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fa fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <div class="item-container">
        <?php
        include 'connect.php';
        $sql = "SELECT * FROM item_t";;
        $res = mysqli_query($conn, $sql); ?>

        <?php
        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
                <div class="box">
                    <img src="images/upload/<?= $images['img_url'] ?>">
                    <h3><?= $images['name'] ?></h3>
                    <p><?= $images['description'] ?></p>
                </div>

        <?php }
        } ?>
    </div>






    <script src="js/sticker.js"></script>
    <script src="js/jquery.isotope-3.0.6.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/plugins.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>






    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

        jQuery(document).ready(function($) {
            $('.main-menu').meanmenu({
                meanMenuContainer: '.mobile-menu',
                meanScreenWidth: "992"
            });
        });
    </script>



</body>

</html>