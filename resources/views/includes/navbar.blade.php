<nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="ml-5 collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav__item has-dropdown">
                    <a href="#" data-toggle="dropdown"
                        class="dropdown-toggle nav__item-link active">Home</a>
                    <ul class="dropdown-menu">
                        <li class="nav__item">
                            <a href="index.html" class="nav__item-link">Home Main</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="home-dentist.html" class="nav__item-link">Home Dentist</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="home-pharmacy.html" class="nav__item-link">Home pharmacy</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About
                        Us</a>
                    <ul class="dropdown-menu">
                        <li class="nav__item">
                            <a href="about-us.html" class="nav__item-link">About Us</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="services.html" class="nav__item-link">Our Services</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="services-single.html" class="nav__item-link">single Services</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="appointment.html" class="nav__item-link">Appointments</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="gallery.html" class="nav__item-link">Our Gallery</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                    <a href="#" data-toggle="dropdown"
                        class="dropdown-toggle nav__item-link">Doctors</a>
                    <ul class="dropdown-menu">
                        <li class="nav__item">
                            <a href="doctors-timetable.html" class="nav__item-link">Doctors Timetable</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="doctors-standard.html" class="nav__item-link">Our Doctors
                                Standard</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="doctors-modern.html" class="nav__item-link">Our Doctors Modern</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="doctors-grid.html" class="nav__item-link">Our Doctors Grid</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="doctors-single-doctor1.html" class="nav__item-link">Single Doctor
                                01</a>
                        </li> <!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="doctors-single-doctor2.html" class="nav__item-link">Single Doctor
                                02</a>
                        </li> <!-- /.nav-item -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                    <a href="#" data-toggle="dropdown"
                        class="dropdown-toggle nav__item-link">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="nav__item">
                            <a href="blog.html" class="nav__item-link">Blog Grid</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                    <a href="#" data-toggle="dropdown"
                        class="dropdown-toggle nav__item-link">Shop</a>
                    <ul class="dropdown-menu">
                        <li class="nav__item">
                            <a href="shop.html" class="nav__item-link">Our Products</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="shop-single-product.html" class="nav__item-link">Products Single</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="cart.html" class="nav__item-link">Cart</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item">
                    <a href="contact-us.html" class="nav__item-link">Contacts</a>
                </li><!-- /.nav-item -->
            </ul>

            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
        </div>

        {{-- <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
                <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
                <a href="departments.html">Departments</a>
            </div>
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
                <li class="nav__item">
                    <a href="department-single.html" class="nav__item-link">Neurology Clinic</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                    <a href="department-single.html" class="nav__item-link">Cardiology Clinic</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                    <a href="department-single.html" class="nav__item-link">Pathology Clinic</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                    <a href="department-single.html" class="nav__item-link">Laboratory Clinic</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                    <a href="department-single.html" class="nav__item-link">Pediatric Clinic</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                    <a href="department-single.html" class="nav__item-link">Cardiac Clinic</a>
                </li><!-- /.nav-item -->
            </ul> <!-- /.miniPopup-departments -->
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
                <i class="icon-calendar"></i>
                <span>Appointment</span>
            </a>
        </div> --}}
    </div>
</nav>
