{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-base-layout>
    <div class="section-title-l-01">
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Registration Page</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Registration Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  ">
            <div class="col-md-6">
                <div class="img register-x">
                    <img src="{{ asset('assets/img/loginpage/bg.svg') }}">
                </div>
            </div>
            <div class="col-md-6 login-content">
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <img src="{{ asset('assets/img/loginpage/avatar.svg') }}">
                    <h2 class="title">Welcome</h2>
                    <div class=" input-div one">
                        <div class="i">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div>
                            <label data-error="wrong" data-success="right" class="text-md-right">
                                <h5>Username</h5>
                            </label>
                            <input id="name" type="text" name="name" :value="old('name')" required=""
                                autocomplete="name" class="input validate">
                        </div>
                    </div>
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
                            <input id="password" type="password" name="password" required="" autocomplete="new-password"
                                class="input validate">
                        </div>
                    </div>
                    <div class=" input-div one">
                        <div class="i">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <div>
                            <label data-error="wrong" data-success="right">
                                <h5>Password_Confirmation</h5>
                            </label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                autocomplete="new-password" class="input validate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select name="registeras" id="registeras" class="select  validate">
                                <option value="none"> ---- Register As ---- </option>
                                <option value="CST">Customer</option>
                                <option value="SPV">Service Provider</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-sb-m ">
                        <div class="forgot-p d-flex justify-content-end">
                            <a class="" href="{{ route('login') }}">Already registered?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-10 ">
                            <button type="submit" class="btn">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-base-layout>
