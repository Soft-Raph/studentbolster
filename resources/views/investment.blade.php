@include('layouts.admin_header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<div class="  col-12 grid-margin stretch-card">

    <div class="card">
        <div class="card-body">


            <br>
            <h4 class=" pt-5 pb-5  card-title">Investment</h4>
            @if(session()->has('success'))
                <div class="alert {{session('alert') ?? 'alert-primary'}}">
                    {{ session('success') }}
                </div>
            @endif



            <form class="forms-sample"  action="{{ route('invest.update') }}" method="POST"  >
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail3">Enter Amount</label>
                    <input type="text" class="form-control" name="amount" value="" id="exampleInputEmail3">
                </div>

            @if(\App\Helpers\Helper::canInvest())
                <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Submit</button>
                @endif

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

