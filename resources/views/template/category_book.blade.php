<!doctype html>
<html class="no-js" lang="">



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
        <!--************************************
    Header End
  *************************************-->
        <!--************************************
    Inner Banner Start
  *************************************-->
        <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100"
            data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-innerbannercontent">
                            <h1>Categories Book</h1>
                            <ol class="tg-breadcrumb">
                                <li><a href="javascript:void(0);">home</a></li>
                                <li class="tg-active">Products</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
    Inner Banner End
  *************************************-->
        <!--************************************
    Main Start
  *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
     News Grid Start
   *************************************-->
   <div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						@include('flash-message')
						<div id="tg-twocolumns" class="tg-twocolumns">
                        <?php if (isset($_GET['idCategory'])) {
                            $wedID = $_GET['idCategory']; ?>
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
								<div id="tg-content" class="tg-content">
									<div class="tg-products">
										<div class="tg-sectionhead">
											<h2><span>People???s Choice</span>{{ $temp1->where('id', '=', $wedID)->first()->nameCategory }}</h2>

										</div>

										<div class="tg-featurebook alert" role="alert">
											<!-- startForeach -->
                                            @foreach ($book->where('idCategory', '=', $wedID)->get() as $item)
											<div class="tg-featureditm" style="margin-bottom: 50px;">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">

														<a href="./book_detail.blade.php?idBook={{ $item->idBook }}"><img src="{{url('images/books')}}/{{ $item->image }}" width="200px" height="300px" alt="image description"></a>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
														<div class="tg-featureditmcontent">
															<div class="tg-themetagbox"><span class="tg-themetag">featured</span></div>
															<div class="tg-booktitle">
																<h3><a href="./book_detail.blade.php?idBook={{ $item->idBook }}">{{$item->nameBook}}</a></h3>
															</div>
															<span class="tg-bookwriter">By: <a href="./authordetail.blade.php?id={{ $item->idAuthor }}">{{ $temp->where('id', '=', $item->idAuthor)->first()->nameAuthor }}</a></span>
															<!-- <span class="tg-stars"><span></span></span> -->
															@for($x = 5; $x > 0; $x--)
															@php
															if($item->rate > 0.5){
															echo '<i class="fa fa-star"></i>';
															}elseif($item->rate <= 0 ){ echo '<i class="fa fa-star-o"></i>' ; }else{ echo '<i class="fa fa-star-half-o"></i>' ; } $item->rate--;
																@endphp
																@endfor
																<div class="tg-priceandbtn">
																	<span class="tg-bookprice">
																		<ins>{{$item->price}}.000 VN??</ins>
																		<!-- <del></del> -->
																	</span>
																	<a class="tg-btn tg-btnstyletwo tg-active" href="{{url('/cart/add/')}}/{{$item->idBook}}">
																		<i class="fa fa-shopping-basket"></i>
																		<em>Add To Basket</em>
																	</a>
																</div>
														</div>
													</div>
												</div>
											</div>
											<!-- endForeach -->
											@endforeach

                                        </div>
                                        <!-- ************************************************************************ -->

                                        <!-- ********************************************************************************** -->

                                    </div>
                                </div>

                            </div>
                            <?php
                            } ?>
                            @if (!isset($_GET['idCategory']))
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                                    <div id="tg-content" class="tg-content">
                                        <div class="tg-products">
                                            <div class="tg-sectionhead">
                                                <h2><span>People???s
                                                        Choice</span>View All
                                                </h2>
                                            </div>
                                            <div class="tg-featurebook alert" role="alert">
                                                <!-- startForeach -->
                                                @foreach ($allBook as $key)


                                                    <div class="tg-featureditm" style="margin-bottom: 50px;">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">
                                                            <a href="./book_detail.blade.php?idBook={{ $key->idBook }}"><img src="{{url('images/books')}}/{{ $key->image }}" width="200px" height="300px" alt="image description"></a>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                                <div class="tg-featureditmcontent">

                                                                    <div class="tg-themetagbox"><span
                                                                            class="tg-themetag">featured</span></div>
                                                                    <div class="tg-booktitle">
                                                                        <h3><a
                                                                                href="./book_detail.blade.php?idBook={{ $key->idBook }}">{{ $key->nameBook }}</a>
                                                                        </h3>
                                                                    </div>
                                                                    <span class="tg-bookwriter">By: <a
                                                                            href="./authordetail.blade.php?id={{ $key->idAuthor }}">{{ $temp->where('id', '=', $key->idAuthor)->first()->nameAuthor }}</a></span>
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
                                                                    <div class="tg-priceandbtn">
                                                                        <span class="tg-bookprice">
                                                                            <ins>{{ $key->price }}.000VND</ins>
                                                                            <del>{{ $key->salePrice }}.000VNd</del>
                                                                        </span>
                                                                        <a class="tg-btn tg-btnstyletwo tg-active"
                                                                            href="javascript:void(0);">
                                                                            <i class="fa fa-shopping-basket"></i>
                                                                            <em>Add To Basket</em>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- endForeach -->
                                                @endforeach
                                            </div>
                                            <!-- ************************************************************************ -->
                                            <span>{{$allBook->links('pagination::bootstrap-4')}}</span>
                                            <!-- ********************************************************************************** -->
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                                <aside id="tg-sidebar" class="tg-sidebar">
                                    <div class="tg-widget tg-widgetsearch">
                                        <form class="tg-formtheme tg-formsearch">
                                            <div class="form-group">
                                                <button type="submit"><i class="icon-magnifier"></i></button>
                                                <input type="search" name="search" class="form-group"
                                                    placeholder="Search by title, author, key...">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tg-widget tg-catagories">
                                        <div class="tg-widgettitle">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <ul>

                                                @foreach ($allcategory as $item)
                                                    <?php
                                                    $sum = 0;
                                                    foreach ($book->all() as $bookItem) {
                                                    if ($bookItem->idCategory == $item->id) {
                                                    $sum += $bookItem->Quantity;
                                                    }
                                                    }
                                                    ?>

                                                    <li><a
                                                            href="../public/category_book.blade.php?idCategory={{ $item->id }}"><span>{{ $item->nameCategory }}</span><em>{{ $sum }}</em></a>
                                                    </li>
                                                @endforeach
                                                <li><a href="../public/category_book.blade.php"><span>View All</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tg-widget tg-widgetinstagram">
                                        <div class="tg-widgettitle">
                                            <h3>Instagram</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-01.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-02.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-03.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-04.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-05.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-06.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-07.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-08.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/instagram/img-09.jpg" alt="image description">
                                                        <figcaption><a href="javascript:void(0);"><i
                                                                    class="icon-heart"></i><em>50,134</em></a>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
     News Grid End
   *************************************-->
        </main>
        <!--************************************
    Main End
  *************************************-->
        <!--************************************
    Footer Start
  *************************************-->
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
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en">
    </script>
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
