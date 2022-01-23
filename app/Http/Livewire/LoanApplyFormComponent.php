<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
class LoanApplyFormComponent extends Component
{
    public function render()
    {
        return view('livewire.loan-apply-form-component')->layout("layouts.base");
        if($request->session()->has('user')){
            return view('loansform');
        }else{
            return redirect('login');
        }
    }
}
