<?php 
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFFICE OF THE VILLAGE HEAD AUJARAWAR ALKALI GEZAWA LOCAL GOVERNMENT AREA KANO STATE NIGERIA</title>
    <meta name="description" content="OFFICE OF THE VILLAGE HEAD AUJARAWAR ALKALI GEZAWA LOCAL GOVERNMENT AREA KANO STATE NIGERIA">
    <meta name="keywords" content="OFFICE OF THE VILLAGE HEAD AUJARAWAR ALKALI GEZAWA LOCAL GOVERNMENT AREA KANO STATE NIGERIA">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
    <link href="../../../fonts.googleapis.com/css28337.css?family=Poppins:wght@300;400;500;600;700;800&amp;family=Unbounded:wght@400;500;600;700&amp;display=swap" rel="stylesheet">



    <!--==============================
	    All CSS File
	============================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/imageRevealHover.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container" style="margin-top : 10px">
<marquee style="width : 100%; height : 50px; background-color : green "><h5 style="text-align : center; color : #fff; font-weight : 500; margin-top : 10px">TAKARDAR CINIKIN FILI/GONA/GIDA/KANGO - SALES AGREEMENT OF PLOT/FARM/HOUSE/UNCOMPLETED BUILDING</h5></marquee>
<h4 style="text-align : center; color : #000000; margin : 50px; margin-top : 20px; font-family : Helvetica (sans-serif); font-weight : 900; font-size : 27px">OFFICE OF THE VILLAGE HEAD AUJARAWAR ALKALI GEZAWA LOCAL GOVERNMENT AREA, KANO STATE, NIGERIA.</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME OF THE SELLER</th>
      <th scope="col">NAME OF THE BUYER</th>
      <th scope="col">PHONE NUMBER</th>
      <th scope="col">DATE & TIME</th>
      <th scope="col" style="text-align : right">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $get_four = "select * from files order by 1 DESC";
    $run_top = mysqli_query($con,$get_four);
    while($row = mysqli_fetch_array($run_top)){
    $id = $row['id'];
    $seller = $row['seller'];
    $phone_number = $row['phone_number'];
    $buyer = $row['buyer'];

    $amount = $row['amount'];
    $date = $row['date'];
    ?>
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td><?php echo $seller ?></td>
      <td><?php echo $buyer ?></td>
      <td><?php echo $phone_number ?></td>
      <td><?php echo $date ?></td>
      <td>
      <form method="get" action="fpdf/tuto1.php">
      <input class="profile__delete" type="hidden" name="id" value="<?php echo $id ?>">
      <button type="submit" class="btn btn-primary" style="text-align: center; color : #111; background-color : green; float : right">PRINT</button>
      </form>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
    
</body>

    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/twinmax.js"></script>
    <script src="assets/js/imageRevealHover.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/wow.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</html>