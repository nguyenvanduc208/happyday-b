<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('adminlte/assets/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('adminlte/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('adminlte/assets/images/icon/logo.png') }}"
                            alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="index.html">ICO dashboard</a></li>
                                    <li><a href="index2.html">Ecommerce dashboard</a></li>
                                    <li><a href="index3.html">SEO dashboard</a></li>
                                </ul>
                            </li>
                            <li class="{{ strpos(request()->path(), 'category') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-sidebar-left"></i><span>
                                        Category
                                    </span>
                                </a>
                                <ul class="collapse">
                                    <li class="{{ strpos(request()->path(), 'category/add') ? 'active' : '' }}"><a
                                            href="{{ route('category-form-create') }}">Thêm mới</a></li>
                                    <li
                                        class="{{ strpos(request()->path(), 'category') ? (strpos(request()->path(), 'category/add') == false ? 'active' : '') : '' }}">
                                        <a href="{{ route('category-list') }}">Danh sách</a></li>
                                </ul>
                            </li>
                            <li class="{{ strpos(request()->path(), 'food') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-sidebar-left"></i><span>
                                        food
                                    </span>
                                </a>
                                <ul class="collapse">
                                    <li class="{{ strpos(request()->path(), 'food/add') ? 'active' : '' }}"><a
                                            href="{{ route('food-form-create') }}">Thêm mới</a></li>
                                    <li
                                        class="{{ strpos(request()->path(), 'food') ? (strpos(request()->path(), 'food/add') == false ? 'active' : '') : '' }}">
                                        <a href="{{ route('food-list') }}">Danh sách</a></li>
                                </ul>
                            </li>
                            {{-- <li class="{{ strpos(request()->path(), 'restaurent') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-sidebar-left"></i><span>
                                        restaurent
                                    </span>
                                </a>
                                <ul class="collapse">
                                    <li class="{{ strpos(request()->path(), 'restaurent/add') ? 'active' : '' }}"><a
                                            href="{{ route('restaurent-form-create') }}">Thêm mới</a></li>
                                    <li
                                        class="{{ strpos(request()->path(), 'restaurent') ? (strpos(request()->path(), 'restaurent/add') == false ? 'active' : '') : '' }}">
                                        <a href="{{ route('restaurent-list') }}">Danh sách</a></li>
                                </ul>
                            </li> --}}
                            <li class="{{ strpos(request()->path(), 'blog') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-sidebar-left"></i><span>
                                        Blog
                                    </span>
                                </a>
                                <ul class="collapse">
                                    <li class="{{ strpos(request()->path(), 'blog/add') ? 'active' : '' }}"><a
                                            href="{{ route('blog-form-create') }}">Thêm mới</a></li>
                                    <li
                                        class="{{ strpos(request()->path(), 'blog') ? (strpos(request()->path(), 'blog/add') == false ? 'active' : '') : '' }}">
                                        <a href="{{ route('blog-list') }}">Danh sách</a></li>
                                </ul>
                            </li>
                            <li class="{{ strpos(request()->path(), 'resort') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-sidebar-left"></i><span>
                                        Resort
                                    </span>
                                </a>
                                <ul class="collapse">
                                    <li class="{{ strpos(request()->path(), 'resort/add') ? 'active' : '' }}"><a
                                            href="{{ route('resort-form-create') }}">Thêm mới</a></li>
                                    <li
                                        class="{{ strpos(request()->path(), 'resort') ? (strpos(request()->path(), 'resort/add') == false ? 'active' : '') : '' }}">
                                        <a href="{{ route('resort-list') }}">Danh sách</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
