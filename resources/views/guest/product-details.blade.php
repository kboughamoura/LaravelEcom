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


  <!-- Shop Details Section Begin -->
  @include('inc.guest.search');
  
  <section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="">Home</a>
                        <span>{{$wanted->name}}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{asset('uploads')}}/{{$wanted->photo}}">
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
             
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4>{{$wanted->name}}</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span> - 5 Reviews</span>
                        </div>
                        <h3> {{$wanted->price}}Dt</h3>
                        <p>{{$wanted->description}}</p>


                        <!-- add to cart DIV-->
                        <div class="product__details__cart__option">
                            <form method="POST" action="/client/command/add">
                                @csrf
                                <input type="hidden" value="{{$wanted->id   }}" name="product">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="qte">
                                </div>
                            </div> 
                            <button type="submit" class="primary-btn">ADD to cart</button> 
                            </form>
                        </div>
                        <div class="product__details__btns__option">
                            <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                            <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                        </div>



                        <div class="product__details__last__option">
                            <h5><span>Avec Guarantie !</span></h5>
                            <ul>
                                <li><span>Category</span> {{$wanted->category->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                        solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                        ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                    pharetras loremos.</p>
                                    <div class="product__details__tab__content__item">
                                        <h5>Products Infomation</h5>
                                        <p>A Pocket PC is a handheld computer, which features many of the same
                                            capabilities as a modern PC. These handy little devices allow
                                            individuals to retrieve and store e-mail messages, create a contact
                                            file, coordinate appointments, surf the internet, exchange text messages
                                            and more. Every product that is labeled as a Pocket PC must be
                                            accompanied with specific software to operate the unit and must feature
                                        a touchscreen and touchpad.</p>
                                        <p>As is the case with any new technology product, the cost of a Pocket PC
                                            was substantial during it’s early release. For approximately $700.00,
                                            consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                            These days, customers are finding that prices have become much more
                                            reasonable now that the newness is wearing off. For approximately
                                        $350.00, a new Pocket PC can now be purchased.</p>
                                    </div>
                                    <div class="product__details__tab__content__item">
                                        <h5>Material used</h5>
                                        <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                            from synthetic materials, not natural like wool. Polyester suits become
                                            creased easily and are known for not being breathable. Polyester suits
                                            tend to have a shine to them compared to wool and cotton suits, this can
                                            make the suit look cheap. The texture of velvet is luxurious and
                                            breathable. Velvet is a great choice for dinner party jacket and can be
                                        worn all year round.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="tabs-7" role="tabpanel">
                                <div class="product__details__tab__content">
                                    
                                    <div class="product__details__tab__content__item">
                                        @foreach ($wanted->reviews as $review)
                                        <h5> {{count($wanted->reviews)}} Customers reviews</h5>
                                        
                                        <div class="product__details__tab__content__item">
                                            <h5>{{$review->user->name}}  <div class="rating">
                                                @for($i=0;$i<$review->rate;$i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            </div>
                                        </h5> 
                                        <small>{{$review->created_at}}</small>
                                            
                                            
                                            <p>{{$review->content}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="product__details__tab__content__item">
                                        

                                       <form method="POST" action="/client/review/add">
                                            @csrf

                                            <input type="hidden" name="product_id" value="{{$wanted->id}}">
                                        <h5>Add your Reveiew</h5>
                                        <small>Your email adress will not be published !</small>
                                       <div class="form-group">
                                            <p class="mb-0 mr-2" name=>Your Rating from 1 to 5</p>
                                            <input type="number" name="rate" class="form-control" placeholder="your rating please ..." min="1" max="5">
                                       </div>
                                            <div class="form-group">
                                                <label for="message">Your review * </label>
                                               <textarea rows="5" cols="30" id="message" name="content" class="form-control"></textarea>

                                            </div>

                                            <div class="form-group mb-0">
                                                <input type="submit" class="btn btn-primary px-3" value="Leave your review here">

                                            </div>
                                            
                                        
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->

 <!-- Related Section Begin -->
 <section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">You May Also Like</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('uploads')}}/{{$product->photo}}">
                        <span class="label">New</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="{{asset('dashassests/mainassests/img/icon/heart.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('dashassests/mainassests/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                            <li><a href="/product/details/{{$product->id}}"><img src="{{asset('dashassests/mainassests/img/icon/search.png')}}" alt=""></a></li>
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
                            <label for="pc-1">
                                <input type="radio" id="pc-1">
                            </label>
                            <label class="active black" for="pc-2">
                                <input type="radio" id="pc-2">
                            </label>
                            <label class="grey" for="pc-3">
                                <input type="radio" id="pc-3">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Related Section End -->
    
 

    
    
   


   
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