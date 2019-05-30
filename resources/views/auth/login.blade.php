@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
                    {{ __('Login') }}
                </span>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" id="password" type="password" placeholder="Password" name="password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "" style="padding-left: 35px;">
                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                   <label class="form-check-label" for="remember" style="padding: 0 30px 0 19px;color:#999; font-weight:600;">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                   {{ __('Login') }}
               </button>
           </div>

           <div class="text-center p-t-12">

              @if (Route::has('password.request'))
              <a class="txt2" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
    </form>
</div>
</div>
</div>

<!-- SCRIPTS -->

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
.container-login100-form-btn{padding-top:0;

}
</style> 

@endsection
