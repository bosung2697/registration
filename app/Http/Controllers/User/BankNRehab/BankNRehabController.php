<?php

namespace App\Http\Controllers\User\BankNRehab;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankNRehabController extends Controller
{
    public function bankruptcy()
    {
        return view('user.bankruptcy_n_rehabilitation.bankruptcy');
    }
    public function rehabilitation()
    {
        return view('user.bankruptcy_n_rehabilitation.rehabilitation');
    }

}

