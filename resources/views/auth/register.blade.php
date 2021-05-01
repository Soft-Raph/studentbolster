@include('layouts.login_header')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>

              <form method="POST" class="register-form" id="register-form"  action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control p_input  @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input  @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control p_input @error('phone_num') is-invalid @enderror"
                    name="phone_num" value="{{ old('phone_num') }}" required>

                    @error('phone_num')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label>Referral Code</label>
                      <input type="text" class="form-control p_input @error('used_ref_code') is-invalid @enderror"
                             name="ref_id" value="{{ old('used_ref_code') }}">

                      @error('used_ref_code')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>Addresss</label>
                    <input type="text" class="form-control p_input @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input @error('password') is-invalid @enderror"
                     name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control p_input" name="password_confirmation" required autocomplete="new-password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="signup" id="signup" class="form-submit btn btn-primary btn-block enter-btn" style="border: none">SIGN UP</button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a  href="{{route('login')}}"> LOGIN</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>


{{-- <div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>

                    <form method="POST" class="register-form" id="register-form"  action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>


                                <input type="text" name="name" id="name" placeholder="Your Name" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>


                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>


                                <input id="email" type="email"  placeholder="Your Email"   class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                          <label for="phone_num"><i class="zmdi zmdi-local-phone"></i></label>


                                <input type="text"  id="phone_num" placeholder="Your Phone number" class=" @error('phone_num') is-invalid @enderror" name="phone_num" value="{{ old('phone_num') }}" required>

                                @error('phone_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label for="address"><i class="zmdi zmdi-directions-subway"></i></label>


                                  <input type="text"  id="address" placeholder="Your Address" class=" @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                  @error('address')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror

                          </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>


                                <input id="password" type="password"  placeholder="Password"   class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>

                                <input id="password-confirm" type="password"   placeholder="Repeat your password" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" name="signup" id="signup" class="form-submit" style="border: none">Register</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="asset1/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div> --}}

@include('layouts.login_footer')
