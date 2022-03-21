<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from template.hasthemes.com/hmart/hmart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Mar 2022 10:36:25 GMT -->
<head>
  <!-- basic -->
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>IPHOSAM GROUP</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
    <!-- CSS
    ============================================ -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font.awesome.css" />
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/venobox.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css"> -->
    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- Minify Version -->
    <link rel="stylesheet" href="{{ asset('css/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/style.min.css') }}" />
  
</head>

<body>
    <div class="main-wrapper">
        <header>
            <!-- Header top area start -->
            <div class="header-top" style="color:white">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="welcome-text">
                                <p>Tanzania ,Dar es salaam,Sky city shopping mall</p>
                            </div>
                        </div>
                        <div class="col d-none d-lg-block">
                            <div class="top-nav">
                                <ul>
                                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +255783025855</a></li>
                                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> leopordk@iphosam.co.tz</a></li>
                                    <li><a href="my-account.html"><i class="fa fa-user"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end -->
         
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="" style="heght: 60px;">
                            <a style="height:50;width: 50px;" href="{{ route('hom') }}"><img style="height:90px;width: 350px;" src="{{ asset('images/lokk.png') }}"  alt="Site Logo"></a>
                                <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a> -->
                            </div>

                    </div>
                    <div class="col-lg-8 ">
                    <div class="header-nav">
                  
                        <div class="main-menu position-relative">
                            
                      
                    
                            
                            <ul>
                                
                                
                                <li class="dropdown"><a href="{{ route('hom') }}">Home</a>
                                  
                                </li>
                                <li><a href="about.html">About</a></li>
                            
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                </div>
              
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>

     <!-- breadcrumb-area start -->
     <!-- <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Single Product</h2>
                      
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div> -->
        <!-- breadcrumb-area end -->
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
        @foreach ($products as $product)
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                          
                               @foreach ($product->productimages as $image)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset('upload/images/product/'.$image->name) }}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="{{ asset('upload/images/product/'.$image->name) }}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                @endforeach

                              
                            </div>
                        </div>
                        <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                          
                               @foreach ($product->productimages as $image)

                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset('upload/images/product/'.$image->name) }}" alt="">
                                </div>

                                @endforeach

                            
                           
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content ml-25px">
                            <h2>{{$product->name}}</h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">Tsh{{$product->sale_price}}</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
                            </div>
                            <p class="mt-30px">{{$product->shortdescription}}</p>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>SKU:</span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$product->subcategory->name}}, </a>
                                    </li>
                                    <li>
                                        <a href="#">ETC</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Tags: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$product->tag->name}}, </a>
                                    </li>
                                    <li>
                                        <a href="#">{{$product->subcategory->category->name}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <!-- <div class="pro-details-cart">
                                    <button class="add-cart"> Add To
                                        Cart</button>
                                </div> -->
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href=""><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href=""><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area start -->
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                                <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews (02)</button>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details2" class="tab-pane">
                                    <div class="product-anotherinfo-wrapper text-start">
                                        <ul>
                                            <li><span> call us or Whatsap</span>+255783025855</li>
                                            <li><span>email</span>leopord@iphosam.co.tz</li>
                                            <li><span>located at</span>Tanzania, Dar es salaaam,Sky City mall</li>
                                            <li><span>Other Info</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <p>
                                             Download our app to get notified on offa and sales
                                        </p>
                                       
                                    </div>
                                    <ul>
                                            <li><span> call us or Whatsap</span>  +255783025855</li>
                                            <li><span>email</span> leopord@iphosam.co.tz</li>
                                            <li><span>located at</span> Tanzania, Dar es salaaam,Sky City mall</li>
                                            <li><span>Other Info</span> </li>
                                        </ul>
                                </div>
                              
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                </div>
            </div>
            @endforeach
                          
        </div>
        <!-- Product Area Start -->
        <!-- <div class="product-area related-product">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center m-0">
                            <h2 class="title">Related Products</h2>
                            <p></p>
                        </div>
                    </div>
                </div> -->
                <!-- Section Title & Tab End -->
                <!-- <div class="row">
                    <div class="col">
                        <div class="new-product-slider swiper-container slider-nav-style-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                @foreach ($products as $product)
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="{{ route('produs.show',$product->id) }}" class="image">
                                                <img src="{{ asset('upload/images/product/'.$product->productimages[0]->name) }}" alt="Product" />
                                                <img class="hover-image" src="{{ asset('upload/images/product/'.$product->productimages[0]->name) }}" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        
                            </div>
                             Add Arrows -->
                            <!-- <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div> -->
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
  

        <!-- Blog area end here -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <!-- <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html"></a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="" href="cart.html">Download our apllication </a></li>
                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address:Dar es salaam,sky city .</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789"> +255629555022</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> leopordk@iphosam.co.tz</a></p>
                                        <p class="mail">Whatsap<a href="">+255783025855</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                   
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> © 2021 <strong>mike</strong> Made With <i class="fa fa-heart"
                                        aria-hidden="true"></i> By <a class="company-name" href="">
                                            <strong>mike </strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>

    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <!-- <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/scrollUp.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script> -->

    <!-- Minify Version -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/js/vendor.min.js') }}"></script>

    <script src="{{ asset('js/js/main.min.js') }}"></script>
</body>
</html>