<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Refer;

class InvestmentController extends Controller
{
    public function invest(){

        return view('investment');
    }

    public function update(request $request){

        $amount = $request->amount;
         if($amount > auth()->user()->balance){
             return back()->with('success','Fund your account');
         }
         else{ if( $amount<10000 ||  $amount>10000){

             return back()->with('success','Invest Amount Not Availabe');
         }else{
             $user = User::find(auth()->user()->id);
             $user->balance = $user->balance-10000;
             $user->save();
             $trans = new Transaction();
             $trans->user_id = auth()->user()->id;
             $trans->description = 'Invested in Student Plan ';
             $trans->status = 'Success';
             $trans->type = 'Investment';
             $trans->amount = $request->amount;
             $trans->save();


             if(!empty(auth()->user()->ref_id)){
                 $ref_id =auth()->user()->ref_id;
               //  $sponsor = User::find($ref_id);
                 $sponsor = User::where('phone_num','=', $ref_id)->first();
                // $find = User::find(auth()->user()->$sponsor);
                 $sponsor->balance= $sponsor->balance + 500;
                 $sponsor->save();

                 $trans = new Transaction();
                 $trans->user_id = $sponsor->id;
                 $trans->description = 'Ref Bonus from'.auth()->user()->name;
                 $trans->status = 'Success';
                 $trans->type = 'Ref Bonus from'.''.auth()->user()->name;
                 $trans->amount = 500;
                 $trans->save();

                 $user = User::find(auth()->user()->id);
                 $user->ref_id = 0;
                 $user->save();
             }

         }

             return back()->with('success','Investment in Student Plan Successful');
         //redirect('/home')

         }

}
}
