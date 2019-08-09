<html>
   <head>
      <title> @yield('title') </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="https://namviethathanh.com/xmlrpc.php" />
   </head>
   <body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-49 ot-vertical-menu ot-overplay ot-submenu-top woocommerce-no-js nav-dropdown-has-arrow">
      <div id="wrapper">
         @include('layouts.header')
         @yield('content')
         @include('layouts.footer')
      </div>
      @include('layouts.side_bottom')
      @include('layouts.popup_login')
      <script src="wp-content/cache/min/1/a959d57d5f18d15252e990b347209a54.js" data-minify="1" defer=""></script>
      <div class="scroll-to-bullets hide-for-medium"></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script type="text/javascript" href="{{ asset('js/myjs.js') }}"></script>
      <script type="text/javascript" href="{{ asset('js/js.js') }}"></script>
      <script type="text/javascript" href="{{ asset('js/webfont.js') }}"></script>
      <script type="text/javascript" href="{{ asset('js/jquery.min.js') }}"></script>
   </body>
</html>