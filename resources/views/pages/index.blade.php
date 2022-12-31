@extends('layout.frontend.main')

@section('title', '')

@section('content')
    <div class="main">
        <!--hero section start-->
        @foreach ($landingPage as $item)
            <section class="gradient-overly-right hero-equal-height ptb-100" {{-- style="background: url('assets/img/hero-5.jpg') no-repeat center center / cover"> --}}
                style="background: url('') no-repeat center center / cover">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme hero-content-slider custom-dot custom-dot-2">
                            <div class="item">
                                <div class="col-md-8 col-lg-7 col-12">
                                    <div class="header-content text-white">
                                        <div class="line"></div>
                                        {{-- @foreach ($landingPage as $item) --}}
                                        <h1 class="text-white">{{ $item->title1 }}</h1>
                                        <p class="lead">{{ $item->description1 }}</p>
                                        {{-- @endforeach --}}
                                        <ul class="list-unstyled tech-feature-list text-white">
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                <strong>Flexible</strong>, Easy to Use Buy Products
                                            </li>
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                The <strong>Lowest Price</strong> For Our Products
                                            </li>
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                <strong>24/7</strong> Always Give the Best Response
                                            </li>
                                        </ul>
                                        <div class="action-btns mt-4">
                                            <a href="#" class="btn solid-white-btn mr-3">Check Products</a>
                                            <a href="#" class="btn outline-white-btn">Let's Chat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-8 col-lg-7 col-12">
                                    <div class="hero-content-wrap text-white position-relative z-index">
                                        {{-- @foreach ($landingPage as $item) --}}
                                        <h1 class="text-white">{{ $item->title2 }}</h1>
                                        <p class="lead">{{ $item->description2 }}</p>
                                        {{-- @endforeach --}}
                                        <ul class="list-unstyled tech-feature-list text-white">
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                <strong>Flexible</strong>, Easy to Use Buy Products
                                            </li>
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                The <strong>Lowest Price</strong> For Our Products
                                            </li>
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                <strong>24/7</strong> Always Give the Best Response
                                            </li>
                                        </ul>
                                        <div class="action-btns mt-4">
                                            <p><strong>Get Attractive Discounts</strong> on our products, visit our product
                                                page</p>
                                            <a href="#" class="btn solid-white-btn mr-3">Check Products</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-8 col-lg-7 col-12">
                                    <div class="hero-content-wrap text-white background: url('./assets/img/hero-5.jpg')">
                                        {{-- @foreach ($landingPage as $item) --}}
                                        <h1 class="text-white">{{ $item->title3 }}</h1>
                                        <p class="lead">{{ $item->description3 }}</p>
                                        {{-- @endforeach --}}
                                        <ul class="list-unstyled tech-feature-list text-white">
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                <strong>Flexible</strong>, Easy to Use Buy Products
                                            </li>
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                The <strong>Lowest Price</strong> For Our Products
                                            </li>
                                            <li class="py-1">
                                                <span class="ti-control-forward mr-2"></span>
                                                <strong>24/7</strong> Always Give the Best Response
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!--hero section end-->

        <!--feature section start-->
        <section class="feature-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Why Choose PC Care</h2>
                            <p class="lead">PC Care was founded due to a large number of consumers' interest in the
                                computer world, thus making us move to assist in selling high-quality products to
                                consumers</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-server icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Various Types of Components are Available</h5>
                                <p>PC Care does not only sell several types of components, but we provide all types of
                                    components related to computers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-time icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Available to Serve Messages 24 Hours</h5>
                                <p>The PC Care team serves consumers who want to ask questions with patience and of
                                    course a fast response so that customers are happy to visit our store.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--call to action new style start-->
        <section class="call-to-action ptb-100 gradient-overly-bottom" {{-- style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover fixed"> --}}
            style="background: url('')no-repeat center center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Interested in upgrading your computer specifications?</h2>
                            <p>Let's take a look at our product showcase, we are sure you will want to improve the
                                quality of your computer with the products we sell. before you buy our product, you
                                should first register an account and then log in.</p>
                            <div class="action-btns mt-3">
                                <a href="{{ route('login.index') }}" class="btn solid-white-btn mr-3">Register</a>
                                <a href="{{ route('register.index') }}" class="btn outline-white-btn">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action new style end-->

        <!--testimonial and review section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>What Our Customers Say About Us?</h2>
                            <p class="lead">Consumers who send testimonials are those who have purchased our products
                                before.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <div class="list-inline ratting-list mb-2">
                                <div class="list-inline-item">
                                    <span class="fas fa-star">
                                    </span>
                                    5.0
                                </div>
                            </div>
                            <div class="ratting-content">
                                <h5>Awesome support from technical</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models.
                                    Progressively maximize 2.0 relationships whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Khamer</h6>
                                {{-- <small class="text-right">6 days ago</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <div class="list-inline ratting-list mb-2">
                                <div class="list-inline-item">
                                    <span class="fas fa-star">
                                    </span>
                                    5.0
                                </div>
                            </div>
                            <div class="ratting-content">
                                <h5>Awesome Design Quality with Support</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models maximize
                                    2.0 relationships whereas methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Peter Anderson</h6>
                                {{-- <small class="text-right">3 days ago</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <div class="list-inline ratting-list mb-2">
                                <div class="list-inline-item">
                                    <span class="fas fa-star">
                                    </span>
                                    5.0
                                </div>
                            </div>
                            <div class="ratting-content">
                                <h5>Contacted support after Midnight</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models.
                                    Progressively maximize 2.0 relationships whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Jolio Darix</h6>
                                {{-- <small class="text-right">8 days ago</small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial and review section end-->

    </div>

    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <div class="footer-top gradient-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row footer-top-wrap">
                            <div class="col-12">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">PC CARE</h4>
                                    <ul class="list-inline security-icon-list">
                                        <li class="list-inline-item">
                                            {{-- <img src="assets/img/secured-logo.png" width="110" alt="security"
                                                class="img-fluid" /> --}}
                                            <i>"All You Need, We Care"</i>
                                        </li>
                                        <li class="list-inline-item">
                                            +6281 246 244 399
                                        </li>
                                        <li class="list-inline-item">
                                            Denpasar, Bali, Indonesian
                                        </li>
                                        <li class="list-inline-item">
                                            pc.care@gmail.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row footer-top-wrap">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    {{-- <h4 class="text-white">PRODUCTS</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">WordPress Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shared Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Virtual Private Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dedicated Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Domain Names</a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white pt-sm-2">PRODUCTS</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Our Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Why Choose Us?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">What Our Customers Say?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">News</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LINKS</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blogs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg py-3">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2022. All
                            rights reserved by
                            <a href="" target="_blank">PC Care</a>
                        </p>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="payment-method text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-amex.svg" alt="amex" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-visa.svg" alt="visa" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-mastercard.svg" alt="mastercard" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-paypal.svg" alt="paypal" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-bitcoin.svg" alt="bitcoin" width="50" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->

    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-rocket"></span>
    </button>
    <!--bottom to top button end-->
@endsection
