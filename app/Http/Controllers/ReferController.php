<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//        public function index()
//    {
//        $id = auth()->user()->id;
//        $transactions = Transaction::where('user_id', '=', $id)->orderBy('id','desc')->get();
//        return view('transactions', [
//            'transactions' => $transactions
//        ]);
//    }

public function refer(){

    return view('refer');
}
}
