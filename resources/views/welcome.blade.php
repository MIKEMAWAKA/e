<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>IPHOSAM</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('new/lib/slick/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('new/lib/slick/slick-theme.css') }}" />

        <!-- Template Stylesheet -->

        <link rel="stylesheet" href="{{ asset('new/css/style.css') }}" />
    </head>

    <body>


        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ route('hom') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('productList') }}" class="nav-item nav-link">Products</a>
                            <a href="{{ route('productList') }}" class="nav-item nav-link">All Brands</a>
                            {{--  <a href="cart.html" class="nav-item nav-link">Cart</a>
                            <a href="checkout.html" class="nav-item nav-link">Checkout</a>  --}}
                            <a href="#" class="nav-item nav-link">My Account</a>
                            {{--  <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                                    <a href="login.html" class="dropdown-item">Login & Register</a>
                                    <a href="contact.html" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>  --}}
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                {{--  <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Register</a>
                                </div>  --}}
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{ route('hom') }}">
                                <img src="{{ asset('new/logo.jpg') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('productList') }}" class="search">
                            <input type="text" disabled placeholder="What are you looking ...">
                            <button><i class="fa fa-search"></i></button>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            {{--  <a href="" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->

        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('hom') }}"><i class="fa fa-home"></i>Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productList') }}"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productList') }}"><i class="fa fa-plus-square"></i>New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productList') }}"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productList') }}"><i class="fa fa-mobile-alt"></i>Mobile Phones & Tablets</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productList') }}"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            @foreach ($banners as $banner)
                            <div class="header-slider-item">
                                <img src="{{ asset('upload/images/banner/'.$banner->image) }}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>{{$banner->name}} -20 off shop now</p>
                                    <a class="btn" href="{{ route('productList') }}"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>

                            @endforeach

                            {{--  <div class="header-slider-item">
                                <img src="img/slider-2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{ asset('new/image/sam.jpeg') }}" />
                                <a class="img-text" href="{{ route('productList') }}">
                                    <p>Samsung Galaxy S22 Ultra 5G on sales -20 Off</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="{{ asset('new/image/ss.jpeg') }}" />
                                <a class="img-text" href="{{ route('productList') }}">
                                    <p>Samsung A73 5G on sales -20 Off</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->

        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    @foreach ($subcategories as $category)
                    <a href="{{  route('productListcate.show',[$category->name,$category->id])  }}">
                        <div  class="brand-item"><img src="{{ asset('upload/images/subcategory/'.$category->image) }}" alt="">{{ $category->name }}</div>

                    </a>

                    @endforeach


{{--
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>  --}}
                </div>
            </div>
        </div>
        <!-- Brand End -->


        <!-- Category End-->

        <!-- Call to Action Start -->
        <!-- <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Call to Action End -->

        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

                    @foreach ($products as $product)


                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{ $product->name }}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{ route('produs.show',[$product->id,$product->subcategory_id]) }}">
                                    <img src="{{ asset('upload/images/product/'.$product->productimages[0]->name) }}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3>{{"TZS " . number_format($product->sale_price, 0, ",", ",")  }}</h3>
                                <a class="btn" href="{{ route('produs.show',[$product->id,$product->subcategory_id]) }}"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>




                    @endforeach



                </div>
            </div>
        </div>

        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

                    @foreach ($products as $product)


                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{ $product->name }}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{ route('produs.show',[$product->id,$product->subcategory_id]) }}">
                                    <img src="{{ asset('upload/images/product/'.$product->productimages[0]->name) }}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3>{{"TZS " . number_format($product->sale_price, 0, ",", ",")  }}</h3>
                                <a class="btn" href="{{route('produs.show',[$product->id,$product->subcategory_id]) }}"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>




                    @endforeach

                </div>
            </div>
        </div>

        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="">
                        <div class="row">

                    @foreach ($products as $product)


                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">{{ $product->name }}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{ route('produs.show',[$product->id,$product->subcategory_id]) }}">
                                    <img src="{{ asset('upload/images/product/'.$product->productimages[0]->name) }}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3>{{"TZS " . number_format($product->sale_price, 0, ",", ",")  }}</h3>
                                <a class="btn" href="{{ route('produs.show',[$product->id,$product->subcategory_id]) }}"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>




                    @endforeach


                        </div>

                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>


                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Recent Product End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Office: Dar es salaam,Sky city</p>
                                <p><i class="fa fa-envelope"></i>Email: leopordk@iphosam.co.tz</p>
                                <p><i class="fa fa-phone"></i>Phone:+255629555022</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/iphosam_tz/?hl=en"><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="{{ asset('new/img/payment-method.png') }}" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="{{ asset('new/img/godaddy.svg') }}" alt="Payment Security" />
                            <img src="{{ asset('new/img/norton.svg') }}" alt="Payment Security" />
                            <img src="{{ asset('new/img/ssl.svg') }}" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="#">IPHOSAM</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p>Designed By <a href="">Mike</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        {{--  <script src="lib/easing/easing.min.js"></script>  --}}
        {{--  <script src="lib/slick/slick.min.js"></script>  --}}

        <script src="{{ asset('new/lib/easing/easing.min.js') }}"></script>

        <script src="{{ asset('new/lib/slick/slick.min.js') }}"></script>

        <!-- Template Javascript -->

        <script src="{{ asset('new/js/main.js') }}"></script>
    </body>
</html>
