
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Bolster</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag -------->


    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

</head>

<body>
<div class="container">

    <br>
    <br>
    @if (session('msg'))
        <div class="alert alert-success" role="alert">
            {{ session('msg') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-4 text-center">
            <h2>Registered Users</h2>
            <h2>{{ count($users) }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Total Coupons</h2>
            <h2>{{ count($coupons) }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Total User Balance</h2>
            <h2>${{ $users->sum('balance') }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Users Deposited</h2>
            <h2>{{ count($transactions->where('type','Deposit')) }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Total Amount Deposited</h2>
            <h2>${{ $transactions->where('type','Deposit')->sum('amount') }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Withdrawals</h2>
            <h2>{{ count($transactions->where('type','Withdraw')) }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Pending Withdrawals</h2>
            <h2>{{ count($transactions->where('type','Withdraw')->where('status','Pending')) }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Users Invested</h2>
            <h2>{{ count($transactions->where('type','Investment')) }}</h2>
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h2>Total Amount Invested</h2>
            <h2>${{ $transactions->where('type','Investment')->sum('amount') }}</h2>
            <hr>
        </div>
    </div>


<div class="row p-10">
    <form action="{{ route('admin.coupon.add') }}" method="post" class="">
        @csrf
        <h2 class="text-center">Generate Coupon code</h2>
{{--        <div class="col-md-12 form-group">--}}
{{--            <label for="code">Coupon Code</label>--}}
{{--            <input type="text" class="form-control" name="code" value="">--}}
{{--        </div>--}}
        <div class="col-md-12 form-group">
            <label for="amount">Amount</label>
            <input type="text" class="form-control" name="amount" value="">
        </div>
        <div class="col-md-12 form-group">
            <button class="btn btn-primary">Generate </button>
        </div>
    </form>
    <br>

    <h1 style="align-content: center">List Of Coupon Code Generated</h1>
    <table id="coupons" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 0
        @endphp
        @foreach($coupons as $coupon)
            @php
                $i++
            @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $coupon->code }}</td>
                <td>{{ $coupon->amount }}</td>
                <td>{{ $coupon->status == 1 ? 'Used' : 'Not Used'  }}</td>
                <td>
                    <div>
                        <a href="{{ route('admin.coupon.delete',$coupon->id) }}" class="btn-sm btn-danger" onclick='confirm('Are you sure?');'>Delete</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
        </tfoot>
    </table>
    <hr>

    <br>
    <h2 class="text-center">All Withdrawals</h2>
    <table id="withdrawals" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Account Name</th>
            <th>Account No.</th>
            <th>Bank Name</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date and Time</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 0
        @endphp
        @foreach($users as $tran)
        @foreach($transactions->where('type','Withdraw') as $trans)
            @php
                $i++
            @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $tran->name}} </td>
                <td>{{ $tran->account_name }} </td>
                <td>{{ $tran->account_no }}</td>
                <td> {{ $tran->bank_name }}</td>
                <td>{{ $trans->description }}</td>
                <td>{{ $trans->amount }}</td>
                <td>{{ $trans->status }}</td>
                <td>{{ $trans->created_at }}</td>
                <td>
                    <div>
                        <a href="{{ route('admin.dep.delete',$trans->id) }}" class="btn-sm btn-danger">Delete</a>
                        <br>
                        <br>
                        @if($trans->status == 'Pending')
                            <a onclick="confirm('Are you sure?')" href="{{ route('admin.with.status',$trans->id) }}" class="btn-sm btn-info">Change Status</a>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Account Name</th>
            <th>Account No.</th>
            <th>Bank Name</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date and Time</th>
            <th>Options</th>
        </tr>
        </tfoot>
    </table>

    <hr>

    <br>
    <h2 class="text-center">All Deposits</h2>
    <table id="deposits" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date and Time</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 0
        @endphp
        @foreach($transactions->where('type','Deposit') as $with)
            @php
                $i++
            @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $with->name }} - {{ $with->email }}</td>
                <td>{{ $with->description }}</td>
                <td>{{ $with->amount }}</td>
                <td>{{ $with->status }}</td>
                <td>{{ $with->created_at }}</td>
                <td>
                    <div>
                        <a href="{{ route('admin.dep.delete',$with->id) }}" class="btn-sm btn-danger">Delete</a>
                        <br>
                        <br>

                            @if($with->status == 'Pending')
                                <a onclick="confirm('Are you sure?')" href="{{ route('admin.with.status',$with->id) }}" class="btn-sm btn-info">Change Status</a>
                            @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date and Time</th>
            <th>Options</th>
        </tr>
        </tfoot>
    </table>

    <br>
    <h2 class="text-center">All Users</h2>
    <div class="table-responsive p-4">
        <table id="users" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Balance</th>
                <th>Date Registered</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 0
            @endphp
            @foreach($users as $user)
                {{ $i++ }}
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->phone_num }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->balance }}</td>
                    <td>{{ $user->created_at->format('d/m/y') }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.user.delete',$user->id) }}" class="btn-sm btn-danger">Delete</a>
                            <br>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Balance</th>
                <th>Date Registered</th>
                <th>Option</th>
            </tr>
            </tfoot>
        </table>
        <hr>
</div>
</div>




<script>
    $(document).ready(function() {

        //Notifications

        $('#notifications').DataTable({
            responsive: true
        });


        //Coupons

        $('#coupons').DataTable({
            responsive: true
        });


        //Users

        $('#users').DataTable({
            responsive: true
        });

        //Withdrawals

        $('#withdrawals').DataTable({
            responsive: true
        });

        //Investments

        $('#investments').DataTable({
            responsive: true
        });


        //Deposit

        $('#deposits').DataTable({
            responsive: true
        });


        //Plans

        $('#plans').DataTable({
            responsive: true
        });


    });
</script>
</body>
