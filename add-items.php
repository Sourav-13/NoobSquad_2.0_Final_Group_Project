<!DOCTYPE html>
<html lang="en">

<head>
    <title>LawnCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        label {
            font-size: 15px !important;
        }

        hr {
            width: 500px !important;
            height: 1px;
        }

        .ck {
            margin-top: 35px;
            box-shadow: 10px 10px 10px 10px gray;
        }

        #custom-button {
            margin-left: -50px;
            padding: 10px;
            color: white;
            background-color: #009578;
            border: 1px solid #000;
            border-radius: 5px;
            cursor: pointer;
        }

        #custom-button:hover {
            background-color: #00b28f;
        }

        #custom-text {
            margin-left: 10px;
            font-family: sans-serif;
            color: #aaa;
        }
    </style>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
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

    <style>

    </style>

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
                                <li class="current-list-item"><a href="add-items.html">Add Items</a>

                                </li>
                                <li><a href="view-items.html">View Items</a></li>
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


    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper img ck" style="background-image: url(images/about.jpg); ">
                        <div class="row">
                            <div class="col-md-9 col-lg-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Add Items</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Don't forget to provide short description of the item!
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Image</label><br>
                                                    <!-- <input type="file" name="image" id=""> -->
                                                    <input type="file" id="real-file" hidden="hidden" name="image" />
                                                    <button type="button" id="custom-button"><i class="fa fa-solid fa-upload"></i>  CHOOSE AN IMAGE </button>
                                                    <span id="custom-text">No file chosen, yet.</span>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Name</label>
                                                    <input type="text" class="form-control" name="name" id="subject" placeholder="">
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Description</label>
                                                    <!-- <input type="text" class="form-control" name="description" id="subject" placeholder=""> -->
                                                    <textarea name="description" class="form-control" id="message" cols="30" rows="4" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" name="submit" value="Add Item" class="btn btn-primary">
                                                    <!-- <div class="submitting"></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
if (isset($_POST['submit']) && isset($_FILES['image'])) {
    include "connect.php";

    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    //echo $img_name, $img_size, $tmp_name, $error, $name, $description;
    echo $img_name;

    if ($error === 0) {
        if ($img_size > 125000000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'images/upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO item_t (img_url,name,description) 
                VALUES('$new_img_name','$name','$description')";

                mysqli_query($conn, $sql);
                header("Location: add-items.php");
                
                //   header("Location: index.html");

            } else {
                $em = "You can't upload files of this type";
                //  header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        // header("Location: index.php?error=$em");
    }
} else {
    //  header("Location: index.php");
}

?>



    <script src="js/file-input.js"></script>
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