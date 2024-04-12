<?php include("includes/db.php"); ?>
<?php 
if (isset($_POST['register_team'])){
    $team_name = $_POST['team_name'];

    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"PHOTOS/$product_img1");
    
        $sql = 'insert into teams (team_name,product_img1) values ("'.$team_name.'","'.$product_img1.'")';
        mysqli_query($con,$sql);
        echo "<script>alert('Your Team profile Has been created Sucessfully, Plesae wait for Verification')</script>";
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <!-- <meta name="theme-color" content="#ffffff"> -->
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#222032" media="(prefers-color-scheme: dark)">
    <title>5aside BOOKING</title>
    <meta name="description" content="Unic – NFT Marketplace PWA Mobile Template">
    <meta name="keywords"
        content="bootstrap 5, mobile template, wallet, crypto, currency, about, blog, cordova, phonegap, mobile, html, nft, store, marketplace, pwa" />
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon/icon-32x32.png" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="images/favicon/icon-96x96.png">
    <!-- CSS FILES -->
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/remixicon.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendors/zuck_stories/zuck.min.css">
    <link rel="manifest" href="_manifest.json" />
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery.min.js"></script>

</head>
<body class="bg-snow">
    <!-- ===================================
      START LODAER PAGE
    ==================================== -->
    <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- START WRAPPER -->
    <div id="wrapper">
        <!-- START CONTENT -->
        <div id="content">
            <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="activites" class="icon">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                </div>
            </header>
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>
            <!-- ===================================
               START THE CONTENT
            ==================================== -->
            <section class="un-page-components">
                <div class="un-title-default">
                    <div class="text">
                        <h2>Register Your Team</h2>
                        <p>5aside</p>
                    </div>
                </div>
                
                
                
                <form method="post" enctype="multipart/form-data">
                <div class="content-comp p-0">
                    
                    <div class="space-items"></div>
                    
                    <div class="padding-20 form-edit-profile bg-white">
                        <h2>Team Information</h2>
                        <hr>
                        <div class="form-group">
                            <label>Team Name</label>
                            <input type="text" name="team_name" class="form-control" placeholder="Enter Your Team Name" required>
                        </div>

                        <div class="form-group">
                            <label>Team Name</label>
                            <input type="file" name="product_img1" class="form-control" placeholder="Enter Your Team Name" required>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button name="register_team" type="submit" class="form-control" style="background : blue;">Register</button>
                        </div>
                    </div>
                </div>
            </form>
                <!-- End.content-comp -->
            </section>
        </div>
    </div>
    
    <!-- ===================================
      START STATUS CONNECTION
    ==================================== -->
    <div class="d-flex justify-content-center">
        <div class="toast status-connection" role="alert" aria-live="assertive" aria-atomic="true"></div>
    </div>
    <script src="sweetalert2/sweetalert2.js"></script>
    <script src="sweetalert2/sweetalert2.all.js"></script>
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <!-- JS FILES -->
    <script src="assets/vendors/zuck_stories/zuck.min.js"></script>
    <script src="assets/vendors/smoothscroll/smoothscroll.min.js"></script>
    <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/nouislider/wNumb.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- PWA APP SERVICE REGISTRATION AND WORKS JS -->
    <script src="assets/js/pwa-services.js"></script>
</body>
</html>