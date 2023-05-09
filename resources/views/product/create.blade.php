@extends('layouts.app')

@section('styles')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <div>
        <section class="page-title page-title-layout5 text-center">
            <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading">Create New Product</h1>
                        <nav>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/product-list">Product List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                            </ol>
                        </nav>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

        <section class="contact-layout1 pt-0 mt--50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-panel d-flex flex-wrap">
                            <form class="contact-panel__form" method="post" action="assets/php/contact.php"
                                id="contactForm">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="contact-panel__title">How Can We Help? </h4>
                                        <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                            reception staff
                                            with any general or medical enquiry. Our doctors will receive or return any
                                            urgent calls.
                                        </p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <i class="icon-user form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                                name="contact-name" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <i class="icon-email form-group-icon"></i>
                                            <input type="email" class="form-control" placeholder="Email"
                                                id="contact-email" name="contact-email" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <i class="icon-phone form-group-icon"></i>
                                            <input type="text" class="form-control" placeholder="Phone"
                                                id="contact-Phone" name="contact-phone" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <i class="icon-news form-group-icon"></i>
                                            <select class="form-control">
                                                <option value="0">Subject</option>
                                                <option value="1">Subject 1</option>
                                                <option value="2">Subject 1</option>
                                            </select>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <i class="icon-alert form-group-icon"></i>
                                            <textarea class="form-control" placeholder="Message" id="contact-message" name="contact-message"></textarea>
                                        </div>
                                        <button type="submit"
                                            class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                            <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                        </button>
                                        <div class="contact-result"></div>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form>
                            <div
                                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                                <div>
                                    <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                                    <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                        contact our
                                        friendly staff with any medical enquiry.
                                    </p>
                                </div>
                                <div>
                                    <ul class="contact__list list-unstyled mb-30">
                                        <li>
                                            <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002)
                                                01061245741</a>
                                        </li>
                                        <li>
                                            <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                                        </li>
                                        <li>
                                            <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00
                                                pm</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact layout 1 -->
    </div>

    @include('includes.footer')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
