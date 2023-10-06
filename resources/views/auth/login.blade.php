<x-front-layout>
    <!-- Session Status -->
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">
                    <h2 class="mb-20">تسجيل <span> الدخول </span></h2>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form class="form" method="POST" action="{{ route('login',[$guard]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-right">
                                            <x-input-label class="text-right" for="email"
                                                >البريد الالكتروني</x-input-label
                                            >
                                            <x-text-input
                                                class="form-control"
                                                style="width: 100%;"
                                                placeholder="ادخل بريدك الالكتروني هنا"
                                                id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                                            />

                                                <x-input-error :messages="$errors->get('email')" style="color: red" class="mt-2 text-red-800" />

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group " style="">
                                            <x-input-label class="text-right" for="password" :value="old('Password')">كلمة المرور</x-input-label>
                                            <x-text-input
                                                class="form-control"
                                                style="width: 100%;"

                                                placeholder="كلمة المرور"
                                                id="password"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password"
                                            />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        </div>
                                    </div>
                                                <!-- Remember Me -->
                <div class="block mt-4" style="direction: rtl">
                    <label for="remember_me" class="inline-flex items-center " >
                        <input id="remember_me" type="checkbox" class="rounded  dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800 ml-3" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ old('Remember me') }}تذكرني</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request',[$guard]) }}">
                            {{ old('Forgot your password?') }} هل نسيت كلمة المرور
                        </a>
                    @endif


                    <x-primary-button class="ml-3 btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light"  >
                        {{ old('Log in') }} تسجيل الدخول
                    </x-primary-button>

                </div>
                                    <div class="col-lg-12 text-center mt-5">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <span>الا تمتلك حساب</span>
                                            <br>
                                            &nbsp;&nbsp;
                                            <a
                                                href="{{route('register')}}"
                                                class="text-sky-500 "
                                                > تسجيل مستخدم جديد</a
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

</x-front-layout>
