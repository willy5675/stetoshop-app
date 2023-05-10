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
                        <div class="row">
                            @foreach ($products as $item)
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="product-item">
                                        <div class="product__img">
                                            @if ($item->photo != null)
                                                <img src="{{ asset('storage/' . $item->photo) }}"
                                                    alt="Product {{ $loop->iteration }}" loading="lazy">
                                            @else
                                                <p class="text-info">Photo not provided</p>
                                            @endif
                                            <div class="product__action">
                                                <a href="#" class="btn btn__primary btn__rounded"
                                                    style="display: inline-flex;">
                                                    <i class="icon-cart"></i> <span>Add To Cart</span>
                                                </a>
                                            </div><!-- /.product-action -->
                                        </div><!-- /.product-img -->
                                        <div class="product__info">
                                            <h4 class="product__title"><a href="#">{{ $item->name }}</a></h4>
                                            <span class="product__price">Rp. {{ $item->price }}</span>
                                        </div><!-- /.product-content -->
                                    </div><!-- /.product-item -->
                                </div><!-- /.col-lg-4 -->
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-9 -->
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <aside class="sidebar-layout2">
                            @if (Auth::check())
                                @if (Auth::user()->userRole->role->name == 'superadmin')
                                    <div class="widget widget-search">
                                        <h5 class="widget__title">Add Product</h5>
                                        <div class="widget__content">
                                            <a class="btn btn-primary color-white" href="/create-product"
                                                style="height: auto;"><i class="icon-first-aid-kit"
                                                    style="display:inline-flex;"></i> Add New
                                                Product</a>
                                        </div><!-- /.widget-content -->
                                    </div><!-- /.widget-search -->
                                @endif
                            @endif
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
