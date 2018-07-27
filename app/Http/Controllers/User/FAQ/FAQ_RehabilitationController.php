<?php

namespace App\Http\Controllers\User\FAQ;

use App\FAQ_Rehabilitation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQ_RehabilitationController extends Controller
{
    public function index()
    {
        $data = FAQ_Rehabilitation::latest()->paginate(7);
        return view('user.FAQ.faq_rehabilitation', compact('data'));
    }


}

