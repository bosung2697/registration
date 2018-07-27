<?php

namespace App\Http\Controllers\User\FAQ;

use App\FAQ_InCommon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQ_In_CommonController extends Controller
{
    public function index()
    {
        $data = FAQ_InCommon::latest()->paginate(7);
        return view('user.FAQ.faq_in_common', compact('data'));
    }


}

