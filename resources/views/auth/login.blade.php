@extends('layouts.app')

@section('content')
<div class="container">

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom shadow-primary">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Log in</h4>
                                <div class="row mt-3">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    {{--                            btn bg-gradient-primary w-100 my-4 mb-2--}}
                                    <button type="submit" class="btn btn bg-gradient-info w-100 my-4 mb-2">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <p class="mt-4 text-sm text-center">

                                </p>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
