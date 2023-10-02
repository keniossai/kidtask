<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <img src="{{ asset('assets/images/logo.png') }}" />
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h4 class="mb-4 text-center login-header">Login to your account</h4>
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" :value="old('email')" autofocus autocomplete="username">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password"  autocomplete="current-password" class="form-control" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Log in') }}</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">{{ __('Remember me') }}
                                        <input type="checkbox" id="remember_me" type="checkbox" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('password.request') }}" style="color: #fff">{{ __('Forgot your password?') }}</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Not a user ? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="{{ route('register') }}" class="px-2 py-2 mr-md-1"><span class="ion-logo-facebook mr-2"></span> {{ __('Register') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>


