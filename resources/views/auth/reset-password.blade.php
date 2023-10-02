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
                        <h4 class="mb-4 text-center login-header">{{ __('Password Reset ') }}</h4>
                        <form method="POST" action="{{ route('password.store') }}" class="signin-form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group">
                                <input type="email" class="form-control"  id="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="Enter your email"  />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password"
                                type="password"
                                name="password" required autocomplete="new-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
