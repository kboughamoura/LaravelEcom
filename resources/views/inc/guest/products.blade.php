<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Products Sectiion</li>
                </ul>
            </div>
        </div>
       
        <div class="row product__filter">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
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
                    </div> 
                </div>
               
            </div>
            @endforeach
        </div>
        
    </div>
</section>
<!-- Product Section End -->

