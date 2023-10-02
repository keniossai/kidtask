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
                        <h4 class="mb-4 text-center login-header">{{ __('Forgot your password? ') }}</h4>
                        <form method="POST" action="{{ route('password.request') }}" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" :value="old('email')" autofocus>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Email Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>


