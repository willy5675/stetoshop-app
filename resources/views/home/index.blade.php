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
        <section class="slider">
            <div class="slick-carousel m-slides-0"
                data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
                <div class="slide-item align-v-h">
                    <div class="bg-img"><img src="{{ asset('assets/images/sliders/1.jpg') }}" alt="slide img"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">Providing Best Medical Tools</h2>
                                    <p class="slide__desc">The health and well-being of our patients and their health care
                                        team will
                                        always be our priority, so we want to help provide the best medical tools.</p>
                                    <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                        <!-- feature item #1 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart"></i>
                                            </div>
                                            <h2 class="feature__title">Pediatric</h2>
                                        </li><!-- /.feature-item-->
                                        <!-- feature item #2 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-medicine"></i>
                                            </div>
                                            <h2 class="feature__title">Nutritionist</h2>
                                        </li><!-- /.feature-item-->
                                        <!-- feature item #3 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart2"></i>
                                            </div>
                                            <h2 class="feature__title">Radiologist</h2>
                                        </li><!-- /.feature-item-->
                                        <!-- feature item #4 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-blood-test"></i>
                                            </div>
                                            <h2 class="feature__title">Anesthetic</h2>
                                        </li><!-- /.feature-item-->
                                    </ul><!-- /.features-list -->
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-xl-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h">
                    <div class="bg-img"><img src="{{ asset('assets/images/sliders/2.jpg') }}" alt="slide img"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">All Aspects Of Medical Tools</h2>
                                    <p class="slide__desc">The health and well-being of our patients and their health care
                                        team will
                                        always be our priority, so we follow the best practices for cleanliness.</p>
                                    <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                        <!-- feature item #1 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart"></i>
                                            </div>
                                            <h2 class="feature__title">Pediatric</h2>
                                        </li><!-- /.feature-item-->
                                        <!-- feature item #2 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-medicine"></i>
                                            </div>
                                            <h2 class="feature__title">Nutritionist</h2>
                                        </li><!-- /.feature-item-->
                                        <!-- feature item #3 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart2"></i>
                                            </div>
                                            <h2 class="feature__title">Radiologist</h2>
                                        </li><!-- /.feature-item-->
                                        <!-- feature item #4 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-blood-test"></i>
                                            </div>
                                            <h2 class="feature__title">Anesthetic</h2>
                                        </li><!-- /.feature-item-->
                                    </ul><!-- /.features-list -->
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-xl-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
            </div><!-- /.carousel -->
        </section><!-- /.slider -->

        <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
            <div class="bg-img"><img src="{{ asset('assets/images/banners/1.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row heading-layout2">
                    <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Caring For The Health Of You And Your Family.</h2>
                    </div><!-- /.col-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <h3 class="heading__title color-white">We Provide Most Aspects Of Medical Tools For Your Need!
                        </h3>
                    </div><!-- /.col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
                        <p class="heading__desc font-weight-bold color-gray mb-40">We will work to supply tools
                            planned for you, including management of specialized tools. If we cannot assist, we can provide
                            referrals
                            or advice about the type of tools you require. We treat all enquiries sensitively and in the
                            strictest confidence.
                        </p>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-container mt-90">
                            <div class="slick-carousel"
                                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                                <!-- process item #1 -->
                                <div class="process-item">
                                    <span class="process__number">01</span>
                                    <div class="process__icon">
                                        <i class="icon-health-report"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Pick from Our Medical Sertified List of Tools</h4>
                                    <p class="process__desc">Stetoshop offers all types of the best medical tools you
                                        can
                                        provide for your patients.</p>
                                </div><!-- /.process-item -->
                                <!-- process-item #2 -->
                                <div class="process-item">
                                    <span class="process__number">02</span>
                                    <div class="process__icon">
                                        <i class="icon-dna"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Review The Need from Each Department</h4>
                                    <p class="process__desc">Regular health practitioners can help find all the problems,
                                        also can
                                        find the tools from early
                                        chances.</p>
                                </div><!-- /.process-item -->
                                <!-- process-item #3 -->
                                <div class="process-item">
                                    <span class="process__number">03</span>
                                    <div class="process__icon">
                                        <i class="icon-medicine"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Becomen Our Associate Programs</h4>
                                    <p class="process__desc">We have protocols to provide our clients while continuing to
                                        maintain
                                        long-term
                                        relations.</p>
                                </div><!-- /.process-item -->
                                <!-- process-item #4 -->
                                <div class="process-item">
                                    <span class="process__number">04</span>
                                    <div class="process__icon">
                                        <i class="icon-stethoscope"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Introduce You To Modern Medical Tools</h4>
                                    <p class="process__desc">Our administration and support staff have exceptional skills
                                        and trained to
                                        assist you. </p>
                                </div><!-- /.process-item -->
                                <!-- process-item #5 -->
                                <div class="process-item">
                                    <span class="process__number">05</span>
                                    <div class="process__icon">
                                        <i class="icon-head"></i>
                                    </div><!-- /.process__icon -->
                                    <h4 class="process__title">Make your custom supply and equipment requests</h4>
                                    <p class="process__desc">We help to support your need of providing custom or
                                        specialized medical tools.
                                    </p>
                                </div><!-- /.process-item -->
                            </div><!-- /.carousel -->
                        </div>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="cta bg-light-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                          <div class="heading__layout2 mb-50">
                            <h3 class="heading__title color-white">Contact Us Directly &amp; Start Provide Care for The
                              Sickest In Our Community.</h3>
                          </div>
                        </div><!-- /col-lg-5 -->
                      </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-7">
                            <div class="contact-panel mb-50">
                                <form class="contact-panel__form" method="post" action="assets/php/contact.php"
                                    id="contactForm">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="contact-panel__title">Book An Appointment</h4>
                                            <p class="contact-panel__desc mb-30">Please feel welcome to contact our
                                                friendly reception staff
                                                with any general or medical enquiry. Our doctors will receive or return any
                                                urgent calls.
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="icon-news form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Details"
                                                    id="contact-details" name="contact-details" required>
                                            </div>
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <i class="icon-news form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Name"
                                                    id="contact-name" name="contact-name" required>
                                            </div>
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <i class="icon-email form-group-icon"></i>
                                                <input type="email" class="form-control" placeholder="Email"
                                                    id="contact-email" name="contact-email" required>
                                            </div>
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <i class="icon-phone form-group-icon"></i>
                                                <input type="text" class="form-control" placeholder="Phone"
                                                    id="contact-Phone" name="contact-phone" required>
                                            </div>
                                        </div><!-- /.col-lg-4 -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group form-group-date">
                                                <i class="icon-calendar form-group-icon"></i>
                                                <input type="date" class="form-control" id="contact-date"
                                                    name="contact-date" required>
                                            </div>
                                        </div><!-- /.col-lg-4 -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group form-group-date">
                                                <i class="icon-clock form-group-icon"></i>
                                                <input type="time" class="form-control" id="contact-time"
                                                    name="contact-time" required>
                                            </div>
                                        </div><!-- /.col-lg-4 -->
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                                <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                                            </button>
                                            <div class="contact-result"></div>
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                </form>
                            </div>
                        </div><!-- /.col-lg-7 -->
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <div class="heading heading-light mb-30 mt-40">
                                <h3 class="heading__title mb-10">Helping Clients From Around the Globe</h3>
                                <p class="heading__desc">Our staff strives to make each interaction with patients clear,
                                    concise, and
                                    inviting.
                                </p>
                            </div>

                            <div class="text__block">
                                <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range
                                    of plans for
                                    organizations and individuals at every stage process, with annual limits ranging from Rp1.5M
                                    to unlimited.</p>
                                <div class="sinature color-white">
                                    <span class="font-weight-bold">Jack Qube</span><span>, Stetoshop Manager</span>
                                </div>
                            </div><!-- /.text__block -->
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.cta -->
        </section><!-- /.Work Process -->
    </div>

    @include('includes.footer')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
