<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Checkout | Metronic Shop UI</title>

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
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
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
   
                        <!-- CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">€</a>
                            <a href="javascript:void(0);">£</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="shop-account.php">My Account</a></li>
                        <li><a href="shop-wishlist.php">My Wishlist</a></li>
                        <li><a href="shop-checkout.php">Checkout</a></li>
                        <li><a href="login_form.php" class="btn">Log In</a></li>
                        <li><a href="register_form.php" class="btn">Register</a></li>
                        <li><a href="logut.php" class="btn">Log Out</a></li>
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
            <li><a href="shop-item.php">Product Page</a></li>
                <li><a href="shop-shopping-cart-null.php">Shopping</a></li>
                <li><a href="shop-shopping-cart.php">Shopping Cart</a></li>
                <li><a href="Add_products.php">Add products</a></li>
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
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Checkout</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Checkout</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

              <!-- BEGIN CHECKOUT -->
              <div id="checkout" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#checkout-content" class="accordion-toggle">
                      Step 1: Checkout Options
                    </a>
                  </h2>
                </div>
                <div id="checkout-content" class="panel-collapse collapse in">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <h3>New Customer</h3>
                      <p>Checkout Options:</p>
                      <div class="radio-list">
                        <label>
                          <input type="radio" name="account"  value="register"> Register Account
                        </label>
                        <label>
                          <input type="radio" name="account"  value="guest"> Guest Checkout
                        </label> 
                      </div>
                      <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                      <button class="btn btn-primary" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#payment-address-content">Continue</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h3>Returning Customer</h3>
                      <p>I am a returning customer.</p>
                      <form role="form" action="#">
                        <div class="form-group">
                          <label for="email-login">E-Mail</label>
                          <input type="text" id="email-login" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password-login">Password</label>
                          <input type="password" id="password-login" class="form-control">
                        </div>
                        <a href="javascript:;">Forgotten Password?</a>
                        <div class="padding-top-20">                  
                          <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <hr>
                        <div class="login-socio">
                          <p class="text-muted">or login using:</p>
                          <ul class="social-icons">
                            <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                            <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                            <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                            <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
                          </ul>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CHECKOUT -->

              <!-- BEGIN PAYMENT ADDRESS -->
              <div id="payment-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content" class="accordion-toggle">
                      Step 2: Account &amp; Billing Details
                    </a>
                  </h2>
                </div>
                <div id="payment-address-content" class="panel-collapse collapse">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <h3>Your Personal Details</h3>
                      <div class="form-group">
                        <label for="firstname">First Name <span class="require">*</span></label>
                        <input type="text" id="firstname" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last Name <span class="require">*</span></label>
                        <input type="text" id="lastname" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email">E-Mail <span class="require">*</span></label>
                        <input type="text" id="email" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="telephone">Telephone <span class="require">*</span></label>
                        <input type="text" id="telephone" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="fax">Fax</label>
                        <input type="text" id="fax" class="form-control">
                      </div>

                      <h3>Your Password</h3>
                      <div class="form-group">
                        <label for="password">Password <span class="require">*</span></label>
                        <input type="password" id="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="password-confirm">Password Confirm <span class="require">*</span></label>
                        <input type="text" id="password-confirm" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h3>Your Address</h3>
                      <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="address1">Address 1</label>
                        <input type="text" id="address1" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="address2">Address 2</label>
                        <input type="text" id="address2" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="city">City <span class="require">*</span></label>
                        <input type="text" id="city" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="post-code">Post Code <span class="require">*</span></label>
                        <input type="text" id="post-code" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="country">Country <span class="require">*</span></label>
                        <select class="form-control input-sm" id="country">
                          <option value=""> --- Please Select --- </option>
                          <option value="244">Aaland Islands</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Albania</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="region-state">Region/State <span class="require">*</span></label>
                        <select class="form-control input-sm" id="region-state">
                          <option value=""> --- Please Select --- </option><option value="3513">Aberdeen</option><option value="3514">Aberdeenshire</option><option value="3515">Anglesey</option>
                        </select>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">                      
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I wish to subscribe to the OXY newsletter. 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" checked="checked"> My delivery and billing addresses are the same.
                        </label>
                      </div>
                      <button class="btn btn-primary  pull-right" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-address-content" id="button-payment-address">Continue</button>
                      <div class="checkbox pull-right">
                        <label>
                          <input type="checkbox"> I have read and agree to the <a title="Privacy Policy" href="javascript:;">Privacy Policy</a> &nbsp;&nbsp;&nbsp; 
                        </label>
                      </div>                        
                    </div>
                  </div>
                </div>
              </div>
              <!-- END PAYMENT ADDRESS -->

              <!-- BEGIN SHIPPING ADDRESS -->
              <div id="shipping-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content" class="accordion-toggle">
                      Step 3: Delivery Details
                    </a>
                  </h2>
                </div>
                <div id="shipping-address-content" class="panel-collapse collapse">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="firstname-dd">First Name <span class="require">*</span></label>
                        <input type="text" id="firstname-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="lastname-dd">Last Name <span class="require">*</span></label>
                        <input type="text" id="lastname-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email-dd">E-Mail <span class="require">*</span></label>
                        <input type="text" id="email-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="telephone-dd">Telephone <span class="require">*</span></label>
                        <input type="text" id="telephone-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="fax-dd">Fax</label>
                        <input type="text" id="fax-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="company-dd">Company</label>
                        <input type="text" id="company-dd" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="address1-dd">Address 1</label>
                        <input type="text" id="address1-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="address2-dd">Address 2</label>
                        <input type="text" id="address2-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="city-dd">City <span class="require">*</span></label>
                        <input type="text" id="city-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="post-code-dd">Post Code <span class="require">*</span></label>
                        <input type="text" id="post-code-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="country-dd">Country <span class="require">*</span></label>
                        <select class="form-control input-sm" id="country-dd">
                          <option value=""> --- Please Select --- </option>
                          <option value="244">Aaland Islands</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Albania</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="region-state-dd">Region/State <span class="require">*</span></label>
                        <select class="form-control input-sm" id="region-state-dd">
                          <option value=""> --- Please Select --- </option><option value="3513">Aberdeen</option><option value="3514">Aberdeenshire</option><option value="3515">Anglesey</option><option value="3516">Angus</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button class="btn btn-primary  pull-right" type="submit" id="button-shipping-address" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-method-content">Continue</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SHIPPING ADDRESS -->

              <!-- BEGIN SHIPPING METHOD -->
              <div id="shipping-method" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-method-content" class="accordion-toggle">
                      Step 4: Delivery Method
                    </a>
                  </h2>
                </div>
                <div id="shipping-method-content" class="panel-collapse collapse">
                  <div class="panel-body row">
                    <div class="col-md-12">
                      <p>Please select the preferred shipping method to use on this order.</p>
                      <h4>Flat Rate</h4>
                      <div class="radio-list">
                        <label>
                          <input type="radio" name="FlatShippingRate" value="FlatShippingRate"> Flat Shipping Rate
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="delivery-comments">Add Comments About Your Order</label>
                        <textarea id="delivery-comments" rows="8" class="form-control"></textarea>
                      </div>
                      <button class="btn btn-primary  pull-right" type="submit" id="button-shipping-method" data-toggle="collapse" data-parent="#checkout-page" data-target="#payment-method-content">Continue</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SHIPPING METHOD -->

              <!-- BEGIN PAYMENT METHOD -->
              <div id="payment-method" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-method-content" class="accordion-toggle">
                      Step 5: Payment Method
                    </a>
                  </h2>
                </div>
                <div id="payment-method-content" class="panel-collapse collapse">
                  <div class="panel-body row">
                    <div class="col-md-12">
                      <p>Please select the preferred payment method to use on this order.</p>
                      <div class="radio-list">
                        <label>
                          <input type="radio" name="CashOnDelivery" value="CashOnDelivery"> Cash On Delivery
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="delivery-payment-method">Add Comments About Your Order</label>
                        <textarea id="delivery-payment-method" rows="8" class="form-control"></textarea>
                      </div>
                      <button class="btn btn-primary  pull-right" type="submit" id="button-payment-method" data-toggle="collapse" data-parent="#checkout-page" data-target="#confirm-content">Continue</button>
                      <div class="checkbox pull-right">
                        <label>
                          <input type="checkbox"> I have read and agree to the <a title="Terms & Conditions" href="javascript:;">Terms & Conditions </a> &nbsp;&nbsp;&nbsp; 
                        </label>
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
              <!-- END PAYMENT METHOD -->

              <!-- BEGIN CONFIRM -->
              <div id="confirm" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#confirm-content" class="accordion-toggle">
                      Step 6: Confirm Order
                    </a>
                  </h2>
                </div>
                <div id="confirm-content" class="panel-collapse collapse">
                  <div class="panel-body row">
                    <div class="col-md-12 clearfix">
                      <div class="table-wrapper-responsive">
                      <table>
                        <tr>
                          <th class="checkout-image">Image</th>
                          <th class="checkout-description">Description</th>
                          <th class="checkout-model">Model</th>
                          <th class="checkout-quantity">Quantity</th>
                          <th class="checkout-price">Price</th>
                          <th class="checkout-total">Total</th>
                        </tr>
                        <tr>
                          <td class="checkout-image">
                            <a href="javascript:;"><img src="assets/pages/img/products/Organic.jpg" alt="Berry Lace Dress"></a>
                          </td>
                          <td class="checkout-description">
                            <h3><a href="javascript:;">We cultivate with love</a></h3>
                            <p><strong>Item 1</strong></p>
                            <em>More info is here</em>
                          </td>
                          <td class="checkout-model">RES.193</td>
                          <td class="checkout-quantity">1</td>
                          <td class="checkout-price"><strong><span>$</span>5.00</strong></td>
                          <td class="checkout-total"><strong><span>$</span>5.00</strong></td>
                        </tr>
                        <tr>
                          <td class="checkout-image">
                            <a href="javascript:;"><img src="assets/pages/img/products/Cabbage.jpg" alt="Berry Lace Dress"></a>
                          </td>
                          <td class="checkout-description">
                            <h3><a href="javascript:;">HEALTH is power</a></h3>
                            <p><strong>Item 1</strong> - Calories: 5kcal; Size:choose </p>
                            <em>More info is here</em>
                          </td>
                          <td class="checkout-model">RES.193</td>
                          <td class="checkout-quantity">1</td>
                          <td class="checkout-price"><strong><span>$</span>4.00</strong></td>
                          <td class="checkout-total"><strong><span>$</span>4.00</strong></td>
                        </tr>
                      </table>
                      </div>
                      <div class="checkout-total-block">
                        <ul>
                          <li>
                            <em>Sub total</em>
                            <strong class="price"><span>$</span>4.00</strong>
                          </li>
                          <li>
                            <em>Shipping cost</em>
                            <strong class="price"><span>$</span>3.00</strong>
                          </li>
                          <li>
                            <em>Eco Tax (-2.00)</em>
                            <strong class="price"><span>$</span>3.00</strong>
                          </li>
                          <li>
                            <em>VAT (17.5%)</em>
                            <strong class="price"><span>$</span>3.00</strong>
                          </li>
                          <li class="checkout-total-price">
                            <em>Total</em>
                            <strong class="price"><span>$</span>13.00</strong>
                          </li>
                        </ul>
                      </div>
                      <div class="clearfix"></div>
                      <button class="btn btn-primary pull-right" type="submit" id="button-confirm">Confirm Order</button>
                      <button type="button" class="btn btn-default pull-right margin-right-20">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONFIRM -->
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

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
            <p>Organic is dedicated to bringing the freshest and healthiest organic produce to your table.

              We work closely with local farmers to provide you with a wide variety of delicious fruits and
              
              vegetables that are free from harmful pesticides and chemicals.
              
              Our mission is to promote a healthy lifestyle and sustainable agriculture practices while supporting local communities.
              
              Join us in our commitment to eating well and living better with Organica.
              
              Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore. </p>
           
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
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
              Pristina , Kosovo<br>
              Phone: +383 44 222 333<br>
              Fax: +383 44 222 333<br>
              Email: <a href="mailto:info@organic.com">info@organic.com</a><br>
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
            2015 © Keenthemes. ALL Rights Reserved. 
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
            <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
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

    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/checkout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            Checkout.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>