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
        <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
        <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/js/tagify/tagify.css')}}" />

</head>
<body>
    <main class="contact-page style-5 text-start">
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">
                    <h2 class="mb-20">تسجيل <span> الدخول </span></h2>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form class="form" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <label for="email"
                                                >البريد الالكتروني</label
                                            >
                                            <input
                                                type="text"
                                                name="email"
                                                class="form-control"
                                                v-model="data.email"
                                                placeholder="ادخل بريدك الالكتروني هنا"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <input
                                                type="password"
                                                name="name"
                                                v-model="data.password"
                                                class="form-control"
                                                placeholder="كلمة المرور"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center mt-5">
                                        <input
                                            type="button"
                                            value="تسجيل الدخول"
                                            class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light"
                                            @click="login()"
                                        />
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div
                                            class="form-check d-inline-flex mt-30 mb-30"
                                        >
                                            الا تمتلك حساب
                                            <router-link
                                                to="/register"
                                                class="text-decoration-underline ps-1"
                                                >تسجيل مستخدم جديد</router-link
                                            >
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img
                        src="assets/img/icons/contact_a.png"
                        alt=""
                        class="contact_a"
                    />
                    <img
                        src="assets/img/icons/contact_message.png"
                        alt=""
                        class="contact_message"
                    />
                </div>
            </div>
        </section>
        <!-- ====== end contact page ====== -->
    </main>

</body>
</html>
