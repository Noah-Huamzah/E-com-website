<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query);
?>

<!DOCTYPE html>

<head>
    <title>Success | Life Style Store</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

      <meta name="viewport" content="width=device-width, initial-scale=1">
 
      <link href="css/bootstrap.css" rel="stylesheet">
  
      <link href="css/style.css" rel="stylesheet">
  
      <script src="js/jquery.js"></script>
 
      <script src="js/bootstrap.min.js"></script>
</head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>