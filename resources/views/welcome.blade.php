<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store attar</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <!-- === bootstrap ltr === -->
    <!-- <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css"> -->

    <!-- === bootstrap rtl === -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.rtl.min.css') }}">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- === ar font === -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper.min.css') }}" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/rtl_style.css') }}" />
</head>
<body>
    <div class="top-navbar style-4">
        <div class="container">
            <div class="content text-white">
                <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                    <small class="fs-10px">مميز</small>
                </span>
                <img
                    src="assets/img/icons/nav_icon/imoj_heart.png"
                    alt=""
                    class="icon-15"
                />
                <span class="fs-10px op-6">احصل </span>
                <small class="op-10 fs-10px">20% خصم</small>
                <span class="fs-10px op-6">للحسابات الجديدة</span>
                <a
                    to="/register"
                    class="fs-10px text-decoration-underline ms-2"
                    >سجل الان</a
                >
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo_lgr.png" alt="" />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            الكتب
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/app"
                            >
                            لوحة التحكم
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <a
                            to="/login"
                            class="search-icon me-4 hover-blue4 btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold"
                            v-if="this.isLoggedIn"
                        >
                            <i class="bi bi-person"></i>
                        </a>
                        <a
                            to="/register"
                            class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold"
                            v-if="this.isLoggedIn"
                        >
                            <span
                                >تسجيل جديد
                                <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </a>
                        <a
                            to=""
                            class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold"
                            v-if="!this.isLoggedIn"
                        >
                            <span
                                >تسجيل الخروج
                                <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        {{-- <h4>مرحبا</h4> --}}
        <div class="row my-3">
            {{-- <!-- start Aside -->
            <div class="col-md-3 bg-dark rounded-3 text-white py-4">
                <ul class="nav flex-column h-100" style="height: 30em">
                    <div>
                        <h5>الكتب</h5>
                        <li class="nav-item">
                            <a class="nav-link text-white" to="/create"
                                >اضافه كتاب</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" to="/show"
                                >عرض الكتب</a
                            >
                        </li>
                    </div>
                </ul> --}}
            </div>       <div class="col-md-8 text-center py-4 mt-5 ">
                <h4 class="d-inline">مرحبا بك في</h4>
                <h3 class="d-inline">سوق منتجاتي </h3>
                <h4 class="mb-5">
                    حيث يمكنك عرض منتجاتك للعامه ويمكنهم شرائها وانت في مكانك فقط
                </h4>
                <img
                    src="{{asset('assets/img/comming_man_shape.png')}}"
                    alt="Normal image"
                    class="w-50"
                />
            </div>
        </div>
    </div>
</div>
<!-- ====== request ====== -->
<script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/lib/lity.js') }}"></script>
<script src="{{ asset('assets/js/lib/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
<script src="{{ asset('assets/js/lib/pace.js') }}"></script>
<script src="{{ asset('assets/js/lib/scrollIt.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
