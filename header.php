<!DOCTYPE html>
<html>
<!-- [if IE 8]>			<html class="ie ie8"> <![endif]-->
<!-- [if IE 9]>			<html class="ie ie9"> <![endif]-->
<!-- [if gt IE 9]><html> <![endif] -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="HTML5 Template" name="keywords" />
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Darna - Responsive Multipurpose Construction Template</title>
    <!-- Mobile Metas -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="images/favicon.ico" rel="shortcut icon">
    <!-- font-awesome -->
    <link href="css/font-awesome/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <!-- flaticon -->
    <link href="css/flaticon/css/flaticon.css" media="screen" rel="stylesheet" type="text/css">
    <!-- owl-carousel -->
    <link href="css/owl.carousel.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.css" media="screen" rel="stylesheet" type="text/css">
    <!-- sidebar on small screens -->
    <link href="css/easy-sidebar.css" media="screen" rel="stylesheet" type="text/css">
    <!-- prettyPhoto -->
    <link href="js/pp/css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">
    <!-- isotope -->
    <link href="js/vendors/isotope/isotope.css" media="screen" rel="stylesheet" type="text/css">
    <!-- preloader CSS -->
    <link href="css/spinkit/spinkit.css" media="screen" rel="stylesheet" type="text/css">
    <!-- Main CSS -->
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
	<!--cookie-->
	<script src="cookie.notice.js"></script>	 
		     <style>
        #colour-variations li a[data-theme=style-rtl],
        #colour-variations li a[data-theme=ltr] {
            border: 1px solid #ccc;
            padding: 10px;
            width: auto;
            height: auto;
        }
        
        #colour-variations {
            padding: 10px;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            width: 140px;
            position: fixed;
            left: 0;
            top: 160px;
            z-index: 999999;
            background: #fff;
            border-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }
        
        #colour-variations.sleep {
            margin-left: -140px;
        }
        
        #colour-variations h3 {
            text-align: center;
            ;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #777;
            margin: 0 0 10px 0;
            padding: 0;
            ;
        }
        
        #colour-variations ul,
        #colour-variations ul li {
            padding: 0;
            margin: 0;
        }
        
        #colour-variations ul {
            margin-bottom: 20px;
            float: left;
        }
        
        #colour-variations li {
            list-style: none;
            display: inline;
        }
        
        #colour-variations li a {
            width: 20px;
            height: 20px;
            position: relative;
            float: left;
            margin: 5px;
        }
        
        #colour-variations li a[data-theme=style] {
            background: #fff;
            border: 1px solid #ccc
        }
        
        #colour-variations li a[data-theme=red] {
            background: #FA5555;
        }
        
        #colour-variations li a[data-theme=turquoise] {
            background: #27E1CE;
        }
        
        #colour-variations li a[data-theme=blue] {
            background: #2772DB;
        }
        
        #colour-variations li a[data-theme=orange] {
            background: #FF7844;
        }
        
        #colour-variations li a[data-theme=yellow] {
            background: #FCDA05;
        }
        
        #colour-variations li a[data-theme=pink] {
            background: rgb(251, 137, 155);
        }
        
        #colour-variations li a[data-theme=purple] {
            background: #7045FF;
        }
        
        #colour-variations a[data-layout=boxed],
        #colour-variations a[data-layout=wide] {
            padding: 2px 0;
            width: 48%;
            border: 1px solid #ededed;
            text-align: center;
            color: #777;
            display: block;
        }
        
        #colour-variations a[data-layout=boxed]:hover,
        #colour-variations a[data-layout=wide]:hover {
            border: 1px solid #777;
        }
        
        #colour-variations a[data-layout=boxed] {
            float: left;
        }
        
        #colour-variations a[data-layout=wide] {
            float: right;
        }
        
        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #8dc63f;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }
        
        .option-toggle i {
            top: 5px;
            position: relative;
            font-size: 20px;
        }
        
        .option-toggle:hover,
        .option-toggle:focus,
        .option-toggle:active {
            color: #fff;
            text-decoration: none;
            outline: none;
        }
    </style>
</head>

<body>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               PRELOADER STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"> </div>
        </div>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               PRELOADER END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR INFO START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <div class="col-md-6 tb-left">
                    <ul class="list-inline text-uppercase">
                        <li><i class="fa fa-phone"></i>0711 2527 3807</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:darna@company.com">info@tkls-bau.de</a> </li>
                    </ul>
                </div>
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR INFO END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR SOCIAL START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <div class="col-md-6 tb-right">
                    <ul class="top-social list-inline pull-right">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook">
                        </i></a> </li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter">
                        </i></a> </li>
                        <li>
                            <a href="#" target="_blank"> <i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-behance">
                        </i></a> </li>
                    </ul>
                </div>
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR SOCIAL END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            </div>
        </div>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <header>
        <div class="container">
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <div class="navbar-header">
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU STARTS
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <button class=" burger-menu easy-sidebar-toggle"></button>
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  LOGO START
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <a class="navbar-brand" href="home_1.html"> <img alt="logo" src="images/logo.png"  width="200"  height="60"></a>
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  LOGO END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            </div>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               MENU START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div id="navbar" class="navbar-collapse ">
                        <ul class="nav navbar-nav navbar-right ">
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU HOME START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="active" class="dropdown active"> 
								<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"  href="index.php" >home<span class="x-caret"></span></a>
                               <!--  <ul class="">
                                    <li class="active"><a href="home_1.html">Home2</a></li> -->
                                    <!-- <li><a href="home_2.html">Home 2</a></li>
                                    <li><a href="home_3.html">Home 3</a></li>
                                    <li><a href="home_4.html">Home 4</a></li>
                                    <li><a href="home_5.html">Home 5</a></li> 
                                </ul>--> 
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU HOME END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU PAGES START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li  class=""> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"  href="service.php" >Service<span class="x-caret"></span></a>
                              <!--   <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="countdown.html">Coming Soon</a></li>
                                    <li><a href="404.html">404 Error Page</a></li>
                                </ul> -->
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU HOME END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU Projects START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li  class=""> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"  href="projekte.php" >Projekte<span class="x-caret"></span></a>
                               <!--  <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="projects_full_4col.html">Projects 4 columns fullwidth</a></li>
                                    <li><a href="projects_grid_4col.html">Projects 4 
                                 column padding</a> </li>
                                    <li><a href="projects_full_3col.html">Project 3 
                                 columns fullwidth</a> </li>
                                    <li><a href="projects_grid_3col.html">Projects 3 
                                 column padding</a> </li>
                                    <li><a href="project_details.html">Single project</a></li>
                                </ul> -->
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU Projects END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU SHOP START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li  class=""> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"  href="about-us.php" >About-Us<span class="x-caret"></span></a>
                             <!--    <ul class="dropdown-menu  dropdown-menu-left">
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="shop_item.html">Shop Single Page</a></li>
                                    <li><a href="checkout.html">Shop Checkout</a></li>
                                    <li><a href="shopcart.html">Shop Cart</a></li>
                                </ul> -->
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU SHOP END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU Blog START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li  class=""> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"  href="kontakt.php" >Kontakt<span class="x-caret"></span></a>
                               <!--  <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="blog_left_side_bar.html">Left Sidebar</a></li>
                                    <li><a href="blog_left_side_bar.html">Right Sidebar</a></li>
                                    <li><a href="blog_fullwidth.html">Full Width</a></li>
                                </ul> -->
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU Blog END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU ShortCodes START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li  class=""> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"  href="impressum.php" >Impressum<span class="x-caret"></span></a>
                             <!--    <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="element_post.html">Post</a></li>
                                    <li><a href="element_team.html">Our Team</a></li>
                                    <li><a href="element_testimonials.html">Testimonials</a></li>
                                    <li><a href="element_process.html">Process</a></li>
                                    <li><a href="element_feature.html">Feature</a></li>
                                    <li><a href="element_button.html">Buttons</a></li>
                                    <li><a href="element_portfolio.html">Portfolio</a></li>
                                    <li><a href="element_counters.html">Counter</a></li>
                                </ul> -->
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU ShortCodes END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SHOPCART, SEARCH AND GET QUOTE AREA START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                           <!--  <li class="header-customize"> -->
                                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                              SEARCH START
                              -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                                <!-- <div class="search-button-wrapper header-customize-item">
                                    <a class="icon-search-menu" data-search-type="standard" href="#search"> <i class="fa fa-search"></i></a>
                                </div> -->
                                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                              SHOPCART START
                              -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                          <!--       <div class="shopping-cart-wrapper header-customize-item">
                                    <div class="widget_shopping_cart_content">
                                        <div class="widget_shopping_cart_icon"> <i class="fa fa-shopping-cart"></i><span>0</span> </div>
                                        <div class="cart_list_wrapper ">
                                            <ul class="cart_list product_list_widget ">
                                                <li class="empty">
                                                    <h4>An empty cart</h4>
                                                    <p>You have no item in your shopping cart</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                              QUOTE AREA START
                              -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!--     <div class="get-a-quote-wrapper header-customize-item">
                                    <a class="get-a-quote-button" href="#quote"> <i class="fa fa-envelope"></i><span>Get a quote</span></a>
                                </div>
                            </li> -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SHOPCART, SEARCH AND GET QUOTE AREA END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                MENU  END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        </div>
    </header>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SLIDER START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div class="slider">
        <div id="rev_slider_204_1_wrapper" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive">
            <!-- START REVOLUTION SLIDER 5.1.1RC auto mode -->
            <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" data-version="5.1.1RC" style="display: none;">
                <ul>
                    <li data-description="" data-easein="default" data-easeout="default" data-index="rs-4" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg" data-title="Slide 1" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/revslider/slider-01.jpg">
                        <div id="slide-4-layer-1" class="tp-caption darnaverylargetextprimary   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="x:left;skX:45px;s:500;s:500;" data-width="auto" data-x="30" data-y="200" style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> Darna</div>
                        <div id="slide-4-layer-2" class="tp-caption darnaverylargetext   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeInOut;" data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;" data-width="auto" data-x="30" data-y="270" style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> Construction</div>
                        <div id="slide-4-layer-3" class="tp-caption darnamediumtext   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1500" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;" data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="30" data-y="355" style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> The Biggest Contruction In The Real World</div>
                        <div id="slide-4-layer-4" class="tp-caption   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2000" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;e:Bounce.easeOut;" data-transform_out="x:right;skX:-85px;s:300;s:300;" data-width="auto" data-x="30" data-y="400" style="z-index: 8; white-space: nowrap;"> <a class="darna-button style1 size-md" href="#" style="margin-right: 10px;">
					Our History</a> <a class="darna-button style2 size-md" href="#">View Projects</a></div>
                    </li>
                    <li data-description="" data-easein="default" data-easeout="default" data-index="rs-5" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-02-100x50.jpg" data-title="Slide 2" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-no-retina="" src="images/revslider/slider-02.jpg">
                        <div id="slide-5-layer-1" class="tp-caption darnalargetext   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:1000;e:easeOutBounce;" data-transform_out="x:left;skX:45px;s:300;s:300;" data-width="auto" data-x="center" data-y="200" style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> <span class="darna-slider-border-bottom">Engineering your dreams 
					with us</span></div>
                        <div id="slide-5-layer-2" class="tp-caption darnasmalltext   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;" data-width="auto" data-x="center" data-y="300" style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> Creating a sustainable future through building preservation
                            <br /> green architecture, and smart design</div>
                        <div id="slide-5-layer-3" class="tp-caption   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2000" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeOutBounce;" data-transform_out="x:200px;skX:-85px;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="382" style="z-index: 7; white-space: nowrap;"> <a class="darna-button style1 size-md" href="#" style="margin-right: 10px;">
					Our History</a> <a class="darna-button style2 size-md" href="#">View Projects</a></div>
                    </li>
                    <li data-description="" data-easein="default" data-easeout="default" data-index="rs-6" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-03-100x50.jpg" data-title="Slide 3" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-no-retina="" src="images/revslider/slider-03.jpg">
                        <div id="slide-6-layer-1" class="tp-caption darnalargetext   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="y:top;s:1000;e:easeOutElastic;" data-transform_out="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="185" style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> welcome to darna construction</div>
                        <div id="slide-6-layer-2" class="tp-caption darnalargeprimarybg   tp-resizeme" data-elementdelay="0.1" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="chars" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="250" style="z-index: 6; white-space: nowrap; color: rgba(255, 255, 255, 1.00); background-color: rgba(255, 182, 0, 100.00); padding: 15px 20px 15px 20px; border-color: rgba(255, 255, 255, 1.00);"> ALWAYS DEDICATED &amp; DEVOTED</div>
                        <div id="slide-6-layer-3" class="tp-caption darnasmalltext2   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Elastic.easeOut;" data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="343" style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> We aim to eliminate the task of dividing your project between different architecture and
                            <br /> construction company. We are a company that offers design and build services for
                            <br /> you from initial sketches to the final construction.</div>
                        <div id="slide-6-layer-4" class="tp-caption   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2000" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-width="auto" data-x="center" data-y="430" style="z-index: 8; white-space: nowrap;"> <a class="darna-button style1 size-md" href="#" style="margin-right: 10px;">
					Our History</a> <a class="darna-button style2 size-md" href="#">View Projects</a></div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"> </div>
            </div>
        </div>
    </div>
    <!-- /. SLIDER ENDS-->