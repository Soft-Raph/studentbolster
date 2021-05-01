<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use App\Models\Setting;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Coupon;
use App\Helpers\Helper;
use App\Models\Notification;
use Illuminate\Support\Str;

class SettingController extends Controller
{

    public function index()
    {
        if(Session::get('admin-access') != null){
            return redirect('/admin/home');
        }
        return view('admin.login');
    }

    public function delete_user($id){
        $coupon = User::find($id);
        $coupon->delete();
        return back()->with('msg', 'User Deleted Successfully');
    }

    public function create(Request $request)
    {
        if($request->pass == 'innerbolster'){
            Session::put('admin-access', $request->pass);
            return redirect('/admin/home');
        }
        else{
            return back()->with('msg', 'Invalid Access Key');
        }
    }

    public function home()
    {
        if(is_null(Session::get('admin-access'))){
            return view('admin.login');
        }
        else{
            $users = User::all();
            $transactions = Transaction::all();
            $coupons = Coupon::all();
//            $setting = Setting::find(1);
//            $notifications = Notification::all();
           // $withdrawals = Transaction::where('type','deposit')->orWhere('type','withdraw')->orWhere('type','investment')->get();

            return view('admin.home', compact('users','transactions','coupons'));
            //return view('admin.home', compact('users','plans','transactions','coupons','setting','withdrawals','notifications'));
        }
    }


    public function delete_coupon($id){
        $coupon = Coupon::find($id);
        $coupon->delete();
        return back()->with('msg', 'Coupon Deleted Successfully');
    }


    public function add_coupon(Request $request){
       // Coupon::create($request->all());
        $student_name = $request->amount;
        $student_id = Helper::IDGenerator(new Coupon, 'code', 6, 'SB'); /** Generate id */
        $q = new Coupon;
        $q->code = $student_id;
        $q->amount = $student_name;
        $save =  $q->save();
        return back()->with('msg', 'Coupon Added Successfully');
    }

    public function with_status($id){
        $coupon = Transaction::find($id);
        if($coupon->status == 'Pending'){
            $coupon->status = 'Success';
        }
        else{
            $coupon->status = 'Pending';
        }
        $coupon->save();

//        if($coupon->type == 'Deposit'){
//            $user = $coupon->user;
//            $user->balance = $coupon->user->balance + $coupon->amount;
//            $user->save();
//        }
        return back()->with('msg', 'Status Changed Successfully');
    }
    public function delete_dep($id){
        $coupon = Transaction::find($id);
        $coupon->delete();
        return back()->with('msg', 'Deleted Successfully');
    }

}
