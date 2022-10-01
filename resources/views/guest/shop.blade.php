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
   
    @include('inc.guest.guest-nav');
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        @include('inc.guest.search');
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach ($categories as $category)
                                                        
 
                                                    <li><a href="/products/{{$category->id}}/list">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                   
                    <div class="row">
                        @foreach ($products as $product)
                            
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('uploads')}}/{{$product->photo}}">
                                    <ul class="product__hover">
                                        
                                        <li><a href="#"><img src="{{asset('dashassests/mainassests/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('dashassests/mainassests/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                                        <li><a href="/product/details/{id}"><img src="{{asset('dashassests/mainassests/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{$product->name}}</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>{{$product->price}} Dt</h5>
                                    <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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