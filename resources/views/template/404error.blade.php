
   @section('head')

            <div class="tg-middlecontainer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="index.blade.php"><img src="images/logo.png"
                                        alt="company name here"></a></strong>

                            <div class="tg-searchbox">
                                <form class="tg-formtheme tg-formsearch">
                                    <fieldset>
                                        <input type="text" name="search" class="typeahead form-control"
                                            placeholder="Search by title, author, keyword, ISBN...">
                                        <button type="submit"><i class="icon-magnifier"></i></button>
                                    </fieldset>


                                </form>
                            </div>
                            <div class="tg-userlogin">
                                <figure><a href="javascript:void(0);"><img src="images/users/img-01.jpg"
                                            alt="image description"></a></figure>
                                <span>Hi,John</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-navigationarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <nav id="tg-nav" class="tg-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#tg-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                             	<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="menu-item-has-children">
											<a href="../public/category_book.blade.php">All Categories</a>
											<div class="mega-menu">
												<ul class="tg-themetabnav" role="tablist">



												</ul>

											</div>
										</li>
										<li class="menu-item-has-children-123" style="margin-left: 20px;">
											<a href="index.blade.php">Home</a>

										</li>
										<li class="menu-item-has-children-123" style="margin-left: 20px;">
											<a href="authors.blade.php">Authors</a>

										</li>
										<li style="margin-left: 20px;"><a href="./category_book.blade.php">Book Category</a></li>

										<li style="margin-left: 20px;"><a href="contactus.blade.php">Contact</a></li>

										<li style="margin-left: 120px;"><a href="cart.blade.php"><span
													class="tg-themebadge">3</span>
												<i class="icon-cart"></i></a></li>
									</ul>
								</div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
               @show

