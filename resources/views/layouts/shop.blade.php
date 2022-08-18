<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">  
   
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendors/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendors/css/style.css') }}" type="text/css">
     
     
      
     <!-- Template Main JS File -->
		 <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('vendors/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendors/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendors/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('vendors/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('vendors/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('vendors/js/main.js') }}"></script>
</head>

<body>

<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="header__top__left">
            <ul>
              <li><i class="fa fa-envelope"></i> therichposts@gmail.com</li>
              <li>Free Shipping for all Order of $99</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="header__top__right">
            <div class="header__top__right__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </div>
            <div class="header__top__right__language">
              <img src="{{ asset('vendors/img/language.png') }}" alt="" />
              <div>English</div>
              <span class="arrow_carrot-down"></span>
              <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
              </ul>
            </div>
            <div class="header__top__right__auth">
						
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menuaria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="header__logo">
          <a href="#" class="logo">V-Shop</a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Pages</a>
              <ul class="header__menu__dropdown">
                <li><a href="#">Shop Details</a></li>
                <li><a href="#">Shoping Cart</a></li>
                <li><a href="#">Check Out</a></li>
                <li><a href="#">Blog Details</a></li>
              </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
          </ul>
          <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
      </div>
    </div>
    <div class="humberger__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>


@yield('content')

<footer class="footer spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__about">
          <div class="footer__about__logo">
            <a href="#" class="logo">V-Shop</a>
          </div>
          <ul>
            <li>Address: Ludhiana</li>
            <li>Phone: 1234567890</li>
            <li>Email: therichposts@gmail.com</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
        <div class="footer__widget">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">About Our Shop</a></li>
            <li><a href="#">Secure Shopping</a></li>
            <li><a href="#">Delivery infomation</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Our Sitemap</a></li>
          </ul>
          <ul>
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Innovation</a></li>
            <li><a href="#">Testimonials</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="footer__widget">
          <h6>Join Our Newsletter Now</h6>
          <p>Get E-mail updates about our latest shop and special offers.</p>
          <form action="#">
            <input type="text" placeholder="Enter your mail" />
            <button type="submit" class="site-btn">Subscribe</button>
          </form>
          <div class="footer__widget__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer__copyright">
          <div class="footer__copyright__text"><p>
Copyright &copy;2021 All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Jassa</a>
</p></div>
          <div class="footer__copyright__payment"><img src="{{ asset('vendors
          /img/payment-item.png') }}" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>