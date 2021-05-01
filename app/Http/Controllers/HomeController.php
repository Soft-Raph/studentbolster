<?php

namespace App\Http\Controllers;


use http\Exception\BadConversionException;
use App\Models\Coupon;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware(['auth','verified']);

//            $id = Auth::user()->id;
//        $transactions = Transaction::where('user_id', $id)->get();


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->id;
        $transactions = Transaction::where('user_id', '=' , $id)->orderBy('id','desc')->take(10)->get();
        return view('home', [
            'transactions' => $transactions
        ]);
//     $trans=Transaction::get();  // it returns who post without order
//        return view('home',[
//            'transactions' => $trans
//        ]);
    }
    public function Profile()
    {
        return view('profile');
    }

    public function profile_update(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        if(!empty($request->image)){
            $path = $request->image->store('profile','public');
            $user->image = $path;
        }

        $user->gender = $request->gender;
//        $user->country = $request->country;
        $user->phone_num = $request->phone_num;
        $user->address = $request->address;
        $user->account_no = $request->account_no;
        $user->account_name = $request->account_name;
        $user->bank_name = $request->bank_name;
//        $user->pm = $request->pm;
        $user->save();

        return back()->with('success','Profile Updated Successfully');
    }

    public function deposit()
    {
        return view('deposit');
    }

    public function deposit_add(Request $request)
    {
        $amount = '';
        if ($request){
            $id = auth()->user()->id;
            $user = User::find($id);
            $amount = $request->amount;
            $trans = new Transaction();
            $trans->user_id = auth()->user()->id;
            $trans->description = 'Withdrawal from investment';
            $trans->status = 'Success';
            $trans->type = 'Deposit';
            $trans->amount = $amount;
            $trans->save();

//            $plan = Plan_user::find($request->pid);
//            $plan->status = 1;
//            $plan->save();

            $user->balance = $amount + $user->balance;
            $user->save();
        }

        $id = auth()->user()->id;
        $user = User::find($id);
        $co = $request->coupon;

        $coupon = Coupon::where('code','=',$co)->first();
        if($coupon != null){
            if ($coupon->status == 1){
                return back()->with('success','Coupon code used already');
            }
            else{
                $coupon->status = 1;
                $amount = $coupon->amount;
                $coupon->save();

                $trans = new Transaction();
                $trans->user_id = auth()->user()->id;
                $trans->description = 'Account funding through Coupon';
                $trans->status = 'Success';
                $trans->type = 'Deposit';
                $trans->amount = $amount;
                $trans->save();

                $user->balance = $amount + $user->balance;
                $user->save();
            }
        }
        else{
            return back()->with('success','Coupon code does not exists');
        }
        return back('success', 'N'.$amount.' Funded Successfully');

        //return redirect('/home')
    }

//    public function add_coupon(Request $request){
//        Coupon::create($request->all());
//        return back()->with('msg', 'Coupon Added Successfully');
//    }
    public function withdraw()
    {
        return view('withdraw');
    }

    public function withdraw_add(Request $request)
    {
        if (!($request->amount > auth()->user()->balance) && !($request->amount < 5000)){
            $id = auth()->user()->id;
            $user = User::find($id);
            $amount = $request->amount;
            $trans = new Transaction();
            $trans->user_id = auth()->user()->id;
            $trans->description = 'Account Withdrawal';
            $trans->status = 'Pending';
            $trans->type ='Withdraw';
            $trans->amount = $amount;
            $trans->save();

            $user->balance = $user->balance - $amount;
            $user->save();
        }  else{
            return back()->with('success', ' Amount not allowed');

        }

        return back()->with('success', '$'.$amount.' Withdrawal Successfully');

      //  return redirect('/home');


    }

    public function howitwork()
    {
        return view('howitwork');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        return view('terms');
    }

}
