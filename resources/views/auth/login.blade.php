@extends('layouts.app')

@section('content')
<div class="container login w-full h-screen mx-auto mt-24">
    <div class="row justify-content-center">
        <div class="col-md-6 cardopt offset-md-3 flex flex-wrap">
            <div class="card bg-grey shadow-lg md:w-3/4 pb-5 pt-5">
                <div class="block uppercase tracking-wide text-grey-darker text-lg font-bold mb-2 card-header ml-24 pb-5">{{ __('Login') }}</div>

                <div class="items-center card-body ml-24">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input  id="password" type="password" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="bg-blue hover:bg-teal text-white font-bold py-2 px-4 rounded-full block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 btn py-4 px-16">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="block text-xs uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 mt-3 btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                      <a href="https://thecads.org/privacy-policy/"> <p class="text-center text-black text-xs">©2019 Cads. All rights reserved. </p></a>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
