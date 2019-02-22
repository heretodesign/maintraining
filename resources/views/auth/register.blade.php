@extends('layouts.app')

@section('content')
<div class="container w-full h-screen mx-auto mt-24">
    <div class="row justify-content-center">
        <div class="col-md-8 flex flex-wrap">
            <div class="card bg-grey shadow-lg md:w-3/4 pb-5 pt-5">
                <div class="block uppercase tracking-wide text-grey-darker text-lg font-bold mb-2 card-header ml-24 pb-5">{{ __('Register') }}</div>

                <div class="items-center card-body ml-24">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-6 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jobtitle" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-6 col-form-label text-md-right">{{ __('Job Title') }}</label>

                            <div class="col-md-6">
                                <input id="jobtitle" type="text" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('jobtitle') ? ' is-invalid' : '' }}" name="jobtitle" value="{{ old('jobtitle') }}" required autofocus>

                                @if ($errors->has('jobtitle'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-6 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="department" type="text" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required autofocus> -->
                                <div class="col-md-6">
                                  <select class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required autofocus>
                                    <option>Choose Department</option>
                                    <option value="businessexcellence">Business Excellence</option>
                                    <option value="contractingandprocument">Contracting & Procurement</option>
                                    <option value="creativesolutions">Creative Solutions</option>
                                    <option value="customeroperation">Customer Operations</option>
                                    <option value="financeoperations">Finance Operations</option>
                                    <option value="humanresourceoperations">Human Resource Operations</option>
                                    <option value="informationtechnology">Information Technology</option>
                                    <option value="legal">Legal</option>
                                    <option value="orderofdelivery">Order to Delivery</option>
                                    <option value="retailcenterofexcellence">Retail Centre of Excellence</option>
                                    <option value="other">Other</option> 
                                  </select>
                                  <!-- <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div> -->
                                </div>

                                @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="appearance-none block w-1/2 bg-grey-lighter text-grey-darker border border-grey-darker rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-blue hover:bg-teal text-white  py-2 px-4 rounded-full block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 btn py-4 px-16">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center text-black text-xs">
                        ©2019 Cads. All rights reserved.
                      </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
