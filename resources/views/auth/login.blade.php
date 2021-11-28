{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ========== Background Image ======= -->
        <img class="wave" src="{{ asset('assets\img\loginpage\img\wave_1.png') }}">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">
            <div class="img-lp">
                <img src="{{ asset('assets\img\loginpage\img\lp-1.svg') }}">
            </div>
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-lp">

                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img src="{{ asset('assets\img\loginpage\img\avatar-2.svg') }}">
                    <h2 class="title">Welcome</h2>
                    <x-jet-validation-errors/>
                    @if (session('status'))
                        <div class="font-medium text-md text-green-600">
                            <h6 style="color: #1597e5; text-align:center">{{ session('status') }}</h6>
                        </div>
                    @endif
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email Id</h5>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input validate">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i-lp">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" name="password" required="" class="input">
                        </div>
                    </div>
                    <div class="flex-sb-m">
                        <!-- ============================Remember Me =========================  -->
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" type="checkbox" id="remember_me"
                                name="remember-me">
                            <label class="label-checkbox100" for="remember_me">
                                Remember me
                            </label>
                        </div>
                        <!-- ============================Remember Me =========================  -->
                        <!-- ============================Forgot Password =========================  -->
                        <div class="forgot-p">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <!-- ============================Forgot Password =========================  -->
                    </div>
                    <button type="submit" class="btn-lp">Login</button>
                    <!-- ================ Redirect on Registration page ===================== -->
                    <div class="">
                        <span class="span-r"> Not a member?
                            <a href="{{ route('register') }}">Sing up now!</a>
                        </span>
                    </div>
                </form>

            </div>
            <!-- =================================== Login Content  =============================== -->

        </div>
        <!-- ================================ Login Container ====================================== -->
        <!-- ================== Script of page =========================== -->
        <script type="text/javascript" src="{{ asset('assets\js\login\main.js') }}"></script>
        <!-- ================== Script of page =========================== -->
    </body>

    </html>
</x-guest-layout>
