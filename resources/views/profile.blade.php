@include('layouts.admin_header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>




<div class="main-panel">
    <div class="content-wrapper">
        @if(session()->has('success'))
            <div class="alert {{session('alert') ?? 'alert-primary'}}">
                {{ session('success') }}
            </div>
        @endif
      <div class="page-header">
        <h3 class="page-title">Profile Settings</h3>

{{--        <nav aria-label="breadcrumb">--}}
{{--          <ol class="breadcrumb">--}}
{{--            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>--}}
{{--            <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>--}}
{{--          </ol>--}}
{{--        </nav>--}}
      </div>
{{--      <div class="row">--}}
{{--        <div class="col-md-6 grid-margin stretch-card">--}}
{{--          <div class="card">--}}
{{--            <div class="card-body">--}}
{{--              <h4 class="card-title">Login Credentials</h4>--}}
{{--              <form class="forms-sample">--}}
{{--                <div class="form-group">--}}
{{--                  <label for="exampleInputUsername1">Username</label>--}}
{{--                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="{{ auth()->user()->name }}">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="exampleInputEmail1">Email address</label>--}}
{{--                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ auth()->user()->email }}">--}}
{{--                </div>--}}
{{--              </form>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Login/Personal Details</h5>
              <form class="forms-sample" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text"  style="color: black;font-weight: bolder" class="form-control" id="exampleInputUsername1"  value="{{ auth()->user()->name }}" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" style="color: black;font-weight: bolder" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ auth()->user()->email }}" readonly>
                  </div>

                <div class="form-group">
                  <label for="exampleInputMobile" >Mobile</label>
                    <input type="text"  name="phone_num" value="{{ auth()->user()->phone_num }}" class="form-control" id="exampleInputMobile" placeholder=" ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword2" >Main Address</label>
                    <input type="Address" name="address" value="{{ auth()->user()->address }}" class="form-control" id="exampleInputPassword2" placeholder="">
                </div>
                  <div class="form-group">
                      <label for="exampleInputMobile">Gender</label>
                      <input type="text" name="gender" value="{{ auth()->user()->gender }}" class="form-control" id="exampleInputMobile" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Upload Picture(Not required)</label>
                      <input type="file" name="image" class="form-control-file"  placeholder="">
                  </div>
{{--                  <div class="form-group">--}}
{{--                      <label for="exampleInputPassword2" >School</label>--}}
{{--                      <input type="text" class="form-control" id="exampleInputPassword2" placeholder="">--}}
{{--                  </div>--}}
{{--                  <div class="form-group">--}}
{{--                      <label for="exampleInputPassword2">Age</label>--}}
{{--                      <input type="text" class="form-control" id="exampleInputPassword2" placeholder="">--}}
{{--                  </div>--}}
                  <div class="form-group">
                      <label for="exampleInputPassword2" >Account Name</label>
                      <input type="text"  name="account_name" value="{{ auth()->user()->account_name }}" class="form-control" id="exampleInputPassword2" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword2" >Bank Name</label>
                      <input type="text" name="bank_name" value="{{ auth()->user()->bank_name }}" class="form-control" id="exampleInputPassword2" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword2">Acount Number</label>
                      <input type="text"  name="account_no" value="{{ auth()->user()->account_no }}" class="form-control" id="exampleInputPassword2" placeholder="">
                  </div>


                <button type="submit" ng-click="showPopup()"  class="btn btn-primary mr-2 button icon ion-edit">Update</button>


              </form>
            </div>
          </div>
        </div>
        <script>
            angular.module('ionicApp', ['ionic'])

                .controller('PlaylistsCtrl', function($scope, $ionicPopup, $timeout) {
                    $scope.data = {}

                    // Triggered on a button click, or some other target
                    $scope.showPopup = function() {
                        var alertPopup = $ionicPopup.alert({
                            title: 'Dont eat that!',
                            template: 'It might taste good'
                        });
                        alertPopup.then(function(res) {
                            console.log('Thank you for not eating my delicious ice cream cone');
                        });
                    };
                });

        </script>


@include('layouts.admin_footer')
