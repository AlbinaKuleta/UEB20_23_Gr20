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
        <a class="site-logo" href="shop-index.php"><img src="assets/pages/img/products/Fruits/organiclogo.ong.jpg" width="70px" height="70px" alt="Organic Shop "></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

         <!-- BEGIN CART -->
                <!-- BEGIN CART -->
<div class="container" style="margin-top: 50px;">
    <div class="row">

        <?php
        // connect with database
        include 'config.php';
        include 'add-cart.php';
        include 'cart.php';
        include 'delete-cart.php';
         
        // get all products
        $result = mysqli_query($conn, "SELECT * FROM products");
 
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
                if ($c->productCode == $row->productCode)
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
                            <?php echo $row->productName; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $row->buyPrice; ?>
                        </p>
                        <?php if ($flag) { ?>
                            <!-- show delete button if already exists -->
                            <form method="POST" action="delete-cart.php">
                                <input type="hidden" name="productCode" value="<?php echo $row->productCode; ?>">
                                <input type="submit" class="btn btn-danger" value="Delete from cart">
                            </form>
                        <?php } else { ?>
                            <!-- add to cart -->
                            <form method="POST" action="add-cart.php">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="productCode" value="<?php echo $row->productCode; ?>">
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
<body>
    <h1>ORGANIC E-COMMERCE</h1>

    <h2>PRODUCT LIST</h2>
    <?php
        // Lidhja me bazën e të dhënave
        include_once 'config.php';

        // Kontrollo nese ka ndonje gabim ne lidhje
        if (!$conn) {
            die("Lidhja me bazën e të dhënave dështoi: " . mysqli_connect_error());
        }

        // Merr të gjitha produktet nga tabela e produkteve
        $pname = $_GET['pname'];
        $sql = "SELECT * FROM products WHERE pname = $pname";
        $rezultati = mysqli_query($conn, $sql);

        // Kontrollo nese ka produkte
        if ($rezultati = $mysqli -> query($sql)) {
            if($rezultati->num_rows > 0){
                while ($row = $rezultati->mysqli_fetch_object()) {
     ?>
     
    <h2>Modify the product</h2>

    <form action="modify.php" method="POST">
      <div class="col-12">
        <label for="emri">Product name</label>
        <input type="text" id="emri" value="<?php echo $row->pname ?>" name="emri"><br>
      </div>

      <div class="col-12">
        <label for="emri">Cost:</label>
        <input type="number" id="cost" value="<?php echo $row->price ?>" name="cost"><br>
        </div>

        <div class="col-12">
        <label for="emri">Image</label>
        <img src="<?php echo $row->image ?>" height="50px" width="50px"><br>
        </div>

        <div class="col-12">
        <label for="emri">Select image</label>
        <input type="blob" id="image" value="<?php echo $row->image ?>" name="image"><br>
        </div>

        <div class="col-12">
        <label for="emri">Cid</label>
        <datalist id="cid" name="cid">
            <option value="1">1-sea fruits</option>
            <option value="2">2-from our farm</option>
            <option value="3">3-fruits</option>
            <option value="4">4-vegetables</option>
            <option value="5">5-cereals</option>
        </datalist>
        <label for="cid">Cid:</label>
        </div>

    <?php
            }
        }
    }       
    ?>
        <input type="submit" value="modify product">
    </form>
</body>
</html>