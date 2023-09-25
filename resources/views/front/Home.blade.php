{{-- @extends('layout.dashboard')
@section('content') --}}
<x-front-layout>
      <!--Contents-->
      <main class="shop-page style-5">
        <!-- ====== start shop page ====== -->
        <section class="shop section-padding pt-50">
            <div class="container">
                <div class="section-head text-center mb-80 style-5">
                    <h2 class="mb-20"> سوق <span> Iteck </span> </h2>
                    <div class="page-links color-999">
                        <a href="#" class="me-2">
                            الرئيسية
                        </a>
                        <span class="me-2">/</span>
                        <a href="#" class="color-000">
                            سوق Iteck
                        </a>
                    </div>
                </div>
                <div class="row gx-4">
                    <div class="col-lg-3">
                        <div class="filter">
                            <div class="filter-card mb-30">
                                <div class="card-title">
                                    <span>التصنيفات</span>
                                </div>
                                <div class="form-check category-checkRadio">
                                    <input class="form-check-input" type="radio" name="category" id="category1">
                                    <label class="form-check-label cat-link" for="category1">
                                        كل التصنيفات
                                    </label>
                                </div>
                                <div class="form-check category-checkRadio">
                                    <input class="form-check-input" type="radio" name="category" id="category2">
                                    <label class="form-check-label cat-link" for="category2">
                                        التسويق و التحليل
                                    </label>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                تكنولوجى
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="ps-3 mb-10">
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category3" checked>
                                                    <label class="form-check-label cat-link" for="category3">
                                                        كمبيوتر ولابتوب
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category4">
                                                    <label class="form-check-label cat-link" for="category4">
                                                        قطع غيار
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category5">
                                                    <label class="form-check-label cat-link" for="category5">
                                                        موبايل وتابلت
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category6">
                                                    <label class="form-check-label cat-link" for="category6">
                                                        اكسسوارات
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                الكترونيات
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="ps-3 mb-10">
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category7">
                                                    <label class="form-check-label cat-link" for="category7">
                                                        كمبيوتر ولابتوب
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category8">
                                                    <label class="form-check-label cat-link" for="category8">
                                                        قطع غيار
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category9">
                                                    <label class="form-check-label cat-link" for="category9">
                                                        موبايل وتابلت
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                تكنولوجى
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="ps-3 mb-10">
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category10">
                                                    <label class="form-check-label cat-link" for="category10">
                                                        كمبيوتر ولابتوب
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category11">
                                                    <label class="form-check-label cat-link" for="category11">
                                                        قطع غيار
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check category-checkRadio">
                                    <input class="form-check-input" type="radio" name="category" id="category12">
                                    <label class="form-check-label cat-link" for="category12">
                                        احداث
                                    </label>
                                </div>
                            </div>
                            <div class="filter-card">
                                <div class="card-title d-flex justify-content-between">
                                    <span>فلتر</span>
                                    <a href="#" class="text-uppercase fw-normal fs-10px"> <i
                                            class="bi bi-arrow-repeat me-1"></i> إعادة ضبط الجميع </a>
                                </div>
                                <div class="filter-card-item">
                                    <div class="sub-tilte d-flex align-items-center justify-content-between">
                                        <span>العلامات التجارية</span>
                                        <!-- <small class="icon">
                                            <i class="bi bi-chevron-down"></i>
                                        </small> -->
                                    </div>
                                    <div class="filter-card-body">
                                        <div class="search-group">
                                            <input type="text" placeholder="Search brand">
                                            <button> <i class="bi bi-search"></i> </button>
                                        </div>
                                        <div class="filter-card-scroll">
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck1">
                                                <label class="form-check-label" for="categoryCheck1">
                                                    جميع العلامات التجارية
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck2">
                                                <label class="form-check-label" for="categoryCheck2">
                                                    ابل
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck3">
                                                <label class="form-check-label" for="categoryCheck3">
                                                    سامسونج
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck4">
                                                <label class="form-check-label" for="categoryCheck4">
                                                    اوبو
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck5">
                                                <label class="form-check-label" for="categoryCheck5">
                                                    سونى
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck6">
                                                <label class="form-check-label" for="categoryCheck6">
                                                    ابل
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck7">
                                                <label class="form-check-label" for="categoryCheck7">
                                                    سامسونج
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck8">
                                                <label class="form-check-label" for="categoryCheck8">
                                                    اوبو
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck9">
                                                <label class="form-check-label" for="categoryCheck9">
                                                    سونى
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-card-item">
                                    <div class="sub-tilte d-flex align-items-center justify-content-between">
                                        <span>الالوان</span>
                                        <!-- <small class="icon">
                                            <i class="bi bi-chevron-down"></i>
                                        </small> -->
                                    </div>
                                    <div class="filter-card-body">
                                        <div class="filter-card-scroll">
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck10">
                                                <label class="form-check-label" for="categoryCheck10">
                                                    كل الالوان
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck11">
                                                <label class="form-check-label" for="categoryCheck11">
                                                    احمر
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck12">
                                                <label class="form-check-label" for="categoryCheck12">
                                                    برتقالى
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck13">
                                                <label class="form-check-label" for="categoryCheck13">
                                                    اصفر
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck14">
                                                <label class="form-check-label" for="categoryCheck14">
                                                    ازرق
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-card-item border-0 m-0">
                                    <div class="sub-tilte d-flex align-items-center justify-content-between">
                                        <span>السعر</span>
                                    </div>
                                    <div class="filter-card-body">
                                        <div class="slider-range-content">
                                            <div class="amount-input">
                                                <div class="amount">
                                                    <small>$ الاقل</small>
                                                    <input type="text" id="amount1" readonly>
                                                </div>
                                                <div class="amount">
                                                    <small>$ الاغلى</small>
                                                    <input type="text" id="amount2" readonly>
                                                </div>
                                                <button>تطبيق</button>
                                            </div>
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="products-content">
                            <div class="top-filter mb-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <p class="color-999 fs-12px mb-3 mb-lg-0"> <span class="color-000">1 - 40</span> of 1,652 results</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="r-side">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <form action="contact.php" class="form" method="post">
                                                        <div class="form-group">
                                                            <label >ترتيب حسب</label>
                                                            <select class="form-select">
                                                                <option value="" selected >الطبيعى</option>
                                                                <option value="">الأكثر مبيعًا</option>
                                                                <option value="">منتجات جديدة</option>
                                                                <option value="">الطبيعى</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-4">
                                                    <div class="grid-list-btns">
                                                        <span class="grid-btn bttn active">
                                                            <i class="bi bi-grid-3x3"></i>
                                                        </span>
                                                        <span class="list-btn bttn">
                                                            <i class="bi bi-list-task"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products">
                                <div class="row gx-2 gx-lg-4">
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                <img src="assets/img/shop/products/1.png" alt="">
                                                <span class="label new">الجديد</span>
                                                <span class="fav-btn active"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">ايسوس</h6>
                                                <h5 class="title">ايسوس كروم بوك  -10.2 inch, 256GB</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                $197.00
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                    @foreach ($latest as $product )
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                {{-- <img src="{{ Storage::url($product->image) }}" alt=""> --}}
                                                <img src="{{asset('assets/img/blog/17.png')}}" alt="">
                                                <span class="label sale-off">15% off</span>
                                                <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">{{$product->name}}</h6>
                                                <h5 class="title">{{$product->description}}</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <span class="price-sale">${{$product->sale_price}}</span> <span class="old-price">${{$product->price}}</span>
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                <img src="assets/img/shop/products/8.png" alt="">
                                                <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">دى جى اى تو</h6>
                                                <h5 class="title">كاميرا دى جى اى تو مزوده بسماعه</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                $197.00
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                <img src="assets/img/shop/products/9.png" alt="">
                                                <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">نيكون</h6>
                                                <h5 class="title">كاميرا نيكون</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                $197.00
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                <img src="assets/img/shop/products/10.png" alt="">
                                                <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">سونى</h6>
                                                <h5 class="title">كاميرا سونى</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                $197.00
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                <img src="assets/img/shop/products/11.png" alt="">
                                                <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">كتاب تسويق</h6>
                                                <h5 class="title">اصحابي الخطيرين - كتاب تسويق</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                $197.00
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 card-width">
                                        <div class="product-card">
                                            <div class="img">
                                                <img src="assets/img/shop/products/12.png" alt="">
                                                <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                            </div>
                                            <div class="info">
                                                <h6 class="category">كتاب تسويق</h6>
                                                <h5 class="title">اصحابي الخطيرين - كتاب تسويق</h5>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 المراجعات</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                $197.00
                                            </div>

                                            <a href="#" class="btn rounded-pill mt-20">
                                                <span>أضف إلى السلة</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination style-5 color-5 justify-content-center mt-50">
                                    <a href="#" class="active">
                                        <span>1</span>
                                    </a>
                                    <a href="#">
                                        <span>2</span>
                                    </a>
                                    <a href="#">
                                        <span>3</span>
                                    </a>
                                    <a href="#">
                                        <span>4</span>
                                    </a>
                                    <a href="#">
                                        <span>...</span>
                                    </a>
                                    <a href="#">
                                        <span>20</span>
                                    </a>
                                    <a href="#">
                                        <span class="text">التالى <i class="fas fa-chevron-right"></i> </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end shop page ====== -->
    </main>
    <!--End-Contents-->
</x-front-layout>
