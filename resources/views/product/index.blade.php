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
                        <h1 class="pagetitle__heading">Our Products</h1>
                        <nav>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product List</li>
                            </ol>
                        </nav>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

        <section class="shop-grid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="sorting-options d-flex flex-wrap justify-content-between align-items-center mb-30">
                            <span>Showing 1:9 of 45 product</span>
                            {{-- <select>
                                <option selected="" value="0">Sort by latest</option>
                                <option value="1">Sort by Popular</option>
                                <option value="2">Sort by highest Price </option>
                                <option value="3">Sort by lowest Price </option>
                            </select> --}}
                        </div>
                        <div class="row">
                            <!-- Product item #1 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/1.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                                        <span class="product__price">$18.99</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #2 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/2.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Biotin Complex</a></h4>
                                        <span class="product__price">$12,99</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #3 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/3.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Facial Serum</a></h4>
                                        <span class="product__price">$19,99</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #4 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/4.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                                        <span class="product__price">$33.00</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #5 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/5.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Essential Oil</a></h4>
                                        <span class="product__price">$63.00</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #6 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/6.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Natural Cacao Powder</a></h4>
                                        <span class="product__price">$12,99</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #7 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/7.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Natural Gel</a></h4>
                                        <span class="product__price">$38,00</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #8 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/8.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Goji Powder</a></h4>
                                        <span class="product__price">$16,00</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                            <!-- Product item #9 -->
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product__img">
                                        <img src="assets/images/products/9.jpg" alt="Product" loading="lazy">
                                        <div class="product__action">
                                            <a href="#" class="btn btn__primary btn__rounded"
                                                style="display: inline-flex;">
                                                <i class="icon-cart"></i> <span>Add To Cart</span>
                                            </a>
                                        </div><!-- /.product-action -->
                                    </div><!-- /.product-img -->
                                    <div class="product__info">
                                        <h4 class="product__title"><a href="#">Blood Pressure</a></h4>
                                        <span class="product__price">$18.99</span>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                        {{-- <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                <nav class="pagination-area">
                                    <ul class="pagination justify-content-center">
                                        <li><a class="current" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav><!-- /.pagination-area -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row --> --}}
                    </div><!-- /.col-lg-9 -->
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <aside class="sidebar-layout2">
                            @if (Auth::check())
                                @if (Auth::user()->userRole->role->name == 'superadmin')
                                    <div class="widget widget-search">
                                        <h5 class="widget__title">Add Product</h5>
                                        <div class="widget__content">
                                            <a class="btn btn-primary color-white" href="/create-product"><i
                                                    class="icon-first-aid-kit" style="display:inline-flex;"></i> Add New
                                                Product</a>
                                        </div><!-- /.widget-content -->
                                    </div><!-- /.widget-search -->
                                @endif
                            @endif
                            <div class="widget widget-poducts">
                                <h5 class="widget__title">Best Sellers</h5>
                                <div class="widget__content">
                                    <!-- product item #1 -->
                                    <div class="widget-product-item d-flex align-items-center">
                                        <div class="widget-product__img">
                                            <a href="#"><img src="assets/images/products/11.jpg" alt="Product"
                                                    loading="lazy"></a>
                                        </div><!-- /.product-product-img -->
                                        <div class="widget-product__content">
                                            <h5 class="widget-product__title"><a href="#">Calming Herps</a></h5>
                                            <span class="widget-product__price">$ 38.00</span>
                                        </div><!-- /.widget-product-content -->
                                    </div><!-- /.widget-product-item -->
                                    <!-- product item #2 -->
                                    <div class="widget-product-item d-flex align-items-center">
                                        <div class="widget-product__img">
                                            <a href="#"><img src="assets/images/products/10.jpg" alt="Product"
                                                    loading="lazy"></a>
                                        </div><!-- /.product-product-img -->
                                        <div class="widget-product__content">
                                            <h5 class="widget-product__title"><a href="#">Goji Powder</a></h5>
                                            <span class="widget-product__price">$ 33.00</span>
                                        </div><!-- /.widget-product-content -->
                                    </div><!-- /.widget-product-item -->
                                    <!-- product item #3 -->
                                    <div class="widget-product-item d-flex align-items-center">
                                        <div class="widget-product__img">
                                            <a href="#"><img src="assets/images/products/12.jpg" alt="Product"
                                                    loading="lazy"></a>
                                        </div><!-- /.product-product-img -->
                                        <div class="widget-product__content">
                                            <h5 class="widget-product__title"><a href="#">Biotin Complex</a></h5>
                                            <span class="widget-product__price">$ 18.00</span>
                                        </div><!-- /.widget-product-content -->
                                    </div><!-- /.widget-product-item -->
                                </div><!-- /.widget-content -->
                            </div><!-- /.widget-poducts -->
                            <div class="widget widget-categories">
                                <h5 class="widget__title">Categories</h5>
                                <div class="widget-content">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#"><span class="cat-count">4</span><span>Neurology</span></a>
                                        </li>
                                        <li><a href="#"><span class="cat-count">0</span><span>Cardiology</span></a>
                                        </li>
                                        <li><a href="#"><span class="cat-count">3</span><span>Pathology</span></a>
                                        </li>
                                        <li><a href="#"><span class="cat-count">2</span><span>Laboratory</span></a>
                                        </li>
                                        <li><a href="#"><span class="cat-count">4</span><span>Pediatric</span></a>
                                        </li>
                                        <li><a href="#"><span class="cat-count">1</span><span>Cardiac
                                                    Clinic</span></a></li>
                                    </ul>
                                </div><!-- /.widget-content -->
                            </div><!-- /.widget-categories -->
                            {{-- <div class="widget widget-filter">
                                <h5 class="widget__title">Pricing Filter</h5>
                                <div class="widget__content">
                                    <div id="rangeSlider"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="price-output d-flex align-items-center">
                                            <label for="rangeSliderResult">Price: </label>
                                            <input type="text" id="rangeSliderResult" readonly>
                                        </div>
                                        <button class="btn__filter">Filter</button>
                                    </div>
                                </div><!-- /.widget-content -->
                            </div><!-- /.widget-filter --> --}}
                            {{-- <div class="widget widget-tags">
                                <h5 class="widget__title">Tags</h5>
                                <div class="widget-content">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Responsive</a></li>
                                        <li><a href="#">Fresh</a></li>
                                        <li><a href="#">Modern</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                </div><!-- /.widget-content -->
                            </div><!-- /.widget-Tags --> --}}
                        </aside><!-- /.sidebar -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.shop -->
    </div>

    @include('includes.footer')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
