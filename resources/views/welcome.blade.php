<!-- Welcome page or main page -->
<!-- Route used is / -->

<!-- Call for layout file which has the head part of page and is common for all web pages -->


<!-- Access to only body part of layout file -->

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Ichiraku ramen</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    {{-- <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" /> --}}
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{asset('css/orange.css')}}" >
    

    <!-- Modernizer -->
    <script src="{{asset('js/modernizer.js')}}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Walter+Turncoat&display=swap" rel="stylesheet">

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img class="logo" src="https://i.pinimg.com/originals/c0/fb/ed/c0fbedf13d4d6f0540c4b3f0ecbb4e37.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    <!-- @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif -->
                                    
                                    
                                @else
                                    <li class="nav-item dropdown">
                                        <a  class="nav-link " href="{{ route('home') }}">
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                @endguest
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <!-- <h1>Order from  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1> -->
                            <h1> <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Order:Enjoy" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span>Ramen from anywhere</h1>
                            <h2>ICHIRAKU RAMEN</h2>
                            <div class="book-btn">
                                <a href="/ramen/create" class="table-btn hvr-underline-from-center">Order Now!!</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                        <p > Our venture for placing online orders of ramen started when we felt that the small ramen shops need the help in reaching out to new markets and showcasing the taste to the world. We are here to show the young world how good traditional tastes like.
Our restaurant provides aunthentic ramen noodles .Here you can order ramen depending on the combination of soup,noodle and topping that you wish to be there in your ramen. </p>

                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <img class="" src="https://images.unsplash.com/photo-1538128844159-f08f41bfb169?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8cmFtZW58ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60" alt="About Main Image">
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
<div id="menu">
    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu 	
					</h2>
                    </div>

<div class="container-fluid pb-5 pt-5">
    <div class="row">
        <div class="col-md-4 mt-2">
            <table class="table">
                <tr >
                    <th>Soup</th>
                    <th>Price</th>
                </tr>
                @foreach($soups as $soup)
                <tr>
                    <td>{{ $soup->item_name }}</td>
                    <td>{{ $soup->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-4 mt-2">
            <table class="table">
                <tr>
                    <th>Noodles</th>
                    <th>Price</th>
                </tr>
                @foreach($noodles as $noodle)
                <tr>
                    <td>{{ $noodle->item_name }}</td>
                    <td>{{ $noodle->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-4 mt-2">
            <table class="table">
                <tr>
                    <th>Toppings</th>
                    <th>Price</th>
                </tr>
                @foreach($toppings as $topping)
                <tr>
                    <td>{{ $topping->item_name }}</td>
                    <td>{{ $topping->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>       
</div>

              
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->
    </div>

      <section id="how-to-order">

        <div class="row">
            <h2 class="block-title text-center">HOW TO ORDER</h2>
          <div class="order-box col-lg-4">
            <img class="order" src="{{asset('img/noodles.png')}}"alt="">
            <h3>PICK YOUR NOODLES</h3>
          </div>
    
          <div class="order-box col-lg-4">
            <img class="order" src="{{asset('img/broth.png')}}"alt="">
            <h3>PICK YOUR BROTH</h3>
          </div>
    
          <div class="order-box col-lg-4">
            <img class="order" src="{{asset('img/add-toppings.png')}}"alt="">
            <h3>ADD TOPPINGS</h3>
          </div>
    
        </div>
    
      </section>




    

    <div id="footer" class="footer-main">
       
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img class="footer-logo" src="https://i.pinimg.com/originals/c0/fb/ed/c0fbedf13d4d6f0540c4b3f0ecbb4e37.png" alt="" />
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>Suratkal India</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+91 80675 89780 
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">ichiraku@ramen.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 11:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span>  11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2020 ICHIRAKU RAMEN <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>


    <!-- ALL JS FILES -->
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>



    