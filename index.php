<?php 
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

    <input type="text" name="seller" placeholder="Seller">

    <input type="text" name="buyer" placeholder="Buyer">

    <input type="text" name="phone_number" placeholder="Phone_Number">

    <input type="text" name="plot" placeholder="PLOT NUMBER">

    <input type="text" name="gabas" placeholder="GABAS">

    <input type="text" name="yamma" placeholder="YAMMA">

    <input type="text" name="kudu" placeholder="KUDU">

    <input type="text" name="arewa" placeholder="AREWA">

    <input type="text" name="sellerw1" placeholder="Shaida 1">

    <input type="text" name="sellerw2" placeholder="Shaida 2">

    <input type="text" name="sellerw3" placeholder="Shaida 3">

    <input type="text" name="buyerw1" placeholder="Shaida 1">

    <input type="text" name="buyerw2" placeholder="Shaida 2">

    <input type="text" name="buyerw3" placeholder="Shaida 3">

    <input type="text" name="number" placeholder="Lamba">

    <input type="text" name="amount" placeholder="Kudi">

    <input type="text" name="location" placeholder="unguwa">

    <input type="file" name="product_img1" placeholder="hoto">

   <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
    
    $seller = $_POST['seller'];
    $buyer = $_POST['buyer'];
    $phone_number = $_POST['phone_number'];
    $plot = $_POST['plot'];
    $gabas = $_POST['gabas'];
    $yamma = $_POST['yamma'];
    $kudu = $_POST['kudu'];
    $arewa = $_POST['arewa'];
    $sellerw1 = $_POST['sellerw1'];
    $sellerw2 = $_POST['sellerw2'];
    $sellerw3 = $_POST['sellerw3'];
    $buyerw1 = $_POST['buyerw1'];
    $buyerw2 = $_POST['buyerw2'];
    $buyerw3 = $_POST['buyerw3'];
    $number = $_POST['number'];
    $amount = $_POST['amount'];
    $location = $_POST['location'];

    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"fpdf/$product_img1");

    $insert_center = "insert into files(seller,buyer,phone_number,date,plot,gabas,yamma,kudu,arewa,sellerw1,sellerw2,sellerw3,buyerw1,buyerw2,buyerw3,number,amount,location,product_img1) values ('$seller','$buyer','$phone_number',NOW(),'$plot','$gabas','$yamma','$kudu','$arewa','$sellerw1','$sellerw2','$sellerw3','$buyerw1','$buyerw2','$buyerw3','$number','$amount','$location','$product_img1')";
    
    $run_center = mysqli_query($con,$insert_center);
}

?>