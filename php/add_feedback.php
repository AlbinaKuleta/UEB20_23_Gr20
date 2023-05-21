<!DOCTYPE html>
<html lang="en">

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>About us | Metronic Shop UI</title>

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

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

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
                        
                    </ul>
                </div>
                <!-- TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="shop-account.php">My Account</a></li>
                        <li><a href="shop-wishlist.php">My Wishlist</a></li>
                        <li><a href="shop-checkout.php">Checkout</a></li>
                        <li><a href="../php/login_form.php" class="btn">Log In</a></li>
                        <li><a href="../php/register_form.php" class="btn">Register</a></li>
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
       <div class="top-cart-block">
        <div class="top-cart-info">
          <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
          <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
        </div>
        <i class="fa fa-shopping-cart"></i>
                      
        
            <div class="top-cart-content-wrapper">
                <div class="top-cart-content">
                  <ul class="scroller" style="height: 250px;">
                    <li>
                      <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Apple.png " alt="Healthy Fruits" width="37" height="34"></a>
                      <span class="cart-content-count">x 1</span>
                      <strong><a href="shop-item.php">Healthy Fruits</a></strong>
                      <em>$1230</em>
                      <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                    </li>
                    <li>
                      <a href="shop-item.php"><img src="assets/pages/img/products/Vegetables/cauliflower.png" alt="Fresh Vegetables" width="37" height="34"></a>
                      <span class="cart-content-count">x 1</span>
                      <strong><a href="shop-item.php">Fresh Vegetables</a></strong>
                      <em>$1230</em>
                   
                  </ul>
            <div class="text-right">
              <a href="shop-shopping-cart.php" class="btn btn-default">View Cart</a>
              <a href="shop-checkout.php" class="btn btn-primary">Checkout</a>
            </div>
          </div>
        </div>            
      </div>
      <!--END CART -->

        <!-- NAVIGATION -->
        <div class="header-navigation">
          <ul>
         
            <li class="dropdown"><a href="shop-index.php">Home</a></li>

            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Products
                
              </a>
                


              <ul class="dropdown-menu">
 <!-- NAVIGATION -->
 <div class="header-navigation">
          <ul>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Healthy Fruits
                
              </a>
                
              <!-- DROPDOWN MENU -->
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="shop-product-list-berries.php">Berries <i class="fa fa-angle-right"></i></a>
                  <a href="shop-product-list-melons.php">Melons & Grapes<i class="fa fa-angle-right"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="shop-product-list.php">Second Level Link</a></li>
                    <li><a href="shop-product-list.php">Second Level Link</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Second Level Link 
                        <i class="fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.php">Third Level Link</a></li>
                        <li><a href="shop-product-list.php">Third Level Link</a></li>
                        <li><a href="shop-product-list.php">Third Level Link</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <!--Vegetables-->
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Fresh Vegetables
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="shop-product-list-vegetables.php">Vegetables <i class="fa fa-angle-right"></i></a>
                  </li>
              </ul>
            </li>

 <!--From our farm-->
 <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                From Our Farm 
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="shop-product-list-farm.php">From Our Farm <i class="fa fa-angle-right"></i></a>
                  </li>
                </ul>
            </li>
            <li class="active"><a href="shop-product-list.php">Product List</a></li>
            <li><a href="shop-item.php">Discount</a></li>
                <li><a href="shop-shopping-cart-null.php">Shopping</a></li>
                <li><a href="shop-shopping-cart.php">Shopping Cart</a></li>
                <li><a href="Add_products.php">Add products</a></li>
                <li><a href="add_feedback.php">Add feedback</a></li>
</ul>
</ul>
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
               New
                
              </a>
                
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a><img src="assets/pages/img/products/Fruits/Apple.png" class="img-responsive" alt="Apples"></a>
                          </div>
                          <h3><a>Apples</a></h3>
                          <div class="pi-price">$9.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Avocados.png" class="img-responsive" alt="Avocados"></a>
                          </div>
                          <h3><a href="shop-item.php">Avocados</a></h3>
                          <div class="pi-price">$8.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/bananas.png" class="img-responsive" alt="bananas"></a>
                          </div>
                          <h3><a href="shop-item.php">Bananas</a></h3>
                          <div class="pi-price">$11.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/bartlettpears.png" class="img-responsive" alt="bartlettpears"></a>
                          </div>
                          <h3><a href="shop-item.php">Bartlett Pears</a></h3>
                          <div class="pi-price">$29.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/bloodorganes.png" class="img-responsive" alt="bloodorganes"></a>
                          </div>
                          <h3><a href="shop-item.php">Blood Organes</a></h3>
                          <div class="pi-price">$2.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/caraorganes.png" class="img-responsive" alt="caraorganes"></a>
                          </div>
                          <h3><a href="shop-item.php">Cara Organes</a></h3>
                          <div class="pi-price">$21.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/dragonfruit.png" class="img-responsive" alt="dragonfruit"></a>
                          </div>
                          <h3><a href="shop-item.php">Dragon furits</a></h3>
                          <div class="pi-price">$31.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/freshkiwi.png" class="img-responsive" alt="freshkiwi"></a>
                          </div>
                          <h3><a href="shop-item.php">Fresh Kiwi</a></h3>
                          <div class="pi-price">$25.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Freshness.png" class="img-responsive" alt="Freshness"></a>
                          </div>
                          <h3><a href="shop-item.php">Freshness</a></h3>
                          <div class="pi-price">$17.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Grannysmithapples.png" class="img-responsive" alt="Grannysmithapples"></a>
                          </div>
                          <h3><a href="shop-item.php">Granny Smith Apples </a></h3>
                          <div class="pi-price">$14.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            
            </li>
            <div class="header-navigation">
          <ul>
         
            
            
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
               About
                
              </a>
                


              <ul class="dropdown-menu">
            <li class="dropdown"><a href="shop-about.php">About</a></li>
           <li><a href="shop-contacts.php">Contacts</a></li>
          <li><a href="shop-checkout.php">Checkout</a></li>
          <li><a href="shop-account.php">My account</a></li>
              <li><a href="shop-wishlist.php">My Wish List</a></li>   
</ul>
</li>
<div class="header-navigation">
          <ul>
         
            
            
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
             FAQ
                
              </a>
              <ul class="dropdown-menu">
              <li class="dropdown"><a href="shop-faqs.php">FAQ</a></li>
<li><a href="shop-goods-compare.php">Product Comparison</a></li>
  <li><a href="shop-standart-forms.php">Standart Forms</a></li>           
              </ul>
              </ul>
            </li>    
          </ul>
        </div>
      </div>
    </div>
    <!-- Header -->
    <div class="title-wrapper">
      <div class="container"><div class="container-inner">
        <h1><span>ADD PRODUCTS</span> CATEGORY</h1>
        <em>We delivery organic and fresh products</em>
        <em>from our fields to your doorsteps</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Fruits category</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="shop-product-list-vegetables.php"><i class="fa fa-angle-right"></i> Fresh Vegetables</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.php"><i class="fa fa-angle-right"></i> Healthy Frutis</a></li>

              <li class="list-group-item clearfix"><a href="shop-product-list-farm.php"><i class="fa fa-angle-right"></i> From Our Farm</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.php"><i class="fa fa-angle-right"></i> Fish & Meat</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.php"><i class="fa fa-angle-right"></i> Healthy Drinks</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.php"><i class="fa fa-angle-right"></i> Dairy Products</a></li>
           
            </ul>

            <div class="sidebar-filter margin-bottom-25">
              <h2>Filter</h2>
              <h3>Availability</h3>
              <div class="checkbox-list">
                <label><input type="checkbox"> Not Available (3)</label>
                <label><input type="checkbox"> In Stock (26)</label>
              </div>

              <h3>Price</h3>
              <p>
                <label for="amount">Range:</label>
                <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
              </p>
              <div id="slider-range"></div>
            </div>

            <div class="sidebar-products clearfix">
              <h2>Bestsellers</h2>
              <div class="item">
                <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Strafberries.png" alt="Strawberry"></a>
                <h3><a href="shop-item.php">Strawberry</a></h3>
                <div class="price">$5.00</div>
              </div>
              <div class="item">
                <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Apple.png" alt="Apple"></a>
                <h3><a href="shop-item.php">Apple</a></h3>
                <div class="price">$9.00</div>
              </div>
              <div class="item">
                <a href="shop-item.php"><img src="assets/pages/img/products/Fruits/Farm/eggs.png" alt="Eggs"></a>
                <h3><a href="shop-item.php">Eggs</a></h3>
                <div class="price">$7.00</div>
              </div>
            </div>
          </div>


<?php
//connectimi me databazen 
include '../php/config.php';
?>

<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en">

<!-- Head BEGIN -->
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

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="../html/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../html/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
  <!-- Page level plugin styles -->
  <!-- <link href="../css/style.css" > -->
  <link href="../html/assets/pages/css/animate.css" rel="stylesheet">
  <link href="../html/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="../html/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">

  <!-- Theme styles -->
  
  <link href="../html/assets/pages/css/components.css" rel="stylesheet">
  <link href="../html/assets/pages/css/slider.css" rel="stylesheet">
  <link href="../html/assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="../html/assets/corporate/css/style.css" rel="stylesheet">
  <link href="../html/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../html/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../html/assets/corporate/css/custom.css" rel="stylesheet">
</head>
<!-- Head END -->

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
                        
                    </ul>
                </div>
                <!-- TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="shop-account.php">My Account</a></li>
                        <li><a href="shop-wishlist.php">My Wishlist</a></li>
                        <li><a href="shop-checkout.php">Checkout</a></li>
                        <li><a href="../php/login_form.php" class="btn">Log In</a></li>
                        <li><a href="../php/register_form.php" class="btn">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

    <!-- HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="shop-index.php"><img src="../html/assets/pages/img/products/Fruits/logo.png" width="70px" height="70px" alt="Organic Shop "></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- Cart -->


        <!-- NAVIGATION -->
        <div class="header-navigation">
          <ul>
         
            <li class="dropdown"><a href="shop-index.php">Home</a></li>

            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Products
                
              </a>
                


              <ul class="dropdown-menu">
 <!-- NAVIGATION -->
 <div class="header-navigation">
          <ul>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Healthy Fruits
                
              </a>
                
              <!-- DROPDOWN MENU -->
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="shop-product-list-berries.php">Berries <i class="fa fa-angle-right"></i></a>
                  <a href="shop-product-list-melons.php">Melons & Grapes<i class="fa fa-angle-right"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="shop-product-list.php">Second Level Link</a></li>
                    <li><a href="shop-product-list.php">Second Level Link</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Second Level Link 
                        <i class="fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.php">Third Level Link</a></li>
                        <li><a href="shop-product-list.php">Third Level Link</a></li>
                        <li><a href="shop-product-list.php">Third Level Link</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <!--Vegetables-->
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Fresh Vegetables
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="shop-product-list-vegetables.php">Vegetables <i class="fa fa-angle-right"></i></a>
                  </li>
              </ul>
            </li>

 <!--From our farm-->
 <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                From Our Farm 
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="shop-product-list-farm.php">From Our Farm <i class="fa fa-angle-right"></i></a>
                  </li>
                </ul>
            </li>
            <li class="active"><a href="shop-product-list.php">Product List</a></li>
            <li><a href="shop-item.php">Discount</a></li>
                <li><a href="../html/shop-shopping-cart-null.php">Shopping</a></li>
                <li><a href="../html/shop-shopping-cart.php">Shopping Cart</a></li>
                <li><a href="../html/Add_products.php">Add products</a></li>
                <li><a href="../php/add_feedback.php">Add feedback</a></li>
</ul>
</ul>
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
               New
                
              </a>
                
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a><img src="../html/assets/pages/img/products/Fruits/Apple.png" class="img-responsive" alt="Apples"></a>
                          </div>
                          <h3><a>Apples</a></h3>
                          <div class="pi-price">$9.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/Avocados.png" class="img-responsive" alt="Avocados"></a>
                          </div>
                          <h3><a href="shop-item.php">Avocados</a></h3>
                          <div class="pi-price">$8.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/bananas.png" class="img-responsive" alt="bananas"></a>
                          </div>
                          <h3><a href="shop-item.php">Bananas</a></h3>
                          <div class="pi-price">$11.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/bartlettpears.png" class="img-responsive" alt="bartlettpears"></a>
                          </div>
                          <h3><a href="shop-item.php">Bartlett Pears</a></h3>
                          <div class="pi-price">$29.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/bloodorganes.png" class="img-responsive" alt="bloodorganes"></a>
                          </div>
                          <h3><a href="shop-item.php">Blood Organes</a></h3>
                          <div class="pi-price">$2.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/caraorganes.png" class="img-responsive" alt="caraorganes"></a>
                          </div>
                          <h3><a href="shop-item.php">Cara Organes</a></h3>
                          <div class="pi-price">$21.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/dragonfruit.png" class="img-responsive" alt="dragonfruit"></a>
                          </div>
                          <h3><a href="shop-item.php">Dragon furits</a></h3>
                          <div class="pi-price">$31.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/freshkiwi.png" class="img-responsive" alt="freshkiwi"></a>
                          </div>
                          <h3><a href="shop-item.php">Fresh Kiwi</a></h3>
                          <div class="pi-price">$25.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/Freshness.png" class="img-responsive" alt="Freshness"></a>
                          </div>
                          <h3><a href="shop-item.php">Freshness</a></h3>
                          <div class="pi-price">$17.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/Grannysmithapples.png" class="img-responsive" alt="Grannysmithapples"></a>
                          </div>
                          <h3><a href="shop-item.php">Granny Smith Apples </a></h3>
                          <div class="pi-price">$14.00</div>
                          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            
            </li>
            <div class="header-navigation">
          <ul>           
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
               About
                
              </a>                
              <ul class="dropdown-menu">
            <li class="dropdown"><a href="shop-about.php">About</a></li>
           <li><a href="shop-contacts.php">Contacts</a></li>
          <li><a href="shop-checkout.php">Checkout</a></li>
          <li><a href="shop-account.php">My account</a></li>
              <li><a href="shop-wishlist.php">My Wish List</a></li>   
</ul>
</li>
<div class="header-navigation">
          <ul>
            
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
             FAQ
                
              </a>
              <ul class="dropdown-menu">
              <li class="dropdown"><a href="shop-faqs.php">FAQ</a></li>
<li><a href="shop-goods-compare.php">Product Comparison</a></li>
  <li><a href="shop-standart-forms.php">Standart Forms</a></li>           
              </ul>
              </ul>
            </li>    
          </ul>
        </div>
      </div>
    </div>
    <!-- Header -->
    <div class="title-wrapper">
      <div class="container"><div class="container-inner">
        <h1><span>ADD PRODUCTS</span> CATEGORY</h1>
        <em>We delivery organic and fresh products</em>
        <em>from our fields to your doorsteps</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Fruits category</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
                <li class="active"><a href="shop-product-list.php">Product List</a></li>
                <li><a href="shop-item.php">Discount</a></li>
                <li><a href="../html/shop-shopping-cart-null.php">Shopping</a></li>
                <li><a href="../html/shop-shopping-cart.php">Shopping Cart</a></li>
                <li><a href="../html/Add_products.php">Add products</a></li>
                <li><a href="../php/add_feedback.php">Add feedback</a></li>
           
            </ul>

            

          <div class="sidebar-products clearfix">
              <h2>Bestsellers</h2>
             <div class="row">
                <div class="col md-4">
                    <div class="item">
                        <a href="shop-item.php"><img src="../images/strawberries.png" alt="Strawberry"></a>
                        <h3><a href="shop-item.php">Strawberry</a></h3>
                        <div class="price">$5.00</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item">
                        <a href="shop-item.php"><img src="../images/apples.png" alt="Apple"></a>
                        <h3><a href="shop-item.php">Apple</a></h3>
                        <div class="price">$9.00</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item">
                        <a href="shop-item.php"><img src="../html/assets/pages/img/products/Fruits/Farm/eggs.png" alt="Eggs"></a>
                        <h3><a href="shop-item.php">Eggs</a></h3>
                        <div class="price">$7.00</div>
                    </div>
                </div>
             </div>
          </div>
        </div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            color: #333;
        }

        .produkti {
            margin-bottom: 10px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            padding: 5px;
            font-size: 14px;
        }
    </style>
</head>
>>>>>>> 55a60b74b1dfbfa85ae6466c85ca03ccdfec790b
<body>
    <h1>ORGANIC E-COMMERCE</h1>
    <h3 style="color: light-brown;"> Give your feedback here!</h3>
    <form action="add_feedback.php" method="POST">

       <h5>Your name:<br></h5>
        <input type="text" name="uname" required><br>
        
        <h5>Your surname:<br></h5>
        <input type="text" name="surname" required><br>

        <h5>Your email:<br></h5>
        <input type="text" name="email" required><br>

        <h5>Your feedback:<br></h5>
        <textarea name="feedback" rows="15" cols="50"></textarea><br><br>

        <button type="submit" value="Submit">Submit</button>
        <button type="button" value="Cancel" >Cancel</button>


    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </br>
     
  <!-- BEGIN STEPS -->
  <div class="steps-block steps-block-red">
      <div class="container">
        <div class="row">
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-truck"></i>
            <div>
              <h2>Free shipping</h2>
              <em>Express delivery withing 3 days</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-gift"></i>
            <div>
              <h2>Daily Gifts</h2>
              <em>3 Gifts daily for lucky customers</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-phone"></i>
            <div>
              <h2>+383 44 222 333</h2>
              <em>24/7 customer care available</em>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Organic is dedicated to bringing the freshest and healthiest organic produce to your table.  </p>
            <p> We work closely with local farmers to provide you with a wide variety of delicious fruits and  </p>
            <p> vegetables that are free from harmful pesticides and chemicals.  </p>
            <p>Our mission is to promote a healthy lifestyle and sustainable agriculture practices while supporting local communities. </p>
            <p> Join us in our commitment to eating well and living better with Organica. </p>
            <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping & Returns</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>      
          </div>
          <!-- END TWITTER BLOCK -->
          
          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              Agim Ramadani<br>
              Pristina, Kosovo<br>
              Phone: +383 44 222 333<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@organic.com</a><br>
              Skype: <a href="skype:organic">organic</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
              <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
              <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
              <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
              <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
              <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
              <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
              <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
            </ul>
          </div>
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER -->
          <div class="col-md-6 col-sm-6">
            <div class="pre-footer-subscribe-box pull-right">
              <h2>Newsletter</h2>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> 
          </div>
          <!-- END NEWLETTER -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

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
              <li><img src="../html/assets/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
              <li><img src="../html/assets/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="../html/assets/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="../html/assets/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="../html/assets/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
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

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="../html/assets/pages/img/products/Fruits/Apple.png" alt="" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Avocados" src="../html/assets/pages/img/products/Fruits/Avocados.png"></a>
                    <a href="javascript:;"><img alt="bartlettpears" src="../html/assets/pages/img/products/Fruits/bartlettpears.png"></a>
                    <a href="javascript:;"><img alt="caraorganes" src="../html/assets/pages/img/products/Fruits/caraorganes.png"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h1>Fresh and Healthy</h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>   Our products are carefully sourced from trusted farms and producers to ensure the highest quality. </p>
                      <p> We offer a wide range of fresh vegetables, healthy fruits, fish and meat, dairy products, and healthy drinks. </p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>Liter</option>
                        <option>Kg</option>
                        <option>G</option>
                      </select>
                    </div>
                    
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>


    <!-- CORE PLUGINS(REQUIRED FOR ALL PAGES) --> 
    <script src="../html/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../html/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="../html/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="../html/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="../html/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="../html/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="../html/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='../html/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="../html/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
    <script src="../html/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="../html/assets/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->

    <script src="../html/assets/corporate/scripts/layout.js" type="text/javascript"></script>
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
</body>
</html>


<?php

if(!$conn){
    die('Could not connect: '. mysqli_error($conn));
  }else{
    $uname = $surname = $email = $feedback = "";

    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback (uname, surname, email, feedback)
    VALUES ('$uname', '$surname', '$email', '$feedback')";
    
    if(mysqli_query($conn, $sql)){
        header('Location: message.php');
        echo 'You entered your data successfully';
        exit();
      }else{
        echo 'Error: ' . mysqli_error($conn);
      }
    }
  }
 
?>

