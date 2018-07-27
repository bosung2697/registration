<?php

namespace App\Http\Controllers\User\FAQ;

use App\FAQ_ETC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQ_ETCController extends Controller
{
    public function index()
    {
        $data = FAQ_ETC::latest()->paginate(7);
        return view('user.FAQ.faq_etc', compact('data'));
    }


}

