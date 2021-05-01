@include('layouts.admin_header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script>
    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
      alert("Copied the text: " + copyText.value);

    }
</script>
<div class="main-panel">
    <div class="content-wrapper">
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Invite Friends</h4>

{{--            @if(session()->has('success))--}}
{{--                <div class="alert {{session('alert') ?? 'alert-primary'}}">--}}
{{--                    {{ session('success') }}--}}
{{--                </div>--}}
{{--            @endif--}}


            <ion-icon name="megaphone-outline" style="font-size: 104px;  color: #d6579e;size=large" ></ion-icon>
{{--          <canvas id="lineChart" style="height:250px"></canvas>--}}
            <p>Invite a friend and get N500 when they sign up with your referral code which is
                your <b>Registered Phone Number</b> and keep at least N10000 in their StudentBolster account to invest</p>

            <!-- The text field -->
            <input style="color: #ffff;background-color: #191c25;border-color: #191c25" type="text" value="{{auth()->user()->phone_num}}" id="myInput" readonly>
              <br><br>
            <!-- The button used to copy the text -->
            <button style=" color: #ffff;background-color: #191c25;border-color: #191c25" onclick="myFunction()">Copy Code</button>
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
