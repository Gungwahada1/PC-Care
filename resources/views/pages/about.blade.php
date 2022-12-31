@extends('layout.frontend.main')

@section('title', 'About Us | ')

@section('content')
    <div class="main">
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
        <section class="feature-section ptb-100 white-bg">
            <div class="container">
                {{-- <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Why Choose PC Care</h2>
                            <p class="lead">PC Care was founded due to a large number of consumers' interest in the
                                computer world, thus making us move to assist in selling high-quality products to
                                consumers</p>
                        </div>
                    </div>
                </div> --}}
                <div class="row justify-content-center">
                    <img src="assets/img/StrukturOganisasi.png" alt="Stucture of Organization">
                </div>
            </div>
        </section>
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
                                            {{-- <img src="assets/img/mcafee-logo.png" width="110" alt="security"
                                                class="img-fluid" /> --}}
                                            +6281 246 244 399
                                        </li>
                                        <li class="list-inline-item">
                                            {{-- <img src="assets/img/norton-logo.png" width="110" alt="security"
                                                class="img-fluid" /> --}}
                                            Denpasar, Bali, Indonesian
                                        </li>
                                        <li class="list-inline-item">
                                            {{-- <img src="assets/img/accredited-logo.png" width="110" alt="security"
                                                class="img-fluid" /> --}}
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
                                    {{-- <h4 class="text-white">COMPANY</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Affiliates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Careers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Community</a>
                                        </li>
                                    </ul> --}}
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
