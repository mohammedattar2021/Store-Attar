<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
        <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
        <meta name="author" content="" />

        <!-- Title  -->
        <title>store attar</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" title="Favicon" sizes="16x16" />

        <!-- ====== bootstrap icons cdn ====== -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

        <!-- bootstrap 5 -->
        <!-- === bootstrap ltr === -->
        <!-- <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css"> -->

        <!-- === bootstrap rtl === -->
        <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.rtl.min.css')}}">

        <!-- ====== font family ====== -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <!-- === ar font === -->
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/lib/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lib/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lib/jquery.fancybox.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lib/lity.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lib/swiper.min.css')}}" />

        <!-- ====== global style ====== -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/rtl_style.css')}}" />
    </head>
<body>
    <div class="top-navbar style-4">
        <div class="container">
            <div class="content text-white">
                <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                    <small class="fs-10px">مميز</small>
                </span>
                <img
                    src="{{asset('assets/img/icons/nav_icon/imoj_heart.png')}}"
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
                <img src="{{asset('assets/img/logo_lgr.png')}}" alt="" />
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
</div>
<div class="container" style="margin-right:15px ">
    <h4>مرحبا/ </h4>
    <div class="row my-3">
        <div class="col-md-3 bg-dark rounded-3 text-white py-4">
            <ul class="nav flex-column h-100" style="height: 30em">
                <div>
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar">
                        <h5>التصنيفات</h5>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('category.create')}}"
                            >اضافه تصنيف</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('category.index')}}"
                            >عرض تصنيف</a
                        >
                    </li>

                </div>
                <br>
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar">
                    <h5>المنتجات</h5>
                <li class="nav-item">
                    <a class="nav-link text-white" to="/create"
                        >اضافه منتج</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" to="/show"
                        >عرض منتج</a
                    >
                </li>
            </div>
            </ul>

            </div>
            {{ $slot }}
            {{-- @yield('content') --}}
</div>
</div>

    <!-- ====== start footer ====== -->
    <footer class="style-6 border-top brd-gray">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            Itekseo - الأفضل في التسويق
                        </div>
                        <ul>
                            <li class="color-666 mb-2">
                                <i class="bi bi-house me-1"></i>
                                <small>223 شارع طريق تاتشر ، مانهاتن</small>
                            </li>
                            <li class="color-666 mb-2">
                                <i class="bi bi-phone me-1"></i>
                                <small>+031 5689 89 98</small>
                            </li>
                            <li class="color-666 mb-2">
                                <i class="bi bi-envelope me-1"></i>
                                <small>contact@itecksolution.co</small>
                            </li>
                        </ul>
                        <div class="socail-icons">
                            <a href="twiter.com"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="facebook.com"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="instagram.com"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            الخدمات
                        </div>
                        <ul>
                            <li>
                                <a href="#">تحليل البيانات</a>
                            </li>
                            <li>
                                <a href="#">استراتيجية المحتوى</a>
                            </li>
                            <li>
                                <a href="#">الحماية من القرصنة</a>
                            </li>
                            <li>
                                <a href="#">وسائل التواصل الاجتماعي</a>
                            </li>
                            <li>
                                <a href="#">تصميم وتطوير المواقع الإلكترونية</a>
                            </li>
                            <li>
                                <a href="#">اعلانات جوجل وفيسبوك</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            المعلومات
                        </div>
                        <ul>
                            <li>
                                <a href="rtl-page-about.html"> من نحن </a>
                            </li>
                            <li>
                                <a href="#"> المستثمرون </a>
                            </li>
                            <li>
                                <a href="rtl-page-blog.html"> المدونة </a>
                            </li>
                            <li>
                                <a href="rtl-page-contact.html"> اتصل بنا </a>
                            </li>
                            <li>
                                <a href="rtl-page-about.html"> كيف نعمل </a>
                            </li>
                            <li>
                                <a href="#"> خطة الاسعار </a>
                            </li>
                            <li>
                                <a href="#"> اخبار كوفيد </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            النشرة الإخبارية
                        </div>
                        <small class="color-666">سجل الآن للحصول على آخر التحديثات على <br> الترقيات والقسائم. </small>
                        <form action="contact.php" class="form mt-30" method="post">
                            <div class="form-group">
                                <span class="icon">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="text" placeholder="ادخل بريدك الالكترونى">
                                <button> <i class="bi bi-send"></i> </button>
                            </div>
                        </form>
                        <small class="color-666 fst-italic mt-20">من خلال الاشتراك ، فإنك توافق على <a href="#" class="fst-normal text-dark">سياستنا.</a> </small>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <img src="assets/img/logo_home6.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <small class="small">
                            © 2023 حقوق التأليف والنشر <small class="fw-bold text-decoration-underline">محمد العطار</small> كل الحقوق محفوظة. صمم بواسطة
                            <a href="https://themeforest.net/user/themescamp" class="fw-bold text-decoration-underline">ThemesCamp</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="{{asset('assets/js/lib/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/slider-mob-touch.js')}}"></script>
    <script src="{{asset('assets/js/lib/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/js/lib/lity.js')}}"></script>
    <script src="{{asset('assets/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery.counterup.js')}}"></script>
    <script src="{{asset('assets/js/lib/pace.js')}}"></script>
    <script src="{{asset('assets/js/lib/scrollIt.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
