@extends('layout.frontend.main')

@section('title', 'Contact Us | ')

@section('content')
    <div class="main">
        <!--call to action new style start-->
        <section class="call-to-action ptb-100 gradient-overly-bottom" {{-- style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover fixed"> --}}
            style="background: url('')no-repeat center center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="call-to-action-content text-white text-center">
                            @foreach ($contactPage as $item)
                                <h2 class="text-white">{{ $item->title }}</h2>
                                <p>{{ $item->description }}</p>
                                <div class="action-btns mt-3">
                                    <a href="{{ $item->whatsapp }}" class="btn solid-white-btn mr-3"><i
                                            class="fa-brands fa-whatsapp mr-2"></i>WhatsApp</a>
                                    <a href="mailto:{{ $item->email }}" class="btn outline-white-btn"><i
                                            class="fa-light fa-envelope mr-2"></i>Email</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action new style end-->
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
