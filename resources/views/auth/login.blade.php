
@include('layouts.login_header')


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label>Email </label>
                <input type="text" class="form-control p_input input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
              <div class="form-group">
                <label>Password </label>
                <input type="password" class="form-control p_input input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
                </div>
                <a href="{{ route('password.request') }}" class="forgot-pass" >Forgot password</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
              </div>
              <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
              </form>




{{-- <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{URL('/')}}/assetss/images/img-01.png" alt="IMG">
            </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <span class="login100-form-title">
                            Member Login
                        </span>
                        <br><br>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">

                            <input id="email" placeholder="Email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>



                        <div class="wrap-input100 validate-input" data-validate="Password is required">

                                <input id="password" placeholder="Password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>


                            <div class="wrap-input100">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me                                    </label>
                                </div>
                            </div>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" name="login">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a class="txt2" href="{{ route('password.request') }}">
                                Username / Password?
                            </a>
                        </div>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="{{ route('register') }}">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

@include('layouts.login_footer')
