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
<x-base-layout>
    <div class="section-title-l-01">
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Login Page</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Login Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img">
                    <img src="{{ asset('assets/img/loginpage/bg.svg') }}">
                </div>
            </div>
            <div class="col-md-6 login-content">

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img src="{{ asset('assets/img/loginpage/avatar.svg') }}">
                    <h2 class="title">Welcome</h2>
                    <div class=" input-div one">
                        <div class="i">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div>
                            <label data-error="wrong" data-success="right" class="text-md-right">
                                <h5>Email ID</h5>
                            </label>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input validate">
                        </div>
                    </div>
                    <div class=" input-div one">
                        <div class="i">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <div>
                            <label data-error="wrong" data-success="right">
                                <h5>Password</h5>
                            </label>
                            <input id="password" type="password" name="password" required="" class="input validate">
                        </div>
                    </div>
                    <div class="flex-sb-m  ">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" id="remember_me"
                                name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div class="forgot-p d-flex justify-content-end">
                            <a class="" href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-10 ">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-base-layout>
