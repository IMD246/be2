<!doctype html>
<html class="no-js" lang="">
@php
      $bookdetail=$book::where("idBook","=",$_GET['idBook'])->first();
     $arrbook = $book::where("idAuthor","=",$bookdetail->idAuthor)->get();

@endphp
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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->

		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Author Detail Start
			*************************************-->

		<div class="container">
		<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>People’s Choice</span>Infomation book</h2>
                            </div>
                        </div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-authordetail">
								<figure class="tg-authorimg">
									<img style="width: 200px; height: 250px" src="{{url('images/books')}}/{{$bookdetail->image}}" alt="image description">
								</figure>
								<div class="tg-authorcontentdetail">
									<div class="tg-sectionhead">
										<h2><span>Sold: {{$temp::find($bookdetail->idAuthor)->publishedBooks}} Books</span>Author: {{$temp::find($bookdetail->idAuthor)->nameAuthor}}</h2>
                                        <p></p>

									</div>
                                    <br>
                                        <h3> Name: {{$bookdetail->nameBook}}</h3>
				               <form action="./cart.blade.php" method="post">

                                <div class="tg-description">
                                        <p>{{$bookdetail->Description}}</p>
                                    <br>
                                    <div class="price">
                                      <p style="font-size: 20px; font-style: normal;">Price:
                                        <span style="margin-left: 300px; color: red;" class="new_price">
                                          <sup> {{$bookdetail->salePrice}}.000VND</sup>
                                        </span>
                                       </p>

                                       <p style="font-size: 20px; font-style: normal;">Quantity:
                                        <span style="margin-left: 260px; color: red;" class="new_price">
                                            <input  type="number" id="quantity" value="1" name="quantity" min="1" max="10">
                                        </span>
                                       </p>
                                        <div class="stars">
                                          @for($x = 5; $x > 0; $x--)
                                                    @php
                                                             if($bookdetail->rate > 0.5){
                                                            echo '<i class="fa fa-star"></i>';
                                                             }elseif($bookdetail->rate <= 0 ){
                                                            echo '<i class="fa fa-star-o"></i>';
                                                            }else{
                                                             echo '<i class="fa fa-star-half-o"></i>';
                                                             }
                                                         $bookdetail->rate--;
                                                      @endphp
                                                        @endfor


                                       <input type="submit" style="margin-left: 700px;" class="btn btn-primary" value="Add to cart" >

                                </form>
                                <!-- THEM VAO USER IDAU SAU CAI TEMPATE.UPDATE NEU CO-->
                               <form method="POST" action="{{route('template.store')}}">
                                    @csrf
                                    <P>
                                       <input  id="idBook" value="{{$bookdetail->idBook}}" type="hidden" name="idBook" hidden/>
                                    </p>
                                       <input class="star star-5" id="star-5" value="5" type="radio" name="star"/>
                                      <label class="star star-5" for="star-5"></label>
                                     <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                                      <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
									<input id="comment" type="text" name="comment" />
                                     <button type="submit" class="btn btn-primary">Gui</button>
                                </div>

                            </form>

									<div class="tg-booksfromauthor" style="margin-top: 50px;">
										<div class="tg-sectionhead">
											<h2>Related books</h2>
										</div>
										<div class="row">
                                        @foreach($arrbook as $item )

											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
												<div class="tg-postbook">
													<figure class="tg-featureimg">
														<div class="tg-bookimg">
															<div class="tg-frontcover"><img src="{{url('images/books')}}/{{$item->image}}" alt="image description"></div>
															<div class="tg-backcover"><img src="{{url('images/books')}}/{{$item->image}}" alt="image description"></div>
														</div>
														<a class="tg-btnaddtowishlist" href="javascript:void(0);">
															<i class="icon-heart"></i>
															<span>add to wishlist</span>
														</a>
													</figure>
													<div class="tg-postbookcontent">
														<ul class="tg-bookscategories">
															<li><a href="../public/category_book.blade.php?idCategory={{ $item->idCategory }}">{{$temp1::find($item->idCategory)->nameCategory}}</a></li>
														</ul>
														<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
														<div class="tg-booktitle">
															<h3><a href="./book_detail.blade.php?idBook={{ $item->idBook }}">{{$item->nameBook}}</a></h3>
														</div>
														<span class="tg-bookwriter">By: <a href="./authordetail.blade.php?id={{ $item->idAuthor }}">{{$temp::find($item->idAuthor)->nameAuthor}}</a></span>
                                                      @for($x = 5; $x > 0; $x--)
                                                    @php
                                                             if($item->rate > 0.5){
                                                            echo '<i class="fa fa-star"></i>';
                                                             }elseif($item->rate <= 0 ){
                                                            echo '<i class="fa fa-star-o"></i>';
                                                            }else{
                                                             echo '<i class="fa fa-star-half-o"></i>';
                                                             }
                                                         $item->rate--;
                                                      @endphp
                                                        @endfor														<span class="tg-bookprice">
															<ins>{{$item->price}}.000VND</ins>
															<del>{{$item->salePrice}}.000VND</del>
														</span>
														<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
															<i class="fa fa-shopping-basket"></i>
															<em>Add To Basket</em>
														</a>
													</div>
												</div>
											</div>
                                        @endforeach

										</div>
									</div>
                                    <h1>Rateing and Review</h1>
                                  @foreach($review->where("idBook","=",$bookdetail->idBook) as $key )
                                  <h3>{{$key->comment}}</h3>
                                    <p>

                                      @for($x = 5; $x > 0; $x--)
                                                      @php
                                                             if($key->rate > 0.5){
                                                            echo '<i class="fa fa-star"></i>';
                                                             }elseif($key->rate <= 0 ){
                                                            echo '<i class="fa fa-star-o"></i>';
                                                            }else{
                                                             echo '<i class="fa fa-star-half-o"></i>';
                                                             }
                                                         $key->rate--;
                                                      @endphp
                                                      @endfor
                                      </p>

                                  @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div></div>
			<!--************************************
					Author Detail End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-clientservices">
								<li class="tg-devlivery">
									<span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Fast Delivery</h3>
										<p>Shipping Worldwide</p>
									</div>
								</li>
								<li class="tg-discount">
									<span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Open Discount</h3>
										<p>Offering Open Discount</p>
									</div>
								</li>
								<li class="tg-quality">
									<span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Eyes On Quality</h3>
										<p>Publishing Quality Work</p>
									</div>
								</li>
								<li class="tg-support">
									<span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
									<div class="tg-titlesubtitle">
										<h3>24/7 Support</h3>
										<p>Serving Every Moments</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="tg-threecolumns">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="images/flogo.png" alt="image description"></a></strong>
									<ul class="tg-contactinfo">
										<li>
											<i class="icon-apartment"></i>
											<address>Suit # 07, Rose world Building, Street # 02, AT246T Manchester</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>
												<em>0800 12345 - 678 - 89</em>
												<em>+4 1234 - 4567 - 67</em>
											</span>
										</li>
										<li>
											<i class="icon-clock"></i>
											<span>Serving 7 Days A Week From 9am - 5pm</span>
										</li>
										<li>
											<i class="icon-envelope"></i>
											<span>
												<em><a href="mailto:support@domain.com">support@domain.com</a></em>
												<em><a href="mailto:info@domain.com">info@domain.com</a></em>
											</span>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgetnavigation">
									<div class="tg-widgettitle">
										<h3>Shipping And Help Information</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li><a href="javascript:void(0);">Terms of Use</a></li>
											<li><a href="javascript:void(0);">Terms of Sale</a></li>
											<li><a href="javascript:void(0);">Returns</a></li>
											<li><a href="javascript:void(0);">Privacy</a></li>
											<li><a href="javascript:void(0);">Cookies</a></li>
											<li><a href="javascript:void(0);">Contact Us</a></li>
											<li><a href="javascript:void(0);">Our Affiliates</a></li>
											<li><a href="javascript:void(0);">Vision &amp; Aim</a></li>
										</ul>
										<ul>
											<li><a href="javascript:void(0);">Our Story</a></li>
											<li><a href="javascript:void(0);">Meet Our Team</a></li>
											<li><a href="javascript:void(0);">FAQ</a></li>
											<li><a href="javascript:void(0);">Testimonials</a></li>
											<li><a href="javascript:void(0);">Join Our Team</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgettopsellingauthors">
									<div class="tg-widgettitle">
										<h3>Top Selling Authors</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<figure><a href="javascript:void(0);"><img src="images/author/imag-09.jpg" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Jude Morphew</a></h4>
													<p>21,658 Published Books</p>
												</div>
											</li>
											<li>
												<figure><a href="javascript:void(0);"><img src="images/author/imag-10.jpg" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Shaun Humes</a></h4>
													<p>20,257 Published Books</p>
												</div>
											</li>
											<li>
												<figure><a href="javascript:void(0);"><img src="images/author/imag-11.jpg" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Kathrine Culbertson</a></h4>
													<p>15,686 Published Books</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-newsletter">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h4>Signup Newsletter!</h4>
							<h5>Consectetur adipisicing elit sed do eiusmod tempor incididunt.</h5>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<form class="tg-formtheme tg-formnewsletter">
								<fieldset>
									<input type="email" name="email" class="form-control" placeholder="Enter Your Email ID">
									<button type="button"><i class="icon-envelope"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="icon-chevron-up"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-paymenttype"><img src="images/paymenticon.png" alt="image description"></span>
							<span class="tg-copyright">2017 All Rights Reserved By &copy; Book Library</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
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
<style>
div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}</style>
</body>

</html>
