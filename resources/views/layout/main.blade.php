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
        <div  class="top-bar" style="background-color: #c0c0c0;">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{url('/')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Shavira&rsquo;s Online Store
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
        
            @yield('content')

        <!-- Footer -->
        <br>
<footer class="footer" id="m-b-md">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Coded by L.N. Rozani, copyright &copy; 09/2017. All rights reserved!</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
    </div>
    
    <div class="small-6 medium-4 large-4 columns">
      <h4 style="margin-top: 0px;">Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://www.facebook.com/Shaviraart">Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
      <ul>
    </div>
  </div>
</footer>

    <script src="dist/js/vendor/jquery.js"></script>
    <script src="dist/js/app.js"></script>
    </body>
</html>
