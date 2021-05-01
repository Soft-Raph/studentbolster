@include('layouts.admin_header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="sidebar-brand brand-logo-mini"  href="index.html"><img height="40px" weight="40"  src="{{URL('/')}}/asset/images/sbpng.png" alt="logo" /></a>
                          <br><br>
                        <div class="row">
                            <div class="col-12">
                        {{--          <canvas id="lineChart" style="height:250px"></canvas>--}}
                        <h3>Hi {{auth()->user()->name}}
                        </h3>
                            </div>
{{--                            <div class="col-4">--}}
{{--                                <ion-icon name="megaphone-outline" style="font-size: 30px;color: #d6579e;size=small" ></ion-icon>--}}

{{--                            </div>--}}
                        </div>
                        <br>
                        <p>Keep your communication in one message. please be patient and do not initiate multiple conversations </p>
                        <br>
                        <p>Send your message to Official StudentBolster Mail: info@studentbolster.com</p>
                        <br>
                        <p>Thank You</p>

                        <!-- The text field -->
{{--                        <input style="color: #ffff;background-color: #191c25;border-color: #191c25" type="text" value="{{auth()->user()->phone_num}}" id="myInput" readonly>--}}
{{--                        <br><br>--}}
{{--                        <!-- The button used to copy the text -->--}}
{{--                        <button style=" color: #ffff;background-color: #191c25;border-color: #191c25" onclick="myFunction()">Copy Code</button>--}}
                    </div>
                </div>
            </div>
{{--    <div class="col-lg-6 grid-margin stretch-card">--}}
{{--      <div class="card">--}}
{{--        <div class="card-body">--}}
{{--          <h4 class="card-title">Bar chart</h4>--}}
{{--          <canvas id="barChart" style="height:230px"></canvas>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}


@include('layouts.admin_footer')
