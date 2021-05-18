
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

   <header id="tg-header" class="tg-header tg-haslayout">
        @include('template.404error')


        </header>

<body class="tg-home tg-homeone">

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
    Header Start
  *************************************-->

        <!--************************************
    Header End
  *************************************-->

        <!--************************************
     Best Selling Start
   *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>People’s Choice</span>Bestselling Books</h2>
                            <a class="tg-btn" href="../public/category_book.blade.php">View All</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="tg-bestsellingbooksslider"
                            class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                            @foreach ($data as $book)
                                <div class="item">
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <a href="./book_detail.blade.php?idBook={{ $book->idBook }}">
                                                    <div class="tg-frontcover"><img
                                                            src="{{url('images/books')}}/{{ $book->image }}"
                                                            alt="image description"></div>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="tg-postbookcontent">

                                            <ul class="tg-bookscategories">
                                                <li><a
                                                        href="../public/category_book.blade.php?idCategory={{ $book->idCategory }}">{{ $temp1::find($book->idCategory)->nameCategory }}</a>
                                                </li>
                                            </ul>
                                            <div class="tg-themetagbox"><span clas s="tg-themetag">sale</span></div>
                                            <div class="tg-booktitle">
                                                <h3><a
                                                        href="./book_detail.blade.php?idBook={{ $book->idBook }}">{{ $book->nameBook }}</a>
                                                </h3>
                                            </div>
                                            <span class="tg-bookwriter">By: <a
                                                    href="./authordetail.blade.php?id={{ $book->idAuthor }}">{{ $temp::find($book->idAuthor)->nameAuthor }}</a></span>
                                                    @for($x = 5; $x > 0; $x--)
                                                    @php
                                                             if($book->rate > 0.5){
                                                            echo '<i class="fa fa-star"></i>';
                                                             }elseif($book->rate <= 0 ){
                                                            echo '<i class="fa fa-star-o"></i>';
                                                            }else{
                                                             echo '<i class="fa fa-star-half-o"></i>';
                                                             }
                                                         $book->rate--;
                                                      @endphp
                                                        @endfor
                                             <span class="tg-bookprice">
                                                <ins>{{ $book->price }}.000VND</ins>
                                                <del>{{ $book->salePrice }}.000VND</del>
                                            </span>
                                            <a class="tg-btn tg-btnstyletwo" href="./cart.blade.php">
                                                <i class="fa fa-shopping-basket"></i>
                                                <em>Add To Basket</em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     Best Selling End
   *************************************-->

        <!--************************************
     Featured Item Start
   *************************************-->

        <!--************************************
     Featured Item End
   *************************************-->
        <!--************************************
     New Release Start
   *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-newrelease">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="tg-sectionhead">
                                <h2><span>Taste The New Spice</span>New Release Books</h2>
                            </div>
                            <div class="tg-description">
                                <p>day la cac cuon sach mới nhất trong tuần này</p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="../public/category_book.blade.php">View All</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="tg-newreleasebooks">
                                    @foreach ($threenewstbook as $book)
                                        <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                                            <div class="tg-postbook">
                                                <figure class="tg-featureimg">
                                                    <div class="tg-bookimg">
                                                        <a href="./book_detail.blade.php?idBook={{ $book->idBook }}">
                                                            <div class="tg-frontcover"><img
                                                                    src="{{url('images/books')}}/{{ $book->image }}"
                                                                    alt="image description"></div>
                                                        </a>
                                                        <a href="./book_detail.blade.php?idBook={{ $book->idBook }}">
                                                            <div class="tg-backcover"><img
                                                                    src="{{url('images/books')}}/{{ $book->image }}"
                                                                    alt="image description"></div>
                                                        </a>


                                                    </div>
                                                </figure>
                                                <div class="tg-postbookcontent">
                                                    <ul class="tg-bookscategories">
                                                        <li><a
                                                                href="javascript:void(0);">{{ $temp1::find($book->idCategory)->nameCategory }}</a>
                                                        </li>

                                                    </ul>
                                                    <div class="tg-booktitle">
                                                        <h3><a
                                                                href="./book_detail.blade.php?idBook={{ $book->idBook }}">{{ $book->nameBook }}</a>
                                                        </h3>
                                                    </div>
                                                    <span class="tg-bookwriter">By: <a
                                                            href="./authordetail.blade.php?id={{ $book->idAuthor }}">{{ $temp::find($book->idAuthor)->nameAuthor }}</a></span>
                                                    @for($x = 5; $x > 0; $x--)
                                                    @php
                                                             if($book->rate > 0.5){
                                                            echo '<i class="fa fa-star"></i>';
                                                             }elseif($book->rate <= 0 ){
                                                            echo '<i class="fa fa-star-o"></i>';
                                                            }else{
                                                             echo '<i class="fa fa-star-half-o"></i>';
                                                             }
                                                         $book->rate--;
                                                      @endphp
                                                        @endfor
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     New Release End
   *************************************-->
        <!--************************************
     Collection Count Start
   *************************************-->
        <section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="images/parallax/bgparallax-04.jpg">
            <div class="tg-sectionspace tg-collectioncount tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="tg-collectioncounters" class="tg-collectioncounters">
                            <div class="tg-collectioncounter tg-drama">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-bubble"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>Drama</h2>
                                    <h3 data-from="0" data-to="6179213" data-speed="8000" data-refresh-interval="50">
                                        6,179,213</h3>
                                </div>
                            </div>
                            <div class="tg-collectioncounter tg-horror">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-heart-pulse"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>Horror</h2>
                                    <h3 data-from="0" data-to="3121242" data-speed="8000" data-refresh-interval="50">
                                        3,121,242</h3>
                                </div>
                            </div>
                            <div class="tg-collectioncounter tg-romance">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>Romance</h2>
                                    <h3 data-from="0" data-to="2101012" data-speed="8000" data-refresh-interval="50">
                                        2,101,012</h3>
                                </div>
                            </div>
                            <div class="tg-collectioncounter tg-fashion">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-star"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>Fashion</h2>
                                    <h3 data-from="0" data-to="1158245" data-speed="8000" data-refresh-interval="50">
                                        1,158,245</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     Collection Count End
   *************************************-->
        <!--************************************
     Picked By Author Start
   *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Some Great Books</span>Picked By Authors</h2>
                            <a class="tg-btn" href="../public/category_book.blade.php">View All</a>
                        </div>
                    </div>
                    <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
                    @for($iw = 0; $iw <= 4; $iw++)


                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="{{url('images/books')}}/{{$data[$iw]->image}}"
                                                alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>{{$data[$iw]->Description}}</p>
                                        </div>
                                        <strong class="tg-bookcategory">{{ $temp1->where('id', '=',$data[$iw]->idCategory)->first()->nameCategory}}</strong>
                                        <strong class="tg-bookprice">Price: {{$data[$iw]->salePrice}}.000VND</strong>
                                        @for($x = 5; $x > 0; $x--)
                                                    @php
                                                             if($data[$iw]->rate > 0.5){
                                                            echo '<i class="fa fa-star"></i>';
                                                             }elseif($data[$iw]->rate <= 0 ){
                                                            echo '<i class="fa fa-star-o"></i>';
                                                            }else{
                                                             echo '<i class="fa fa-star-half-o"></i>';
                                                             }
                                                         $data[$iw]->rate--;
                                                      @endphp
                                                        @endfor
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="./book_detail.blade.php?idBook={{ $data[$iw]->idBook }}">{{$data[$iw]->nameBook}}</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">By: <a href="./authordetail.blade.php?id={{ $data[$iw]  ->idAuthor }}">{{ $temp->where('id', '=', $data[$iw]->idAuthor)->first()->nameAuthor }}</a></span>
                                    <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     Picked By Author End
   *************************************-->
        <!--************************************
     Testimonials Start
   *************************************-->
        <section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                            <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">

                                <div class="item tg-testimonial">
                                    <figure><img src="{{url('images/books')}}/angrypikachu.jpg" alt="image description"></figure>
                                <q>từ khi tôi đến trang wed library nhóm 10.tôi éo học gì.còn phải đóng tiền cho bọn nó.bọn khốn.</q>

                                    <div class="tg-testimonialauthor">
                                        <h3>Người quản lí</h3>
                                        <span> Nguyễn Trung Nghĩa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     Testimonials End
   *************************************-->

        <!--************************************
     Call to Action Start
   *************************************-->
        <section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-calltoaction">
                                <h2>Đăng kí tài khoản </h2>
                                <h3>để nhận được các khuyến mãi mới nhất
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     Call to Action End
   *************************************-->
        <!--************************************
     Latest News Start
   *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Latest News &amp; Articles</span>What's Hot in The News</h2>
                            <a class="tg-btn" href="../public/category_book.blade.php">View All</a>
                        </div>
                    </div>
                    <div id="tg-postslider" class="tg-postslider tg-blogpost owl-carousel">

                        @foreach ($featureArrayBook as $item)

                            <article class="item tg-post">
                                <figure><a href="javascript:void(0);"><img src="{{url('images/books')}}/{{ $item->image }}"
                                            alt="image description"></a></figure>
                                <div class="tg-postcontent">
                                    <ul class="tg-bookscategories">
                                        <li><a href="javascript:void(0);"></a></li>

                                    </ul>
                                    <div class="tg-themetagbox"><span class="tg-themetag">featured</span></div>
                                    <div class="tg-posttitle">
                                        <h3><a href="./book_detail.blade.php?idBook={{ $item->idBook }}">{{ $item->nameBook }}</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">By: <a
                                            href="./authordetail.blade.php?id={{ $item->idAuthor }}">{{ $temp->where('id', '=', $item->idAuthor)->first()->nameAuthor }}</a></span>
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
                                                        @endfor
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--************************************
     Latest News End
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
                                    <strong class="tg-logo"><a href="index.blade.php"><img src="images/flogo.png"
                                                alt="image description"></a></strong>
                                    <ul class="tg-contactinfo">
                                        <li>
                                            <i class="icon-apartment"></i>
                                            <address>Suit # 07, Rose world Building, Street # 02, AT246T Manchester
                                            </address>
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
                                                <em><a href="mailto:goblinslay@gmail.com">goblinslay@gmail.com</a></em>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="https://www.facebook.com/thitbo.chao.10/"><i
                                                    class="fa fa-facebook"></i></a></li>

                                        <li class="tg-googleplus"><a href="https://www.facebook.com/thitbo.chao.10/"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="https://www.facebook.com/thitbo.chao.10/"><i class="fa fa-rss"></i></a>
                                        </li>
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

                                            <li><a href="../public/contactus.blade.php">Returns</a></li>
                                            <li><a href="../public/contactus.blade.php">Privacy</a></li>

                                            <li><a href="../public/contactus.blade.php">Contact Us</a></li>


                                        </ul>
                                        <ul>

                                            <li><a href="../public/aboutus.blade.php">Meet Our Team</a></li>

                                            <li><a href="../public/aboutus.blade.php">Join Our Team</a></li>
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
                                            @foreach ($top3Author as $key)


                                                <li>
                                                    <figure><a href="./authordetail.blade.php?id={{ $key->id }}">
                                                    <img
                                                                src="images/author/{{$key->image}}"
                                                                alt="image description"></a></figure>
                                                    <div class="tg-authornamebooks">
                                                        <h4><a href="./authordetail.blade.php?id={{ $key->id }}">{{$key->nameAuthor}}</a></h4>
                                                        <p>{{$key->PublishedBooks}} Published Books</p>
                                                    </div>
                                                </li>
                                            @endforeach
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
                            <h5>đăng kí ngay hôm nay</h5>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <form class="tg-formtheme tg-formnewsletter">
                                <fieldset>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter Your Email ID">
                                    <button type="button"><i class="icon-envelope"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-footerbar">
                <a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i
                        class="icon-chevron-up"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="tg-paymenttype"><img src="images/paymenticon.png"
                                    alt="image description"></span>
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
