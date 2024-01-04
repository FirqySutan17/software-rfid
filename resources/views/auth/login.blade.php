@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card _card">
                <div class="card-body">
                    <h2>Sign in to Bucky</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">


                            <div class="col-12">
                                <label for="email" class="col-form-label text-md-end">{{ __('Email Address')
                                    }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="password" class="col-form-label text-md-end">{{ __('Password')
                                            }}</label>
                                    </div>
                                    <div class="col-8">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link btn-forgot" href="{{ route('password.request') }}">
                                            {{ __('Forgot password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-sign">
                                    Sign In
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card _card" style="padding: 24px; text-align: center; margin-top: 20px">
                <p>New to Bucky? <a href="{{ route('register') }}" class="ca">Create an account.</a></p>
            </div>
        </div>
    </div>
</div>
@endsection