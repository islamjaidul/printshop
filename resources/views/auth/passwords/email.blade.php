@extends('layouts.app')

@section('content')

<!-- STYLESHEETS -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link href="{{asset('/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/plugins/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/util.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/main.css')}}" rel="stylesheet" type="text/css">

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            
                 <span class="login100-form-title">{{ __('Reset Password') }}</span>

          
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="login100-form">
                        @csrf

                        <div class="wrap-input100">
                       <input id="email" type="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}"  placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                       <div class="container-login100-form-btn">
                          
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
        
        </div>
    </div>
</div>


        
    <script src="{{asset('/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('/plugins/tilt/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script >
     $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <style>
        .navbar {
    position: relative;
    min-height: 0;
    margin-bottom: 0;
    border: 0;
}
.login100-form {

    margin: auto;
}
.wrap-login100 {
 padding: 177px 130px 177px 95px;
}
    </style>

@endsection