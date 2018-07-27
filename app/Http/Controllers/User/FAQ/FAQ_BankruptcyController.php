<?php

namespace App\Http\Controllers\User\FAQ;

use App\FAQ_Bankruptcy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQ_BankruptcyController extends Controller
{
    public function index()
    {
        $data = FAQ_Bankruptcy::latest()->paginate(7);
        return view('user.FAQ.faq_bank', compact('data'));
    }


}

