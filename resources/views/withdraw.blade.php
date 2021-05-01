@include('layouts.admin_header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<div class="  col-12 grid-margin stretch-card">

    <div class="card">
        <div class="card-body">
            <br>
            <h4 class=" pt-5 pb-5  card-title">Withdraw</h4>

            @if(session()->has('success'))
                <div class="alert {{session('alert') ?? 'alert-primary'}}">
                    {{ session('success') }}
                </div>
            @endif


            <form class="forms-sample"  action="{{ route('withdraw.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail3">Confirm Bank Details,<br><br> If Wrong or not Filled Please <br><br><b>Update your Profile  </label>
                    <input type="text" class="form-control" style="color: black;font-weight: bolder" name="email" value="Acct. Name:{{ auth()->user()->account_name }}" id="exampleInputEmail3" readonly>
                    <br>
                    <input type="text" class="form-control"  style="color: black;font-weight: bolder" name="email" value="Account Number:{{ auth()->user()->account_no }}" id="exampleInputEmail3" readonly>
                    <br>
                    <input type="text" class="form-control"  style="color: black;font-weight: bolder" name="email" value="Bank Name:{{ auth()->user()->bank_name }}" id="exampleInputEmail3" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Enter Amount</label>
                    <input type="text" class="form-control" name="amount" value="" id="exampleInputEmail3">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>

            </form>

            {{--            input coupons and amounts to the database--}}


            {{--            <form class="forms-sample"  action="{{ route('add.coupon') }}" method="POST" enctype="multipart/form-data">--}}
            {{--                @csrf--}}
            {{--                <div class="form-group">--}}
            {{--                    <label for="exampleInputEmail3">Enter Coupon Code</label>--}}
            {{--                    <input type="text" class="form-control" name="code" value="" id="exampleInputEmail3">--}}
            {{--                </div>--}}

            {{--                <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}

            {{--            </form>--}}
        </div>
    </div>
</div>



@include('layouts.admin_footer')

