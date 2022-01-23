<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function Loan(Request $request){
        if($request->session()->has('user')){
            return view('loansform');
        }else{
            return redirect('login');
        }
    }
}
