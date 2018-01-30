<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @yield('title')
        </title>

        <!-- Styles -->
        <link href="{{asset('dist/css/foundation.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/app2.css')}}" rel="stylesheet">
        <link href="{{asset('dist/css/app.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="dist/css/bootstrap-3/bootstrap.min.css"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body style="background-color: #eee;">
        <nav class="navbar">
            <div  class="top-bar" style="background-color: #c0c0c0;">
                <div style="color:white" class="top-bar-left">
                    <h4 class="brand-title">
                        <a href="{{url('/')}}">
                            <img style="height: 50px;" src="{{ url('/dist/img/IMG-20180129-WA0000.jpg') }}">
                           Abbonzo&rsquo;s Online Store
                        </a>
                    </h4>
                </div>
                <div class="top-bar-right">
                    <ol class="menu">
                        <li>
                            <a href="{{route('shirts')}}">
                                PRODUCTS
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                CONTACT
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cart.index') }}">
                                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                                </i>
                                CART
                                <span class="alert badge">
                                    {{ Cart::count() }}
                                </span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>            
        </nav>
        
            @yield('content')

        <!-- Footer -->
        <br>
<footer class="footer" id="m-b-md">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Coded by L.N. Rozani, copyright &copy; 09/2017. All rights reserved!</p>
      <a href="http://lrwebs.tk/">lrwebs.tk</a>
    </div>
    <div class="small-12 medium-4 large-4 columns">
     <i> <img style="height: 100px;" src="{{ ('/dist/img/IMG-20180129-WA0000.jpg') }}"> </i>
      <p>Abbonzzo is an Online Store that links up to the worlds biggest Online Brand</p>
    </div>
    
    <div class="small-6 medium-4 large-4 columns">
        <i><h2>Talk to us</h2></i>
      <h4 style="margin-top: 0px;">Follow Us On:</h4>
      <ul class="footer-links">
        <li>
            <a href="https://www.facebook.com/Abbonzzo-847834992035277/">
                <span class="alert badge">
                    <img style="border-radius: 50%; padding: 0; height: 30px; background-color: transparent;" src="{{ url('/dist/img/download.png') }}">
                </span>
                Facebook
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/Abbonzzo-847834992035277/">
                <span class="alert badge">
                    <img style="border-radius: 50%; padding: 0; height: 30px; background-color: transparent;" src="{{ url('/dist/img/images.png') }}">
                </span>
                Twitter
            </a>
        </li>
      <ul>
    </div>
  </div>
</footer>

    <script src="dist/js/vendor/jquery.js"></script>
    <script src="dist/js/app.js"></script>
    </body>
</html>
