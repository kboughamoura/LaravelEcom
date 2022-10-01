<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashassests/mainassests/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
  @include('inc.guest.guest-nav');


    <!-- Page Preloder -->
  @include('inc.guest.section1');

  @include('inc.guest.section2');
    
  @include('inc.guest.products');

    
    
    <!-- social media carussol-->
    @include('inc.guest.socialmedia');


   
    <!-- footer section-->
    @include('inc.guest.footer');


    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('dashassests/mainassests/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/mixitup.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dashassests/mainassests/js/main.js')}}"></script>
</body>

</html>