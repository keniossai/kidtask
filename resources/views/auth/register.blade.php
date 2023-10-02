<x-guest-layout>
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
                        <h4 class="mb-4 text-center login-header">Register a new account</h4>
                        <form method="POST" action="{{ route('register') }}" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" :value="old('name')" autofocus autocomplete="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" :value="old('email')" autofocus autocomplete="username">
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password"  autocomplete="new-password" class="form-control" placeholder="Password">
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="password_confirmation" type="password" name="password_confirmation"  autocomplete="new-password" class="form-control" placeholder="Repeat Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Register') }}</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="text-center">
                                    <a href="{{ route('login') }}" style="color: #fff">{{ __('Already registered?') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>



