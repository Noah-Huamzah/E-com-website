<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | E-Store.com</title>
        <link rel="shortcut icon" href="img/background.jpg" type="image/jpg">

          <meta name="viewport" content="width=device-width, initial-scale=1">
     
          <link href="css/bootstrap.css" rel="stylesheet">
        
          <link href="./css/style.css" rel="stylesheet">
        
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <?php
        include 'includes/header.php';
        ?>

        <div id="content">
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Shop Online With Us </h1>
                            <h4><p>Flat 20% OFF on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Choose From A Wide Range Of Brands</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#Shirts">
                               <div class="thumbnail">
                                    <img src="img/van_heusen_navy_color_solid_shirt_1522144402as1327397_1.jpg" alt=""/>
                                        <div class="caption">
                                            <h3>Shirts</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#Jeans">
                               <div class="thumbnail">
                                    <img src="img/pepe32-pm204291m832-pepe-jeans-original-imafe338vhaq9bzu.jpeg" alt=""/>
                                        <div class="caption">
                                            <h3>Jeans</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#Shoes">
                               <div class="thumbnail">
                                    <img src="img/addidas71rR1V+9FqL._UY500_.jpg" alt=""/>
                                        <div class="caption">
                                            <h3>Shoes</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                          <div class="col-sm-3">
                            <a href="products.php#Featured">
                                
                               <div class="thumbnail">
                                   <img src="img/manymore.jpg" alt="others"/>
                                        <div class="caption">
                                            <h3>Many more</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>



                </div>
            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>