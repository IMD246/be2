
  <?php
  if (session('user')){
     var_dump('Ton tai');
  }else{
    var_dump('khong tin tai');
  }
  ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Book Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
	 <header id="tg-header" class="tg-header tg-haslayout">
        @include('template.404error')


        </header>
        <!-- Banner -->
        <div style="margin-bottom:80px " class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>Your cart</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">home</a></li>
								<li class="tg-active">Products</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- *****************cart****************? -->
         <div class="container">
          <form action="handleCart.blade.php" method="post">
            <table class="table table-bordered" id="cart-summary">
                <!-- TABLE HEADER START -->
                <thead>
                    <tr>
                        <th class="cart-product">Preview</th>
                        <th class="cart-description">Name</th>
                        <th class="cart-avail text-center">Availability</th>
                        <th class="cart-unit text-right">Price</th>
                        <th class="cart_quantity text-center">Quantity</th>
                        <th class="cart-delete">&nbsp;</th>
                        <th class="cart-total text-right">Total</th>
                    </tr>
                </thead>
                <!-- TABLE HEADER END -->
                <!-- TABLE BODY START -->
                <tbody>
                    <!-- SINGLE CART_ITEM START -->
                    <tr>
                        <td class="cart-product">
                            <img style="width: 100px; height: 130px; " alt="Flowers in Chania" src="./images/img-01.jpg">
                        </td>
                        <td class="cart-description">
                            <p class="product-name">Faded Short Sleeves T-shirt</p>
                        </td>
                        <td class="cart-avail"><span class="label label-success">In stock</span></td>
                        <td class="cart-unit">
                                <h5>$150</h5>
                        </td>
                        <td class="cart_quantity text-center">
                            <input type="number" id="quantity" value="1" name="quantity" min="1" max="10">
                        </td>
                        <td class="cart-delete text-center">
                            <span>
                                <a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </span>
                        </td>
                        <td class="cart-total">
                            <span class="price">$16.51</span>
                        </td>
                    </tr>
                    <!-- SINGLE CART_ITEM END -->
                    <!-- SINGLE CART_ITEM START -->
                    <tr>
                        <td class="cart-product">
                            <img style="width: 100px; height: 130px; " alt="Flowers in Chania" src="./images/img-01.jpg">
                        </td>
                        <td class="cart-description">
                            <p class="product-name">Faded Short Sleeves T-shirt</p>
                        </td>
                        <td class="cart-avail"><span class="label label-success">In stock</span></td>
                        <td class="cart-unit">
                                <h5>$150</h5>
                        </td>
                        <td class="cart_quantity text-center">
                            <input type="number" id="quantity" value="1" name="quantity" min="1" max="10">
                        </td>
                        <td class="cart-delete text-center">
                            <span>
                                <a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </span>
                        </td>
                        <td class="cart-total">
                            <span class="price">$16.51</span>
                        </td>
                    </tr>
                    <!-- SINGLE CART_ITEM END -->
                    <!-- SINGLE CART_ITEM START -->
                    <tr>
                        <td class="cart-product">
                            <img style="width: 100px; height: 130px; " alt="Flowers in Chania" src="./images/img-01.jpg">
                        </td>
                        <td class="cart-description">
                            <p class="product-name">Faded Short Sleeves T-shirt</p>
                        </td>
                        <td class="cart-avail"><span class="label label-success">In stock</span></td>
                        <td class="cart-unit">
                                <h5>$150</h5>
                        </td>
                        <td class="cart_quantity text-center">
                            <input type="number" id="quantity" value="1" name="quantity" min="1" max="10">
                        </td>
                        <td class="cart-delete text-center">
                            <span>
                                <a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </span>
                        </td>
                        <td class="cart-total">
                            <span class="price">$16.51</span>
                        </td>
                    </tr>
                    <!-- SINGLE CART_ITEM END -->
                </tbody>
                <!-- TABLE BODY END -->
                <!-- TABLE FOOTER START -->

                <!-- TABLE FOOTER END -->
            </table>
            <input type="submit" style="width: 130px; height: 50px; background-color: aqua; color: black; border-radius: 50px; margin-left: 1000px; margin-bottom: 90px;" value="Submit" >
          </form>

         </div>

        <!-- ************************************* -->
	      @include('template.405footer')

		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
