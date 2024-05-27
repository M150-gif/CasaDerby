<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CasaDerby | Home Page 01</title>
<!-- Stylesheets -->
<link href="{{ asset('"css/all.min.css"') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick.css') }}"  rel="stylesheet">
<link href="{{ asset('css/slick-theme.css') }}"  rel="stylesheet">
<link href="{{ asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>


<div class="page-wrapper">

    
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.html" title="">
                        <img src="{{ asset('images/logo.png') }}" alt="" /> 
                    </a>
                </div>
                <div class="header-social">
                    <a href="#" title="" class="share-btn"><i class="flaticon-share"></i></a>
                    <div class="banner-social">
                        <h3>social media</h3>
                        <ul class="social-links">
                            <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="menu-other-links">
                    <li>
                        <a href="#" title="" class="search-btn">
                            <img src="{{ asset('images/search.png') }}" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#" title="" class="cart-btn">
                            <img src="{{ asset('images/cart.png') }}""" alt="" /> 
                            <span class="cart-number">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="login.html" title=""><img src="images/user.svg" alt="" /></a>
                    </li>
                </ul>
                <div class="menu">
                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="overlay-menu">
        <ul class="menu-links">
            <li>
                <a href="index.html" title="">women</a>
            </li>
            <li>
                <a href="index-2.html" title="">men</a>
            </li>
            <li>
                <a href="index-3.html" title="">kids</a>
            </li>
            <li>
                <a href="#" title="">shop</a>
                <ul>
                    <li><a href="shop-category.html" title="">Shop Category</a></li>
                    <li><a href="shop-single.html" title="">Shop Single</a></li>
                    <li><a href="cart.html" title="">Cart</a></li>
                </ul>
            </li>
            <li>
                <a href="#" title="">blog</a>
                <ul>
                    <li><a href="single-article.html" title="">Blog</a></li>
                    <li><a href="blog-single.html" title="">Blog Single</a></li>
                </ul>
            </li>
            <li>
                <a href="contact.html" title="">contact us</a>
            </li>
            <li>
                <a href="#" title="">Pages</a>
                <ul>
                    <li><a href="about.html" title="">About</a></li>
                    <li><a href="faqs.html" title="">FAQs</a></li>
                    <li><a href="signup.html" title="">Sign up</a></li>
                    <li><a href="login.html" title="">Login</a></li>
                    <li><a href="account.html" title="">account</a></li>
                    <li><a href="404.html" title="">404</a></li>
                </ul>
            </li>
        </ul>
        <div class='marquee3' data-duration='60000' data-gap='0' data-duplicated='true' >
            <ul>
                <li>CasaDerby</li>
                <li>CasaDerby</li>
                <li>CasaDerby</li>
                <li>CasaDerby</li>
                <li>CasaDerby</li>
                <li>CasaDerby</li>
            </ul>
        </div>
    </div><!--overlay-menu-->
    
    <div class="error-page">
        <div class="error-page-content">
            <h2>out of <br /> service</h2>
        </div><!--error-page-content-->
        <div class='marquee' data-duration='17000' data-gap='10' data-duplicated='true' >
            <h2>404  404  404  404  404  404 404 404 404</h2>
        </div>
        <h2 class="error-page-title">CasaDerby</h2>
    </div><!--error-page-->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="asset('js/jquery.js')"></script> 
<script src="asset('js/jquery-migrate-1.4.1.min.js')"></script>
<script src="asset('js/slick.min.js')"></script>
<script src="asset('js/slick-animation.min.js')"></script>
<script src="asset('js/popper.min.js')"></script>
<script src="asset('js/bootstrap.min.js')"></script>
<script src="asset('js/jquery.fancybox.js')"></script>
<script src="asset('js/wow.js')"></script>
<script src="asset('js/appear.js')"></script>
<script src="asset('js/swiper-bundle.min.js')"></script>
<script src="asset('js/jquery.marquee.min.js')"></script>
<script src="asset('js/masonry.pkgd.min.js')" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="asset('js/script.js')"></script>
</body>
</html>
