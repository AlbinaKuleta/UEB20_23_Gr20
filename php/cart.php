<?php
    // connect with database
    include_once '../php/config.php';
         
?>
<!DOCTYPE html>

<html lang="en">

<!-- Head -->
<head>
  <meta charset="utf-8">
  <title>Organic Shop</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="https://p7.hiclipart.com/preview/907/455/804/organic-food-publix-computer-icons-organic.jpg">

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Global styles -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
  <!-- Page level plugin styles -->
  <link href="assets/pages/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">

  <!-- Theme styles -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/pages/css/slider.css" rel="stylesheet">
  <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">

  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap.js"></script>
</head>

    <!-- Body -->
 <body class="ecommerce">
    <!-- STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>

    <!-- TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+383 44 222 333</span></li>
                        <?php
    echo '<a href="https://www.facebook.com">';
    echo '<i class="fab fa-facebook"></i>';
    echo '</a>';
?>

<?php
echo '<a href="https://www.linkedin.com/">';
echo '<i class="fab fa-linkedin"></i>';
echo '</a>';

    ?>
   

    <!-- TOP BAR MENU -->
                <div class="col-md-8 col-sm-4 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="shop-account.php">My Account</a></li>
                        <li><a href="shop-wishlist.php">My Wishlist</a></li>
                        <li><a href="shop-checkout.php">Checkout</a></li>
                        <li><a href="login_form.php" class="btn">Log In</a></li>
                        <li><a href="register_form.php" class="btn">Register</a></li>
                        <li><a href="index_Look.php" class=btn>Look</a></li>
                      
                   
                    </ul>
                </div>
            </div>
        </div>        
    </div>

    <!-- HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="shop-index.php"><img src="assets/pages/img/products/Fruits/organiclogo.ong.jpg" width="70px" height="70px" alt="Organic Shop "></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

         <!-- BEGIN CART -->
<div class="container" style="margin-top: 50px;">
    <!-- link to open cart page -->
    <div class="row">
        <div class="col-md-6">
            <a href="../php/cart.php" class="btn btn-link">
                Cart
            </a>
        </div>
    </div>
    <div class="row">
        <?php         
        // get all products
        $result = mysqli_query($conn, "SELECT * FROM products;");
 
        // get cookie cart
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
 
        // loop through all cart items
        while ($row = mysqli_fetch_object($result))
        {
            // check if product already exists in cart
            $flag = false;
            foreach ($cart as $c)
            {
                if ($c->pid == $row->pid)
                {
                    $flag = true;
                    break;
                }
            }
            ?>
            <div class="col-md-3" style="margin-bottom: 20px;">
                <div class="card" style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row->pname; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $row->price; ?>
                        </p>
                        <?php if ($flag) { ?>
                            <!-- show delete button if already exists -->
                            <form method="POST" action="../php/delete-cart.php">
                                <input type="hidden" name="productid" value="<?php echo $row->pid; ?>">
                                <input type="submit" class="btn btn-danger" value="Delete from cart">
                            </form>
                        <?php } else { ?>
                            <!-- add to cart -->
                            <form method="POST" action="../php/add-cart.php">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="productid" value="<?php echo $row->pid; ?>">
                                <input type="submit" class="btn btn-primary" value="Add to cart">
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
            <div class="text-right">
              <a href="shop-shopping-cart.php" class="btn btn-default">View Cart</a>
              <a href="shop-checkout.php" class="btn btn-primary">Checkout</a>
            </div>
          </div>
        </div>            
      </div>

      <?php
      if(!$email_id) ?>
      <ul>
        <li>
          <a href="?action=cookie" href="">
          <i class="fa fa-shopping-cart" aria-hidden="true">
            <span><?php if(!empty($cart_item)){
              echo $cart_item;}
              else{echo "0"; };
              ?>
            </span>
          </i>
          </a>
        </li>
      </ul>
         <!--END CART -->

 
<div class="container" style="margin-top: 50px;">
 
    <?php
    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
    $cart = json_decode($cart);
 
    $total = 0;
 
    foreach ($cart as $c)
    {
        $total += $c->product->price * $c->quantity;
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $c->product->pname; ?></h5>
                        <p class="card-text"><?php echo $c->product->price * $c->quantity; ?></p>
 
                        <form method="POST" action="delete-cart.php" style="float: right; margin-left: 10px;">
                            <input type="hidden" name="pid" value="<?php echo $c->pid; ?>">
                            <button type="submit" class="btn btn-danger">
                                x
                            </button>
                        </form>
 
                        <form method="POST" action="update-cart.php" style="float: right;">
                            <input type="number" name="quantity" min="1" value="<?php echo $c->quantity; ?>">
                            <input type="hidden" name="pid" value="<?php echo $c->pid; ?>">
                            <input type="submit" class="btn btn-warning" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <p>
        <?php echo $total; ?>
    </p>
 
</div>
 <!-- BEGIN FOOTER -->
 <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2023 © Organic. ALL Rights Reserved. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="list-unstyled list-inline pull-right">
              <li><img src="assets/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
              <li><img src="assets/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="assets/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="assets/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="assets/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="http://www.organic.com/">Oraganic.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
    <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="assets/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->

    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            Layout.initSliderRange();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
